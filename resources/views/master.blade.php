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
<!--
		<a href="javascript:void(0)" id="back-to-top" title="Back to top">
			<img src="{{ asset('img/top.png') }}" alt="img/top.png" />
		</a>
-->
		<!-- back-to-top end -->
	</div>
	<!-- App end -->
	<!-- Footer start -->
	<footer>
		<div class="container">
			<div id="footer-nav">
				<div class="row">
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">
							Home
						</a>
					</div>
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">
							Mphim+
						</a>
						<ul>
							<li>
								<a href="javascript:void(0)">
									What is
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									What does it do
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Why to have it
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Roadmap
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">
							Customers
						</a>
						<ul>
							<li>
								<a href="javascript:void(0)">
									Companies
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Professionals
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Trade associations
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Public institutions
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Schools
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									University
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">
							Versions
						</a>
					</div>
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">
							Commercial
						</a>
					</div>
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">
							Reference
						</a>
					</div>
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">
							Accademy
						</a>
						<ul>
							<li>
								<a href="javascript:void(0)">
									Training4Company
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Training4Agent
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Training4Advisor
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Training4Manager
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<a href="javascript:void(0)" class="heading">Contact</a>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				© Copyright 2018 <a href="http://www.webtory.rs/" target="_blank"><b>Webtory</b></a>. All Rights Reserved
			</div>
		</div>
	</footer>
	<!-- Footer end -->
	<!-- JavaScript links start -->
        @include('section.scripts')
	<!-- JavaScript links end -->
</body>

</html>
