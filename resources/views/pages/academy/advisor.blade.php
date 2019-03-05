@extends('master')

@section('title', 'Training4Advisor')

@section('content')
<div class="container">
	<h3 class="heading">
		{{ __('translate.training4advisor') }}
	</h3>
	<div class="row align-items-start">
		<div class="col-md-4">
			<div class="image">
				<img src="{{ asset('img/home/training/advisor.jpg')}}" alt="img/home/training/advisor.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			{!! $content->{'body_' . $language} !!}
		</div>
	</div>
</div>
@endsection