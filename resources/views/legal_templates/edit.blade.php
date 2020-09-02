@extends('layouts.app')

@section('title', 'Edit Legal Template')
@section('page-header', 'Edit Legal Template')

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Legal Template</h4>
                </div>
                <div class="panel-body">
                    @include('legal_templates._form', [
                        'action' => URL::route('legal-templates.update', $legal_template),
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
