<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UtilityTerritory
 *
 * @property int $id
 * @property int $utility_id
 * @property string $territory_code
 * @property string $name
 * @property int $commodity_id
 * @property float $current_ptc
 * @property string $unit_of_measure
 * @property int $state_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property bool $requires_name_key
 * @property string $primary_account_field_label
 * @property string $primary_account_field_regex
 * @property string $primary_account_field_help_text
 * @property string $primary_account_field_error_text
 * @property bool $secondary_account_field_required
 * @property string $secondary_account_field_label
 * @property string $secondary_account_field_regex
 * @property string $secondary_account_field_help_text
 * @property string $secondary_account_field_error_text
 * @property int $export_hold_days
 * @property-read \App\Commodity $commodity
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UtilityTerritoryDocumentUrl[] $documentUrls
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UtilityTerritoryTerms[] $termsOfSerice
 * @property-read \App\Utility $utility
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereCommodityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereCurrentPtc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereExportHoldDays($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory wherePrimaryAccountFieldErrorText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory wherePrimaryAccountFieldHelpText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory wherePrimaryAccountFieldLabel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory wherePrimaryAccountFieldRegex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereRequiresNameKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereSecondaryAccountFieldErrorText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereSecondaryAccountFieldHelpText($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereSecondaryAccountFieldLabel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereSecondaryAccountFieldRegex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereSecondaryAccountFieldRequired($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereTerritoryCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereUnitOfMeasure($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritory whereUtilityId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UtilityTerritoryRate[] $rates
 * @property-read \App\State $state
 */
class UtilityTerritory extends Model
{


    public function utility()
    {
        return $this->belongsTo(Utility::class);
    }

    public function documentUrls()
    {
        return $this->hasMany(UtilityTerritoryDocumentUrl::class);
    }

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function rates()
    {
        return $this->hasMany(UtilityTerritoryRate::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->territory_code} - {$this->name} - {$this->commodity->name}";
    }
}
