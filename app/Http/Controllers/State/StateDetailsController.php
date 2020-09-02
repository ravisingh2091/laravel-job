<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Marketer;
use App\State;
use App\Transformers\StateTransformer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class StateDetailsController extends Controller
{

    public function show(Marketer $marketer, $zip)
    {

        $state = State::whereHas('zips', function ($query) use ($zip) {
            $query->where('zip', $zip);
        })
            ->firstOrFail();

        return fractal()
            ->item($state)
            ->transformWith(new StateTransformer($marketer))
            ->respond(function (JsonResponse $response) {
                $response->setStatusCode(200);
            });
    }

}