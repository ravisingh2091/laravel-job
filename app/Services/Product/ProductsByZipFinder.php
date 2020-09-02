<?php

namespace App\Services\Product;

use App\Marketer;
use App\Zip;


interface ProductsByZipFinder
{

    public function SearchProductsByZipcode(Marketer $marketer, Zip $zip, $revenueClass);

    public function SearchProductsByIdZipcode(Marketer $marketer, $id, Zip $zip);

}