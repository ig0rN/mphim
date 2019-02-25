@extends('master')

@section('title', 'Contact')

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
                {{ __('translate.contact') }}
            </li>
        </ol>
    </nav>
    <div id="contact">
        <!-- <div class="contact mb-4">
            <div class="row no-gutters align-items-center">
                <div class="col-md-4 item">
                    <div class="wrapper text-center text-uppercase">
                        <ion-icon name="locate"></ion-icon>
                        <p class="m-0">
                            Address
                        </p>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="wrapper text-center text-uppercase">
                        <ion-icon name="mail"></ion-icon>
                        <p class="m-0">
                            Email
                        </p>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="wrapper text-center text-uppercase">
                        <ion-icon name="call"></ion-icon>
                        <p class="m-0">
                            Telephone
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="contact-form">
            <h3 class="heading">Contact form</h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-4 col-lg-6">
                            <div class="form-group">
                                <label>
                                    Name<span>*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter name" />
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6">
                            <div class="form-group">
                                <label>
                                    Telephone
                                </label>
                                <input type="tel" class="form-control" placeholder="Enter telephone" />
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6">
                            <div class="form-group">
                                <label>
                                    Email<span>*</span>
                                </label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6">
                            <div class="form-group">
                                <label>
                                    Company name
                                </label>
                                <input type="text" class="form-control" placeholder="Enter company name" />
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6">
                            <div class="form-group">
                                <label>
                                    Subject
                                </label>
                                <input type="text" class="form-control" placeholder="Enter subject" />
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6">
                            <label>
                                To
                            </label>
                            <div class="select-div text-right">
                                <select class="form-control">
                                    <option selected disabled>
                                        Chose email
                                    </option>
                                    <option value="italia@mphimplus.com">
                                        italia@mphimplus.com
                                    </option>
                                    <option value="schweiz@mphimplus.com">
                                        schweiz@mphimplus.com
                                    </option>
                                    <option value="srbija@mphimplus.com">
                                        srbija@mphimplus.com
                                    </option>
                                    <option value="maroc@mphimplus.com">
                                        maroc@mphimplus.com
                                    </option>
                                </select>
                                <img src="{{ asset('img/arrow.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="form-group">
                        <label>
                            Message<span>*</span>
                        </label>
                        <textarea class="form-control" rows="5" placeholder="Enter your message..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <p class="m-0">
                        <span>*</span> required
                    </p>
                    <button type="submit" class="btn btn-submit">
                        Submit
                    </button>
                </div>
            </div>
        </div>
        <div class="locations">
            <div class="row">
                <div class="col-md-3 item">
                    <div class="image">
                        <img src="{{ asset('img/locations/palermo.png') }}" alt="img/locations/palermo.jpg" />
                    </div>
                    <div class="info text-center">
                        <p class="state text-uppercase">
                            Italia
                        </p>
                        <p class="address">
                            <a data-toggle="collapse" href=".italia" role="button" aria-expanded="false" aria-controls="italia">
                                Via Libertà n. 103,<br />
                                90143 Palermo
                            </a>
                        </p>
                        <p class="telephone">
                            Tel.
                            <a href="callto:+39091588140" title="Call">
                                +39 091 588 140
                            </a>
                        </p>
                        <p class="email">
                            <a href="mailto:info@mphimplus.com" title="Email">
                                italia@mphimplus.com
                            </a>
                        </p>
                    </div>
                    <div class="map italia collapse">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3138.192932594309!2d13.347019215728604!3d38.13570657969532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1319ef5247079749%3A0xfb2e794086334925!2sVia+della+Libert%C3%A0%2C+103%2C+90143+Palermo+PA%2C+Italy!5e0!3m2!1sen!2srs!4v1549928688125"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 item">
                    <div class="image">
                        <img src="{{ asset('img/locations/freienbach.png') }}" alt="img/locations/freienbach.png" />
                    </div>
                    <div class="info text-center">
                        <p class="state text-uppercase">
                            Schweiz
                        </p>
                        <p class="address">
                            <a data-toggle="collapse" href=".swiss" role="button" aria-expanded="false" aria-controls="swiss">
                                Kantonsstrasse n. 81,<br />
                                CH - 8807 Freienbach
                            </a>
                        </p>
                        <p class="telephone">
                            Tel.
                            <a href="callto:+41786006023" title="Call">
                                +41 786 006 023
                            </a>
                        </p>
                        <p class="email">
                            <a href="callto:mailto:info@mphimplus.com" title="Email">
                                schweiz@mphimplus.com
                            </a>
                        </p>
                    </div>
                    <div class="map swiss collapse">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.493475289701!2d8.752812715962666!3d47.20692587916026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ab16968d3999f%3A0x8a3a6307efc95c75!2sKantonsstrasse+81%2C+8807+Freienbach%2C+Switzerland!5e0!3m2!1sen!2srs!4v1549928781427"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 item">
                    <div class="image">
                        <img src="{{ asset('img/locations/kragujevac.jpg') }}" alt="img/locations/kragujevac.jpg" />
                    </div>
                    <div class="info text-center">
                        <p class="state text-uppercase">
                            Srbija
                        </p>
                        <p class="address">
                            <a data-toggle="collapse" href=".serbia" role="button" aria-expanded="false" aria-controls="serbia">
                                Mije Aleksica 7,<br />
                                34000 Kragujevac
                            </a>
                        </p>
                        <p class="telephone">
                            Tel.
                            <a href="callto:+38134207098" title="Call">
                                +381 34 20 70 98
                            </a>
                        </p>
                        <p class="email">
                            <a href="mailto:info@mphimplus.com" title="Email">
                                srbija@mphimplus.com
                            </a>
                        </p>
                    </div>
                    <div class="map serbia collapse">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2870.0423515235902!2d20.92122961587534!3d43.99985037911101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475720ef828fad59%3A0x57cbe633ad7d23fd!2sMije+Aleksic%CC%81a%2C+Kragujevac!5e0!3m2!1sen!2srs!4v1549928821207"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 item">
                    <div class="image">
                        <img src="{{ asset('img/locations/rabat.jpg') }}" alt="img/locations/rabat.jpg" />
                    </div>
                    <div class="info text-center">
                        <p class="state text-uppercase">
                            Maroc
                        </p>
                        <p class="address">
                            <a data-toggle="collapse" href=".morocco" role="button" aria-expanded="false" aria-controls="morocco">
                                15. Avenue Al Abtal, N° 4<br />
                                Agdal - Rabat
                            </a>
                        </p>
                        <p class="telephone">
                            Tel.
                            <a href="callto:+212645263784" title="Call">
                                +212 645263784
                            </a>
                        </p>
                        <p class="email">
                            <a href="mailto:info@mphimplus.com" title="Email">
                                maroc@mphimplus.com
                            </a>
                        </p>
                    </div>
                    <div class="map morocco collapse">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.635209516674!2d-6.848038234364067!3d34.00190253061961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33d601556713a1ed!2sXersys+Services+(Xese)!5e0!3m2!1sen!2srs!4v1549928875175"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection