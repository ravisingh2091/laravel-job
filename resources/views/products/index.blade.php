@extends('layouts.app')

@section('title', 'Products')
@section('page-header', 'Products')
@section('page-subheader', 'Product management')
@section('page-style')
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ route('products.create') }}" class="btn btn-default pull-right">New Product</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <form>
                <div class="form-group">
                    <label for="marketer_id" class="col-md-1 control-label">Marketer</label>
                    <div class="col-md-3">
                        {{ Form::select('marketer_id', $marketers, app('request')->input('marketer_id'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="state_id" class="col-md-1 control-label">State</label>
                    <div class="col-md-3">
                        {{ Form::select('state_id', $states, app('request')->input('state_id'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="commodity_id" class="col-md-1 control-label">Commodity</label>
                    <div class="col-md-3">
                        {{ Form::select('commodity_id', $commodities, app('request')->input('commodity_id'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="utility_territory_id" class="col-md-1 control-label">Utility</label>
                    <div class="col-md-3">
                        {{ Form::select('utility_territory_id', $utilityTerritories, app('request')->input('utility_territory_id'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="renewable" class="col-md-1 control-label">Renewable</label>
                    <div class="col-md-3">
                        {{ Form::select('renewable', $renewableTypes, app('request')->input('renewable'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_type_id" class="col-md-1 control-label">Product Type</label>
                    <div class="col-md-3">
                        {{ Form::select('product_type_id', $productTypes, app('request')->input('product_type_id'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="revenue_class" class="col-md-1 control-label">Customer Type</label>
                    <div class="col-md-3">
                        {{ Form::select('revenue_class', $revenueClasses, app('request')->input('revenue_class'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-1 control-label"></label>
                    <div class="col-md-9">
                        <button class="btn btn-sm btn-success" type="submit">Filter</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <a class="btn btn-sm btn-info pull-right" href="{{ route('products.export', $request->query()) }}">Export</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th></th>
                    <th>ESCO</th>
                    <th>Utility</th>
                    <th>Rate</th>
                    <th>Term</th>
                    <th>Type</th>
                    <th>Next Product</th>
                    <th>Next Rate</th>
                    <th>Next Term</th>
                    <th>Secondary Rate</th>
                    <th>Secondary Term</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $p)
                    <tr>
                        <td style="background-color:
                            @if ($p->enabled)
                                lightgreen
                            @else
                                lightpink
                            @endif
                            ">
                            <a href="{{ URL::route('products.edit', $p) }}">{{ $p->id }}</a>
                        </td>
                        <td>
                            @if (str_is('green', $p->renewable_type))
                                <span style="color: green;">
                            @else
                                <span style="color: saddlebrown;">
                            @endif

                            @if (str_is('residential', $p->revenue_class))
                                <i class="fa fa-home fa-2x"></i>
                            @else
                                <i class="fa fa-building fa-2x"></i>
                            @endif


                            @if (str_is('E', $p->commodity->symbol))
                                <i class="fa fa-bolt fa-2x"></i>
                            @else
                                <i class="fa fa-fire fa-2x"></i>
                            @endif

                            </span>
                        </td>
                        <td>{{ $p->marketer->code }}</td>
                        <td>{{ $p->utilityTerritory->territory_code }}</td>
                        <td>{{ $p->rate }}</td>
                        <td>{{ $p->term_months }}</td>
                        <td>{{ $p->productType->name }}</td>
                        <td>{{ $p->nextProduct->id ?? ''}}</td>
                        <td>{{ $p->nextProduct->rate ?? '' }}</td>
                        <td>{{ $p->nextProduct->term_months ?? '' }}</td>
                        <td>
                            @if ($p->secondary_rate > 0.00)
                                {{ $p->secondary_rate }}
                            @endif
                        </td>
                        <td>{{ $p->secondary_term_months }}</td>
                        <td><small>{{ $p->created_at }}</small></td>
                        <td><small>{{ $p->updated_at }}</small></td>
                        <td>
                            <a href="{{ URL::route('products.edit', $p) }}" class="btn btn-primary btn-xs m-r-5">Edit</a>
                            <a href="{{ URL::route('products.clone', $p) }}" class="btn btn-primary btn-xs">Copy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $products->links() }}
        </div>
    </div>
@endsection

@section('page-js')
    <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
@endsection

@section('page-inline-js')
    <script>
        $(document).ready(function () {
            TableManageResponsive.init();
            $("#data-table").DataTable({
                "pageLength": 100,
                "responsive": !0,
                "order": [[11, 'desc']],
            })
        });
    </script>
@endsection