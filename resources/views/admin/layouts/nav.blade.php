<ul id="admin-nav">
	<h5>Dashboard</h5>
	<li>
		<a href="{{ route('admin.home') }}">Home</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'home-page' ? "class=active" : '' }} href="{{ route('admin.home-page') }}">Home<span>page</span></a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'mphim' ? "class=active" : '' }} href="{{ route('admin.mphim') }}">Mphim</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'mission-vision' ? "class=active" : '' }} href="{{ route('admin.customers') }}">Customers</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'versions' ? "class=active" : '' }} href="{{ route('admin.versions') }}">Versions</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'commercial' ? "class=active" : '' }} href="{{ route('admin.commercial') }}">Commercial</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'reference' ? "class=active" : '' }} href="{{ route('admin.reference') }}">Reference</a>
	</li>
	{{-- <li>
		<a {{ Request::segment(2) == 'partners' ? "class=active" : '' }} href="{{ route('admin.partners') }}">Partners</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'newsletter' ? "class=active" : '' }} href="{{ route('admin.newsletter') }}">Newsletters</a>
	</li>
	<div class="divider"></div>
	<li>
		<a {{ Request::segment(2) == 'change-password' ? "class=active" : '' }} href="{{ route('admin.changePass') }}">Change<span>password</span></a>
	</li> --}}
	<li>
		<a href="{{ route('logout') }}">Logout</a>
	</li>
</ul>