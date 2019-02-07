@extends('master')

@section('title', 'Home')

@section('content')
<div id="mphim-bar">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-10">
                <div id="mphim">
                    <div class="tab-content" id="mphim-tabs">
                        <div class="tab-pane fade" id="default-text" role="tabpanel" aria-labelledby="default-tab">
                            <h3 class="heading">
                                {{ $content->{'header_' . $language} }}
                            </h3>
                            <div class="text">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="what-is-text" role="tabpanel" aria-labelledby="what-is-tab">
                            <h3 class="heading">
                                What is?
                            </h3>
                            <div class="text-div">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="what-does-text" role="tabpanel" aria-labelledby="what-does-tab">
                            <h3 class="heading">
                                What does it do?
                            </h3>
                            <div class="text-div">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="why-to-text" role="tabpanel" aria-labelledby="why-to-tab">
                            <h3 class="heading">
                                Why to have it?
                            </h3>
                            <div class="text-div">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release
                                    of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="roadmap-text" role="tabpanel" aria-labelledby="roadmap-tab">
                            <h3 class="heading">
                                Roadmap
                            </h3>
                            <div class="text-div">
                                <div class="logo text-center">
                                    <img src="{{ asset('img/logo.png') }}" alt="img/logo.png" />
                                </div>
                                <ul class="roadmap">
                                    <li class="even">
                                        <div class="container">
                                            <div class="row no-gutters">
                                                <div class="col-md-5 text-right">
                                                    <div class="text">
                                                        <div class="year-div">
                                                            <p class="year m-0">
                                                                2018
                                                            </p>
                                                        </div>
                                                        <p>

                                                            Lorem ipsum
                                                        </p>
                                                        <div class="arrow-right"></div>
                                                        <p class="date m-0 text-right">
                                                            May
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="container">
                                            <div class="row no-gutters">
                                                <div class="col-md-5 offset-7">
                                                    <div class="text">
                                                        <div class="year-div">
                                                            <p class="year">
                                                                2017
                                                            </p>
                                                        </div>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry.
                                                        </p>
                                                        <div class="arrow-left"></div>
                                                        <p class="date">
                                                            May
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="container">
                                            <div class="row no-gutters">
                                                <div class="col-md-5 offset-7">
                                                    <div class="text">
                                                        <div class="year-div">
                                                            <p class="year">
                                                                2017
                                                            </p>
                                                        </div>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry.
                                                        </p>
                                                        <div class="arrow-left"></div>
                                                        <p class="date">
                                                            May
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div id="discover">
                    <div class="discover">
                        <ul class="nav" role="tablist">
                            <li class="item">
                                <a id="what-is-tab" data-toggle="tab" href="#what-is-text" role="tab" aria-controls="what-is-text"
                                    aria-selected="true">
                                    <img src="{{ asset('img/home/mphim/what-is.png') }}" alt="img/home/mphim/what-is.png" />
                                    <p>
                                        {{ __('translate.what-is') }}
                                    </p>
                                </a>
                                <!-- <a href="{{ route('mphim') . '#what-is' }}">
                                <img src="{{ asset('img/home/mphim/what-is.png') }}" alt="img/home/mphim/what-is.png" />
                                <p>
                                    {{ __('translate.what-is') }}
                                </p>
                            </a> -->
                            </li>
                            <li class="item">
                                <a id="what-does-tab" data-toggle="tab" href="#what-does-text" role="tab" aria-controls="what-does-text"
                                    aria-selected="true">
                                    <img src="{{ asset('img/home/mphim/what-does.png') }}" alt="img/home/mphim/what-does.png " />
                                    <p>
                                        {{ __('translate.what-does-it-do') }}
                                    </p>
                                </a>
                            </li>
                            <li class="item">
                                <a id="why-to-tab" data-toggle="tab" href="#why-to-text" role="tab" aria-controls="why-to-text"
                                    aria-selected="true">
                                    <img src="{{ asset('img/home/mphim/why-to.png') }}" alt="img/home/mphim/why-to.png " />
                                    <p>
                                        {{ __('translate.why-to-have') }}
                                    </p>
                                </a>
                            </li>
                            <li class="item">
                                <a class="active" id="roadmap-tab" data-toggle="tab" href="#roadmap-text" role="tab"
                                    aria-controls="roadmap-text" aria-selected="true">
                                    <img src="{{ asset('img/home/mphim/roadmap.png') }}" alt="img/home/mphim/radmap.png " />
                                    <p>
                                        {{ __('translate.roadmap') }}
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="customers" class="pt-5">
    <div class="container">
        <p class="home-heading text-center">
            Customers
        </p>
        <div class="row">
            <div class="col-md-4 text-center pb-4">
                <div class="item text-center">
                    <a href="{{ route('customers') . '#companies' }}">
                        <h6 class="text-uppercase mb-3">
                            {{ __('translate.companies') }}
                        </h6>
                        <img src="{{ asset('img/home/customers/companies.png')}}" alt="img/home/customers/companies.png"
                            class="mb-3" />
                        <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took
                            a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center pb-4">
                <div class="item text-center">
                    <a href="{{ route('customers') . '#professionals' }}">
                        <h6 class="text-uppercase mb-3">
                            {{ __('translate.professionals') }}
                        </h6>
                        <img src="{{ asset('img/home/customers/professionals.png')}}" alt="img/home/customers/professionals.png"
                            class="mb-3" />
                        <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took
                            a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center pb-4">
                <div class="item text-center">
                    <a href="{{ route('customers') . '#trade' }}">
                        <h6 class="text-uppercase mb-3">
                            {{ __('translate.trade-associations') }}
                        </h6>
                        <img src="{{ asset('img/home/customers/trade.png')}}" alt="img/home/customers/trade.png" class="mb-3" />
                        <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took
                            a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="item text-center">
                    <a href="{{ route('customers') . '#public' }}">
                        <h6 class="text-uppercase mb-3">
                            {{ __('translate.public-institutions') }}
                        </h6>
                        <img src="{{ asset('img/home/customers/public.png')}}" alt="img/home/customers/public.png"
                            class="mb-3" />
                        <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took
                            a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="item text-center">
                    <a href="{{ route('customers') . '#school' }}">
                        <h6 class="text-uppercase mb-3">
                            {{ __('translate.schools') }}
                        </h6>
                        <img src="{{ asset('img/home/customers/school.png')}}" alt="img/home/customers/school.png"
                            class="mb-3" />
                        <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took
                            a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="item text-center">
                    <a href="{{ route('customers') . '#university' }}">
                        <h6 class="text-uppercase mb-3">
                            {{ __('translate.university') }}
                        </h6>
                        <img src="{{ asset('img/home/customers/university.png')}}" alt="img/home/customers/university.png"
                            class="mb-3" />
                        <p class="m-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took
                            a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="academy" class="pt-5">
    <div class="container">
        <p class="home-heading text-center">
            Academy
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
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4company') }}"?
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
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4agent')
                            }}"?
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
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4advisor') }}"?
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
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4manager') }}"?
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
<!-- <div id="about" class="pt-5">
    <div class="container-fluid">
		<p class="home-heading text-center">
			About
		</p>
        <div class="row">
            <div class="col-md-6 pl-0">
                <div class="student-image">
                    <img src="{{ asset('img/home/about/student-1.jpg') }}" alt="img/home/about/student-1.jpg" />
                </div>
            </div>
            <div class="col-md-6">
				<div class="col-md-10">
					<h1 class="pt-4">About Mphim+</h1>
					<div id="counter">
						<div class="d-flex">
							<div class="flex-fill">
								<div class="item">
									<span class="counter-value" data-count="76">
										{{ $students->number }}
									</span>
									<span class="value">
										{{ $students->mark }}
									</span>
								</div>
								<h6>
									Students Learning
								</h6>
							</div>
							<div class="flex-fill">
								<div class="item">
									<span class="counter-value" data-count="80">
										{{ $courses->number }}
									</span>
									<span class="value">
										{{ $courses->mark }}
									</span>
								</div>
								<h6>
									Active Courses
								</h6>
							</div>
							<div class="flex-fill">
								<div class="item">
									<span class="counter-value" data-count="990">
										{{ $instructors->number }}
									</span>
									<span class="value">
										{{ $instructors->mark }}
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
        </div>
        <div class="row">
            <div class="col-md-6 text-right">
				<div class="col-md-10 offset-2">
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
            </div>
            <div class="col-md-6 pr-0">
                <div class="student-image-second">
                    <img src="{{ asset('img/home/about/student-2.jpg') }}" alt="img/home/about/student-2.jpg" />
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection

@section('scripts')
<script src="{{ asset('js/counter.js') }}"></script>
@endsection