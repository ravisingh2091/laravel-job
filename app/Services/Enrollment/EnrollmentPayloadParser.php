<?php

namespace App\Services\Enrollment;

use App\Enrollment;
use App\EnrollmentPayload;
use App\Events\EnrollmentProcessed;
use App\LegalTemplate;
use App\Marketer;
use App\Services\DocumentBuilder\LegalDocumentBuilder;
use App\Services\Product\ProductSearchService;
use App\State;
use App\Zip;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class EnrollmentPayloadParser
{
    protected $productSearch;

    protected $common_mapping = [
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'company_name' => 'company_name',
        'contact_first_name' => 'contact_first_name',
        'contact_last_name' => 'contact_last_name',
        'email' => 'email',
        'primary_phone' => 'primary_phone',
        'service_address_1' => 'service_address_1',
        'service_address_2' => 'service_address_2',
        'service_city' => 'service_city',
        'service_state' => 'service_state',
        'service_zipcode' => 'service_zip',
        'billing_address_diff' => 'billing_address_different',
        'billing_address_1' => 'billing_address_1',
        'billing_address_2' => 'billing_address_2',
        'billing_city' => 'billing_city',
        'billing_state' => 'billing_state',
        'billing_zipcode' => 'billing_zip',
        'revenue_class' => 'revenue_class',
        'terms_agree' => 'terms_agree',
        'budget_billing' => 'budget_billing',
        'tax_id' => 'tax_id',
        'promo_code' => 'promo_code',
        'referral_code' => 'referral_code',
        'landing_page' => 'landing_page',
        'entry_id' => 'entry_id',
        'form_id' => 'form_id',
        'date_created' => 'date_created',
        'ip' => 'ip',
        'source_url' => 'source_url',
        'user_agent' => 'user_agent',
        'affirmation_1' => 'affirmation_1',
        'affirmation_2' => 'affirmation_2',
        'affirmation_3' => 'affirmation_3',
        'affirmation_4' => 'affirmation_4',
        'language' => 'language',
        'edi_provider' => 'edi_provider',
    ];

    protected $electric_mapping = [
        'electric_product_id' => 'product_id',
        'electric_account_number' => 'primary_account_number',
        'electric_service_number' => 'secondary_account_number',
        'electric_utility_code' => 'utility_code',
        'electric_name_key' => 'name_key',
    ];

    protected $gas_mapping = [
        'gas_product_id' => 'product_id',
        'gas_account_number' => 'primary_account_number',
        'gas_service_number' => 'secondary_account_number',
        'gas_utility_code' => 'utility_code',
        'gas_name_key' => 'name_key',
    ];

    public function __construct(ProductSearchService $productSearchService)
    {
        $this->productSearch = $productSearchService;
    }

    public function parsePayload(EnrollmentPayload $enrollmentPayload, $force = false)
    {
        $data = json_decode($enrollmentPayload->json_payload, true);

        $data['edi_provider'] = $this->determineEdiProvider($data['service_state']);

        try {
            if ($enrollmentPayload->electric_status == 'pending' || ($enrollmentPayload->electric_status == 'processed' && $force)) {
                DB::transaction(function () use ($data, $enrollmentPayload) {
                    $enrollment = $this->createEnrollment($data, $this->common_mapping, $this->electric_mapping);
                    $enrollment->commodity_code = 'E';
                    $enrollment->enrollment_payload_id = $enrollmentPayload->id;
                    $enrollment->save();
                    $enrollmentPayload->electric_processed_at = Carbon::now();
                    $enrollmentPayload->electric_status = 'processed';
                    $enrollmentPayload->save();
                    event(new EnrollmentProcessed($enrollment));
                });
            }
        } catch (\Exception $e) {
            Log::error('Electric Enrollment Parse Exception: Payload id '. $enrollmentPayload->id . ', ' . $e->getMessage() . ', Line: ' . $e->getLine());
//            Log::error($e->getTraceAsString());
        }


        try {
            if ($enrollmentPayload->gas_status == 'pending' || ($enrollmentPayload->gas_status == 'processed' && $force)) {
                DB::transaction(function () use ($data, $enrollmentPayload) {
                    $enrollment = $this->createEnrollment($data, $this->common_mapping, $this->gas_mapping);
                    $enrollment->commodity_code = 'G';
                    $enrollment->enrollment_payload_id = $enrollmentPayload->id;
                    $enrollment->save();
                    $enrollmentPayload->gas_processed_at = Carbon::now();
                    $enrollmentPayload->gas_status = 'processed';
                    $enrollmentPayload->save();
                    event(new EnrollmentProcessed($enrollment));
                });
            }
        } catch (\Exception $e) {
            Log::error('Gas Enrollment Parse Exception: Payload id ' . $enrollmentPayload->id . ', ' . $e->getMessage() . ', Line: ' . $e->getLine());
//            Log::error($e->getTraceAsString());
        }
    }

    private function determineEdiProvider($state_code)
    {
        $state = State::where('code', $state_code)
            ->orWhere('name', $state_code)
            ->firstOrFail();

        return $state->edi_provider;
    }

    private function createEnrollment($data, $common_mapping, $commodity_mapping)
    {
        $enrollment = new Enrollment();
        $enrollment->forceFill(input_mapping($common_mapping, $data));
        $enrollment->forceFill(input_mapping($commodity_mapping, $data));

        $enrollment->budget_billing = (strlen($data['budget_billing']) > 0) ? true : false;
        $enrollment->language = (strlen($data['language']) > 0) ? $data['language'] : 'English';

        $enrollment = $this->assignMarketer($enrollment, $data['entity']);
        $enrollment = $this->assignZip($enrollment, 'service');
        $enrollment = $this->assignRateScheduleName($enrollment);

        if ($enrollment->billing_address_different) {
            $enrollment->billing_address_different = true;
            $enrollment = $this->assignZip($enrollment, 'billing');
        } else {
            $enrollment->billing_address_different = false;
        }

        $enrollment->postpone_date = Carbon::now();

        $enrollment = $this->buildLegalDocument($enrollment);

        return $enrollment;
    }

    private function assignMarketer(Enrollment $enrollment, $marketerCode)
    {
        $marketer = Marketer::where('code', $marketerCode)->first();

        if ($marketer) {
            $enrollment->marketer()->associate($marketer);
        }

        return $enrollment;
    }

    private function assignZip(Enrollment $enrollment, $address_type)
    {
        $zipcode = '';

        try {
            if ($address_type === 'billing') {
                $zipcode = $enrollment->billing_zip;
                $enrollment->billingZip()->associate(Zip::where('zip', '=', substr($zipcode, 0, 5))->first());
            } else {
                $zipcode = $enrollment->service_zip;
                $enrollment->serviceZip()->associate(Zip::where('zip', '=', substr($zipcode, 0, 5))->first());
            }
        } catch (\Exception $e) {
            $enrollment->logs()->create(['content' => 'Error locating ' . $address_type . ' zipcode: ' . $zipcode]);
        }

        return $enrollment;
    }

    private function assignRateScheduleName(Enrollment $enrollment)
    {
        if (Str::is('znalytics', $enrollment->edi_provider)) {
            $product = $this->productSearch->SearchMarketerProductByIdZipcode($enrollment->marketer,
                $enrollment->product_id, $enrollment->serviceZip, $enrollment->serviceZip->state);
            $enrollment->rate_schedule_name = $product->rateScheduleName;
        }
        return $enrollment;
    }


    private function buildLegalDocument(Enrollment $enrollment)
    {
        $contractSummary = '';
        $termsOfService = '';
        $utilitySupplement = '';

        if (Str::is('znalytics', $enrollment->edi_provider)) {
            return $enrollment;
        }

        $state = $enrollment->product->utilityTerritory->state;

        if ($state->confirmation_contract_summary) {
            $contractSummaryDoc = LegalTemplate::where('marketer_id', $enrollment->marketer_id)
                ->whereStateId($state->id)
                ->whereTemplateType('Contract Summary')
                ->where(function($q) use ($enrollment) {
                    $q->where('renewable_type', $enrollment->product->renewable_type)
                        ->orWhere('renewable_type', 'uniform');
                })
                ->where(function($q) use ($enrollment) {
                    $q->where('customer_type', $enrollment->product->revenue_class)
                        ->orWhere('customer_type', 'uniform');
                })
                ->where(function ($q) use ($enrollment) {
                    $q->whereNull('product_type_id')
                        ->orWhere('product_type_id', $enrollment->product->product_type_id);
                })
                ->where(function ($q) use ($enrollment) {
                    $q->whereNull('utility_territory_id')
                        ->orWhere('utility_territory_id', $enrollment->product->utility_territory_id);
                })
                ->where(function ($query) use ($enrollment) {
                    $query->where('commodity_id', $enrollment->product->commodity_id)
                        ->orWhere('commodity_id', 3);
                })
                ->where('is_active', true)
                ->whereLocaleCode(languageToLocale($enrollment->language))
                ->first();

            if (!$contractSummaryDoc) {
                $contractSummaryDoc = LegalTemplate::where('marketer_id', $enrollment->marketer_id)
                    ->whereStateId($state->id)
                    ->whereTemplateType('Contract Summary')
                    ->where(function($q) use ($enrollment) {
                        $q->where('renewable_type', $enrollment->product->renewable_type)
                            ->orWhere('renewable_type', 'uniform');
                    })
                    ->where(function($q) use ($enrollment) {
                        $q->where('customer_type', $enrollment->product->revenue_class)
                            ->orWhere('customer_type', 'uniform');
                    })
                    ->where(function ($q) use ($enrollment) {
                        $q->whereNull('product_type_id')
                            ->orWhere('product_type_id', $enrollment->product->product_type_id);
                    })
                    ->where(function ($q) use ($enrollment) {
                        $q->whereNull('utility_territory_id')
                            ->orWhere('utility_territory_id', $enrollment->product->utility_territory_id);
                    })
                    ->where(function ($query) use ($enrollment) {
                        $query->where('commodity_id', $enrollment->product->commodity_id)
                            ->orWhere('commodity_id', 3);
                    })
                    ->where('is_active', true)
                    ->whereLocaleCode('en')
                    ->first();
            }

            if ($contractSummaryDoc) {
                $contractSummary = $contractSummaryDoc->template_html;
            }
        }

        if ($state->confirmation_terms_of_service) {
            $termsOfServiceDoc = LegalTemplate::where('marketer_id', $enrollment->marketer_id)
                ->whereStateId($state->id)
                ->whereTemplateType('Terms of Service')
                ->where(function($q) use ($enrollment) {
                    $q->where('renewable_type', $enrollment->product->renewable_type)
                        ->orWhere('renewable_type', 'uniform');
                })
                ->where(function($q) use ($enrollment) {
                    $q->where('customer_type', $enrollment->product->revenue_class)
                        ->orWhere('customer_type', 'uniform');
                })
                ->where(function ($query) use ($enrollment) {
                    $query->where('commodity_id', $enrollment->product->commodity_id)
                        ->orWhere('commodity_id', 3);
                })
                ->where(function ($q) use ($enrollment) {
                    $q->whereNull('utility_territory_id')
                        ->orWhere('utility_territory_id', $enrollment->product->utility_territory_id);
                })

                ->whereLocaleCode(languageToLocale($enrollment->language))
                ->where('is_active', true)
                ->first();

            if (!$termsOfServiceDoc) {
                $termsOfServiceDoc = LegalTemplate::where('marketer_id', $enrollment->marketer_id)
                    ->whereStateId($state->id)
                    ->whereTemplateType('Terms of Service')
                    ->where(function($q) use ($enrollment) {
                        $q->where('renewable_type', $enrollment->product->renewable_type)
                            ->orWhere('renewable_type', 'uniform');
                    })
                    ->where(function($q) use ($enrollment) {
                        $q->where('customer_type', $enrollment->product->revenue_class)
                            ->orWhere('customer_type', 'uniform');
                    })
                    ->where(function ($query) use ($enrollment) {
                        $query->where('commodity_id', $enrollment->product->commodity_id)
                            ->orWhere('commodity_id', 3);
                    })
                    ->where(function ($q) use ($enrollment) {
                        $q->whereNull('utility_territory_id')
                            ->orWhere('utility_territory_id', $enrollment->product->utility_territory_id);
                    })
                    ->where('is_active', true)
                    ->whereLocaleCode('en')
                    ->first();
                if ($termsOfServiceDoc) {
                    $termsOfService = $termsOfServiceDoc->template_html;
                }
            }

        }

        if ($state->confirmation_utility_supplement) {
            $utilitySupplementDoc = LegalTemplate::where('marketer_id', $enrollment->marketer_id)
                ->whereStateId($state->id)
                ->whereTemplateType('Utility Supplement')
                ->where(function ($q) use ($enrollment) {
                    $q->where('renewable_type', $enrollment->product->renewable_type)
                        ->orWhere('renewable_type', 'uniform');
                })
                ->where(function($q) use ($enrollment) {
                    $q->where('customer_type', $enrollment->product->revenue_class)
                        ->orWhere('customer_type', 'uniform');
                })
                ->where(function ($query) use ($enrollment) {
                    $query->where('commodity_id', $enrollment->product->commodity_id)
                        ->orWhere('commodity_id', 3);
                })
                ->whereLocaleCode(languageToLocale($enrollment->language))
                ->where('is_active', true)
                ->first();

            if ($utilitySupplementDoc) {
                $utilitySupplementDoc = LegalTemplate::where('marketer_id', $enrollment->marketer_id)
                    ->whereStateId($state->id)
                    ->whereTemplateType('Utility Supplement')
                    ->where(function ($q) use ($enrollment) {
                        $q->where('renewable_type', $enrollment->product->renewable_type)
                            ->orWhere('renewable_type', 'uniform');
                    })
                    ->where(function($q) use ($enrollment) {
                        $q->where('customer_type', $enrollment->product->revenue_class)
                            ->orWhere('customer_type', 'uniform');
                    })
                    ->where(function ($query) use ($enrollment) {
                        $query->where('commodity_id', $enrollment->product->commodity_id)
                            ->orWhere('commodity_id', 3);
                    })
                    ->where('is_active', true)
                    ->whereLocaleCode('en')
                    ->first();
            }

            $utilitySupplement = $utilitySupplementDoc->template_html;
        }

        $combinedTemplates = $contractSummary . $termsOfService . $utilitySupplement;
        $enrollment->product_terms_html = LegalDocumentBuilder::populateTemplateVariables($combinedTemplates,
            $enrollment->product);

        return $enrollment;
    }


}