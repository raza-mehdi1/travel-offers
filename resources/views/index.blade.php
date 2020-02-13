@extends("app")

@section('content')

        <!-- start Main Wrapper -->
        <div class="main-wrapper scrollspy-container">

            <div class="hero-banner hero-banner-01 overlay-light opacity-2 overlay-relative overlay-gradient gradient-white alt-option-03" style="background-image:url('/theme/images/image-bg/baku.jpg'); background-position: top center;">

                <div class="overlay-holder bottom"></div>

                <div class="hero-inner">

                    <div class="container">
                        <h1><span class="font200">Charming <span class="font700">Azerbaijan</span><span class="block">with <span class="font700">Travel</span>Offers </span></span></h1>
{{--                        <p class="font-lg spacing-1">Visit Europe, America, Asia, Africa or beyond!</p>--}}

{{--                        <div class="search-form-main">--}}
{{--                            <form>--}}
{{--                                <div class="from-inner">--}}

{{--                                    <div class="row shrink-auto-sm gap-1">--}}

{{--                                        <div class="col-12 col-auto">--}}
{{--                                            <div class="col-inner">--}}
{{--                                                <div class="row cols-1 cols-sm-3 gap-1">--}}

{{--                                                    <div class="col">--}}
{{--                                                        <div class="col-inner">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label>Tour Type</label>--}}
{{--                                                                <select class="chosen-the-basic form-control form-control-sm" placeholder="Select one" tabindex="2">--}}
{{--                                                                    <option></option>--}}
{{--                                                                    <option>All</option>--}}
{{--                                                                    <option>Adventure</option>--}}
{{--                                                                    <option>City tour</option>--}}
{{--                                                                    <option>Honeymoon</option>--}}
{{--                                                                    <option>Cultural</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col">--}}
{{--                                                        <div class="col-inner">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label>Destination</label>--}}
{{--                                                                <select class="chosen-the-basic form-control form-control-sm" placeholder="Select two" tabindex="2">--}}
{{--                                                                    <option></option>--}}
{{--                                                                    <option>All</option>--}}
{{--                                                                    <option>Asia</option>--}}
{{--                                                                    <option>Europe</option>--}}
{{--                                                                    <option>Africa</option>--}}
{{--                                                                    <option>America</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col">--}}
{{--                                                        <div class="col-inner">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label>When</label>--}}
{{--                                                                <input type="text" class="form-control form-readonly-control air-datepicker" placeholder="Pick a month" data-min-view="months" data-view="months" data-date-format="MM yyyy" data-language="en" data-auto-close="true" readonly>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-12 col-shrink">--}}
{{--                                            <div class="col-inner">--}}
{{--                                                <a href="#" class="btn btn-primary btn-block"><i class="ion-android-search"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}

                    </div>

                </div>

            </div>

            <section class="pb-0">

                <div class="container">

                    <div class="row cols-1 cols-lg-3 gap-20 gap-lg-40">

                        <div class="col">
                            <div class="featured-icon-horizontal-01 clearfix">
                                <div class="icon-font">
                                    <i class="elegent-icon-gift_alt text-primary"></i>
                                </div>
                                <div class="content">
                                    <h6>We ﬁnd better deals</h6>
                                    <p class="text-muted">Considered an invitation do introduced sufficient understood instrument it. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="featured-icon-horizontal-01 clearfix">
                                <div class="icon-font">
                                    <i class="elegent-icon-wallet text-primary"></i>
                                </div>
                                <div class="content">
                                    <h6>Best price guaranteed</h6>
                                    <p class="text-muted">Discovery sweetness principle discourse shameless bed one excellent.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="featured-icon-horizontal-01 clearfix">
                                <div class="icon-font">
                                    <i class="elegent-icon-heart_alt text-primary"></i>
                                </div>
                                <div class="content">
                                    <h6>Travellers love us</h6>
                                    <p class="text-muted">Sentiments of surrounded friendship dispatched connection john shed hope.</p>
                                </div>
                            </div>
                        </div>

                    </div>

{{--                    <div class="clear mb-100"></div>--}}

{{--                    <div class="section-title">--}}
{{--                        <h2><span><span>Top</span> Destinations</span></h2>--}}
{{--                    </div>--}}

{{--                    <div class="row cols-1 cols-sm-2 cols-lg-4 gap-2 mb-20">--}}

{{--                        <div class="col">--}}

{{--                            <figure class="destination-grid-item-01">--}}
{{--                                <a href="#">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-destination/01.jpg"alt="image"/>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="content">--}}
{{--                                        <h5>Bangkok</h5>--}}
{{--                                        <p class="text-muted">25 Tours</p>--}}
{{--                                    </figcaption>--}}
{{--                                </a>--}}
{{--                            </figure>--}}

{{--                        </div>--}}

{{--                        <div class="col">--}}

{{--                            <figure class="destination-grid-item-01">--}}
{{--                                <a href="#">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-destination/02.jpg"alt="image"/>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="content">--}}
{{--                                        <h5>Hong Kong</h5>--}}
{{--                                        <p class="text-muted">36 Tours</p>--}}
{{--                                    </figcaption>--}}
{{--                                </a>--}}
{{--                            </figure>--}}

{{--                        </div>--}}

{{--                        <div class="col">--}}

{{--                            <figure class="destination-grid-item-01">--}}
{{--                                <a href="#">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-destination/03.jpg"alt="image"/>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="content">--}}
{{--                                        <h5>London</h5>--}}
{{--                                        <p class="text-muted">40 Tours</p>--}}
{{--                                    </figcaption>--}}
{{--                                </a>--}}
{{--                            </figure>--}}

{{--                        </div>--}}

{{--                        <div class="col">--}}

{{--                            <figure class="destination-grid-item-01">--}}
{{--                                <a href="#">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-destination/04.jpg"alt="image"/>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="content">--}}
{{--                                        <h5>New York</h5>--}}
{{--                                        <p class="text-muted">10 Tours</p>--}}
{{--                                    </figcaption>--}}
{{--                                </a>--}}
{{--                            </figure>--}}

{{--                        </div>--}}

{{--                    </div>--}}

                    <div class="clear mb-100"></div>

                    <div class="section-title">
                        <h2><span><span>Best</span> Tour Packages</span></h2>
                    </div>

                    <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-20 mb-30">
                        @foreach($packages as $package)
                            <div class="col">

                            <figure class="tour-grid-item-01">

                                <a href="#">

                                    <div class="image">
                                        <img src="{{$package->images()->first() ? $package->images()->first()->storage_path:''}}" alt="images" />
                                    </div>

                                    <figcaption class="content">
                                        <h5>{{$package->title}}</h5>
                                        <ul class="item-meta">
                                            <li>
                                                {{$package->tag_line}}
                                            </li>
                                            <li>
                                                {!! $package->description !!}
                                            </li>
                                        </ul>
{{--                                        <ul class="item-meta">--}}
{{--                                            <li>--}}
{{--                                                <i class="elegent-icon-pin_alt text-warning"></i> Italy--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="rating-item rating-sm rating-inline clearfix">--}}
{{--                                                    <div class="rating-icons">--}}
{{--                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="rating-text font600 text-muted font-12 letter-spacing-1">26 reviews</p>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
                                        <ul class="item-meta mt-15">
                                            <li><span class="font700 h6">{{$package->trip_tenure}}</span></li>
{{--                                            <li>--}}
{{--                                                Start: <span class="font600 h6 line-1 mv-0"> Rome</span> - End: <span class="font600 h6 line-1 mv-0"> Naoples</span>--}}
{{--                                            </li>--}}
                                        </ul>
                                        <p class="mt-3">Price per head from <span class="h6 line-1 text-primary font16">AZN {{(float)$package->price_per_head}}</span> <span class="text-muted mr-5"></span></p>
                                        <div style="margin-top: 10px; color: white;">
                                            <a class="btn btn-primary" href="{{route('details', $package->title)}}">{{__('general.view_details')}}</a>
                                        </div>
                                    </figcaption>

                                </a>

                            </figure>

                        </div>
                        @endforeach
{{--                        <div class="col">--}}

{{--                            <figure class="tour-grid-item-01">--}}

{{--                                <a href="#">--}}

{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-tour/02.jpg" alt="images" />--}}
{{--                                    </div>--}}

{{--                                    <figcaption class="content">--}}
{{--                                        <h5>Everest Base Camp Trek through 3 High Passes</h5>--}}
{{--                                        <ul class="item-meta">--}}
{{--                                            <li>--}}
{{--                                                <i class="elegent-icon-pin_alt text-warning"></i> Nepal--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="rating-item rating-sm rating-inline clearfix">--}}
{{--                                                    <div class="rating-icons">--}}
{{--                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="rating-text font600 text-muted font-12 letter-spacing-1">53 reviews</p>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="item-meta mt-15">--}}
{{--                                            <li><span class="font700 h6">22 days</span></li>--}}
{{--                                            <li>--}}
{{--                                                Start/End: <span class="font600 h6 line-1 mv-0"> Kathmandu</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="mt-3">Price from <span class="h6 line-1 text-primary font16">$125.99</span> <span class="text-muted mr-5"></span></p>--}}
{{--                                    </figcaption>--}}

{{--                                </a>--}}

{{--                            </figure>--}}

{{--                        </div>--}}

{{--                        <div class="col">--}}

{{--                            <figure class="tour-grid-item-01">--}}

{{--                                <a href="#">--}}

{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-tour/03.jpg" alt="images" />--}}
{{--                                    </div>--}}

{{--                                    <figcaption class="content">--}}
{{--                                        <h5>10 Days From the South to the North of Vietnam</h5>--}}
{{--                                        <ul class="item-meta">--}}
{{--                                            <li>--}}
{{--                                                <i class="elegent-icon-pin_alt text-warning"></i> Vietnam--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="rating-item rating-sm rating-inline clearfix">--}}
{{--                                                    <div class="rating-icons">--}}
{{--                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="rating-text font600 text-muted font-12 letter-spacing-2">44 reviews</p>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="item-meta mt-15">--}}
{{--                                            <li><span class="font700 h6">10 days &amp; 9 night</span></li>--}}
{{--                                            <li>--}}
{{--                                                Start: <span class="font600 h6 line-1 mv-0"> Hochiminh</span> - End: <span class="font600 h6 line-1 mv-0"> Hanoi</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="mt-3">Price from <span class="h6 line-1 text-primary font16">$125.99</span> <span class="text-muted mr-5"></span></p>--}}
{{--                                    </figcaption>--}}

{{--                                </a>--}}

{{--                            </figure>--}}

{{--                        </div>--}}

{{--                        <div class="col">--}}

{{--                            <figure class="tour-grid-item-01">--}}

{{--                                <a href="#">--}}

{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-tour/04.jpg" alt="images" />--}}
{{--                                    </div>--}}

{{--                                    <figcaption class="content">--}}
{{--                                        <h5>Adriatic Adventure–Zagreb to Athens</h5>--}}
{{--                                        <ul class="item-meta">--}}
{{--                                            <li>--}}
{{--                                                <i class="elegent-icon-pin_alt text-warning"></i> Greece--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="rating-item rating-sm rating-inline clearfix">--}}
{{--                                                    <div class="rating-icons">--}}
{{--                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="rating-text font600 text-muted font-12 letter-spacing-2">44 reviews</p>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="item-meta mt-15">--}}
{{--                                            <li><span class="font700 h6">3 days &amp; 2 night</span></li>--}}
{{--                                            <li>--}}
{{--                                                Start: <span class="font600 h6 line-1 mv-0"> Zagreb</span> - End: <span class="font600 h6 line-1 mv-0"> Athens</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="mt-3">Price from <span class="h6 line-1 text-primary font16">$125.99</span> <span class="text-muted mr-5"></span></p>--}}
{{--                                    </figcaption>--}}

{{--                                </a>--}}

{{--                            </figure>--}}

{{--                        </div>--}}

{{--                        <div class="col">--}}

{{--                            <figure class="tour-grid-item-01">--}}

{{--                                <a href="#">--}}

{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-tour/05.jpg" alt="images" />--}}
{{--                                    </div>--}}

{{--                                    <figcaption class="content">--}}
{{--                                        <h5>Asian Adventure</h5>--}}
{{--                                        <ul class="item-meta">--}}
{{--                                            <li>--}}
{{--                                                <i class="elegent-icon-pin_alt text-warning"></i> 3 countries--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="rating-item rating-sm rating-inline clearfix">--}}
{{--                                                    <div class="rating-icons">--}}
{{--                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="rating-text font600 text-muted font-12 letter-spacing-2">44 reviews</p>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="item-meta mt-15">--}}
{{--                                            <li><span class="font700 h6">14 days</span></li>--}}
{{--                                            <li>--}}
{{--                                                Start: <span class="font600 h6 line-1 mv-0"> Bangkok</span> - End: <span class="font600 h6 line-1 mv-0"> Hanoi</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="mt-3">Price from <span class="h6 line-1 text-primary font16">$125.99</span> <span class="text-muted mr-5"></span></p>--}}
{{--                                    </figcaption>--}}

{{--                                </a>--}}

{{--                            </figure>--}}

{{--                        </div>--}}

{{--                        <div class="col">--}}

{{--                            <figure class="tour-grid-item-01">--}}

{{--                                <a href="#">--}}

{{--                                    <div class="image">--}}
{{--                                        <img src="/theme/images/image-tour/06.jpg" alt="images" />--}}
{{--                                    </div>--}}

{{--                                    <figcaption class="content">--}}
{{--                                        <h5>Jewels of Costa Rica</h5>--}}
{{--                                        <ul class="item-meta">--}}
{{--                                            <li>--}}
{{--                                                <i class="elegent-icon-pin_alt text-warning"></i> Costa Rica--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="rating-item rating-sm rating-inline clearfix">--}}
{{--                                                    <div class="rating-icons">--}}
{{--                                                        <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="rating-text font600 text-muted font-12 letter-spacing-2">44 reviews</p>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="item-meta mt-15">--}}
{{--                                            <li><span class="font700 h6">3 days &amp; 2 night</span></li>--}}
{{--                                            <li>--}}
{{--                                                Start/End: <span class="font600 h6 line-1 mv-0"> San Jose</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="mt-3">Price from <span class="h6 line-1 text-primary font16">$125.99</span> <span class="text-muted mr-5"></span></p>--}}
{{--                                    </figcaption>--}}

{{--                                </a>--}}

{{--                            </figure>--}}

{{--                        </div>--}}

                    </div>

                </div>

            </section>

{{--            @include('partials.index-page-review-component')--}}
            </br>
            </br>
            <section class="pt-40 pb-100">

                <div class="container">

                    <div class="section-title">
                        <h2><span><span>Travel</span> Articles</span></h2>
                    </div>

                    <div class="post-grid-wrapper-01">

                        <div class="row equal-height cols-1 cols-sm-2 cols-md-3 gap-10 gap-md-20 mb-40">

                            <div class="col-12 col-md-4">

                                <article class="post-grid-01">

                                    <div class="image">
                                        <img src="/theme/images/image-regular/07.jpg" alt="images" />
                                    </div>
                                    <div class="content">
                                        <span class="post-date text-muted">Mar 15, 2017</span>
                                        <h4>Raising say express had chiefly detract</h4>
                                        <a href="#" class="h6">Read this <i class="elegent-icon-arrow_right"></i></a>
                                    </div>

                                </article>

                            </div>

                            <div class="col">

                                <article class="post-grid-01">

                                    <div class="image">
                                        <img src="/theme/images/image-regular/08.jpg" alt="images" />
                                    </div>
                                    <div class="content">
                                        <span class="post-date text-muted">Mar 15, 2017</span>
                                        <h4>Cordially convinced incommode existence</h4>
                                        <a href="#" class="h6">Read this <i class="elegent-icon-arrow_right"></i></a>
                                    </div>

                                </article>

                            </div>

                            <div class="col">

                                <article class="post-grid-01">

                                    <div class="image">
                                        <img src="/theme/images/image-regular/09.jpg" alt="images" />
                                    </div>
                                    <div class="content">
                                        <span class="post-date text-muted">Mar 15, 2017</span>
                                        <h4>Improving age our her cordially intention</h4>
                                        <a href="#" class="h6">Read this <i class="elegent-icon-arrow_right"></i></a>
                                    </div>

                                </article>

                            </div>

                        </div>

                    </div>

                </div>

        </div>

@endsection
