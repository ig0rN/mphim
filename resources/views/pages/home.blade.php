@extends('master')

@section('title', __('translate.home'))

@section('content')
<div id="home" class="pt-5">
    <div class="container">
        <div id="mphim-bar">
            <div class="row no-gutters">
                <div class="col-md-10">
                    <div id="mphim-content">
                        <div class="tab-content" id="mphim-tabs">
                            <div class="tab-pane fade show active">
                                <h3 class="heading">
                                    {{ __('translate.default-message') }}
                                </h3>
                                <div class="text-div">
                                    {!! $home->{'body_' . $language} !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="what-is-text" role="tabpanel" aria-labelledby="what-is-tab">
                                <h3 class="heading">
                                    {{ __('translate.what-is') }}?
                                </h3>
                                <div class="text-div">
                                    <p>
                                        {!! $whatIs->{'body_' . $language} !!}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="what-does-text" role="tabpanel" aria-labelledby="what-does-tab">
                                <h3 class="heading">
                                    {{ __('translate.what-does-it-do') }}?
                                </h3>
                                <div class="text-div">
                                    <p>
                                        {!! $whatDoes->{'body_' . $language} !!}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="why-to-text" role="tabpanel" aria-labelledby="why-to-tab">
                                <h3 class="heading">
                                    {{ __('translate.why-to-have') }}?
                                </h3>
                                <div class="text-div">
                                    <p>
                                        {!! $whyTo->{'body_' . $language} !!}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="roadmap-text" role="tabpanel" aria-labelledby="roadmap-tab">
                                <h3 class="heading">
                                    {{ __('translate.roadmap') }}
                                </h3>
                                <div class="text-div">
                                    <div class="logo text-center">
                                        <img src="{{ asset('img/logo.png') }}" alt="img/logo.png" />
                                    </div>
                                    <ul class="roadmap">
                                        @foreach($roadmap as $event)
                                        @php
                                        $year = Carbon\Carbon::createFromFormat('d/m/Y', $event->date)->year;
                                        @endphp

                                        @if($year % 2 == 0)
                                        <li class="even">
                                            <div class="container">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4 offset-md-1 text-right">
                                                        <div class="text">
                                                            <div class="year-div">
                                                                <p class="year m-0">{{ $year }}</p>
                                                            </div>
                                                            <p>{!! $event->{'body_' . $language} !!}</p>
                                                            <div class="arrow-right"></div>
                                                            <p class="date m-0 text-right">{{ $event->date }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                        <li class="odd">
                                            <div class="container">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4 offset-7">
                                                        <div class="text">
                                                            <div class="year-div">
                                                                <p class="year">{{ $year }}</p>
                                                            </div>
                                                            <p>{!! $event->{'body_' . $language} !!}</p>
                                                            <div class="arrow-left"></div>
                                                            <p class="date">{{ $event->date }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="discover">
                        <div class="discover">
                            <ul class="nav" role="tablist">
                                <li class="item">
                                    <a id="what-is-tab" data-toggle="tab" href="#what-is-text" role="tab" aria-controls="what-is-text"
                                        aria-selected="true">
                                        <img src="{{ asset('img/home/mphim/what-is.png') }}" alt="img/home/mphim/what-is.png" />
                                        <p>
                                            {{ __('translate.what-is') }}
                                        </p>
                                    </a>
                                    <!-- <a href="{{ route('mphim') . '#what-is' }}">
                                <img src="{{ asset('img/home/mphim/what-is.png') }}" alt="img/home/mphim/what-is.png" />
                                <p>
                                    {{ __('translate.what-is') }}
                                </p>
                            </a> -->
                                </li>
                                <li class="item">
                                    <a id="what-does-tab" data-toggle="tab" href="#what-does-text" role="tab"
                                        aria-controls="what-does-text" aria-selected="true">
                                        <img src="{{ asset('img/home/mphim/what-does.png') }}" alt="img/home/mphim/what-does.png " />
                                        <p>
                                            {{ __('translate.what-does-it-do') }}
                                        </p>
                                    </a>
                                </li>
                                <li class="item">
                                    <a id="why-to-tab" data-toggle="tab" href="#why-to-text" role="tab" aria-controls="why-to-text"
                                        aria-selected="true">
                                        <img src="{{ asset('img/home/mphim/why-to.png') }}" alt="img/home/mphim/why-to.png " />
                                        <p>
                                            {{ __('translate.why-to-have') }}
                                        </p>
                                    </a>
                                </li>
                                <li class="item">
                                    <a id="roadmap-tab" data-toggle="tab" href="#roadmap-text" role="tab" aria-controls="roadmap-text"
                                        aria-selected="true">
                                        <img src="{{ asset('img/home/mphim/roadmap.png') }}" alt="img/home/mphim/radmap.png " />
                                        <p>
                                            {{ __('translate.roadmap') }}
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="customers" class="pt-5">
            <p class="home-heading text-center">
                {{ __('translate.who-can-use-it') }}
            </p>
            <div class="row">
                <div class="col-md-4 text-center pb-4">
                    <div class="item text-center">
                        <a href="{{ route('customers') . '#companies' }}">
                            <h6 class="text-uppercase mb-3">
                                {{ __('translate.companies') }}
                            </h6>
                            <img src="{{ asset('img/home/customers/companies.png')}}" alt="img/home/customers/companies.png"
                                class="mb-3" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center pb-4">
                    <div class="item text-center">
                        <a href="{{ route('customers') . '#professionals' }}">
                            <h6 class="text-uppercase mb-3">
                                {{ __('translate.professionals') }}
                            </h6>
                            <img src="{{ asset('img/home/customers/professionals.png')}}" alt="img/home/customers/professionals.png"
                                class="mb-3" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center pb-4">
                    <div class="item text-center">
                        <a href="{{ route('customers') . '#trade' }}">
                            <h6 class="text-uppercase mb-3">
                                {{ __('translate.trade-associations') }}
                            </h6>
                            <img src="{{ asset('img/home/customers/trade.png')}}" alt="img/home/customers/trade.png"
                                class="mb-3" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="item text-center">
                        <a href="{{ route('customers') . '#public' }}">
                            <h6 class="text-uppercase mb-3">
                                {{ __('translate.public-institutions') }}
                            </h6>
                            <img src="{{ asset('img/home/customers/public.png')}}" alt="img/home/customers/public.png"
                                class="mb-3" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="item text-center">
                        <a href="{{ route('customers') . '#school' }}">
                            <h6 class="text-uppercase mb-3">
                                {{ __('translate.schools') }}
                            </h6>
                            <img src="{{ asset('img/home/customers/school.png')}}" alt="img/home/customers/school.png"
                                class="mb-3" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="item text-center">
                        <a href="{{ route('customers') . '#university' }}">
                            <h6 class="text-uppercase mb-3">
                                {{ __('translate.university') }}
                            </h6>
                            <img src="{{ asset('img/home/customers/university.png')}}" alt="img/home/customers/university.png"
                                class="mb-3" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="academy" class="pt-5">
            <p class="home-heading text-center">
                {{ __('translate.academy') }}
            </p>
            <div class="row">
                <div class="col-md-3">
                    <div class="training">
                        <div class="image">
                            <img src="{{ asset('img/home/training/company.jpg') }}" alt="img/home/training/company.jpg" />
                        </div>
                        <div class="overlay bg-primary">
                            <h6>
                                {{ __('translate.training4company') }}
                            </h6>
                            <a href="{{ route('academy.company') }}" class="btn btn-training">
                                {{ __('translate.access-the-training') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="training">
                        <div class="image">
                            <img src="{{ asset('img/home/training/agent.jpg') }}" alt="img/home/training/agent.jpg" />
                        </div>
                        <div class="overlay bg-danger">
                            <h6>
                                {{ __('translate.training4agent') }}
                            </h6>
                            <a href="{{ route('academy.agent') }}" class="btn btn-training">
                                {{ __('translate.access-the-training') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="training">
                        <div class="image">
                            <img src="{{ asset('img/home/training/advisor.jpg') }}" alt="img/home/training/advisor.jpg" />
                        </div>
                        <div class="overlay bg-warning">
                            <h6>
                                {{ __('translate.training4advisor') }}
                            </h6>
                            <a href="{{ route('academy.advisor') }}" class="btn btn-training">
                                {{ __('translate.access-the-training') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="training">
                        <div class="image">
                            <img src="{{ asset('img/home/training/manager.jpg') }}" alt="img/home/training/manager.jpg" />
                        </div>
                        <div class="overlay bg-info">
                            <h6>
                                {{ __('translate.training4manager') }}
                            </h6>
                            <a href="{{ route('academy.manager') }}" class="btn btn-training">
                                {{ __('translate.access-the-training') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/counter.js') }}"></script>
@endsection