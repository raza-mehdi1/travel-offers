<div class="col-12 col-lg-4">

    <aside class="sticky-kit-02 sidebar-wrapper no-border mt-20 mt-lg-0">

        <div class="booking-box">

            <div class="box-heading"><h3 class="h6 text-white text-uppercase">Make a booking</h3></div>

            <form action="{{route('booking-details', $package->title)}}" method="POST">

                <div class="box-content">
                    @csrf
    {{--                <span class="font600 text-muted line-125">Your choosen date is</span>--}}
                    <h4 class="line-125 choosen-date mt-3"><i class="ri-calendar"></i>
                        {{$package->trip_from_till}}
                        <small class="d-block">
                            ({!! $package->trip_tenure !!})
    {{--                        <a href="#detail-content-sticky-nav-05" class="anchor font10 pl-40 d-block text-uppercase h6 text-primary float-right mt-5">Change</a>--}}
                        </small>
                        <br>
                        (AZN {!! $package->price_per_head !!})
                    </h4>


                    <div class="form-group form-spin-group border-top mt-15 pt-10">
                        <label class="h6 font-sm">How many Adult guests?</label>
                        <input name="adult_guests" type="text" class="form-control touch-spin-03 form-control-readonly" value="2" min="1" readonly />

                        <label class="h6 font-sm">How many Child guests?</label>
                        <input name="child_guests" type="text" class="form-control touch-spin-03 form-control-readonly" value="2" min="0"  />
                        <p style="font-size: smaller">(Child guest rate {{100 - config('travel-offers.child_rate_fraction')*100}}% off)</p>
                    </div>

                    <ul class="border-top mt-20 pt-15">
                        <li class="clearfix">AZN <span id="cost_per_head_adult"></span> x <span id="adults"></span> Adults<span class="float-right" >AZN <span id="adult_cost_total">251.98</span></span></li>
                        <li class="clearfix">AZN <span id="cost_per_head_child"></span> x <span id="children"></span> Children<span class="float-right">AZN <span id="child_cost_total">251.98</span></span></li>
    {{--                    <li class="clearfix">Booking fee + tax<span class="float-right">$9.50</span></li>--}}
    {{--                    <li class="clearfix pl-15">Book now &amp; Save<span class="float-right text-primary">-$15</span></li>--}}
    {{--                    <li class="clearfix">Other fees<span class="float-right text-success">Free</span></li>--}}
                        <li class="clearfix border-top font700">
                            <div class="border-top mt-1">
                                <span>Total</span><span class="float-right text-dark" id="total">248.58</span>
                            </div>
                        </li>
                    </ul>

                    <p class="text-right font-sm">100% Satisfaction guaranteed</p>

                    <button class="btn btn-primary btn-block">Instant booking</button>

    {{--                <p class="line-115 mt-20">By clicking the above button you agree to our <a href="#">Terms of Service</a> and have read and understood our <a href="#">Privacy Policy</a></p>--}}

                </div>

            </form>

            {{--            <div class="box-bottom bg-light">--}}
{{--                <h6 class="font-sm">We are the best tour operator</h6>--}}
{{--                <p class="font-sm">Our custom tour program, direct call <span class="text-primary">+66857887444</span>.</p>--}}
{{--            </div>--}}

        </div>

    </aside>

</div>
