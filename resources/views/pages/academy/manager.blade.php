@extends('master')

@section('title', __('translate.training4manager'))

@section('content')
<div id="training" class="pt-5">
	<div class="container">
		<h3 class="heading">
			{{ __('translate.training4manager') }}
		</h3>
		<div class="row align-items-start">
			<div class="col-md-4">
				<div class="image">
					<img src="{{ asset('img/home/training/manager.jpg') }}" alt="img/home/training/manager.jpg" />
				</div>
			</div>
			<div class="col-md-8">
				{!! $content->{'body_' . $language} !!}
			</div>
		</div>
	</div>
</div>
@endsection