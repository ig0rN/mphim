@extends('master')

@section('title', __('translate.who-can-use-it'))

@section('content')
<div class="container">
	<div id="companies" class="item-text">
		<h3 class="heading padding-top">
			{{ __('translate.companies') }}
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
		<h3 class="heading padding-top">
			{{ __('translate.professionals') }}
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
		<h3 class="heading padding-top">
			{{ __('translate.trade-associations') }}
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
		<h3 class="heading padding-top">
			{{ __('translate.public-institutions') }}
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
	<div id="banks" class="item-text">
		<h3 class="heading padding-top">
			{{ __('translate.banks') }}
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/customers/banks.jpg')}}" alt="img/customers/banks.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $banks->{'body_' . $language} !!}
			</div>
		</div>
	</div>
	<div id="schools" class="item-text">
		<h3 class="heading padding-top">
			{{ __('translate.schools') }}
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
		<h3 class="heading padding-top">
			{{ __('translate.university') }}
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