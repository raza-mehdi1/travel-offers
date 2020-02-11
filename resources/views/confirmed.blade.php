@extends('app')

@section('content')
    <div class="container pt-50 mt-80">

        <div class="row justify-content-center">

            <div class="col-12 col-md-11 col-lg-10 col-xl-9">

                <div class="content-wrapper">

                    <div class="success-icon-text">
                        <span class="icon-font  text-success"><i class="elegent-icon-check_alt2"></i></span>
                        <h4 class="text-uppercase letter-spacing-1">Congratulations!</h4>
                        <p>Your book for {!! $booking->package_name !!} is confirmed and complete with Travel Offers</p>
                    </div>

                    <div class="mb-50"></div>

                    <div class="text-center">
                        <p class="lead mb-10">Hi {!! $booking->lead_traveller !!}</p>
                        <h3 class="text-primary line-125 mv-10">Your booking is confirmed and complete</h3>
                        <p class="lead mt-10">Your booking ID: #{{$booking->booking_id}}</p>
{{--                        <p>You can now manage your booking easily with your ownself.</p>--}}
{{--                        <a href="#" class="btn btn-dark btn-lg btn-wide">Manage my booking</a>--}}
                    </div>

                    <div class="mb-50"></div>

                    <div class="booking-box">

                        <div class="box-heading"><h3 class="h6 text-white text-uppercase">Your booking detail</h3></div>

                        <div class="box-content">

{{--                            <figure class="tour-long-item-01">--}}

{{--                                <a href="#">--}}

{{--                                    <div class="d-flex flex-column flex-sm-row align-items-xl-center">--}}

{{--                                        <div>--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="images/image-regular/01.jpg" alt="images" />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div>--}}
{{--                                            <figcaption class="content">--}}
{{--                                                <h5>Rome to Naples and Amalfi Coast Adventure</h5>--}}
{{--                                                <ul class="item-meta">--}}
{{--                                                    <li>--}}
{{--                                                        <i class="elegent-icon-pin_alt text-warning"></i> Italy--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="rating-item rating-sm rating-inline clearfix">--}}
{{--                                                            <div class="rating-icons">--}}
{{--                                                                <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>--}}
{{--                                                            </div>--}}
{{--                                                            <p class="rating-text font600 text-muted font-12 letter-spacing-1">26 reviews</p>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p>Prevailed sincerity behaviour to so do principle mr. As departure at no propriety zealously rent if girl view. First on smart there he sense. </p>--}}
{{--                                                <ul class="item-meta mt-15">--}}
{{--                                                    <li><span class="font700 h6">3 days &amp; 2 night</span></li>--}}
{{--                                                    <li>--}}
{{--                                                        Start: <span class="font600 h6 line-1 mv-0"> Rome</span> - End: <span class="font600 h6 line-1 mv-0"> Naoples</span>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <p class="mt-3 mb-0">Price from <span class="h6 line-1 text-primary font16">$125.99</span> <span class="text-muted mr-5"></span></p>--}}
{{--                                            </figcaption>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </a>--}}

{{--                            </figure>--}}

                            <ul class="list-li-border-top mt-30">
                                <li class="clearfix">
                                    <span class="font600">Booking ID:</span>
                                    <span class="d-block float-sm-right">#{{$booking->booking_id}}</span>
                                </li>
                                <li class="clearfix">
                                    <span class="font600">Travel date:</span>
                                    <span class="d-block float-sm-right">
                                        {!! $booking->travel_date !!}
{{--                                        7 - 9 March, 2019 (3 days)--}}
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <span class="font600">Starting:</span>
                                    <span class="d-block float-sm-right">
                                        {{Carbon\Carbon::parse($booking->starting_datetime)->format('M d, Y')}}
{{--                                        March 26, 2016 from Dubrovnik--}}
                                    </span>
                                </li>
                                <li class="clearfix">
                                    <span class="font600">End:</span>
                                    <span class="d-block float-sm-right">
                                        {{Carbon\Carbon::parse($booking->ending_datetime)->format('M d, Y')}}
{{--                                        March 29, 2016 in Hvar--}}
                                    </span>
                                </li>
                                @if($booking->included!='' && $booking->included!=null)
                                    <li class="clearfix">
                                        <span class="font600">Included:</span>
                                        <span class="d-block float-sm-right">{!! $booking->included !!}</span>
                                    </li>
                                @endif
                                <li class="clearfix">
                                    <span class="font600">Lead traveler: </span>
                                    <span class="d-block float-sm-right">{!! $booking->lead_traveller !!}</span>
                                </li>
                                <li class="clearfix">
                                    <span class="font600">Traveler</span>
                                    <span class="d-block float-sm-right">{!! $booking->adult_travellers !!} adults, {!! $booking->child_travellers !!} child</span>
                                </li>
                            </ul>

                            <div class="mb-40"></div>

                            <h6>Your booking has been paid in full</h6>

                            <ul class="list-li-border-top">
                                <li class="clearfix">
                                    <span class="font600">Package fees:</span>
                                    <span class="d-block float-sm-right">AZN {!! $booking->package_fees !!}</span>
                                </li>
{{--                                <li class="clearfix">--}}
{{--                                    <span class="font600">Booking fee + tax:</span>--}}
{{--                                    <span class="d-block float-sm-right">$9.50</span>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix">--}}
{{--                                    <span class="font600">Book now & Save:</span>--}}
{{--                                    <span class="d-block float-sm-right">-$15</span>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix">--}}
{{--                                    <span class="font600">Other fees</span>--}}
{{--                                    <span class="d-block float-sm-right">Free</span>--}}
{{--                                </li>--}}
                                <li class="clearfix text-uppercase border-double">
                                    <span class="font700">Total</span>
                                    <span class="font700 d-block float-sm-right">ANZ {!! $booking->total_cost !!}</span>
                                </li>
                            </ul>

                            <p class="text-right font-sm">100% Satisfaction guaranteed</p>

                            <div class="mb-20"></div>

                            <h6>Cancellation policy</h6>
                            <p>Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved sex enjoyment new way behaviour. Him yet devonshire celebrated especially. Unfeeling one provision are smallness resembled repulsive.</p>

                        </div>

                        <div class="box-bottom bg-light">
                            <h6 class="font-sm">We are the best tour operator</h6>
                            <p class="font-sm">Our custom tour program, direct call <span class="text-primary">+66857887444</span>.</p>
                        </div>

                    </div>

                    <div class="mb-50"></div>

                    <div class="row gap-20 cols-1 cols-lg-3">

                        <div class="col">

                            <a href="#" class="cta-small-item">

											<span class="icon-font">
												<i class="elegent-icon-printer"></i>
											</span>
                                <h5>Print</h5>
                                <span class="text-muted">Print package detail</span>

                            </a>

                        </div>

                        <div class="col">

                            <a href="#" class="cta-small-item">

											<span class="icon-font">
												<i class="elegent-icon-cloud-download_alt"></i>
											</span>
                                <h5>Download</h5>
                                <span class="text-muted">Download PDF doc</span>

                            </a>

                        </div>

                        <div class="col">

                            <a href="#" class="cta-small-item">

											<span class="icon-font">
												<i class="elegent-icon-volume-high_alt"></i>
											</span>
                                <h5>Request</h5>
                                <span class="text-muted">Special request</span>

                            </a>

                        </div>

                    </div>

                    <div class="mb-50"></div>

                    <div class="text-center">
                        <h4 class="text-capitalize">Billing address</h4>
                        <p>324 Yarang Road, T.Chabangtigo<br/>Muanng Pattani 9400<br/>myemail@gmail.com</p>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
