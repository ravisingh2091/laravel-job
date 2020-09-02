<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Commodity
 *
 * @property int $id
 * @property string $symbol
 * @property string $code
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Commodity whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Commodity whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Commodity whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Commodity whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Commodity whereSymbol($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Commodity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Commodity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'symbol', 'code', 'name', 'unit_of_measure',
    ];

}
