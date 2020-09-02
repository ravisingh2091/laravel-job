<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UtilityTerritoryZip
 *
 * @property int $id
 * @property int $utility_territory_id
 * @property int $zip_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\UtilityTerritory $utilityTerritory
 * @property-read \App\Zip $zip
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryZip whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryZip whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryZip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryZip whereUtilityTerritoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryZip whereZipId($value)
 * @mixin \Eloquent
 */
class UtilityTerritoryZip extends Model
{
    public function utilityTerritory()
    {
        return $this->belongsTo(UtilityTerritory::class);
    }

    public function zip()
    {
        return $this->belongsTo(Zip::class);
    }
}
