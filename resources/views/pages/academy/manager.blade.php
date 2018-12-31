@extends('master')

@section('title', 'Training4Manager')

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
				{{ __('translate.training4manager') }}
			</li>
		</ol>
	</nav>
	<h3 class="heading">
		Training4Manager
	</h3>
	<div class="row align-items-start">
		<div class="col-md-4">
			<div class="image">
				<img src="{{ asset('img/home/training/manager.jpg')}}" alt="img/home/training/manager.jpg" />
			</div>
		</div>
		<div class="col-md-8">
			<h6 class="font-weight-bold">
				Recipients:
			</h6>
			<p class="text-underline">
				<u>Graduates (preferably) in</u>:
			</p>
			<ul>
				<li>
					economy and commerce;
				</li>
				<li>
					management engineering;
				</li>
				<li>
					agriculture;
				</li>
				<li>
					law;
				</li>
				<li>
					and equivalent.
				</li>
			</ul>
			<p class="text-underline">
				<u>Management of companies in one of the following fields</u>:
			</p>
			<ul>
				<li>
					general direction;
				</li>
				<li>
					finance, administration and control;
				</li>
				<li>
					marketing.
				</li>
			</ul>
			<p>
				<strong>The training course</strong> allows the professional to have the necessary technical tool to occupy positions of responsibility for which managerial and economic skills and competences are required, <em>reaching levels of orientation that can be joined to the following professional profiles (1)</em>:
			</p>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr class="row bg-primary text-white text-center">
							<th class="col-4">
								EN 16114
								<br />
								UNI 10771 art. 5
							</th>
							<th class="col-4">
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