<?php

namespace App;

use App\Scopes\EnabledScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\UtilityTerritoryDocumentUrl
 *
 * @property int $id
 * @property int $utility_territory_id
 * @property string $name
 * @property string $type
 * @property string $url
 * @property bool $show_on_product_details
 * @property bool $show_on_signup_form
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\UtilityTerritory $utilityTerritory
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereShowOnProductDetails($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereShowOnSignupForm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryDocumentUrl whereUtilityTerritoryId($value)
 * @mixin \Eloquent
 */
class UtilityTerritoryDocumentUrl extends Model
{

    protected $fillable = [
        'marketer_id',
        'type',
        'name',
        'url',
        'utility_territory_id',
        'show_on_product_details',
        'show_on_signup_form',
        'enabled',
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

    public function utilityTerritory()
    {
        return $this->belongsTo(UtilityTerritory::class);
    }

    public function marketer()
    {
        return $this->belongsTo(Marketer::class);
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
