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
			{!! $content->{'body_' . $language} !!}
		</div>
	</div>
</div>
@endsection