@extends('layouts.app')

@section('title', 'New Utility Rate')
@section('page-header', 'Create Utility rate')

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Utility Rate</h4>
                </div>
                <div class="panel-body">
                    @include('utility_territory_rates._form', [
                        'action' => URL::route('utility-rates.store'),
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
