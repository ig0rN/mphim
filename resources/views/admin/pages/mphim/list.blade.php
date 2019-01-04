@extends('admin.layouts.master')

@section('main')

<h1>Mphim</h1>
<hr>

@include('admin.flash')
{{-- <div class="mb-3">
    <a href="{{ route('admin.customers.create') }}" class="btn btn-success">Create New Partner</a>
</div> --}}
	@if($texts->count())
		<ol>
			@foreach ($texts as $text)
				<li>
					<a href="{{ route('admin.mphim.edit', $text->id) }}">{{ $text->name }}</a>
				</li>
			@endforeach
		</ol>
	@else
		<p>No texts</p>
	@endif
@endsection