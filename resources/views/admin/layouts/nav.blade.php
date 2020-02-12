<ul id="admin-nav">
	<h5>
		<a href="{{ route('admin.dashboard')  }}">Dashboard</a>
	</h5>
	<li>
		<a {{ Request::segment(2) == 'home' ? "class=active" : '' }} href="{{ route('admin.home') }}">Home Page</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'quotes' ? "class=active" : '' }} href="{{ route('admin.quotes') }}">Home<span>page</span><span>Quotes</span></a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'mphim' ? "class=active" : '' }} href="{{ route('admin.mphim') }}">Mphim</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'roadmap' ? "class=active" : '' }} href="{{ route('admin.roadmap.index') }}">RoadMap</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'customers' ? "class=active" : '' }} href="{{ route('admin.customers') }}">Customers</a>
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
	<li>
		<a {{ Request::segment(2) == 'press' ? "class=active" : '' }} href="{{ route('admin.press') }}">Press</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'academy' ? "class=active" : '' }} href="{{ route('admin.academy') }}">Academy</a>
	</li>
	<li>
		<a {{ Request::segment(2) == 'privacy-policy' ? "class=active" : '' }} href="{{ route('admin.privacy-policy') }}">Privacy Policy</a>
	</li>
	<div class="divider"></div>
	{{-- <li>
		<a {{ Request::segment(2) == 'change-password' ? "class=active" : '' }} href="{{ route('admin.changePass') }}">Change<span>password</span></a>
	</li> --}}
	<li>
		<a href="{{ route('logout') }}">Logout</a>
	</li>
</ul>