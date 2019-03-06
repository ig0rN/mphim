@extends('admin.layouts.master')

@section('main')


<h1>Home Page</h1>
<hr>

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.home.update', $content->id) }}" method="POST">
    @csrf
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="body">Description - EN</label>
			<textarea name="body_en">{!! $content->body_en !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - DE</label>
			<textarea name="body_de">{!! $content->body_de !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - FR</label>
			<textarea name="body_fr">{!! $content->body_fr !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - IT</label>
			<textarea name="body_it">{!! $content->body_it !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - RS</label>
			<textarea name="body_rs">{!! $content->body_rs !!}</textarea>
		</div>
	</div>
	<input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>

@endsection

@section('scripts')
	@include('admin.tinymce')
@endsection