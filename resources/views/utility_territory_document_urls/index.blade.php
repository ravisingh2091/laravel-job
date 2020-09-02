@extends('layouts.app')

@section('title', 'Utility Territory Document Urls')
@section('page-header', 'Utility Territory Document Urls')
@section('page-subheader', 'Utility territory document url management')
@section('page-style')
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ route('utility-territory-document-urls.create') }}" class="btn btn-default pull-right">New Document URL</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Marketer</th>
                    <th>Utility Territory</th>
                    <th>State</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>URL</th>
                    <th>Last Updated</th>
                    <th>Enabled</th>
                    <th>Product Details</th>
                    <th>Signup Form</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($urls as $url)
                    <tr>
                        <td><a href="{{ URL::route('utility-territory-document-urls.show', $url) }}">{{ $url->id }}</a></td>
                        <td>{{ $url->marketer->code }}</td>
                        <td>{{ $url->utilityTerritory->territory_code }}</td>
                        <td>{{ $url->utilityTerritory->state->code }}</td>
                        <td>{{ $url->name }}</td>
                        <td>{{ $url->type }}</td>
                        <td><a href="{{ $url->fullUrl() }}">{{ $url->url }}</a></td>
                        <td>{{ $url->updated_at }}</td>
                        <td>@if ($url->enabled)
                                YES
                            @else
                                NO
                            @endif
                        </td>
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
                        <td><a href="{{ URL::route('utility-territory-document-urls.edit', $url) }}">Edit</a></td>
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