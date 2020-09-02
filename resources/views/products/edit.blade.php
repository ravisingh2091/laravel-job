@extends('layouts.app')

@section('title', 'Edit Product')
@section('page-header', 'Edit Product')

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Product</h4>
                </div>
                <div class="panel-body">
                    <a href="{{ URL::route('products.clone', $product) }}" class="btn btn-success">Clone</a>

                    @include('products._form', [
                        'action' => URL::route('products.update', $product),
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
