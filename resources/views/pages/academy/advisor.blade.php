@extends('master')

@section('title', 'Training4Advisor')

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
				{{ __('translate.training4advisor') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading">
		Training4Advisor
	</h3>
	<div class="row align-items-start">
		<div class="col-md-4">
			<div class="image">
				<img src="{{ asset('img/home/training/advisor.jpg')}}" alt="img/home/training/advisor.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			{!! $content->{'body_' . $language} !!}
			<p>
				<strong>The training course</strong> allows the professional to have the necessary technical tool to operate proactively in or in support of functional, divisional and general directions, reaching levels of orientation that can be joined to the following professional profiles (1):
			</p>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr class="row bg-primary text-white text-center">
							<th class="col-4 align-baseline">
								EN 16114
								<br />
								UNI 10771 art. 5
							</th>
							<th class="col-4 align-baseline">
								ISCO08
							</th>
							<th class="col-4">
								CP2011
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row">
							<td class="col-4">
								<strong>
									Management consultant:
								</strong>
								<br />
								Area
								<br />
								<strong>
									Marketing and Sales
								</strong>
								<ul class="m-0 p-0">
									<li>
										Operational maketing and sales
									</li>
									<li>
										Strategic marketing
									</li>
								</ul>
							</td>
							<td class="col-4">
								<strong>
									243-Sales, marketing and public relations professionals
								</strong>
							</td>
							<td class="col-4">
								<strong>
									2.5.1.5.2 - Specialists in the stack of goods and services (excluding the ICT sector)
								</strong>
								<p class="m-0">
									<small>
										Marketing manager
									</small>
								</p>
								<p class="m-0">
									<small>
										Specialist in foreign trade
									</small>
								</p>
							</td>
						</tr>
						<tr class="row">
							<td class="col-4">
								<strong>
									Management consultant:
								</strong>
								<br />
								Area
								<br />
								<strong>
									Finance and Control Administration
								</strong>
							</td>
							<td class="col-4">
								<strong>
									242 Administration professionals
								</strong>
							</td>
							<td class="col-4">
								<strong>
									<em>
										2.5.1.2.0. - Management and control specialists in private companies
									</em>
								</strong>
								<p>
									<strong>
										Budget and control manager
									</strong>
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p>
				Minimum duration 12 hours
			</p>
			<p class="m-0">
				The duration and level of depth of the course can vary according to the training needs of users.
			</p>
		</div>
	</div>
</div>
@endsection