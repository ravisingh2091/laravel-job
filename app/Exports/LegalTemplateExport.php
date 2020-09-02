<?php

namespace App\Exports;

use App\Http\Search\LegalTemplateSearch;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LegalTemplateExport implements FromView
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function view(): View
    {
        return view('exports.legal_templates', [
            'legal_templates' => LegalTemplateSearch::apply($this->request)
        ]);
    }
}