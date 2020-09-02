@extends('layouts.app')

@section('title', 'New Affirmation')
@section('page-header', 'Create Affirmation')

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Affirmation</h4>
                </div>
                <div class="panel-body">
                    @include('affirmations._form', [
                        'action' => URL::route('affirmations.store'),
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
