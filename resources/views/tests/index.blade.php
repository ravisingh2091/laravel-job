@extends('layouts.app')

@section('title', 'Backend Tests')
@section('page-header', 'Tests')
@section('page-subheader', 'test routines')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <a href="{{ URL::route('tests.confirmation') }}">Confirmation Email Preview</a>
        </div>
    </div>

@endsection