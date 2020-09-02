<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Utility
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UtilityTerritory[] $territories
 * @method static \Illuminate\Database\Query\Builder|\App\Utility whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Utility whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Utility whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Utility whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Utility whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Utility extends Model
{
    public function territories()
    {
        return $this->hasMany(UtilityTerritory::class);
    }
}
