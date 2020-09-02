@extends('layouts.app')

@section('title', 'Enrollments')
@section('page-header', 'Enrollments')
@section('page-subheader', 'Processed customer enrollments')
@section('page-style')
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Marketer</th>
                    <th>Entry ID</th>
                    <th>Name</th>
                    <th>Utility</th>
                    <th>Account Num</th>
                    <th>Commodity</th>
                    <th>Rate</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($enrollments as $enrollment)
                    <tr>
                        <td><a href="{{ URL::route('enrollments.show', $enrollment) }}">{{ $enrollment->id }}</a></td>
                        <td>{{ $enrollment->marketer->code }}</td>
                        <td>{{ $enrollment->entry_id }}</td>
                        <td>{{ $enrollment->displayName() }}</td>
                        <td>
                            @if(str_is('internal', $enrollment->edi_provider))
                                {{ $enrollment->product->utilityTerritory->name }}
                            @else
                                {{ $enrollment->utilityCode() }}
                            @endif
                        </td>
                        <td>{{ $enrollment->utility_account_number }}</td>
                        <td>
                            @if(str_is('internal', $enrollment->edi_provider))
                                {{ $enrollment->product->commodity->name }}
                            @endif
                        </td>
                        <td>
                            @if(str_is('internal', $enrollment->edi_provider))
                                {{ $enrollment->product->rate }}
                            @endif
                        </td>
                        <td>{{ $enrollment->created_at }}</td>
                        <td>{{ $enrollment->status }}</td>
                        <td>
                            <form method="POST" action="{{ URL::route('enrollments.export', $enrollment) }}">
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-primary">Export</button>
                            </form>
                            <form method="POST" action="{{ URL::route('enrollments.destroy', $enrollment) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
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
                "order": [[8, 'desc']]
            })
        });
    </script>
@endsection