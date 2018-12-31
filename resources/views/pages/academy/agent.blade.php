@extends('master')

@section('title', 'Training4Agent')

@section('content')
<div class="container">
	<nav id="breadcrumb" aria-label="breadcrumb">
		<ol class="breadcrumb mb-5">
			<li class="breadcrumb-item">
				<a href="{{ route('home') }}">
					{{ __('translate.home') }}
				</a>
			</li>
			<li class="breadcrumb-item" aria-current="page">
				<a href="{{ route('academy') }}">
					{{ __('translate.academy') }}
				</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
				{{ __('translate.training4agent') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading">
		Training4Agent
	</h3>
	<div class="row align-items-start">
		<div class="col-md-4">
			<div class="image">
				<img src="{{ asset('img/home/training/agent.jpg')}}" alt="img/home/training/agent.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			<p>
				The training course is a moment of orientation towards the profession of "sales and distribution technician".
			</p>
			<p>
				In fact, Training4agent is aimed at sales agents interested in undertaking this new professional path which includes, in addition to the activity of promoting goods and services, the following tasks and activities:
			</p>
			<ul>
				<li>
					coordinate the sales network;
				</li>
				<li>
					define prices and commercial strategies;
				</li>
				<li>
					define sales budgets.
				</li>
			</ul>
			<p>
				To this end, the course aims to disseminate a practical and operational guide for the implementation of a planned marketing strategy, adaptable to any business context, regardless of the size and sector of the company.
			</p>
			<p>
				The development of the elements of the marketing mix (product, price, distribution and promotion) necessary for the elaboration of the commercial policy is assured through the use of the business intelligence software MPHIM +.
			</p>
			<p>
				Minimum duration 3 hours
			</p>
			<p class="m-0">
				The duration and level of depth of the course can vary according to the training needs of users.
			</p>
		</div>
	</div>
</div>
@endsection