<?php


namespace App\Exports;

use App\Http\Search\StateDocumentUrlSearch;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;

class StateDocumentUrlExport implements FromView
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function view(): View
    {
        return view('exports.state_document_urls', [
            'state_document_urls' => StateDocumentUrlSearch::apply($this->request)
        ]);
    }

}