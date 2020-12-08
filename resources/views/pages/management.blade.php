@extends('master')

@section('title', __('translate.management'))

@section('content')
<div id="academy" class="pt-5">
    <div class="container">
        <h3 class="heading">
            {{ __('translate.management') }}
        </h3>

        {!! $content->{'body_' . $language} !!}
    </div>
</div>
@endsection