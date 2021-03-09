<div class="container">
    <div id="footer-nav">
        <ul class="d-flex">
            <li class="flex-fill">
                <a href="{{ route('home') }}" class="heading">
                    @lang('translate.home')
                </a>
            </li>
            <li class="flex-fill">
                <a href="{{ route('mphim') }}" class="heading">
                    Mphim+
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ routeOrAnchor('mphim', '#what-is') }}">
                            @lang('translate.what-is')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('mphim', '#what-does') }}">
                            @lang('translate.what-does-it-do')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('mphim', '#why-to') }}">
                            @lang('translate.why-to-have')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="{{ route('customers') }}" class="heading">
                    @lang('translate.who-can-use-it')
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ routeOrAnchor('customers', '#companies') }}">
                            @lang('translate.companies')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('customers', '#professionals') }}">
                            @lang('translate.professionals')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('customers', '#trade') }}">
                            @lang('translate.trade-associations')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('customers', '#public') }}">
                            @lang('translate.public-institutions')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('customers', '#banks') }}">
                            @lang('translate.banks')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('customers', '#schools') }}">
                            @lang('translate.schools')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('customers', '#university') }}">
                            @lang('translate.university')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="{{ route('versions') }}" class="heading">
                    @lang('translate.versions')
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ routeOrAnchor('versions', '#business') }}">
                            @lang('translate.business')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('versions', '#axess') }}">
                            @lang('translate.axess')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="{{ route('reference') }}" class="heading">
                    @lang('translate.reference')
                </a>

                <ul class="dropdown">
                    <li>
                        <a href="{{ routeOrAnchor('reference', '#partners') }}">
                            @lang('translate.partners')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('reference', '#institutions') }}">
                            @lang('translate.institutions')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('reference', '#universities') }}">
                            @lang('translate.universities')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('reference', '#high_schools') }}">
                            @lang('translate.high_schools')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('reference', '#companies') }}">
                            @lang('translate.companies')
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeOrAnchor('reference', '#professional_officies') }}">
                            @lang('translate.professional_officies')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="{{ route('academy') }}" class="heading">
                    @lang('translate.academy')
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ route('academy.company') }}">
                            @lang('translate.training4company')
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('academy.agent') }}">
                            @lang('translate.training4agent')
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('academy.advisor') }}">
                            @lang('translate.training4advisor')
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('academy.manager') }}">
                            @lang('translate.training4manager')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="{{ route('press') }}" class="heading">
                    @lang('translate.press')
                </a>
            </li>
            <li class="flex-fill">
                <a href="{{ route('management') }}" class="heading">
                    {{ __('translate.management') }}
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ route('commercial') }}">
                            @lang('translate.commercial')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="{{ route('contact') }}" class="heading">
                    @lang('translate.contact')
                </a>
            </li>
        </ul>
    </div>
    <div class="social text-right">
        <ul>
            <li>
                <a href="https://www.facebook.com/mphimplus/" title="Facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <!-- <li>
				<a href="#" title="Instagram" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</li> -->
            <li>
                <a href="https://www.youtube.com/channel/UCZEDo7CM-Ad_VVDRiWGqnLw" title="YouTube" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li>
                <a href="https://it.linkedin.com/company/mphimplus" title="LinkedIn" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
            <!-- <li>
				<a href="https://plus.google.com/u/0/102086562772088987394?hl=sr" title="Google+" target="_blank">
					<i class="fab fa-google-plus-g"></i>
				</a>
			</li> -->
        </ul>
    </div>
</div>
<div class="copyright clearfix">
    <div class="container">
        <span class="float-left">
            © {{ __('translate.copyright') }} {{ Carbon\Carbon::now()->year }} <b>MPHIM+</b>. {{
            __('translate.rights-reserved') }}
        </span>
        <a href="{{ route('privacy-policy') }}" class="float-right">@lang('translate.privacy-policy')</a>
    </div>
</div>