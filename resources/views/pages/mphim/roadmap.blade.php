@extends('master')

@section('title', 'Roadmap')

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
				Mphim+
			</li>
			<li class="breadcrumb-item active" aria-current="page">
				{{ __('translate.roadmap') }}
			</li>
		</ol>
	</nav>
	<div class="text-center pb-4">
		<img src="{{ asset('img/roadmap/roadmap.jpg') }}" alt="img/roadmap/roadmap.jpg" />
	</div>
</div>
@endsection