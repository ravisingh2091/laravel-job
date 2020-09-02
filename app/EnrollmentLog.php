<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EnrollmentLog
 *
 * @property int $id
 * @property int $enrollment_id
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Enrollment $enrollment
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentLog whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentLog whereEnrollmentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentLog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EnrollmentLog extends Model
{
    protected $fillable = ['content'];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
