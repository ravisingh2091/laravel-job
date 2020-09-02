@extends('layouts.app')

@section('title', 'Clone Product')
@section('page-header', 'Clone Product')

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Clone Product</h4>
                </div>
                <div class="panel-body">
                    @include('products._form', [
                        'action' => URL::route('products.clone', $product),
                        'method' => 'POST',
                        'show_clone_disable' => true,
                        ])
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
@endsection
