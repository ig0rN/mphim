@extends('master')

@section('title', 'Commercial')

@section('content')
<div id="commercial" class="pt-5">
    <div class="container">
        <h3 class="heading">
            {{ __('translate.commercial') }}
        </h3>
        <div class="row align-items-start">
            <div class="col-md-4">
                <div class="image">
                    <img src="{{ asset('img/commercial/commercial.jpg')}}" alt="img/commercial/commercial.jpg" />
                </div>
            </div>
            <div class="col-md-8">
                {!! $content->{'body_' . $language} !!}
            </div>
        </div>
    </div>
</div>
@endsection