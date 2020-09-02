<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property int $id
 * @property int $utility_territory_id
 * @property int $commodity_id
 * @property float $rate
 * @property int $term_months
 * @property int $next_product_id
 * @property string $revenue_class
 * @property int $enroll_fee
 * @property int $cancel_fee
 * @property bool $enabled
 * @property int $product_type_id
 * @property string $website_description
 * @property string $foreign_code
 * @property string $unit_of_measure
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Commodity $commodity
 * @property-read \App\Product $nextProduct
 * @property-read \App\ProductType $productType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductTerms[] $termsOfService
 * @property-read \App\UtilityTerritory $utilityTerritory
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCancelFee($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCommodityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereEnrollFee($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereForeignCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereNextProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProductTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereRevenueClass($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereTermMonths($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUnitOfMeasure($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUtilityTerritoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereWebsiteDescription($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $guarded = [];


    public function marketer()
    {
        return $this->belongsTo(Marketer::class);
    }

    public function utilityTerritory()
    {
        return $this->belongsTo(UtilityTerritory::class);
    }

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function nextProduct()
    {
        return $this->belongsTo(Product::class, 'next_product_id', 'id');
    }

    public function displayName()
    {
        return $this->commodity->symbol . ' - ' .
            $this->rate*100 . ' cents/' .
            $this->unit_of_measure . ' - ' .
            $this->term_months . ' months';
    }
}
