@extends('admin.layouts.master')

@section('styles')
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@stop

@section('main')

@include('admin.flash')

<form class="admin-form" action="{{ route('admin.roadmap.store') }}" method="POST">
    @csrf

	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="datepicker">Date:</label>
			<input type="text" name="date" value="{{ old('date') ? old('date') : \Carbon\Carbon::now()->format('d/m/Y') }}" id="datepicker" autocomplete="off" />
		</div>
	</div>
    
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="body">Description - EN</label>
			<textarea name="body_en">{!! old('body_en') !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - DE</label>
			<textarea name="body_de">{!! old('body_de') !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - FR</label>
			<textarea name="body_fr">{!! old('body_fr') !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - IT</label>
			<textarea name="body_it">{!! old('body_it') !!}</textarea>
		</div>
		<div class="col-md-6 mb-3">
			<label for="body">Description - RS</label>
			<textarea name="body_rs">{!! old('body_rs') !!}</textarea>
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