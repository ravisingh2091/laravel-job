@extends('layouts.app')

@section('title', 'Affirmations')
@section('page-header', 'Affirmations')
@section('page-subheader', 'Enrollment affirmation management')
@section('page-style')
<link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ route('affirmations.create') }}" class="btn btn-default pull-right">New Affirmation</a>
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
					<th>Affirmation</th>
					<th>Display Order</th>
					<th>Last Updated</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($affirmations as $affirmation)
				<tr>
					<td><a href="{{ URL::route('affirmations.show', $affirmation) }}">{{ $affirmation->id }}</a></td>
					<td>{{ $affirmation->marketer->code }}</td>
					<td>{{ $affirmation->state->code }}</td>
					<td>{{ $affirmation->affirmation }}</td>
					<td>{{ $affirmation->display_order }}</td>
					<td>{{ $affirmation->updated_at }}</td>
					<td><a href="{{ URL::route('affirmations.edit', $affirmation) }}">Edit</a></td>
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
            "order": [[5, 'desc']]
        })
	});
</script>
@endsection