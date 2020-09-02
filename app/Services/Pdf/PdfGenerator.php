<?php

namespace App\Services\PDF;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Knp\Snappy\Pdf as sPDF;
use App\ConfirmationEmail;
use App\Enrollment;

class PdfGenerator
{

    public static function createConfirmationPdf(ConfirmationEmail $confirmationEmail)
    {
        $enrollment = $confirmationEmail->enrollment;
        $filename = uniqid($confirmationEmail->id.'-').'.pdf';
        $temp = tempnam(sys_get_temp_dir(), 'ums_').'.pdf';

        // $location = storage_path('pdfs/confirmation/');

        $header = '<html><head><style>td { font-family: Arial; }</style></head><body>'
            .'<table>'
            .'<tr><td><strong>From:</strong></td><td>PALMco Energy'
            .' &lt;customercare@palmcoenergy.com&gt;</td></tr>'
            .'<tr><td><strong>Sent:</strong><td>'.$confirmationEmail->created_at.'</td></tr>'
            .'<tr><td><strong>To:</strong></td><td>'.$enrollment->first_name . ' ' . $enrollment->last_name . ' &lt;'.$enrollment->email.'&gt;</td></tr>'
            .'<tr><td><strong>Subject:</strong></td><td>PALMco Energy Electricity Enrollment Received</td></tr>'
            .'</table>';

        try
        {
            $snappy = new sPDF(base_path('vendor/bin/wkhtmltopdf-amd64'));
            $snappy->generateFromHtml($header . $confirmationEmail->contents, $temp);

            Storage::disk('pdfs')->put('/confirmation/'.$filename, file_get_contents($temp));

            $confirmationEmail->pdf_filename = $filename;
            $confirmationEmail->save();
        }
        catch (\Exception $e)
        {
            Log::error($e->getMessage());
        }

    }

    public static function createTermsPdf($terms_html)
    {
        $snappy = new sPDF(base_path('vendor/bin/wkhtmltopdf-amd64'));
        return $snappy->getOutputFromHtml($terms_html);
    }

}