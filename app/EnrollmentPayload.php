<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * 
 * User: joelc
 * Date: 1/3/2017
 * Time: 12:35 AM
 *
 * @property int $id
 * @property string $json_payload
 * @property string $electric_status
 * @property string $electric_processed_at
 * @property string $gas_status
 * @property string $gas_processed_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Enrollment[] $enrollments
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereElectricProcessedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereElectricStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereGasProcessedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereGasStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereJsonPayload($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EnrollmentPayload whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EnrollmentPayload extends Model
{

    protected $fillable = ['json_payload'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

}