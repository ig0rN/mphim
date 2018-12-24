@extends('master')

@section('title', 'Why to have it')

@section('content')
<nav id="breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb my-4">
		<li class="breadcrumb-item">
			<a href="{{ route('home') }}">
				Home
			</a>
		</li>
		<li class="breadcrumb-item active text-uppercase" aria-current="page">
			Mphim+
		</li>
		<li class="breadcrumb-item active" aria-current="page">
			Why to have it
		</li>
	</ol>
</nav>
@endsection