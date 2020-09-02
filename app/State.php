<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\State
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property bool $product_lookup_enabled
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\State whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereProductLookupEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $enrollment_form_header
 * @property bool $confirmation_contract_summary
 * @property bool $confirmation_terms_of_service
 * @property int $hold_days
 * @property bool $confirmation_utility_supplment
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Affirmation[] $affirmations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Zip[] $zips
 * @method static \Illuminate\Database\Query\Builder|\App\State whereConfirmationContractSummary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereConfirmationTermsOfService($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereConfirmationUtilitySupplment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereEnrollmentFormHeader($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereHoldDays($value)
 */
class State extends Model
{

    public function affirmations()
    {
        return $this->hasMany(Affirmation::class)->orderBy('display_order');
    }

    public function zips()
    {
        return $this->hasMany(Zip::class);
    }
}
