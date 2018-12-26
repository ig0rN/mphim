@extends('master')

@section('title', 'Home')

@section('content')
<div id="mphim-bar" class="pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div id="mphim">
					<h2 class="mb-4">
						Mphim+: A method in a software
					</h2>
					<div class="item py-2">
						<p>
							<strong>mphim+</strong> is a software that allows a company to record and implement its sales policies, favoring the market positioning of its products and services through the optimization the marketing mix elements (product, price, distribution and promotion).
						</p>
					</div>
					<div class="item py-2">
						<p>
							<strong>mphim+</strong> is preparatory to different promotion tools, like trade shows, salesmen and e-commerce sites and assures their co-existence, maximizing results in terms of sales. 
						</p>
					</div>
					<div class="item py-2">
						<p>
							<strong>mphim+</strong> is based on the 3ds+ marketing and export-marketing management, and is studied in high schools and universities. 
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div id="discover">
					<div class="discover">
						<div class="item">
                            <a href="{{ route('mphim.whatIs')}}">
                                <img src="{{ asset('img/home/mphim/what-is.png') }}" alt="img/home/mphim/what-is.png" />
                                <p>
                                    {{ __('translate.what-is') }}
                                </p>
                            </a>
						</div>
						<div class="item">
                            <a href="{{ route('mphim.whatDoes')}}">
                                <img src="{{ asset('img/home/mphim/what-does.png') }}" alt="img/home/mphim/what-does.png" />
                                <p>
                                    {{ __('translate.what-does-it-do') }}
                                </p>
                            </a>
						</div>
						<div class="item">
                            <a href="{{ route('mphim.whyTo')}}">
                                <img src="{{ asset('img/home/mphim/why-to.png') }}" alt="img/home/mphim/why-to.png" />
                                <p>
                                    {{ __('translate.why-to-have') }}
                                </p>
                            </a>
						</div>
						<div class="item">
                            <a href="{{ route('mphim.roadmap')}}">
                                <img src="{{ asset('img/home/mphim/roadmap.png') }}" alt="img/home/mphim/roadmap.png" />
                                <p>
                                    {{ __('translate.roadmap') }}
                                </p>
                            </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="academy" class="pt-5">
    <div class="container">
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
                            {{ __('translate.training4advisior') }}
                        </h6>
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{ __('translate.training4advisior') }}"?
                        </p>
                        <a href="{{ route('academy.advisior') }}" class="btn btn-training">
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
<div id="about" class="pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 pl-0">
                <div class="student-image">
                    <img src="{{ asset('img/home/about/student-1.jpg') }}" alt="img/home/about/student-1.jpg" />
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="pt-4">About Mphim+</h1>
                <div id="counter">
                    <div class="d-flex">
                        <div class="flex-fill">
                            <div class="item">
                                <span class="counter-value" data-count="76">
                                    0
                                </span>
                                <span class="value">
                                    m+
                                </span>
                            </div>
                            <h6>
                                Students Learning
                            </h6>
                        </div>
                        <div class="flex-fill">
                            <div class="item">
                                <span class="counter-value" data-count="80">
                                    0
                                </span>
                                <span class="value">
                                    k+
                                </span>
                            </div>
                            <h6>
                                Active Courses
                            </h6>
                        </div>
                        <div class="flex-fill">
                            <div class="item">
                                <span class="counter-value" data-count="990">
                                    0
                                </span>
                                <span class="value">
                                    +
                                </span>
                            </div>
                            <h6>
                                Instructors online
                            </h6>
                        </div>
                    </div>
                </div>
                <p class="pt-4">
                    Students in class on time, spending longer learning and handing their homework in when it’s due – the obvious ones, but these aren’t the only ways My Study Life helps increase attainment. The dashboard gives students an overview of their day,
                </p>
                <button class="btn btn-learn">
                    Learn more
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-right">
                <h2 class="pt-4">
                    Create a course for free in minutes with teachable
                </h2>
                <p class="pt-4">
                    Students in class on time, spending longer learning and handing their homework in when it’s due – the obvious ones, but these aren’t the only ways My Study Life helps increase attainment. The dashboard gives students an overview of their day,
                </p>
                <button class="btn btn-learn">
                    Learn more
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
            <div class="col-md-6 pr-0">
                <div class="student-image-second">
                    <img src="{{ asset('img/home/about/student-2.jpg') }}" alt="img/home/about/student-2.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>
<div id="customers" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center pb-4">
				<h6 class="text-uppercase mb-3">
                    {{ __('translate.companies') }}
				</h6>
				<div class="item text-center mb-3">
                    <a href="{{ route('customers.companies')}}">
                        <img src="{{ asset('img/home/customers/companies.png')}}" alt="img/home/customers/companies.png" />
                    </a>
				</div>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>
			</div>
			<div class="col-md-4 text-center pb-4">
				<h6 class="text-uppercase mb-3">
                    {{ __('translate.professionals') }}
				</h6>
				<div class="item text-center mb-3">
                    <a href="{{ route('customers.pro')}}">
                        <img src="{{ asset('img/home/customers/professionals.png')}}" alt="img/home/customers/professionals.png" />
                    </a>
				</div>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>
			</div>
			<div class="col-md-4 text-center pb-4">
				<h6 class="text-uppercase mb-3">
                    {{ __('translate.trade-associations') }}
				</h6>
				<div class="item text-center mb-3">
                    <a href="{{ route('customers.tradeAssoc')}}">
                        <img src="{{ asset('img/home/customers/trade.png')}}" alt="img/home/customers/trade.png" />
                    </a>
				</div>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>
			</div>
			<div class="col-md-4 text-center pb-4">
				<h6 class="text-uppercase mb-3">
                    {{ __('translate.public-institutions') }}
				</h6>
				<div class="item text-center mb-3">
                    <a href="{{ route('customers.publicInsti')}}">
                        <img src="{{ asset('img/home/customers/public.png')}}" alt="img/home/customers/public.png" />
                    </a>
				</div>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>
			</div>
			<div class="col-md-4 text-center pb-4">
				<h6 class="text-uppercase mb-3">
                    {{ __('translate.schools') }}
				</h6>
				<div class="item text-center mb-3">
                    <a href="{{ route('customers.schools')}}">
                        <img src="{{ asset('img/home/customers/school.png')}}" alt="img/home/customers/school.png" />
                    </a>
				</div>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>
			</div>
			<div class="col-md-4 text-center pb-4">
				<h6 class="text-uppercase mb-3">
                    {{ __('translate.university') }}
				</h6>
				<div class="item text-center mb-3">
                    <a href="{{ route('customers.university')}}">
                        <img src="{{ asset('img/home/customers/university.png')}}" alt="img/home/customers/university.png" />
                    </a>
				</div>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>
			</div>
		</div>
	</div>
</div>
@endsection