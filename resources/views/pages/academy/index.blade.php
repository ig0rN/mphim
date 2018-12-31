@extends('master')

@section('title', __('translate.academy'))

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb mb-5">
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
	<h3 class="heading">
		Academy
	</h3>
	<div id="academy">
		<p class="mb-5">
			Mphim+ academy It consists of trainers who have passed the mphim + accreditation path. They can act as teachers in mphim + training courses aimed at entrepreneurs, professionals, managers, in the context of school-work alternation projects with secondary schools and in the context of training projects with universities.
		</p>
		<div class="row">
			<div class="col-md-3">
				<div class="training">
					<div class="image">
						<img src="{{ asset('img/home/training/company.jpg') }}" alt="img/home/training/company.jpg" />
					</div>
					<div class="overlay bg-primary">
						<h6>
							{{ __('translate.training4company') }}
						</h6>
						<p>
							{{ __('translate.do-you-want-to-find-out-more-about') }} "{{ __('translate.training4company') }}"?
						</p>
						<a href="{{ route('academy.company') }}" class="btn btn-training">
							{{ __('translate.access-the-training') }}
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="training">
					<div class="image">
						<img src="{{ asset('img/home/training/agent.jpg') }}" alt="img/home/training/agent.jpg" />
					</div>
					<div class="overlay bg-danger">
						<h6>
							{{ __('translate.training4agent') }}
						</h6>
						<p>
							{{ __('translate.do-you-want-to-find-out-more-about') }} "{{ __('translate.training4agent') }}"?
						</p>
						<a href="{{ route('academy.agent') }}" class="btn btn-training">
							{{ __('translate.access-the-training') }}
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="training">
					<div class="image">
						<img src="{{ asset('img/home/training/advisor.jpg') }}" alt="img/home/training/advisor.jpg" />
					</div>
					<div class="overlay bg-warning">
						<h6>
							{{ __('translate.training4advisor') }}
						</h6>
						<p>
							{{ __('translate.do-you-want-to-find-out-more-about') }} "{{ __('translate.training4advisor') }}"?
						</p>
						<a href="{{ route('academy.advisor') }}" class="btn btn-training">
							{{ __('translate.access-the-training') }}
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="training">
					<div class="image">
						<img src="{{ asset('img/home/training/manager.jpg') }}" alt="img/home/training/manager.jpg" />
					</div>
					<div class="overlay bg-info">
						<h6>
							{{ __('translate.training4manager') }}
						</h6>
						<p>
							{{ __('translate.do-you-want-to-find-out-more-about') }} "{{ __('translate.training4manager') }}"?
						</p>
						<a href="{{ route('academy.manager') }}" class="btn btn-training">
							{{ __('translate.access-the-training') }}
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection