@extends('master')

@section('title', __('translate.academy'))

@section('content')
<div class="container">
    <nav id="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb mb-5">
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
        Academy
    </h3>
    <div id="academy">

        {!! $content->{'body_' . $language} !!}

        <div class="row nav" role="tablist">
            <div class="col-md-3">
                <div class="training">
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
                        <a href="#training4company" id="training4company-tab" class="btn btn-training" data-toggle="tab" role="tab"
                            aria-controls="training4company" aria-selected="true">
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
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{ __('translate.training4agent')
                            }}"?
                        </p>
                        <a href="#training4agent" id="training4agent-tab" class="btn btn-training" data-toggle="tab" role="tab"
                            aria-controls="training4agent" aria-selected="true">
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
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4advisor') }}"?
                        </p>
                        <a href="#training4advisor" id="training4advisor-tab" class="btn btn-training" data-toggle="tab" role="tab"
                            aria-controls="training4advisor" aria-selected="true">
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
                        <p>
                            {{ __('translate.do-you-want-to-find-out-more-about') }} "{{
                            __('translate.training4manager') }}"?
                        </p>
                        <a href="#training4manager" id="training4manager-tab" class="btn btn-training" data-toggle="tab" role="tab"
                            aria-controls="training4manager" aria-selected="true">
                            {{ __('translate.access-the-training') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="training4company" role="tabpanel" aria-labelledby="training4company-tab">
                <p>
                    training4company
                </p>
            </div>
            <div class="tab-pane fade" id="training4agent" role="tabpanel" aria-labelledby="training4agent-tab">
                <p>
                    training4agent
                </p>
            </div>
            <div class="tab-pane fade" id="training4advisor" role="tabpanel" aria-labelledby="training4advisor-tab">
                <p>
                    training4advisor
                </p>
            </div>
            <div class="tab-pane fade" id="training4manager" role="tabpanel" aria-labelledby="training4manager-tab">
                <p>
                    training4manager
                </p>
            </div>
        </div>
    </div>
</div>
@endsection