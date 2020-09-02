<?php

namespace App;

use App\Scopes\EnabledScope;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * App\StateDocumentUrl
 *
 * @property int $id
 * @property int $state_id
 * @property int $commodity_id
 * @property string $name
 * @property string $type
 * @property string $url
 * @property bool $show_on_product_details
 * @property bool $show_on_signup_form
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereCommodityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereShowOnProductDetails($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereShowOnSignupForm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StateDocumentUrl whereUrl($value)
 * @mixin \Eloquent
 */
class StateDocumentUrl extends Model
{
    protected $fillable = [
        'name',
        'marketer_id',
        'type',
        'commodity_id',
        'state_id',
        'enabled',
        'show_on_product_details',
        'show_on_signup_form',
        'url',
        'template_type',
        'contract_type',
        'renewable_type',
        'revenue_class',
        'locale_code',
        'product_type_id',
        'source_file_name',
        'version',
    ];


    protected static function boot()
    {
        parent::boot();

//        static::addGlobalScope(new EnabledScope);
    }

    public function scopeEnabled($query)
    {
        return $query->where('enabled', true);
    }

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

    public function fullUrl()
    {
        if (Str::is('http*', $this->url)) {
            return $this->url;
        }

        switch ($this->marketer_id) {

            case 1:
                return "https://palmcoenergy.com{$this->url}";
                break;

            case 2:
                return "https://columbiautilties.com{$this->url}";
                break;

            case 3:
                return "https://indraenergy.com{$this->url}";
                break;
        }
    }
}
