@extends('admin.layouts.master')

@section('main')

@include('admin.flash')

<form class="admin-form" action="{{ route('admin.academy.update', $academy->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

	<div class="admin-edit">
		<label for="name">Academy:</label>
		<input type="text" value="{{ $academy->name }}" disabled/>
    </div>
    
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="body">Description - EN</label>
			<textarea name="body_en">{!! $academy->body_en !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - DE</label>
			<textarea name="body_de">{!! $academy->body_de !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - FR</label>
			<textarea name="body_fr">{!! $academy->body_fr !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - IT</label>
			<textarea name="body_it">{!! $academy->body_it !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - RS</label>
			<textarea name="body_rs">{!! $academy->body_rs !!}</textarea>
		</div>
	</div>
	<input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>

{{-- <form method="POST" action="{{ route('admin.customers.destroy', $customer->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">I want to DELETE this Partner!</button>
</form> --}}


@endsection

@section('scripts')
    @include('admin.tinymce')
@endsection