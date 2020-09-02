<?php

namespace App\Jobs;

use App\ConfirmationEmail;
use App\Enrollment;
use App\EnrollmentLog;
use App\Mail\EnrollmentConfirmationMailable;
use App\Mail\EnrollmentNotificationMailable;
use App\Services\PDF\PdfGenerator;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEnrollmentNotificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $enrollment;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $message = (new EnrollmentNotificationMailable($this->enrollment))
            ->onQueue('notifications');

        Mail::queue($message);
    }
}
