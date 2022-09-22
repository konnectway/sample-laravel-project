@extends('layouts.app')

@section('content')
	<div class="card-header">
		<div class="pull-left">
			<h2 class="card-title">Cities</h2>
		</div>
	</div>
	@include('partials.messages')
	<div class="card-body">
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Code</th>
				<th>Country Name</th>
			</tr>
			@foreach ($cities as $item)
			<tr>
				<td>{{ $item->name }}</td>
				<td>{{ $item->code }}</td>
			</tr>
			@endforeach
		</table>
	</div>

@endsection
