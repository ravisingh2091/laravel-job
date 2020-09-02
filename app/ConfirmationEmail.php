<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfirmationEmail extends Model
{
    protected $fillable = ['content'];


    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
