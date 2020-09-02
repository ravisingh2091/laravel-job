@extends('layouts.app')

@section('title', 'Survey Results')
@section('page-header', 'Survey Results')
@section('page-subheader', 'Processed survey result submissions')
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
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($surveyResults as $results)
                    <tr>
                        <td><a href="{{ URL::route('survey_results.show', $result) }}">{{ $result->id }}</a></td>
                        <td>
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
    <script src="assets/js/table-manage-default.demo.min.js"></script>
@endsection

@section('page-inline-js')
    <script>
        $(document).ready(function () {
            $("#data-table").DataTable({
                "responsive": !0,
                "columnDefs": [
                    { "targets": 7, "orderSequence": [ "desc" ] }
                ],
            })
        });
    </script>
@endsection