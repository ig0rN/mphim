@extends('admin.layouts.master')

@section('main')

@include('admin.flash')

<form class="admin-form" action="{{ route('admin.quote.update', $quote->id) }}" method="POST">
    @csrf

	<div class="row">
		<div class="col-md-6 mb-3">
            <label for="body">Quote Name</label>
            <input type="text" name="title" value="{{ $quote->title }}">
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Quote</label>
			<textarea name="text">{{ $quote->text }}</textarea>
		</div>
	</div>
	<input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>

<form method="POST" action="{{ route('admin.quote.destroy', $quote->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">I want to DELETE this Quote!</button>
</form>


@endsection