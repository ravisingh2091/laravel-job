<?php


namespace App\Exports;


use App\Http\Search\ProductSearchAll;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;

class ProductExport implements FromView
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function view(): View
    {
        return view('exports.products', [
            'products' => ProductSearchAll::apply($this->request)
        ]);
    }

}