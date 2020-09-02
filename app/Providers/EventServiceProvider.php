<?php

namespace App\Providers;

use App\Events\EnrollmentExportRequested;
use App\Events\EnrollmentProcessed;
use App\Events\SurveyResultReceived;
use App\Events\WebEnrollmentReceived;
use App\Listeners\CreateReferral;
use App\Listeners\CreateReferralCode;
use App\Listeners\ExportEnrollment;
use App\Listeners\ExportProcessedEnrollment;
use App\Listeners\ProcessSurveyResult;
use App\Listeners\ProcessWebEnrollment;
use App\Listeners\SendEnrollmentConfirmation;
use App\Listeners\SendEnrollmentNotification;
use App\Listeners\SendReferralNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\SendReferralCode;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        WebEnrollmentReceived::class => [
            ProcessWebEnrollment::class,
        ],

        EnrollmentProcessed::class => [
            ExportProcessedEnrollment::class,
            CreateReferralCode::class,
            CreateReferral::class,
        ],

        EnrollmentExportRequested::class => [
            ExportEnrollment::class,
        ],

        SurveyResultReceived::class => [
            ProcessSurveyResult::class,
        ],


    ];

    protected $subscribe = [
        SendEnrollmentConfirmation::class,
        SendEnrollmentNotification::class,
        SendReferralCode::class,
        SendReferralNotification::class,
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
