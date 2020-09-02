<?php

namespace App\Services\Integration\Palmco;

use App\Enrollment;
use App\EnrollmentLog;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class WebEnrollmentExporter
{

    public function exportEnrollment(Enrollment $enrollment)
    {

        $client = new Client();

        // Grab the client's handler instance.
        $clientHandler = $client->getConfig('handler');
        // Create a middleware that echoes parts of the request.
        $tapMiddleware = Middleware::tap(function ($request) {
            Log::debug($request->getBody());
        });

        try {
            $response = $client->post(Config::get('palmco.enrollment_endpoint'), [
                'headers' => [
                    'api-key' => Config::get('palmco.enrollment_endpoint_api_key'),
                    'Content-Type' => 'application/json',
                ],
                'body' => $enrollment->jsonPayload(),
                'handler' => $tapMiddleware($clientHandler),
            ]);

            $body = json_decode($response->getBody()->getContents());

            $enrollment->logs()->save(new EnrollmentLog(['content' => Str::limit('Enrollment sent to PE Enrollment API: ' . $response->getStatusCode() . ', ' . (string) $response->getBody(), 200)]));

            if ($response->getStatusCode() == 200) {
                if (Str::is('Errors Found', $body->Status)) {
                    $enrollment->status = 'export_error';
                } else {
                    $enrollment->status = 'exported';
                    $enrollment->exported_at = Carbon::now();
                }
                $enrollment->save();
            }
        } catch (ClientException $e) {
            Log::error('Guzzle client exception:' . Psr7\str($e->getResponse()));
        } catch (ServerException $e) {
            Log::error('Guzzle server exception: ' . Psr7\str($e->getResponse()));
        }
    }


}