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
					<a href="{{ route('home') }}" class="active">
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
                            <a href="{{ route('mphim.whatIs') }}">
								What is
							</a>
						</li>
						<li>
                            <a href="{{ route('mphim.whatDoes') }}">
								What does it do
							</a>
						</li>
						<li>
                            <a href="{{ route('mphim.whyTo') }}">
								Why to have it
							</a>
						</li>
						<li>
                            <a href="{{ route('mphim.roadmap') }}">
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
                            <a href="{{ route('customers.companies') }}">
								Companies
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.pro') }}">
								Professionals
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.tradeAssoc') }}">
								Trade associations
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.publicInsti') }}">
								Public institutions
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.schools') }}">
								Schools
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.university') }}">
								University
							</a>
						</li>
                    </ul>
                </li>
                <li>
					<a href="{{ route('versions') }}">
						Versions
					</a>
                </li>
				<li>
					<a href="{{ route('commercial') }}">
						Commercial
					</a>
                </li>
                <li>
					<a href="{{ route('reference') }}">
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
							<a href="{{ route('academy.company') }}">
								Training4Company
							</a>
						</li>
						<li>
							<a href="{{ route('academy.agent') }}">
								Training4Agent
							</a>
						</li>
						<li>
							<a href="{{ route('academy.advisior') }}">
								Training4Advisor
							</a>
						</li>
						<li>
							<a href="{{ route('academy.manager') }}">
								Training4Manager
							</a>
						</li>
                    </ul>
                </li>
				<li>
					<a href="{{ route('contact') }}">
						{{ __('translate.contact') }}
					</a>
                </li>
            </ul>
        </div>
    </header>
</div>