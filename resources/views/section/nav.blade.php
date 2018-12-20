<div class="container">
    <header id="header">
		<div class="row no-gutters align-items-center">
			<div class="col-md-6">
				<div class="social">
					<ul>
						<li>
							<a href="javascript:void(0)" title="Facebook">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)" title="Instagram">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)" title="YouTube">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)" title="Google+">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 text-right">
				<div class="username-password">
					<div class="row align-items-center">
						<div class="col-md-5 pr-0">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<ion-icon name="person"></ion-icon>
									</span>
								</div>
								<input type="email" class="form-control" placeholder="Username" aria-label="Username">
							</div>
						</div>
						<div class="col-md-5 pr-0">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<ion-icon name="lock"></ion-icon>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Password" aria-label="Password">
							</div>
						</div>
						<div class="col-md-2">
							<div class="language">
								<ul>
									<li>
										<a href="javascript:void(0)">
											{{ config()->get('app.locale') }}
										</a>
										<ul class="dropdown">
											<li>
												<a href="{{ disableHrefIfActive('it') }}" class="{{ giveActiveClass('it') }}">
													It
												</a>
											</li>
											<li>
												<a href="{{ disableHrefIfActive('en') }}" class="{{ giveActiveClass('en') }}">
													En
												</a>
											</li>
											<li>
												<a href="{{ disableHrefIfActive('de') }}" class="{{ giveActiveClass('de') }}">
													De
												</a>
											</li>
											<li>
												<a href="{{ disableHrefIfActive('fr') }}" class="{{ giveActiveClass('fr') }}">
													Fr
												</a>
											</li>
											<li>
												<a href="{{ disableHrefIfActive('rs') }}" class="{{ giveActiveClass('rs') }}">
													Rs
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="logo-slider">
			<div class="row no-gutters align-items-center">
				<div class="col-md-2">
					<div class="logo">
						<img src="{{ asset('img/logo.png') }}" alt="img/logo.png" />
					</div>
				</div>
				<div class="col-md-10">
					<div class="owl-carousel">
						<div>
							<img src="{{ asset('img/slider/1.jpg') }}" alt="img/slider/1.jpg" />
						</div>
						<div>
							<img src="{{ asset('img/slider/2.jpg') }}" alt="img/slider/2.jpg" />
						</div>
						<div>
							<img src="{{ asset('img/slider/3.jpg') }}" alt="img/slider/3.jpg" />
						</div>
						<div>
							<img src="{{ asset('img/slider/4.jpg') }}" alt="img/slider/4.jpg" />
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="nav">
            <ul>
                <li>
                    <a class="active">
						{{ __('translate.home') }}
					</a>
                </li>
                <li>
                    <a class="mphim">
						Mphim+
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="dropdown">
                        <li>
                            <a>
								What is
							</a>
						</li>
						<li>
                            <a>
								What does it do
							</a>
						</li>
						<li>
                            <a>
								Why to have it
							</a>
						</li>
						<li>
                            <a>
								Roadmap
							</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>
						Customers
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="dropdown">
						<h5 class="text-center">
							Who can use it
						</h5>
                        <li>
                            <a>
								Companies
							</a>
						</li>
						<li>
                            <a>
								Professionals
							</a>
						</li>
						<li>
                            <a>
								Trade associations
							</a>
						</li>
						<li>
                            <a>
								Public institutions
							</a>
						</li>
						<li>
                            <a>
								Schools
							</a>
						</li>
						<li>
                            <a>
								University
							</a>
						</li>
                    </ul>
                </li>
                <li>
                    <a>
						Versions
					</a>
                </li>
				<li>
                    <a>
						Commercial
					</a>
                </li>
                <li>
                    <a>
						Reference
					</a>
                </li>
				<li>
                    <a>
						Accademy
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="dropdown">
                        <li>
                            <a>
								Training4Company
							</a>
						</li>
						<li>
                            <a>
								Training4Agent
							</a>
						</li>
						<li>
                            <a>
								Training4Advisor
							</a>
						</li>
						<li>
                            <a>
								Training4Manager
							</a>
						</li>
                    </ul>
                </li>
				<li>
                    <a>
						{{ __('translate.contact') }}
					</a>
                </li>
            </ul>
        </div>
    </header>
</div>
<div id="content">
	<div id="discover">
		<div class="container">
			<div class="row">
				<div class="col-md-2 offset-md-10">
					<div class="discover">
						<div class="item">
							<ion-icon name="barcode"></ion-icon>
							<p>
								Learn From The<br />
								Experts
							</p>
						</div>
						<div class="item">
							<ion-icon name="bookmarks"></ion-icon>
							<p>
								Book Library &amp;<br />
								Store
							</p>
						</div>
						<div class="item">
							<ion-icon name="logo-buffer"></ion-icon>
							<p>
								Learn Anything<br />
								Online
							</p>
						</div>
						<div class="item">
							<i class="far fa-lightbulb"></i>
							<p>
								Best Industry<br />
								Leaders
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
	<div id="accademy">
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
							<button class="btn btn-training">
								Access the training
							</button>
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
							<button class="btn btn-training">
								Access the training
							</button>
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
							<button class="btn btn-training">
								Access the training
							</button>
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
							<button class="btn btn-training">
								Access the training
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>