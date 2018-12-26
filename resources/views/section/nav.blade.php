<header id="header">
	<div class="container">
		<div class="row no-gutters align-items-center">
			<div class="col-md-4">
				<div class="social">
					<ul>
						<li>
							<a href="javascript:void(0)" title="Facebook" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)" title="Instagram" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UC-PQxG_nVx94k52tkVVz4yA" title="YouTube" target="_blank">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/u/0/102086562772088987394?hl=sr" title="Google+" target="_blank">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 offset-4 text-right">
				<div class="row no-gutters align-items-center">
					<div class="col-md-10">
						<div class="login">
							<img src="{{ asset('img/logo.png') }}" alt="img/logo.png" />
							<a href="javascript:void(0)" class="btn btn-login" target="_blank">
								Login
							</a>
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
		<div id="logo-slider">
			<div class="row no-gutters align-items-center">
				<div class="col-md-2">
					<div class="logo-header">
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
					<a href="{{ route('home') }}" class="{{ activeClassBasedOnRoute('home') }}">
						{{ __('translate.home') }}
					</a>
                </li>
                <li>
                    <a class="mphim {{ activeClassBasedOnRouteSegment('mphim') }}">
						Mphim+
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="dropdown">
                        <li>
                            <a href="{{ route('mphim.whatIs') }}" class="{{ activeClassBasedOnRoute('mphim.whatIs') }}">
								What is
							</a>
						</li>
						<li>
                            <a href="{{ route('mphim.whatDoes') }}" class="{{ activeClassBasedOnRoute('mphim.whatDoes') }}">
								What does it do
							</a>
						</li>
						<li>
                            <a href="{{ route('mphim.whyTo') }}" class="{{ activeClassBasedOnRoute('mphim.whyTo') }}">
								Why to have it
							</a>
						</li>
						<li>
                            <a href="{{ route('mphim.roadmap') }}" class="{{ activeClassBasedOnRoute('mphim.roadmap') }}">
								Roadmap
							</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="{{ activeClassBasedOnRouteSegment('customers') }}">
						Customers
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="dropdown">
						<h5 class="text-center">
							Who can use it
						</h5>
                        <li>
                            <a href="{{ route('customers.companies') }}" class="{{ activeClassBasedOnRoute('customers.companies') }}">
								Companies
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.pro') }}" class="{{ activeClassBasedOnRoute('customers.pro') }}">
								Professionals
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.tradeAssoc') }}" class="{{ activeClassBasedOnRoute('customers.tradeAssoc') }}">
								Trade associations
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.publicInsti') }}" class="{{ activeClassBasedOnRoute('customers.publicInsti') }}">
								Public institutions
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.schools') }}" class="{{ activeClassBasedOnRoute('customers.schools') }}">
								Schools
							</a>
						</li>
						<li>
                            <a href="{{ route('customers.university') }}" class="{{ activeClassBasedOnRoute('customers.university') }}">
								University
							</a>
						</li>
                    </ul>
                </li>
                <li>
					<a href="{{ route('versions') }}" class="{{ activeClassBasedOnRoute('versions') }}">
						Versions
					</a>
                </li>
				<li>
					<a href="{{ route('commercial') }}" class="{{ activeClassBasedOnRoute('commercial') }}">
						Commercial
					</a>
                </li>
                <li>
					<a href="{{ route('reference') }}" class="{{ activeClassBasedOnRoute('reference') }}">
						Reference
					</a>
                </li>
				<li>
                    <a class="{{ activeClassBasedOnRouteSegment('academy') }}">
						Academy
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="dropdown">
                        <li>
							<a href="{{ route('academy.company') }}" class="{{ activeClassBasedOnRoute('academy.company') }}">
								Training4Company
							</a>
						</li>
						<li>
							<a href="{{ route('academy.agent') }}" class="{{ activeClassBasedOnRoute('academy.agent') }}">
								Training4Agent
							</a>
						</li>
						<li>
							<a href="{{ route('academy.advisior') }}" class="{{ activeClassBasedOnRoute('academy.advisior') }}">
								Training4Advisor
							</a>
						</li>
						<li>
							<a href="{{ route('academy.manager') }}" class="{{ activeClassBasedOnRoute('academy.manager') }}">
								Training4Manager
							</a>
						</li>
                    </ul>
                </li>
				<li>
					<a href="{{ route('contact') }}" class="{{ activeClassBasedOnRoute('contact') }}">
						{{ __('translate.contact') }}
					</a>
                </li>
            </ul>
        </div>
	</div>
</header>