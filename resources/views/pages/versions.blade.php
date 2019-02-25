@extends('master')

@section('title', 'Versions')

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
				{{ __('translate.versions') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading">
		Versions
	</h3>
	<div class="row align-items-start">
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