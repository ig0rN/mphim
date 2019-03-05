@extends('master')

@section('title', __('translate.academy'))

@section('content')
<div id="academy" class="pt-5">
    <div class="container">
        <h3 class="heading">
            {{ __('translate.academy') }}
        </h3>

        {!! $content->{'body_' . $language} !!}

        <ul class="row nav" role="tablist">
            <li class="col-md-3">
                <div class="training">
                    <div class="image">
                        <img src="{{ asset('img/home/training/company.jpg') }}" alt="img/home/training/company.jpg" />
                    </div>
                    <div class="overlay bg-primary">
                        <h6>
                            {{ __('translate.training4company') }}
                        </h6>
                        <a href="{{ route('academy.company') }}" class="btn btn-training">
                            {{ __('translate.do-you-want-to-find-out-more-about') }}
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-md-3">
                <div class="training">
                    <div class="image">
                        <img src="{{ asset('img/home/training/agent.jpg') }}" alt="img/home/training/agent.jpg" />
                    </div>
                    <div class="overlay bg-danger">
                        <h6>
                            {{ __('translate.training4agent') }}
                        </h6>
                        <a href="{{ route('academy.agent') }}" class="btn btn-training">
                            {{ __('translate.do-you-want-to-find-out-more-about') }}
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-md-3">
                <div class="training">
                    <div class="image">
                        <img src="{{ asset('img/home/training/advisor.jpg') }}" alt="img/home/training/advisor.jpg" />
                    </div>
                    <div class="overlay bg-warning">
                        <h6>
                            {{ __('translate.training4advisor') }}
                        </h6>
                        <a href="{{ route('academy.advisor') }}" class="btn btn-training">
                            {{ __('translate.do-you-want-to-find-out-more-about') }}
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-md-3">
                <div class="training"">
                    <div class=" image">
                    <img src="{{ asset('img/home/training/manager.jpg') }}" alt="img/home/training/manager.jpg" />
                </div>
                <div class="overlay bg-info">
                    <h6>
                        {{ __('translate.training4manager') }}
                    </h6>
                    <a href="{{ route('academy.manager') }}" class="btn btn-training">
                        {{ __('translate.do-you-want-to-find-out-more-about') }}
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection