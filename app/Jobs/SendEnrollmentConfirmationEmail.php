<?php

namespace App\Jobs;

use App\ConfirmationEmail;
use App\Enrollment;
use App\EnrollmentLog;
use App\Mail\EnrollmentConfirmationMailable;
use App\Services\PDF\PdfGenerator;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendEnrollmentConfirmationEmail implements ShouldQueue
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
        $confirmationEmail = new ConfirmationEmail();
        $color = '#99cc33';

        if (Str::is('CU', $this->enrollment->marketer->code)) {
            $color = '#46c8f5';
        }

        if (Str::is('IE', $this->enrollment->marketer->code)) {
            $color = '#cf9eff';
        }

        $confirmationEmail->contents = view('emails.enrollment.confirmation', ['enrollment' => $this->enrollment, 'color' => $color])->render();

        $this->enrollment->confirmationEmails()->save($confirmationEmail);

        try {
            $message = (new EnrollmentConfirmationMailable($confirmationEmail))
                ->onQueue('confirmations');

            Mail::queue($message);

            $confirmationEmail->sent_at = Carbon::now();
            $confirmationEmail->save();

            $this->enrollment->logs()->save(new EnrollmentLog(['content' => 'Confirmation email sent']));
            PdfGenerator::createConfirmationPdf($confirmationEmail);

        } catch (\InvalidArgumentException $exception) {
            Log::error($exception->getMessage());
        }

    }
}
