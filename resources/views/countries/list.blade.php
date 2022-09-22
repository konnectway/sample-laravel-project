@extends('layouts.app')

@section('content')
	<div class="card-header">
		<div class="pull-left">
			<h2 class="card-title">Countries</h2>
		</div>
	</div>
	@include('partials.messages')
	<div class="card-body">
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Capital</th>
				<th>Iso</th>
				<th>Code</th>
				<th>View Cities</th>
			</tr>
			@foreach ($users as $item)
			<tr>
				<td>{{ $item->name }}</td>
				<td>{{ $item->capital }}</td>
				<td>{{ $item->iso }}</td>
				<td>{{ $item->code }}</td>
				<td></td>
			</tr>
			@endforeach
		</table>
	</div>

@endsection
