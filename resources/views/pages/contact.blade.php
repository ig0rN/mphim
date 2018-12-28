@extends('master')

@section('title', 'Contact')

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb my-4">
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
	</div>
</div>
@endsection