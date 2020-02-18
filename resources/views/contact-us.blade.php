@extends('app')

@section('content')
    <div class="main-wrapper scrollspy-container">

        <section class="page-wrapper page-detail">

            <div class="page-title border-bottom pt-25 mb-0 border-bottom-0">

                <div class="container">

                    <div class="row gap-15 align-items-center">

                        <div class="col-12 col-md-7">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">{!! __('general.pages') !!}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                </ol>
                            </nav>

                        </div>

                    </div>

                </div>

            </div>


            <div class="container pt-30">

                <div class="">

                    <div class="row gap-50 gap-lg-0">

                        <div class="col-12 col-lg-5 col-xl-4">

                            <h4 class="heading-title"><span>Drop us <span class="font200">a message:</span></span></h4>

                            <form method="post" action="{{route('contact-us-email')}}" novalidate="true">
                                @csrf
                                <div class="contact-successful-messages"></div>

                                <div class="contact-inner">

                                    <div class="form-group">
                                        <label for="form_name">Full Name *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Your name is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="form_email">Email Address *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="form_subject">Subject</label>
                                        <input id="form_subject" name="subject" type="text" name="email" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" rows="7s" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>

                                    <input type="submit" class="btn btn-primary btn-send btn-wide mt-15 disabled" value="Send message">

                                </div>

                            </form>

                        </div>

                        <div class="col-12 col-lg-6 ml-auto">

                            <h4 class="heading-title"><span>Contact <span class="font200">information:</span></span></h4>

                            <ul class="contact-list-01">

                                <li>
                                    <span class="icon-font"><i class="ion-android-pin"></i></span>
                                    <h6>Address</h6>
                                    Abbasqulu Aga Bakikhanov, Bridge plaza, AZ1022
                                </li>

                                <li>
                                    <span class="icon-font"><i class="ion-android-mail"></i></span>
                                    <h6>Email</h6>
                                    <a href="#">online@traveloffers.az</a>
                                </li>

                                <li>
                                    <span class="icon-font"><i class="ion-android-call"></i></span>
                                    <h6>Phone</h6>
                                    +994558489228
                                </li>

                            </ul>

                            <div class="mb-50"></div>

{{--                            <h4 class="heading-title"><span>Find <span class="font200">us on:</span></span></h4>--}}

{{--                            <div class="social-btns-01">--}}
{{--                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fab fa-facebook"></i></a>--}}
{{--                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>--}}
{{--                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"><i class="fab fa-google-plus "></i></a>--}}
{{--                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Codepen"><i class="fab fa-codepen"></i></a>--}}
{{--                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Behance"><i class="fab fa-behance"></i></a>--}}
{{--                            </div>--}}

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
