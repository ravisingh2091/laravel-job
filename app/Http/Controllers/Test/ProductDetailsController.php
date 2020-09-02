<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

use App\Product;
use App\Transformers\ProductDetailTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;


class ProductDetailsController extends Controller
{

	public function index()
	{

		$products = Product::get();

		return fractal($products, new ProductDetailTransformer())
			->respond(function(JsonResponse $response) {
				$response
					->setStatusCode(200);
			});
	}
}