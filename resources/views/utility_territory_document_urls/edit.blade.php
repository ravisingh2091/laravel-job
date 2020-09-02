@extends('layouts.app')

@section('title', 'Edit Utility Territory Document URL')
@section('page-header', 'Edit Utility Territory Document URL')

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Utility Territory Document URL</h4>
                </div>
                <div class="panel-body">
                    @include('utility_territory_document_urls._form', [
                        'action' => URL::route('utility-territory-document-urls.update', $utilityTerritoryDocumentUrl),
                        'method' => 'PUT'
                        ])
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
@endsection