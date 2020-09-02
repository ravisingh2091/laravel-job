@extends('layouts.app')

@section('title', 'State Document Urls')
@section('page-header', 'State Document Urls')
@section('page-subheader', 'State document url management')
@section('page-style')
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
       <div class="col-xs-12">
           <a href="{{ route('state-document-urls.create') }}" class="btn btn-default pull-right">New State Document URL</a>
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
                    <label for="state_id" class="col-md-1 control-label">Doc Type</label>
                    <div class="col-md-3">
                        {{ Form::select('template_type', $template_types, app('request')->input('template_type'), ['class' => 'form-control', 'placeholder' =>'']) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="commodity_id" class="col-md-1 control-label">Commodity</label>
                    <div class="col-md-3">
                        {{ Form::select('commodity_id', $commodities, app('request')->input('commodity_id'), ['class' => 'form-control', 'placeholder' =>'']) }}
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
                    <label for="product_type_id" class="col-md-1 control-label">Enabled</label>
                    <div class="col-md-3">
                        {{ Form::select('enabled', $enabled, app('request')->input('enabled'), ['class' => 'form-control', 'placeholder' =>'']) }}
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
            <a class="btn btn-sm btn-info pull-right" href="{{ route('state_document_urls.export', $request->query()) }}">Export</a>
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
                    <th>Doc Type</th>
                    <th>Link Type</th>
                    <th>Commodity</th>
                    <th>Renewable Type</th>
                    <th>Customer Type</th>
                    <th>Locale</th>
                    <th>Product Type</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Source File Name</th>
                    <th>Version</th>
                    <th>Show on Product Details</th>
                    <th>Show on Signup Form</th>
                    <th>Enabled</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($urls as $url)
                    <tr>
                        <td><a href="{{ URL::route('state-document-urls.edit', $url) }}">{{ $url->id }}</a></td>
                        <td>{{ $url->marketer->code }}</td>
                        <td>{{ $url->state->code }}</td>
                        <td>{{ $url->template_type }}</td>
                        <td>{{ $url->type }}</td>
                        <td>@if ($url->commodity)
                                {{ $url->commodity->symbol }}
                            @endif
                        </td>
                        <td>{{ $url->renewable_type }}</td>
                        <td>{{ $url->revenue_class }}</td>
                        <td>{{ $url->locale_code }}</td>
                        <td>{{ $url->productType->name ?? 'All'}}</td>
                        <td>{{ $url->name }}</td>
                        <td><a href="{{ $url->fullUrl() }}">{{ $url->url }}</a></td>
                        <td>{{ $url->source_file_name }}</td>
                        <td>{{ $url->version }}</td>

                        <td>@if ($url->show_on_product_details)
                                YES
                            @else
                                NO
                            @endif
                        </td>
                        <td>@if ($url->show_on_signup_form)
                                YES
                            @else
                                NO
                            @endif
                        </td>
                        <td>@if ($url->enabled)
                                YES
                            @else
                                NO
                            @endif
                        </td>
                        <td>{{ $url->updated_at }}</td>
                        <td><a href="{{ URL::route('state-document-urls.edit', $url) }}">Edit</a></td>
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
    <script src="assets/js/table-manage-default.demo.min.js"></script>
@endsection

@section('page-inline-js')
    <script>
        $(document).ready(function() {
            $("#data-table").DataTable({
                "pageLength": 100,
                "responsive": !0
            })
        });
    </script>
@endsection