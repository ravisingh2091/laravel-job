<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Zip
 *
 * @property int $id
 * @property string $zip
 * @property string $city
 * @property string $county
 * @property string $state_code
 * @property int $state_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\State $state
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereCounty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereStateCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereZip($value)
 * @mixin \Eloquent
 */
class Zip extends Model
{
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
