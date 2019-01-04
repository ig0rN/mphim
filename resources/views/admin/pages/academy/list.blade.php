@extends('admin.layouts.master')

@section('main')

<h1>Academy</h1>
<hr>

@include('admin.flash')
{{-- <div class="mb-3">
    <a href="{{ route('admin.customers.create') }}" class="btn btn-success">Create New Partner</a>
</div> --}}
	@if($academies->count())
		<ol>
			@foreach ($academies as $academy)
				<li>
					<a href="{{ route('admin.academy.edit', $academy->id) }}">{{ $academy->name }}</a>
				</li>
			@endforeach
		</ol>
	@else
		<p>No text for Academies</p>
	@endif
@endsection