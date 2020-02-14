@extends('master')

@section('title', __('translate.contact'))

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">@stop

@section('content')
<div id="contact" class="pt-5">
    <div class="container">
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
            <h3 class="heading">{{ __('translate.contact-form') }}</h3>
            <form action="{{ route('post.contact') }}" id="contactForm" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-4 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        {{ __('translate.name') }}<span>*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" id="name" required="" placeholder="{{ __('translate.enter-name') }}" />
                                    <span class="has-error"></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        {{ __('translate.phone') }}
                                    </label>
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="{{ __('translate.enter-phone') }}" />
                                    <span class="has-error"></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        {{ __('translate.email') }}<span>*</span>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email" required="" placeholder="{{ __('translate.enter-email') }}" />
                                    <span class="has-error"></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        {{ __('translate.company-name') }}
                                    </label>
                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="{{ __('translate.enter-company-name') }}" />
                                    <span class="has-error"></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        {{ __('translate.subject') }}
                                    </label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('translate.enter-subject') }}" />
                                    <span class="has-error"></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <label>
                                    {{ __('translate.choose-mail') }}
                                </label>
                                <div class="select-div text-right">
                                    <select class="form-control" name="email_to" id="email_to">
                                        <option value="info@mphimplus.com">
                                            info@mphimplus.com
                                        </option>
                                        <option value="commerciale@mphimplus.com">
                                            commerciale@mphimplus.com
                                        </option>
                                        <option value="sicilia@mphimplus.com">
                                            sicilia@mphimplus.com
                                        </option>
                                        <option value="veneto@mphimplus.com">
                                            veneto@mphimplus.com
                                        </option>
                                    </select>
                                    <span class="has-error"></span>
                                    <img src="{{ asset('img/arrow.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="form-group">
                            <label>
                                {{ __('translate.message') }}<span>*</span>
                            </label>
                            <textarea class="form-control" name="message" id="message" required="" rows="5" placeholder="{{ __('translate.enter-message') }}..."></textarea>
                            <span class="has-error"></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-3">
                        <p class="m-0">
                            <span>*</span> {{ __('translate.required') }}
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 offset-md-4 offset-lg-6 text-right">
                        @csrf
                        <input type="text" name="website" class="hidden">
                        <button type="submit" class="btn btn-submit">
                            {{ __('translate.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="locations">
            <h3 class="heading">MPHIM+ ITALIA</h3>

            <div class="row">
                <div class="col-md-4 item">
                    <div class="image">
                        <img src="{{ asset('img/locations/palermo.png') }}" alt="Palermo" />
                    </div>
                    <div class="info text-center">
                        <p class="state text-uppercase">MPHIM+ SICILIA</p>
                        <p class="address">
                            <a data-toggle="collapse" href=".sicilia" role="button" aria-expanded="false" aria-controls="sicilia">
                                Via Libertà n. 103,<br />
                                90143 Palermo
                            </a>
                        </p>
                        <p class="telephone">
                            Tel.
                            <a href="callto:+39091588140" title="Call">+39 091 588 140</a>
                        </p>
                        <p class="email">
                            <a href="mailto:italia@mphimplus.com" title="Email">italia@mphimplus.com</a>
                        </p>
                    </div>
                    <div class="map sicilia collapse">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3138.192932594309!2d13.347019215728604!3d38.13570657969532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1319ef5247079749%3A0xfb2e794086334925!2sVia+della+Libert%C3%A0%2C+103%2C+90143+Palermo+PA%2C+Italy!5e0!3m2!1sen!2srs!4v1549928688125"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-8 item">
                    <div class="image">
                        <img src="{{ asset('img/locations/veneto.jpg') }}" alt="Veneto" />
                    </div>

                    <div class="info text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="state text-uppercase text-center">MPHIM+ VENETO</p>
                            </div>
                            
                            <div class="col-md-6">
                                <p class="address">
                                    <a data-toggle="collapse" href=".mestre" role="button" aria-expanded="false" aria-controls="mestre">
                                        Via Poerio n. 19,<br />
                                        30171 Mestre
                                    </a>
                                </p>
                                <p class="telephone">
                                    Tel.
                                    <a href="callto:+39041983842" title="Call">+39 041 983 842</a>
                                </p>
                                <p class="email">
                                    <a href="mailto:veneto@mphimplus.com" title="Email">veneto@mphimplus.com</a>
                                </p>
                                <div class="map mestre collapse">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.8671080650556!2d12.23964171531907!3d45.49262077910129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb43f7823aa5f%3A0xe773b03fbf80a3d2!2sVia%20Alessandro%20Poerio%2C%2019%2C%2030171%20Venezia%20VE%2C%20Italy!5e0!3m2!1sen!2srs!4v1581529797736!5m2!1sen!2srs"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <p class="address">
                                    <a data-toggle="collapse" href=".belluno" role="button" aria-expanded="false" aria-controls="belluno">
                                        Piazza Castello n. 4,<br />
                                        32100 Belluno
                                    </a>
                                </p>
                                <p class="telephone">
                                    Tel.
                                    <a href="callto:+390437380003" title="Call">+39 043 738 000 3</a>
                                </p>
                                <p class="email">
                                    <a href="mailto:veneto@mphimplus.com" title="Email">veneto@mphimplus.com</a>
                                </p>
                                <div class="map belluno collapse">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.617231381039!2d12.213119715343598!3d46.138453979114786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477907b100588501%3A0x9fd820ff5593e9c4!2sPiazza%20Castello%2C%204%2C%2032100%20Belluno%20BL%2C%20Italy!5e0!3m2!1sen!2srs!4v1581529874148!5m2!1sen!2srs"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
    
    <script>
        $(function () {
            $('#contactForm').submit(function (e) {
                e.preventDefault();
                var form = $(this);
                var formData = form.serialize();
                var submitButton = form.find('button[type="submit"]');
                submitButton.attr('disabled', true);

                $.ajax({
                    url: form.attr('action'),
                    data: formData,
                    method: 'post',
                    success: function (response) {
                        // empty all previous errors 
                        $('.has-error').removeClass('.has-error').text('');
                        var errors = response.errors;
                        if ($.isEmptyObject(errors)) {
                            location.reload();
                        } else {
                            submitButton.attr('disabled', false);
                            // print the errors
                            $.each(errors, function (key, val) {
                                var input = form.find('[name="'+ key +'"]');
                                input.next().addClass('has-error').text(val[0]);
                            });
                        }
                    },
                    errors: function() {
                        location.reload();
                    }
                });
            });

            @if(Session::has('success'))
                swal(
                    '{{ __('translate.all_done') }}',
                    '{{ Session::get('success') }}',
                    'success'
                );
            @elseif(Session::has('error'))
                swal(
                    '{{ __('translate.error') }}',
                    '{{ Session::get('error') }}',
                    'error'
                );
            @endif
        });
    </script>
@stop