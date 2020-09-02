<?php

namespace App\Services\SurveyResults\Report;

use App\SurveyResult;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class SurveyResultReportExporter
{
    protected $ending;
    protected $testOnly;
    protected $email;

    public function exportSurveyResults($ending, $email = false, $testOnly = false)
    {
        $this->ending = Carbon::parse($ending);
        $this->testOnly = $testOnly;
        $this->email = $email;

        $excel = Excel::create('PE Survey Results ending ' . $this->ending->toDateString(), function ($excel) {
            $excel->sheet('Excel Sheet', function ($sheet) {
                $sheet->setOrientation('landscape');

                $results = SurveyResult::whereNull('exported_at')
                    ->where('created_at', '<=', $this->ending)
                    ->orderBy('created_at')->get();
                $sheet->fromArray($results);

                if (! $this->testOnly) {
                    $this->markExported($results);
                }
            });
        })->store('xlsx');

        $path = $excel->storagePath . '/' . $excel->filename . '.' . $excel->ext;

        if ($this->email) {
            $this->mailResults($path);
        }

    }

    private function markExported($results)
    {
        foreach ($results as $result) {
            $result->exported_at = Carbon::now();
            $result->save();
        }

    }

    private function mailResults($resultsPath) {

        Mail::send('emails.notifications.survey-results', ['ending' => $this->ending->toDateString()], function($message) use ($resultsPath) {
            $message->bcc(array_column(Config::get('palmco.survey_result_export_list'), 'email'));
            $message->subject('PE.com Customer Survey Results export - ' . $this->ending->toDateString());
            $message->attach($resultsPath);
        });
    }


}