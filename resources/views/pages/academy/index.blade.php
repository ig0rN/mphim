@extends('master')

@section('title', __('translate.academy'))

@section('content')
<div class="container">
    <nav id="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">
                    {{ __('translate.home') }}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ __('translate.academy') }}
            </li>
        </ol>
    </nav>
    <h3 class="heading">
        {{ __('translate.academy') }}
    </h3>
    <div id="academy">

        {!! $content->{'body_' . $language} !!}

        <ul class="row nav" role="tablist">
            <li class="col-md-3">
                <div href="#training4company" id="training4company-tab" class="training" data-toggle="tab" role="tab"
                    aria-controls="training4company" aria-selected="true">
                    <div class="image">
                        <img src="{{ asset('img/home/training/company.jpg') }}" alt="img/home/training/company.jpg" />
                    </div>
                    <div class="overlay bg-primary">
                        <h6>
                            {{ __('translate.training4company') }}
                        </h6>
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4company') }}"?
                        </p>
                        <a class="btn btn-training">
                            {{ __('translate.training4company') }}
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-md-3">
                <div href="#training4agent" id="training4agent-tab" class="training" data-toggle="tab" role="tab"
                    aria-controls="training4agent" aria-selected="true">
                    <div class="image">
                        <img src="{{ asset('img/home/training/agent.jpg') }}" alt="img/home/training/agent.jpg" />
                    </div>
                    <div class="overlay bg-danger">
                        <h6>
                            {{ __('translate.training4agent') }}
                        </h6>
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{ __('translate.training4agent')
                            }}"?
                        </p>
                        <a class="btn btn-training">
                            {{ __('translate.training4agent') }}
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-md-3">
                <div href="#training4advisor" id="training4advisor-tab" class="training" data-toggle="tab" role="tab"
                    aria-controls="training4advisor" aria-selected="true">
                    <div class="image">
                        <img src="{{ asset('img/home/training/advisor.jpg') }}" alt="img/home/training/advisor.jpg" />
                    </div>
                    <div class="overlay bg-warning">
                        <h6>
                            {{ __('translate.training4advisor') }}
                        </h6>
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4advisor') }}"?
                        </p>
                        <a class="btn btn-training">
                            {{ __('translate.training4advisor') }}
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-md-3">
                <div href="#training4manager" id="training4manager-tab" class="training" data-toggle="tab" role="tab"
                    aria-controls="training4manager" aria-selected="true">
                    <div class="image">
                        <img src="{{ asset('img/home/training/manager.jpg') }}" alt="img/home/training/manager.jpg" />
                    </div>
                    <div class="overlay bg-info">
                        <h6>
                            {{ __('translate.training4manager') }}
                        </h6>
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4manager') }}"?
                        </p>
                        <a class="btn btn-training">
                            {{ __('translate.training4manager') }}
                        </a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="tab-content pt-5">
            <div class="tab-pane fade active show" id="training4company" role="tabpanel" aria-labelledby="training4company-tab">
                <a href="{{ route('academy.company') }}" class="btn btn-training">
                    {{ __('translate.training4company') }}
                </a>
            </div>
            <div class="tab-pane fade" id="training4agent" role="tabpanel" aria-labelledby="training4agent-tab">
                <a href="{{ route('academy.agent') }}" class="btn btn-training">
                    {{ __('translate.training4agent') }}
                </a>
            </div>
            <div class="tab-pane fade" id="training4advisor" role="tabpanel" aria-labelledby="training4advisor-tab">
                <a href="{{ route('academy.advisor') }}" class="btn btn-training">
                    {{ __('translate.training4advisor') }}
                </a>
            </div>
            <div class="tab-pane fade" id="training4manager" role="tabpanel" aria-labelledby="training4manager-tab">
                <a href="{{ route('academy.manager') }}" class="btn btn-training">
                    {{ __('translate.training4manager') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection