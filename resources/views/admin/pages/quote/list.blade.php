@extends('admin.layouts.master')

@section('main')

<h1>Quotes</h1>
<hr>

@include('admin.flash')
<div class="mb-3">
    <a href="{{ route('admin.quote.create') }}" class="btn btn-success">Create New Quote</a>
</div>
	@if($quotes->count())
		<ol>
			@foreach ($quotes as $quote)
				<li>
					<a href="{{ route('admin.quote.edit', $quote->id) }}">{{ $quote->title }}</a>
				</li>
			@endforeach
		</ol>
	@else
		<p>0 Quotes Available</p>
	@endif
@endsection