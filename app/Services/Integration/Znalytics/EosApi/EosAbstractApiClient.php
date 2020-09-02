<?php

namespace App\Services\Integration\Znalytics\EosApi;

use GuzzleHttp\Client;

class EosAbstractApiClient
{
    protected $apiKey;
    protected $client;
    protected $headers = [
        'User-Agent' => 'PalmcoEnergyUms/1.0',
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ];

    public function __construct(Client $client)
    {
        $this->apiKey = config('palmco.znalytics_api_key');
        $this->client = $client;
    }
}