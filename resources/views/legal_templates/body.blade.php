@extends('layouts.terms')

@section('title', 'Product Terms and Conditions')

@section('content')
    <div class="row bg-white p-10">
        <div class="col-xs-8 col-xs-offset-2 f-s-12">
            <br><br>
            <img src="{{ $logo_url }}">
            <span class="pull-right" style="vertical-align: baseline"><a href="{{ $pdf_url }}" class="btn-sm btn-primary">Download PDF</a></span><br><br>
            {!! $contents !!}
        </div>
    </div>
@endsection