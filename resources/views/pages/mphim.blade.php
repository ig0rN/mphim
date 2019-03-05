@extends('master')

@section('title', 'Mphim+')

@section('content')
<div id="mphim">
    <div class="container">
        <div id="what-is" class="item-text">
            <h3 class="heading padding-top">
                {{ __('translate.what-is') }}?
            </h3>
            <p>
                {!! $whatIs->{'body_' . $language} !!}
            </p>
        </div>
        <div id="what-does" class="item-text">
            <h3 class="heading padding-top">
                {{ __('translate.what-does-it-do') }}?
            </h3>
            <p>
                {!! $whatDoes->{'body_' . $language} !!}
            </p>
        </div>
        <div id="why-to" class="item-text">
            <h3 class="heading padding-top">
                {{ __('translate.why-to-have') }}?
            </h3>
            <p>
                {!! $whyTo->{'body_' . $language} !!}
            </p>
        </div>
        <!-- <div id="roadmap" class="item-text">
        <h3 class="heading">
            Roadmap
        </h3>
        <img src="{{ asset('img/roadmap/roadmap.jpg') }}" alt="img/roadmap/roadmap.jpg" />
    </div> -->
    </div>
</div>
@endsection