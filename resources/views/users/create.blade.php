@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="maincard">
				<div class="card-header">
					<div class="pull-left">
						<h2>Create User</h2>
					</div>
					<div class="pull-right">
						<a class="btn btn-outline-primary" href="{{ route('user.index')  }}">Back</a>
					</div>
				</div>
				@include('partials.messages')
				<div class="card-body">
					{!! Form::open(['route' =>['user.store'] ]) !!}
						{!! Field::text('name' ) !!}
						{!! Field::text('email') !!}
						{!! Field::password('password') !!}
						{!! Field::password('password_confirmation') !!}
						{!! Field::checkbox('active') !!}

						<hr>
						<p>Roles</p>
						@foreach($roles as $role)
							{!! Field::checkbox('role_'.$role->id , $role->id , [ 'name'=>'role[]' ,'label'=>$role->name] ) !!}
						@endforeach

						<br>
						{!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
