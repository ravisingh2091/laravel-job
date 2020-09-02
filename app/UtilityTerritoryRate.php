<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UtilityTerritoryRate
 *
 * @property int $id
 * @property int $utility_territory_id
 * @property string $effective_at
 * @property float $rate
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\UtilityTerritory $utilityTerritory
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryRate whereEffectiveAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryRate whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryRate whereRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryRate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UtilityTerritoryRate whereUtilityTerritoryId($value)
 * @mixin \Eloquent
 */
class UtilityTerritoryRate extends Model
{
    protected $fillable = [
        'utility_territory_id',
        'effective_at',
        'rate',
    ];

    public function utilityTerritory()
    {
        return $this->belongsTo(UtilityTerritory::class);
    }
}
