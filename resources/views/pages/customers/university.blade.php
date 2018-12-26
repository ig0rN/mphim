@extends('master')

@section('title', 'University')

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
				{{ __('translate.customers') }}
			</li>
			<li class="breadcrumb-item active" aria-current="page">
				{{ __('translate.university') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading m-0">
		University
	</h3>
	<div class="row align-items-start">
		<div class="col-md-4 py-4">
			<div class="image">
				<img src="{{ asset('img/customers/university.jpg')}}" alt="img/customers/university.jpg" />
			</div>
		</div>
		<div class="col-md-8 py-4">
			<p class="m-0">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
	</div>
</div>
@endsection