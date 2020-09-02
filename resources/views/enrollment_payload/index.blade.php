@extends('layouts.app')

@section('title', 'Enrollment Payloads')
@section('page-header', 'Enrollment Payloads')
@section('page-subheader', 'Raw JSON enrollment payloads from website')

@section('page-style')
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endsection


@section('content')

    <div class="row">
        <div class="col-xs-12">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Elec Status</th>
                    <th>Gas Status</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payloads as $payload)
                    <tr>
                        <td><a href="{{ URL::route('enrollment-payloads.show', $payload) }}">{{ $payload->id }}</a></td>
                        <td>{{ $payload->electric_status }}</td>
                        <td>{{ $payload->gas_status }}</td>
                        <td>{{ $payload->created_at }}</td>
                        <td>
                            <form action="{{ URL::route('enrollment-payloads.process', $payload) }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-sm btn-primary ">Process</button>
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
        $(document).ready(function() {
            $("#data-table").DataTable({
                "pageLength": 100,
                "responsive": !0,
                "order": [[3, 'desc']]
            })
        });
    </script>
@endsection