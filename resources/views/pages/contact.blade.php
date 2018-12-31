@extends('master')

@section('title', 'Contact')

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item">
				<a href="{{ route('home') }}">
					{{ __('translate.home') }}
				</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
				{{ __('translate.contact') }}
			</li>
		</ol>
	</nav>
	<div id="contact">
		<div class="contact mb-4">
			<div class="row no-gutters align-items-center">
				<div class="col-md-4 item">
					<div class="wrapper text-center text-uppercase">
						<ion-icon name="locate"></ion-icon>
						<p class="m-0">Address</p>
					</div>
				</div>
				<div class="col-md-4 item">
					<div class="wrapper text-center text-uppercase">
						<ion-icon name="mail"></ion-icon>
						<p class="m-0">Email</p>
					</div>
				</div>
				<div class="col-md-4 item">
					<div class="wrapper text-center text-uppercase">
						<ion-icon name="call"></ion-icon>
						<p class="m-0">Telephone</p>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-form">
			<h3 class="heading">Contact form</h3>
		</div>
		<div class="locations">
			<div class="row">
				<div class="col-md-3">
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/locations/palermo.png') }}" alt="img/locations/palermo.jpg" />
						</div>
						<div class="info text-center">
							<p class="state text-uppercase">
								Italia
							</p>
							<p class="address">
								Via Libertà n. 103,<br />
								90143 Palermo
							</p>
							<p class="telephone">
								Tel.
								<a href="+39091588140" title="Call">
									+39 091 588 140
								</a>
							</p>
							<p class="email">
								<a href="mailto:info@mphimplus.com" title="Email">
									info@mphimplus.com
								</a>								
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/locations/freienbach.png') }}" alt="img/locations/freienbach.png" />
						</div>
						<div class="info text-center">
							<p class="state text-uppercase">
								Svizzera
							</p>
							<p class="address">
								Kantonsstrasse n. 81,<br />
								CH - 8807 Freienbach
							</p>
							<p class="telephone">
								Tel.
								<a href="+41786006023" title="Call">
									+41 786 006 023
								</a>
							</p>
							<p class="email">
								<a href="mailto:info@mphimplus.com" title="Email">
									info@mphimplus.com
								</a>								
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/locations/kragujevac.jpg') }}" alt="img/locations/kragujevac.jpg" />
						</div>
						<div class="info text-center">
							<p class="state text-uppercase">
								Serbia
							</p>
							<p class="address">
								Mije Aleksica 7,<br />
								34000 Kragujevac
							</p>
							<p class="telephone">
								Tel.
								<a href="+38134207098" title="Call">
									+381 34 20 70 98
								</a>
							</p>
							<p class="email">
								<a href="mailto:info@mphimplus.com" title="Email">
									info@mphimplus.com
								</a>								
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/locations/kragujevac.jpg') }}" alt="img/locations/kragujevac.jpg" />
						</div>
						<div class="info text-center">
							<p class="state text-uppercase">
								Morocco
							</p>
							<p class="address">
								Lorem Ipsum<br />
								Lorem Ipsum
							</p>
							<p class="telephone">
								Tel.
								<a href="+000000000" title="Call">
									+000 000 000
								</a>
							</p>
							<p class="email">
								<a href="mailto:info@mphimplus.com" title="Email">
									info@mphimplus.com
								</a>								
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection