@extends('layouts.app')

@section('content')
	<div class="card-header">
		<div class="pull-left">
			<h2 class="card-title">Users</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('user.create') }}"> Create New User</a>
		</div>
	</div>
	@include('partials.messages')
	<div class="card-body">
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Lastname</th>
				<th>Birthday</th>
				<th>Email</th>
				<th>Active</th>
				<th width="280px">Actions</th>
			</tr>
			@foreach ($users as $item)
			<tr>
				<td>{{ $item->name }}</td>
				<td>{{ $item->lastname }}</td>
				<td>{{ $item->birthday }}</td>
				<td>{{ $item->email }}</td>
				<td>{{ $item->active }}</td>
				<td>
					@include('partials.actions', [
								'entity' => 'user',
								'id' => $item->id
							])

				</td>
			</tr>
			@endforeach
		</table>
	</div>

@endsection
