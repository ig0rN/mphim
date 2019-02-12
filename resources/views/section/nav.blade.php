<header id="header">
    <div class="container">
        <div id="heightTop">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" title="Facebook" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="javascript:void(0)" title="Instagram" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li> -->
                            <li>
                                <a href="https://www.youtube.com/channel/UC-PQxG_nVx94k52tkVVz4yA" title="YouTube"
                                    target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="https://plus.google.com/u/0/102086562772088987394?hl=sr" title="Google+"
                                    target="_blank">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 offset-4 text-right">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-10">
                            <div class="login">
                                <img src="{{ asset('img/logo.png') }}" alt="img/logo.png" />
                                <a href="https://app.mphimplus.com/signin" class="btn btn-login" target="_blank">
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
                <div class="row align-items-center">
                    <div class="col-md-2 pr-0">
                        <div class="logo-header">
                            <img src="{{ asset('img/logo.png') }}" alt="img/logo.png" />
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="owl-carousel">
                            <div>
                                <p>
                                    "Lorem ipsum 1"
                                </p>
                            </div>
                            <div>
                                <p>
                                    "Lorem ipsum 2"
                                </p>
                            </div>
                            <div>
                                <p>
                                    "Lorem ipsum 3"
                                </p>
                            </div>
                            <div>
                                <p>
                                    "Lorem ipsum 4"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="nav">
            <div class="container p-0">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ activeClassBasedOnRoute('home') }}">
                            {{ __('translate.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mphim') }}" class="mphim {{ activeClassBasedOnRouteSegment('mphim') }}">
                            Mphim+
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="nav dropdown">
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('mphim', '#what-is') }}" class="nav-link">
                                    {{ __('translate.what-is') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('mphim', '#what-does') }}" class="nav-link">
                                    {{ __('translate.what-does-it-do') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('mphim', '#why-to') }}" class="nav-link">
                                    {{ __('translate.why-to-have') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('mphim', '#roadmap') }}" class="nav-link">
                                    {{ __('translate.roadmap') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('customers') }}" class="{{ activeClassBasedOnRouteSegment('customers') }}">
                            {{ __('translate.customers') }}
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="nav dropdown customers">
                            <h5 class="text-center">
                                {{ __('translate.who-can-use-it') }}
                            </h5>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('customers', '#companies') }}" class="nav-link">
                                    {{ __('translate.companies') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('customers', '#professionals') }}" class="nav-link">
                                    {{ __('translate.professionals') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('customers', '#trade') }}" class="nav-link">
                                    {{ __('translate.trade-associations') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('customers', '#public') }}" class="nav-link">
                                    {{ __('translate.public-institutions') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('customers', '#schools') }}" class="nav-link">
                                    {{ __('translate.schools') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ routeOrAnchor('customers', '#university') }}" class="nav-link">
                                    {{ __('translate.university') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('versions') }}" class="{{ activeClassBasedOnRoute('versions') }}">
                            {{ __('translate.versions') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('commercial') }}" class="{{ activeClassBasedOnRoute('commercial') }}">
                            {{ __('translate.commercial') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('reference') }}" class="{{ activeClassBasedOnRoute('reference') }}">
                            {{ __('translate.reference') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('academy') }}" class="{{ activeClassBasedOnRouteSegment('academy') }}">
                            {{ __('translate.academy') }}
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="dropdown">
                            <li>
                                <a href="{{ route('academy.company') }}" class="{{ activeClassBasedOnRoute('academy.company') }}">
                                    {{ __('translate.training4company') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('academy.agent') }}" class="{{ activeClassBasedOnRoute('academy.agent') }}">
                                    {{ __('translate.training4agent') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('academy.advisor') }}" class="{{ activeClassBasedOnRoute('academy.advisor') }}">
                                    {{ __('translate.training4advisor') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('academy.manager') }}" class="{{ activeClassBasedOnRoute('academy.manager') }}">
                                    {{ __('translate.training4manager') }}
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
    </div>
</header>