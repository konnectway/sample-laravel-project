@extends('layouts.app')
@section('content')
<div class="card-header">
	<div class="pull-left">
		<h2>Profile</h2>
	</div>
	<div class="pull-right">
		<a class="btn btn-outline-primary" href="{{ route('user.index')  }}">Back</a>
	</div>
</div>
@include('partials.messages')
<div class="card-body show">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Name:</strong>
				{{ ucwords($user->name . ' ' . $user->lastname) }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Email:</strong>
				{{ $user->email }}
			</div>
		</div>
	</div>
</div>
@endsection
