@extends('master')

@section('title', __('translate.customers'))

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ route('home') }}">
					{{ __('translate.home') }}
				</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
                {{ __('translate.customers') }}
			</li>
		</ol>
	</nav>
	<div id="companies" class="item-text">
		<h3 class="heading">
			Companies
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $companies->{'body_' . $language} !!}
			</div>
		</div>
	</div>
	<div id="professionals" class="item-text">
		<h3 class="heading">
			Professionals
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/professionals.jpg')}}" alt="img/customers/professionals.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $proffesionals->{'body_' . $language} !!}
			</div>
		</div>
	</div>
	<div id="trade" class="item-text">
		<h3 class="heading">
			Trade associations
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/trade.jpeg')}}" alt="img/customers/trade.jpeg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $tradeAssoc->{'body_' . $language} !!}
			</div>
		</div>
	</div>
	<div id="public" class="item-text">
		<h3 class="heading">
			Public institutions
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/public-institutions.jpg')}}" alt="img/customers/public-institutions.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $publicIns->{'body_' . $language} !!}
			</div>
		</div>
	</div>
	<div id="schools" class="item-text">
		<h3 class="heading">
			Schools
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/schools.jpg')}}" alt="img/customers/schools.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $schools->{'body_' . $language} !!}
			</div>
		</div>
	</div>
	<div id="university" class="item-text">
		<h3 class="heading">
			University
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/university.jpg')}}" alt="img/customers/university.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $university->{'body_' . $language} !!}
			</div>
		</div>
	</div>
</div>
@endsection