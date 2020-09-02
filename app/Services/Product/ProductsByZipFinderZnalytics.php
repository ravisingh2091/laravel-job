<?php

namespace App\Services\Product;

use App\Marketer;
use App\Product;
use App\Services\Integration\Znalytics\EosApi\EosApiClient;
use App\Zip;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ProductsByZipFinderZnalytics implements ProductsByZipFinder
{
    protected $eosApi;

    public function __construct()
    {
        $this->eosApi = new EosApiClient(new Client());
    }


    public function SearchProductsByZipcode(Marketer $marketer, Zip $zip, $revenueClass)
    {
        $products = new Collection();

        $utility = $this->eosApi->LookupUtilityByZipcode($zip->zip)[0]->utility;

        $results = $this->eosApi->ProductListByZipcode($zip->zip);

        foreach ($results as $result) {
            if ( ! $this->determineIfRollover($result)
                && $this->determineIfActive($result)
                && $this->determineIfResidential($result)) {

                $products->push($this->buildProduct($result, $zip->state_id, $utility, $marketer));
            }
        }

        return $products;
    }

    private function searchAllProductsByZipcode(Marketer $marketer, Zip $zip, $revenueClass)
    {
        $products = new Collection();

        $utility = $this->eosApi->LookupUtilityByZipcode($zip->zip)[0]->utility;

        $results = $this->eosApi->ProductListByZipcode($zip->zip);

        foreach ($results as $result) {
            $products->push($this->buildProduct($result, $zip->state_id, $utility, $marketer));
        }

        return $products;
    }


    public function SearchProductsByIdZipcode(Marketer $marketer, $id, Zip $zip)
    {
        $products = $this->searchAllProductsByZipcode($marketer, $zip, 'R');
        $product = $products->where('id', $id)->first();
        $product->primary_account_field_label = "Account Number";
        $product->primary_account_field_regex = ".*";
        $product->primary_account_field_help_text = "Account number from your bill";
        $product->primary_account_field_error_text = "Account Number is required";
        $product->secondary_account_field_required = false;
        $product->secondary_account_field_label = "";
        $product->secondary_account_field_regex = "";
        $product->secondary_account_field_help_text = "";
        $product->secondary_account_field_error_text = "";
        $product->requires_name_key = false;

        return $product;
    }


    private function buildProduct($productData, $stateId, $utility, Marketer $marketer)
    {
        $product = new Product();
        $product->id = $productData->productId;
        $product->commodity_id = $productData->serviceTypeCode === 'E' ? 1 : 2;
        $product->commodity = $product->commodity_id == 1 ? 'electric' : 'gas';
        $product->rate = number_format($productData->rateScheduleList[0]->rateSegmentList[0]->rateSegmentDetailList[0]->rateAmount * 100, 3);
        $product->rate_raw = $productData->rateScheduleList[0]->rateSegmentList[0]->rateSegmentDetailList[0]->rateAmount;
        $product->secondaryrate = number_format(0.000, 3);
        $product->rateScheduleName = $productData->rateScheduleList[0]->rateScheduleName;
        $product->uOfM = $productData->rateScheduleList[0]->rateSegmentList[0]->rateSegmentDetailList[0]->uom;
        $product->termLength = $productData->termInMonths;
        $product->term_months = $productData->termInMonths;
        $product->secondaryTermLength = 0;
        $product->termType = $productData->rateScheduleList[0]->rateSegmentList[0]->rateSegmentDetailList[0]->rateType;
        $product->enrollFee = 0;
        $product->cancelFee = 0;
        $product->description = $productData->productDescription;
        $product->utilityId = 0;
        $product->utilityName = $utility->utilityName;
        $product->utilityCode = $utility->utilityCode;
        $product->serviceTypeCode = $utility->serviceTypeCode;
        $product->state_id = $stateId;
        $product->code = $marketer->code;
        $product->edi_provider = 2;
        $product->estimated_bill = round($this->calculateEstimatedBill($product));
        $product->renewable = ($this->determineIfGreen($productData)) ? 'green' : 'brown';

        return $product;
    }

    private function calculateEstimatedBill(Product $product)
    {
        $factor = 75;

        switch($product->termType) {
            case 'Variable':
                return $product->rate_raw * $factor;
                break;
            case 'Fixed':
                return $product->rate_raw * $factor * $product->term_months;
                break;
            case 'CustomIndex':
                return $product->rate_raw * $factor * $product->term_months;
                break;
        }
        return 0;
    }

    private function determineIfRollover($productData)
    {
        if ($productData->isProductRollover == true) {
            return true;
        }

        return false;
    }


    private function determineIfActive($productData)
    {
        if (Carbon::parse($productData->effectiveDate)->lte(Carbon::today()) &&
            (is_null($productData->expirationDate) || Carbon::parse($productData->expirationDate)->gt(Carbon::today()))) {
            return true;
        }

        return false;
    }

    private function determineIfGreen($productData)
    {
        foreach($productData->productAttributeList as $attr) {
            if (Str::is('Green ', $attr->productAttributeName) && Str::is('true', $attr->productAttributeValue)) {
                return true;
            }
        }
        return false;
    }


    private function determineIfResidential($productData)
    {
        foreach($productData->customerTypeList as $customerType) {
            if (Str::is('Residential', $customerType->customerType)) {
                return true;
            }
        }

        return false;

    }

}