@extends('master')

@section('title', 'Commercial')

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb mb-5">
			<li class="breadcrumb-item">
				<a href="{{ route('home') }}">
					{{ __('translate.home') }}
				</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
				{{ __('translate.commercial') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading">
		Commercial
	</h3>
	<div class="row align-items-start">
		<div class="col-md-4">
			<div class="image">
				<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			<p>
				Our commercial policy includes the marketing of mphim + software through distributors and dealers.
				The retailer must guarantee the necessary assistance to the end user and, in this regard, our organization has provided ad hoc training courses in favor of its personnel.
				The promotion of mphim + software at distributors and dealers is developed by our technical-commercial consultants who operate on the basis of the agency contract.
				If you are interested in distributing software or collaborating as a commercial agent, send an e-mail to commerciale@mphimplus.com
			</p>
		</div>
	</div>
</div>
@endsection