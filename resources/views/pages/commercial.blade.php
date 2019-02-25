@extends('master')

@section('title', 'Commercial')

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
				<img src="{{ asset('img/commercial/commercial.jpg')}}" alt="img/commercial/commercial.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			{!! $content->{'body_' . $language} !!}
		</div>
	</div>
</div>
@endsection