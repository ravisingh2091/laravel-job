<?php

namespace App\Services\Integration\Znalytics\EosApi;


use App\Zip;
use GuzzleHttp\Psr7\Request;

class EosApiClient extends EosAbstractApiClient implements EosApiClientInterface
{
    public function LookupUtilityByZipcode($zipCode)
    {
        $uri = config('palmco.znalytics_api_endpoint') . '/lookup/utility/' .$zipCode . '?api_key=' . $this->apiKey;

        $request = new Request(
            'GET',
            $uri,
            $this->headers
        );

        return json_decode((string) $this->client->send($request)->getBody());
    }

    public function ProductListByUtility($utilityCode, $stateCode, $customerTypeCode)
    {
        $data = [
            'utilityCode' => $utilityCode,
            'stateCode' => $stateCode,
            'customerTypeCode' => $customerTypeCode,
            'salesChannelCode' => 'WEB',
            'contractSourceCode' => 'MM'
        ];

        $uri = config('palmco.znalytics_api_endpoint').'/products/productSearch?api_key=' . $this->apiKey;

        $request = new Request(
            'POST',
            $uri,
            $this->headers
        );

        return json_decode((string) $this->client->send($request, ['json' => $data])->getBody())->model;
    }

    public function ProductListByZipcode($zipCode)
    {
        $zip = Zip::where('zip', $zipCode)->first();

        $utilityResponseData = $this->LookupUtilityByZipcode($zip->zip);

        $utilityData = $utilityResponseData[0]->utility;

        return $this->ProductListByUtility($utilityData->utilityCode, $zip->state_code, 'R');

    }


}