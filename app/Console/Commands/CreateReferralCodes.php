<?php

namespace App\Console\Commands;

use App\Enrollment;
use App\Jobs\CreateReferralCode;
use Illuminate\Console\Command;

class CreateReferralCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'referral:create_codes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create referral codes for any enrollments that do not have one.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $enrollments = Enrollment::doesntHave('referralCode')->get();

        $enrollments->each(function($enrollment) {
            dispatch(new \App\Jobs\CreateReferralCode($enrollment));
        });

        $this->info("Created {$enrollments->count()} referral codes");
    }
}
