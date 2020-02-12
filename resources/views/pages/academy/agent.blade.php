@extends('master')

@section('title', __('translate.training4agent'))

@section('content')
<div id="training" class="pt-5">
	<div class="container">
		<h3 class="heading">
			{{ __('translate.training4agent') }}
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/home/training/agent.jpg')}}" alt="img/home/training/agent.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $content->{'body_' . $language} !!}
			</div>
		</div>
	</div>
</div>
@endsection