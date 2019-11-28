<div class="container">
    <div id="footer-nav">
        <ul class="d-flex">
            <li class="flex-fill">
                <a href="javascript:void(0)" class="heading">
                    @lang('translate.home')
                </a>
            </li>
            <li class="flex-fill">
                <a href="javascript:void(0)" class="heading">
                    Mphim+
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.what-is')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.what-does-it-do')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.why-to-have')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.roadmap')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="javascript:void(0)" class="heading">
                    @lang('translate.customers')
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.companies')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.professionals')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.trade-associations')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.public-institutions')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.schools')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.university')
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex-fill">
                <a href="javascript:void(0)" class="heading">
                    @lang('translate.versions')
                </a>
            </li>
            <li class="flex-fill">
                <a href="javascript:void(0)" class="heading">
                    @lang('translate.commercial')
                </a>
            </li>
            <li class="flex-fill">
                <a href="javascript:void(0)" class="heading">
                    @lang('translate.reference')
                </a>
            </li>
            <li class="flex-fill">
                <a href="javascript:void(0)" class="heading">
                    @lang('translate.academy')
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.training4company')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.training4agent')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.training4advisor')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            @lang('translate.training4manager')
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
                <a href="https://www.youtube.com/channel/UC-PQxG_nVx94k52tkVVz4yA" title="YouTube" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" title="LinkedIn" target="_blank">
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
<div class="copyright">
    <div class="container">
        © {{ __('translate.copyright') }} 2019 <b>MPHIM+</b>. {{
        __('translate.rights-reserved') }}
    </div>
</div>