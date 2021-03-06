<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function results()
    {
        return $this->hasMany(SurveyResult::class);
    }
}
