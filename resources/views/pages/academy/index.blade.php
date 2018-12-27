@extends('master')

@section('title', __('translate.academy'))

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
                {{ __('translate.academy') }}
			</li>
		</ol>
	</nav>
	<p>
        Mphim+ academy It consists of trainers who have passed the mphim + accreditation path. They can act as teachers in mphim + training courses aimed at entrepreneurs, professionals, managers, in the context of school-work alternation projects with secondary schools and in the context of training projects with universities.
    </p>
    <ul>
        <li><a href="{{ route('academy.company') }}">{{ __('translate.training4company') }}</a></li>
        <li><a href="{{ route('academy.agent') }}">{{ __('translate.training4agent') }}</a></li>
        <li><a href="{{ route('academy.advisor') }}">{{ __('translate.training4advisor') }}</a></li>
        <li><a href="{{ route('academy.manager') }}">{{ __('translate.training4manager') }}</a></li>
    </ul>
</div>
@endsection