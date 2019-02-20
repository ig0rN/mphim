@extends('master')

@section('title', 'Mphim+')

@section('content')
<div class="container">
    <nav id="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">
                    {{ __('translate.home') }}
                </a>
            </li>
            <li class="breadcrumb-item active text-uppercase" aria-current="page">
                Mphim+
            </li>
        </ol>
    </nav>
    <div id="what-is" class="item-text">
        <h3 class="heading">
            What is?
        </h3>
        <p>
            {!! $whatIs->{'body_' . $language} !!}
        </p>
    </div>
    <div id="what-does" class="item-text">
        <h3 class="heading">
            What does it do?
        </h3>
        <p>
            {!! $whatDoes->{'body_' . $language} !!}
        </p>
    </div>
    <div id="why-to" class="item-text">
        <h3 class="heading">
            Why to have it?
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
@endsection