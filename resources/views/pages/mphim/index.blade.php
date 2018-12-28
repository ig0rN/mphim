@extends('master')

@section('title', 'Mphim+')

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
		</ol>
	</nav>
	<h3 class="heading m-0">
		Mphim+
	</h3>
</div>
@endsection