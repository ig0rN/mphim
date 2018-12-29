@extends('master')

@section('title', __('translate.customers'))

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
		</ol>
	</nav>
	<div id="companies" class="pb-5">
		<h3 class="heading">
			Companies
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="professionals" class="pb-5">
		<h3 class="heading">
			Professionals
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="trade" class="pb-5">
		<h3 class="heading">
			Trade associations
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="public" class="pb-5">
		<h3 class="heading">
			Public institutions
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="schools" class="pb-5">
		<h3 class="heading">
			Schools
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
	<div id="university" class="pb-5">
		<h3 class="heading">
			University
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4 py-4">
				<div class="image">
					<img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
				</div>
			</div>
			<div class="col-md-8 py-4">
				<p class="m-0">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
	</div>
</div>
@endsection