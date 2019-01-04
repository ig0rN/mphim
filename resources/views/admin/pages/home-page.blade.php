@extends('admin.layouts.master')

@section('main')


<h1>Home Page</h1>
<hr>

@include('admin.flash')
<form class="admin-form" action="{{ route('admin.home-page.update', $content->id) }}" method="POST">
    @csrf
	<div class="row">
		<div class="col-md-6 col-lg-3">
			<label for="header">Header - EN</label>
			<input type="text" name="header_en" value="{{ $content->header_en }}" />
		</div>
		<div class="col-md-6 col-lg-3">
			<label for="header">Header - DE</label>
			<input type="text" name="header_de" value="{{ $content->header_de }}" />
		</div>
		<div class="col-md-6 col-lg-3">
			<label for="header">Header - FR</label>
			<input type="text" name="header_fr" value="{{ $content->header_fr }}" />
		</div>
		<div class="col-md-6 col-lg-3">
			<label for="header">Header - IT</label>
			<input type="text" name="header_it" value="{{ $content->header_it }}" />
		</div>
		<div class="col-md-6 col-lg-3">
			<label for="header">Header - RS</label>
			<input type="text" name="header_rs" value="{{ $content->header_rs }}" />
		</div>
	</div>
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
</form>

<form class="admin-form" action="{{ route('admin.home-page.updateNum') }}" method="POST">
    @csrf
	<div class="row">
		<div class="col-md-6 col-lg-3">
			<label for="header">Students Learning</label>
			<input type="number" min=0 name="students[number]" value="{{ $students->number }}" />
			<label for="header">Mark</label>
			<input type="text" name="students[mark]" value="{{ $students->mark }}" />
		</div>
		<div class="col-md-6 col-lg-3">
			<label for="header">Active Courses</label>
			<input type="number" min=0 name="courses[number]" value="{{ $courses->number }}" />
			<label for="header">Mark</label>
			<input type="text" name="courses[mark]" value="{{ $courses->mark }}" />
		</div>
		<div class="col-md-6 col-lg-3">
			<label for="header">Instructors online</label>
			<input type="number" min=0 name="instructors[number]" value="{{ $instructors->number }}" />
			<label for="header">Mark</label>
			<input type="text" name="instructors[mark]" value="{{ $instructors->mark }}" />
		</div>
	</div>
	<input class="btn-submit" type="submit" value="Change content" />
</form>

@include('admin.errors')

@endsection

@section('scripts')
	@include('admin.tinymce')
@endsection