@extends('layouts.app')

@section('title', 'New State Document URL')
@section('page-header', 'Create State Document URL')

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">State Document URL</h4>
                </div>
                <div class="panel-body">
                    @include('state_document_urls._form', [
                        'action' => URL::route('state-document-urls.store'),
                        'method' => 'POST'
                        ])
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
@endsection
