<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Affirmation
 *
 * @property int $id
 * @property int $state_id
 * @property string $affirmation
 * @property int $display_order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \App\State $state
 * @method static \Illuminate\Database\Query\Builder|\App\Affirmation whereAffirmation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Affirmation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Affirmation whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Affirmation whereDisplayOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Affirmation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Affirmation whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Affirmation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Affirmation extends Model
{
    protected $fillable = [
        'marketer_id',
        'state_id',
        'affirmation',
        'display_order',
    ];

    public function scopeForMarketerId($query, $marketer_id)
    {
        return $query->where('marketer_id', $marketer_id);
    }

  	public function state()
  	{
  		return $this->belongsTo(State::class);
  	}

    public function marketer()
    {
        return $this->belongsTo(Marketer::class);
    }
}
