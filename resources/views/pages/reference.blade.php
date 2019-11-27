@extends('master')

@section('title', 'Reference')

@section('content')
<div id="reference" class="pt-5">
    <div class="container">
        <h3 class="heading">
            {{ __('translate.reference') }}
        </h3>
        <div class="row align-items-start">
            {{-- <div class="col-md-4">
                <div class="image">
                    <img src="{{ asset('img/customers/company.jpg')}}" alt="img/customers/company.jpg" />
                </div>
            </div> --}}
            <div class="col-md-12">
                {!! $content->{'body_' . $language} !!}
            </div>
        </div>
    </div>
</div>
@endsection