<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	{{-- JQuery --}}
	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

</head>
<body>
	@if (Request::segment(2) != 'home')
	<div id="vertical-menu">
		<div class="wrapper">
			@include('admin.layouts.nav')
		</div>
	</div>
	@endif
	<div id="admin-content" class="{{ Request::segment(2) == 'home' ? 'home' : '' }}">
		@if (Request::segment(2) != 'home')
			<div id="top-bar" class="d-md-none">
				<button class="btn btn-vertical-menu">
					<i class="fas fa-bars"></i>
				</button>
			</div>
			<!-- Close nav start -->
			<div id="close-nav" class="d-md-none"></div>
			<!-- Close nav end -->
		@endif
		@yield('main')
	</div>
	
	<script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/all.min.js') }}"></script>
	@yield('scripts')
</body>
</html> 