@extends('layouts.app')

@section('title', 'Legal Templates')
@section('page-header', 'Legal Templates')
@section('page-subheader', 'Legal document template management')
@section('page-style')
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ route('legal-templates.create') }}" class="btn btn-default pull-right">New Legal Template</a>
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
                    <label for="renewable" class="col-md-1 control-label">Customer Type</label>
                    <div class="col-md-3">
                        {{ Form::select('customer_type', $customerTypes, app('request')->input('customer_type'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_type_id" class="col-md-1 control-label">Product Type</label>
                    <div class="col-md-3">
                        {{ Form::select('product_type_id', $productTypes, app('request')->input('product_type_id'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_type_id" class="col-md-1 control-label">Language</label>
                    <div class="col-md-3">
                        {{ Form::select('locale_code', $localeCodes, app('request')->input('locale_code'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_type_id" class="col-md-1 control-label">Active</label>
                    <div class="col-md-3">
                        {{ Form::select('is_active', $isActive, app('request')->input('is_active'), ['class' => 'form-control', 'placeholder' =>'']) }}
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
            <a class="btn btn-sm btn-info pull-right" href="{{ route('legal_templates.export', $request->query()) }}">Export</a>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Marketer</th>
                    <th>State</th>
                    <th>Type</th>
                    <th>Commodity</th>
                    <th>Renewable Type</th>
                    <th>Customer Type</th>
                    <th>Locale</th>
                    <th>Product Type</th>
                    <th>Utility Territory</th>
                    <th>Source File Name</th>
                    <th>Version</th>
                    <th>Active</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($templates as $template)
                    <tr>
                        <td><a href="{{ URL::route('legal-templates.show', $template) }}">{{ $template->id }}</a></td>
                        <td>{{ $template->marketer->code }}</td>
                        <td>{{ $template->state->code }}</td>
                        <td>{{ $template->template_type }}</td>
                        <td>{{ $template->commodity->symbol }}</td>
                        <td>{{ $template->renewable_type }}</td>
                        <td>{{ $template->customer_type }}</td>
                        <td>{{ $template->locale_code }}</td>
                        <td>
                            @if ($template->productType)
                                {{ \Illuminate\Support\Str::title($template->productType->code) }}
                            @else
                                All
                            @endif
                        </td>
                        <td>
                            @if ($template->utilityTerritory)
                                {{ \Illuminate\Support\Str::title($template->utilityTerritory->territory_code) }}
                            @else
                                All
                            @endif
                        </td>

                        <td>{{ $template->source_file_name }}</td>
                        <td>{{ $template->version }}</td>
                        <td>@if ($template->is_active)
                                YES
                            @else
                                NO
                            @endif
                        </td>
                        <td>{{ $template->updated_at }}</td>
                        <td><a href="{{ URL::route('legal-templates.edit', $template) }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
            $("#data-table").DataTable({
                "pageLength": 100,
                "responsive": !0,
                "order": [[11, 'desc']],
            })
        });
    </script>
@endsection