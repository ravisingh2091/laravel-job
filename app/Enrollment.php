<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Enrollment extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function marketer()
    {
        return $this->belongsTo(Marketer::class);
    }

    public function payload()
    {
        return $this->belongsTo(EnrollmentPayload::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function confirmationEmails()
    {
        return $this->hasMany(ConfirmationEmail::class);
    }

    public function logs()
    {
        return $this->hasMany(EnrollmentLog::class);
    }

    public function displayName()
    {
        if ($this->company_name && $this->contact_first_name && $this->contact_last_name) {
            return $this->contact_first_name . ' ' . $this->contact_last_name;
        }
        return $this->first_name . ' ' . $this->last_name;
    }

    public function serviceZip()
    {
        return $this->belongsTo(Zip::class, 'service_zip_id');
    }

    public function billingZip()
    {
        return $this->belongsTo(Zip::class, 'billing_zip_id');
    }

    public function referralCode()
    {
        return $this->hasOne(ReferralCode::class);
    }

    public function referral()
    {
        return $this->hasOne(Referral::class);
    }

    public function serviceAddress()
    {
        $address = $this->service_address_1;
        if (strlen($this->service_address_2) > 0)
            $address .= ' ' . $this->service_address_2;

        $address .= ', ' . $this->service_city;
        $address .= ', ' . $this->service_state;
        $address .= ', ' . $this->service_zip;

        return strtoupper($address);
    }

    public function billingAddress()
    {
        if (! $this->billing_address_different) return '';

        $address = $this->billing_address_1;
        if (strlen($this->billing_address_2) > 0)
            $address .=  ' ' . $this->billing_address_2;

        $address .= ', ' . $this->billing_city;
        $address .= ', ' . $this->billing_state;
        $address .= ', ' . $this->billing_zip;

        return strtoupper($address);
    }

    public function accountNumber()
    {
        $accountNumber = $this->primary_account_number;
        if (strlen($this->secondary_account_number) > 0)
            $accountNumber .= '-' . $this->secondary_account_number;

        return strtoupper($accountNumber);
    }

    public function budgetBilling()
    {
        if ($this->budget_billing) {
            return 'Yes';
        }

        return 'No';
    }


    public function commodityName()
    {
        return (Str::is('E', $this->commodity_code)) ? 'Electric' : 'Gas';
    }

    public function utilityCode()
    {
        if (Str::is('internal', $this->edi_provider))
        {
            return $this->product->utilityTerritory->api_utility_id;
        }

        return $this->utility_code;
    }

    public function ratePlan()
    {
        if (Str::is('internal', $this->edi_provider)) {
            return $this->product->foreign_code ? $this->product->foreign_code : 'variable';
        }

        return $this->rate_schedule_name;
    }

    
    public function jsonPayload()
    {
        $payload = [
            [
                'SignUpDate' => Carbon::parse($this->date_created, 'UTC')->format('m/d/Y'),
                'EnrollmentId' => $this->external_id,
                'AgentId' => 'webenroll',
                'UtilityCode' => $this->utilityCode(),
                'AccountClass' => (Str::is('residential', $this->revenue_class) ? 'RES' : 'COMM'),
                'FirstName' => $this->first_name ?? $this->contact_first_name,
                'LastName' => $this->last_name ?? $this->contact_last_name,
                'BusinessName' => $this->company_name,
                'CommodityType' => $this->commodity_code,
                'AccountNumber' => $this->utility_account_number,
                'AccountPhone' => preg_replace("/[^0-9]/", '', $this->primary_phone),
                'ServiceAddress' => trim($this->service_address_1 . ' ' . $this->service_address_2),
                'ServiceCity' => $this->service_city,
                'ServiceState' => $this->serviceZip->state_code,
                'ServiceZip' => $this->serviceZip->zip,
                'BillingAddress' => $this->billing_address_different ? trim($this->billing_address_1 . ' ' . $this->billing_address_2) : trim($this->service_address_1 . ' ' . $this->service_address_2),
                'BillingCity' => $this->billing_address_different ? $this->billing_city : $this->service_city,
                'BillingState' => $this->billing_address_different ? $this->billingZip->state_code : $this->serviceZip->state_code,
                'BillingZip' => $this->billing_address_different ? $this->billingZip->zip : $this->serviceZip->zip,
                'SignerName' => trim($this->first_name . ' ' . $this->last_name),
                'Relationship' => 'Account Holder',
                'TaxId' => $this->tax_id && strlen($this->tax_id) > 0 ? $this->tax_id : '',
                'BudgetBilling' => $this->budget_billing ? 1 : 0,
                'CustNameKey' => strlen($this->name_key) > 0 ? $this->name_key : '',
                'PromoCode' => '',
                'EmailAddress' => $this->email,
                'Language' => 'English',
                'RatePlan' => $this->ratePlan(),
                'SaleType' => 'W',
            ]
        ];

        return json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
    
}
