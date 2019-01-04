@extends('master')

@section('title', 'Reference')

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
				{{ __('translate.reference') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading">
		Reference
	</h3>
	<div class="row align-items-start pb-5">
		<div class="col-md-4">
			<div class="image">
				<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			{!! $content->{'body_' . $language} !!}
		</div>
	</div>
</div>
@endsection