<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserRole
 *
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Role $role
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\UserRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserRole whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserRole whereRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserRole whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserRole whereUserId($value)
 * @mixin \Eloquent
 */
class UserRole extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
