@extends('admin.layouts.master')

@section('styles')
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@stop

@section('main')

@include('admin.flash')

<form class="admin-form" action="{{ route('admin.roadmap.update', ['id' => $roadmap->id]) }}" method="POST">
    @csrf
    @method('PUT')

	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="datepicker">Date:</label>
			<input type="text" name="date" value="{{ old('date') ? old('date') : $roadmap->date }}" id="datepicker" autocomplete="off" />
		</div>
	</div>
    
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="body">Description - EN</label>
			<textarea name="body_en">{!! old('body_en') ? old('body_en') : $roadmap->body_en !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - DE</label>
			<textarea name="body_de">{!! old('body_de') ? old('body_de') : $roadmap->body_de !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - FR</label>
			<textarea name="body_fr">{!! old('body_fr') ? old('body_fr') : $roadmap->body_fr !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - IT</label>
			<textarea name="body_it">{!! old('body_it') ? old('body_it') : $roadmap->body_it !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - RS</label>
			<textarea name="body_rs">{!! old('body_rs') ? old('body_rs') : $roadmap->body_rs !!}</textarea>
		</div>
	</div>
	<input class="btn-submit" type="submit" value="Change content" />

    @include('admin.errors')
</form>
@endsection

@section('scripts')
    @include('admin.tinymce')
	<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>

	<script>
		$(function () {
			 $('#datepicker').datepicker({
	            uiLibrary: 'bootstrap4',
	            format: 'dd/mm/yyyy'
	        });
		});	
	</script>
@endsection