<!DOCTYPE html>
<html>

<head>
    @include('section.head')
</head>

<body>
	<!-- Loader start -->
	<!--	<div id="loader"></div>-->
	<!-- Loader end -->
	<!-- App start -->
	<div id="app">
		<!-- Header start -->
            @include('section.nav')
		<!-- Header end -->
		<!-- Home start -->
		<div id="home">
		</div>
		<!-- Home end -->
		<!-- Content start -->
		<div id="content">
		</div>
		<!-- Content end -->
		<!-- Push-footer start -->
		<div class="push-footer"></div>
		<!-- Push-footer end -->
		<!-- back-to-top start -->
		<a href="javascript:void(0)" id="back-to-top" title="Back to top">
			<img src="img/top.png" alt="img/top.png" />
		</a>
		<!-- back-to-top end -->
	</div>
	<!-- App end -->
	<!-- Footer start -->
	<footer>
		<div class="container">
		</div>
	</footer>
	<!-- Footer end -->
	<!-- JavaScript links start -->
        @include('section.scripts')
	<!-- JavaScript links end -->
</body>

</html>
