@extends('master')

@section('title', __('translate.privacy-policy'))

@section('content')
<div id="privacy-policy" class="pt-5">
    <div class="container">
        <h3 class="heading">
            {{ __('translate.privacy-policy') }}
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