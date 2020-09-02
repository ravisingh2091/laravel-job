@extends('layouts.app')

@section('title', 'Utility Rates')
@section('page-header', 'Utility Rates')
@section('page-subheader', 'Utility Rate management')
@section('page-style')
    <link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Utility</th>
                    <th>Effective</th>
                    <th>Rate</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rates as $rate)
                    <tr>
                        <td><a href="{{ URL::route('utility-rates.edit', $rate) }}">{{ $rate->id }}</a></td>
                        <td>{{ $rate->utilityTerritory->name }}</td>
                        <td>{{ $rate->effective_at }}</td>
                        <td>{{ $rate->rate }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('page-inline-js')
    <script>
        $(document).ready(function() {
            TableManageDefault.init();
        });
    </script>
@endsection