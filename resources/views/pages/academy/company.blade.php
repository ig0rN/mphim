@extends('master')

@section('title', 'Training4Company')

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb mb-5">
			<li class="breadcrumb-item">
				<a href="{{ route('home') }}">
					{{ __('translate.home') }}
				</a>
			</li>
			<li class="breadcrumb-item" aria-current="page">
				<a href="{{ route('academy') }}">
					{{ __('translate.academy') }}
				</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
				{{ __('translate.training4company') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading">
		Training4Company
	</h3>
	<div class="row align-items-start">
		<div class="col-md-4">
			<div class="image">
				<img src="{{ asset('img/home/training/company.jpg')}}" alt="img/home/training/company.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			<p>
				The training course, aimed at entrepreneurs, aims to represent a practical and operational guide for the implementation of a planned marketing strategy, adaptable to any business context, regardless of the size and sector of the company. The development of the elements of the marketing mix (product, price, distribution and promotion), necessary for the development of the commercial policy, is ensured through the use of the MPHIM + methodology.
			</p>
			<h6>
				Program
			</h6>
			<ul>
				<li>
					how to engineer the product for commercial purposes;
				</li>
				<li>
					how to establish prices and commercial strategies;
				</li>
				<li>
					how to identify new customers;
				</li>
				<li>
					how to acquire new customers.
				</li>
			</ul>
			<p>
				Minimum duration 3 hours
			</p>
			<p class="m-0">
				The duration and level of depth of the course can vary according to the training needs of users.
			</p>
		</div>
	</div>
</div>
@endsection