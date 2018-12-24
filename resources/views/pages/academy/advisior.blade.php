@extends('master')

@section('content')
	<nav id="breadcrumb" aria-label="breadcrumb">
	  <ol class="breadcrumb my-4">
		  <li class="breadcrumb-item">
			  <a href="{{ route('home') }}">
				  Home
			  </a>
		  </li>
		  <li class="breadcrumb-item active" aria-current="page">
			  Academy
		  </li>
		  <li class="breadcrumb-item active" aria-current="page">
			  Training4Advisor
		  </li>
	  </ol>
	</nav>
@endsection