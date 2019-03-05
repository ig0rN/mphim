<!DOCTYPE html>
<html>

<head>
    @include('section.head')
</head>

<body data-spy="scroll" data-target=".nav" class="active">
	<!-- Loader start -->
	<div id="loader"></div>
	<!-- Loader end -->
	<!-- App start -->
	<div id="app">

		<!-- Header start -->
		@include('section.nav')
		<!-- Header end -->

		<!-- Content start -->
		<div id="content" class="pb-5">
			@yield('content')
		</div>
		<!-- Content end -->

		<!-- Push-footer start -->
		<div class="push-footer"></div>
		<!-- Push-footer end -->
		<!-- back-to-top start -->
		<a href="javascript:void(0)" id="back-to-top" title="Back to top">
			<ion-icon name="arrow-up" size="large"></ion-icon>
		</a>
		<!-- back-to-top end -->
	</div>
	<!-- App end -->

	<!-- Footer start -->
	<footer>
		@include('section.footer')
	</footer>
	<!-- Footer end -->
	<!-- JavaScript links start -->
	@include('section.scripts')
	@yield('scripts')
	<!-- JavaScript links end -->
</body>

</html>
