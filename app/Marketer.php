<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }
}
