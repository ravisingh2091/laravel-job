<?php

namespace App\Services\Product;

use App\Marketer;
use App\State;
use App\Zip;
use Illuminate\Support\Str;

class ProductSearchService
{
    protected $productFinder;

    public function SearchMarketerProductsByZipcode(Marketer $marketer, Zip $zip, State $state, $revenueClass)
    {
        if (Str::is($state->edi_provider, 'internal'))
        {
            $this->productFinder = new ProductsByZipFinderInternal();
        } else {
            $this->productFinder = new ProductsByZipFinderZnalytics();
        }

        return $this->productFinder->SearchProductsByZipcode($marketer, $zip, $revenueClass);
    }

    public function SearchMarketerProductByIdZipcode(Marketer $marketer, $id, Zip $zip, State $state)
    {
        if (Str::is($state->edi_provider, 'internal')) {
            $this->productFinder = new ProductsByZipFinderInternal();
        } else {
            $this->productFinder = new ProductsByZipFinderZnalytics();
        }

        return $this->productFinder->SearchProductsByIdZipcode($marketer, $id, $zip);

    }

}