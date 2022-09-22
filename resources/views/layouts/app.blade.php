<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sample</title>

		<link rel="shortcut icon" href="{{ asset('img/icons/favicon.png')}}" type="image/x-icon">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('css/fontawesome/css/all.min.css') }}" rel="stylesheet">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		@if(isset($include_css))
			@if(is_array($include_css))
				@foreach($include_css as $css)
					<link rel="stylesheet" href="{{asset('css/'.$css)}}">
				@endforeach
			@else
				<link rel="stylesheet" href="{{asset('css/'.$include_css)}}">
			@endif
		@endif

		@section('custom_head')
		@show

		<script>
			window.Laravel = {!! json_encode([
				'csrfToken' => csrf_token(),
			]) !!};

			var WEB_PATH = '{{url('')}}';
		</script>
	</head>
	<body>

		<!-- NAVEGACION -->
		<nav class="navigation">
			<div class="container d-flex justify-content-center align-items-center flex-wrap">

				<div class="w-100 text-end d-xl-none">
					<a href="#" class="open-mobile text-primary fs-1">
						<i class="fas fa-bars"></i>
					</a>
				</div>

				<ul class="menu list-unstyled d-xl-flex">
					<li class="{{ ! Route::is('user.index')?'':'active'}}">
						<a href="{{ route('user.index') }}" >Users</a>
					</li>
					<li class="{{ ! Route::is('country.index')?'':'active'}}">
						<a href="{{ route('country.index') }}" >Countries</a>
					</li>
					<a href="#" class="close-mobile text-white fs-1 d-xl-none">
						<i class="fas fa-times-circle"></i>
					</a>
				</ul>

			</div>
		</nav>
		<!-- NAVEGACION -->

		<section>
			<div class="container py-5">
				@yield('content')
			</div>
		</section>

		<!-- FOOTER -->
		<footer class="py-4">
			<div class="container d-flex justify-content-end">
			</div>
		</footer>
	<!-- FOOTER -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"></script>

		<script src="{{asset('js/jquery-3.6.0.min.js') }}"></script>
		<script src="{{asset('js/app.js') }}"></script>
		<script src="{{asset('js/bootbox/bootbox.min.js')}}"></script>
		<script src="{{asset('js/jquery/jquery-base64.js')}}"></script>
		<script src="{{asset('js/common.js')}}"></script>

		@if(isset($include_js))
			@if(is_array($include_js))
				@foreach($include_js as $js)
					<script src="{{asset('js/'.$js)}}"></script>
				@endforeach
			@else
				<script src="{{asset('js/'.$include_js)}}"></script>
			@endif
		@endif

		@section('custom_scripts')
		@show

	</body>
</html>
