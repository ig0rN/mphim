@extends('admin.layouts.master')

@section('main')


<h1>Dasboard</h1>
<hr>

<ul id="admin-home">
	<li>
		<a href="{{ route('admin.home') }}">Home Page</a>
	</li>
	<li>
		<a href="{{ route('admin.quotes') }}">Home Page Quotes</a>
	</li>
	<li>
		<a href="{{ route('admin.mphim') }}">Mphim</a>
	</li>
	<li>
		<a href="{{ route('admin.customers') }}">Customers</a>
	</li>
	<li>
		<a href="{{ route('admin.versions') }}">Versions</a>
	</li>
	<li>
		<a href="{{ route('admin.commercial') }}">Commercial</a>
	</li>
	<li>
		<a href="{{ route('admin.reference') }}">Reference</a>
	</li>
	<li>
		<a href="{{ route('admin.academy') }}">Academy</a>
	</li>
</ul>
<ul id="buttons">
	{{-- <li>
		<i class="fas fa-key"></i>
		<a href="{{ route('admin.changePass') }}">Change Password</a>
	</li> --}}
	<li>
		<i class="fas fa-sign-out-alt"></i>
		<a href="{{ route('logout') }}">Logout</a>
	</li>
</ul>
@endsection

{{-- @section('scripts')
	<script type="text/javascript" src="{{ asset('js/all.min.js') }}"></script>
@endsection --}}