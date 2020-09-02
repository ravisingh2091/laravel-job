<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SurveyResults\Report\SurveyResultReportExporter;

class ExportSurveyResults extends Command
{
    protected $exporter;


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:survey-results {ending} {--email} {--test}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export all survey results that haven\'t already been exported.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(SurveyResultReportExporter $surveyResultReportExporter)
    {
        parent::__construct();
        $this->exporter = $surveyResultReportExporter;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->exporter->exportSurveyResults($this->argument('ending'), $this->option('email'), $this->option('test'));
    }
}
