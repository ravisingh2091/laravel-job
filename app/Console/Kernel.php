<?php

namespace App\Console;

use App\Console\Commands\CreateReferralCodes;
use App\Console\Commands\EvaluateSurveyResults;
use App\Console\Commands\ExportSurveyResults;
use App\Console\Commands\SendSurveyFollowupEmails;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        CreateReferralCodes::class,
        SendSurveyFollowupEmails::class,
        EvaluateSurveyResults::class,
        ExportSurveyResults::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->command(SendSurveyFollowupEmails::class)->everyMinute();
        $schedule->command(EvaluateSurveyResults::class)->everyMinute();
        $schedule->command(ExportSurveyResults::class, [Carbon::yesterday()->toDateString(), '--email'])->weekly()->mondays()->at('08:00');
        $schedule->command('backup:clean')->daily()->at('01:00');
        $schedule->command('backup:run')->daily()->at('02:00');

    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
