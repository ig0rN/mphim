@extends('master')

@section('title', 'Home')

@section('content')
<div class="container">
	<div class="row py-5">
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
						<ion-icon name="barcode"></ion-icon>
						<p>
							What is
						</p>
					</div>
					<div class="item">
						<ion-icon name="bookmarks"></ion-icon>
						<p>
							What does it do
						</p>
					</div>
					<div class="item">
						<ion-icon name="logo-buffer"></ion-icon>
						<p>
							Why to have it
						</p>
					</div>
					<div class="item">
						<i class="far fa-lightbulb"></i>
						<p>
							Roadmap
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="about" class="pb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 pl-0">
                <div class="student-image">
                    <img src="{{ asset('img/about/student-1.jpg') }}" alt="img/about/student-1.jpg" />
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
                    <img src="{{ asset('img/about/student-2.jpg') }}" alt="img/about/student-2.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>
<div id="academy">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="training">
                    <div class="image">
                        <img src="{{ asset('img/training/company.jpg') }}" alt="img/training/company.jpg" />
                    </div>
                    <div class="overlay bg-primary">
                        <h6>
                            Training4Company
                        </h6>
                        <p>
                            Do you want to find out more about "Training4Company"?
                        </p>
                        <a href="{{ route('academy.company') }}" class="btn btn-training">
                            Access the training
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="training">
                    <div class="image">
                        <img src="{{ asset('img/training/agent.jpg') }}" alt="img/training/agent.jpg" />
                    </div>
                    <div class="overlay bg-danger">
                        <h6>
                            Training4Agent
                        </h6>
                        <p>
                            Do you want to find out more about "Training4Agent"?
                        </p>
                        <a href="{{ route('academy.agent') }}" class="btn btn-training">
                            Access the training
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="training">
                    <div class="image">
                        <img src="{{ asset('img/training/advisor.jpg') }}" alt="img/training/advisor.jpg" />
                    </div>
                    <div class="overlay bg-warning">
                        <h6>
                            Training4Advisor
                        </h6>
                        <p>
                            Do you want to find out more about "Training4Advisor"?
                        </p>
                        <a href="{{ route('academy.advisior') }}" class="btn btn-training">
                            Access the training
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="training">
                    <div class="image">
                        <img src="{{ asset('img/training/manager.jpg') }}" alt="img/training/manager.jpg" />
                    </div>
                    <div class="overlay bg-info">
                        <h6>
                            Training4Manager
                        </h6>
                        <p>
                            Do you want to find out more about "Training4Manager"?
                        </p>
                        <a href="{{ route('academy.manager') }}" class="btn btn-training">
                            Access the training
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection