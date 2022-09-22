@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="maincard">
				<div class="card-header">
					<div class="pull-left">
						<h2>Edit User</h2>
					</div>
					<div class="pull-right">
						<a class="btn btn-outline-primary" href="{{ route('user.index')  }}">Back</a>
					</div>
				</div>
				@include('partials.messages')
				<div class="card-body">
					{!! Form::open(['route' =>['user.update', $user->id],  'method' => 'put'  ]) !!}
						{!! Field::text('name', $user->name ) !!}
						{!! Field::text('email', $user->email ) !!}
						{!! Field::text('lastname', $user->lastname ) !!}
						{!! Field::password('password') !!}
						{!! Field::password('password_confirmation') !!}
						{!! Field::checkbox('active', null, $user->active ) !!}
						<br>
						{!! Form::submit('Send', ['class' => 'btn btn-success']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
