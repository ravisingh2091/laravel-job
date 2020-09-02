<?php
/**
 * Created by PhpStorm.
 * User: joelc
 * Date: 3/23/2017
 * Time: 1:30 AM
 */

namespace App\Listeners;


use App\Jobs\SendReferralNotificationEmail;
use App\Referral;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReferralNotification implements ShouldQueue
{

    public function __construct()
    {
    }

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\ReferralCreated',
            'App\Listeners\SendReferralNotification@onReferralCreated'
        );

        $events->listen(
            'App\Events\ReferralNotificationRequested',
            'App\Listeners\SendReferralNotification@onReferralNotificationRequested'
        );
    }

    public function onReferralCreated($event) {
        $this->sendNotification($event->referral);
    }

    public function onReferralNotificationRequested($event) {
        $this->sendNotification($event->referral);
    }

    private function sendNotification(Referral $referral)
    {

        if (config('palmco.raf_enabled')) {

            if (
                (config('palmco.raf_test_mode') && in_array($referral->referralCode->enrollment->email, config('palmco.test_mode_emails'))) ||
                (! config('palmco.raf_test_mode'))
            ) {
                dispatch(new SendReferralNotificationEmail($referral));
            }

        }

    }
}