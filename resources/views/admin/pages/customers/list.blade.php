@extends('admin.layouts.master')

@section('main')

<h1>Customers</h1>
<hr>

@include('admin.flash')
{{-- <div class="mb-3">
    <a href="{{ route('admin.customers.create') }}" class="btn btn-success">Create New Partner</a>
</div> --}}
	@if($customers->count())
		<ol>
			@foreach ($customers as $customer)
				<li>
					<a href="{{ route('admin.customers.edit', $customer->id) }}">{{ $customer->name }}</a>
				</li>
			@endforeach
		</ol>
	@else
		<p>No customers</p>
	@endif
@endsection