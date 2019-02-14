@extends('admin.layouts.master')

@section('main')

@include('admin.flash')

<form class="admin-form" action="{{ route('admin.quote.store') }}" method="POST">
    @csrf
    
	<div class="row">
		<div class="col-md-6 mb-3">
            <label for="body">Quote Name</label>
            <input type="text" name="title">
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Quote</label>
			<textarea name="text"></textarea>
		</div>
	</div>
	<input class="btn-submit" type="submit" value="Save" />

    @include('admin.errors')
</form>


@endsection