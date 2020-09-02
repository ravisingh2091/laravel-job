<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalTemplate extends Model
{
    protected $fillable = [
        'marketer_id',
        'version',
        'template_type',
        'commodity_id',
        'locale_code',
        'source_file_name',
        'state_id',
        'is_active',
        'template_html',
        'product_type_id',
        'utility_territory_id',
        'renewable_type',
        'customer_type',
    ];

    public function marketer()
    {
        return $this->belongsTo(Marketer::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function utilityTerritory()
    {
        return $this->belongsto(UtilityTerritory::class);
    }
}
