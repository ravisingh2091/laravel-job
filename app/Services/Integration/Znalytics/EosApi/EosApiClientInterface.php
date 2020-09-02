<?php

namespace App\Services\Integration\Znalytics\EosApi;


interface EosApiClientInterface
{

    public function LookupUtilityByZipcode($zipCode);

    public function ProductListByUtility($utilityCode, $stateCode, $customerTypeCode);

    public function ProductListByZipcode($zipCode);

}