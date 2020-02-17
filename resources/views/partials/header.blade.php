<header id="header-waypoint-sticky" class="header-main header-mobile-menu with-absolute-navbar">

    <div class="header-outer clearfix">

        <div class="header-inner">

            <div class="row shrink-auto-lg gap-0 align-items-center">

                <div class="col-5 col-shrink">
                    <div class="col-inner">
                        <div class="main-logo">
                            <a href="index.html"><img src="/theme/images/logo2.png" alt="images" style="width: 100px" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-7 col-shrink order-last-lg" style="border-right: transparent !important;">
                    <div class="col-inner">
                        <ul class="nav-mini-right">
{{--                            <li class="d-none d-sm-block">--}}
{{--                                <a href="#loginFormTabInModal-register" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">--}}
{{--                                    <span class="icon-font"><i class="icon-user-follow"></i></span> Register--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="d-none d-sm-block">--}}
{{--                                <a href="#loginFormTabInModal-login" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">--}}
{{--                                    <span class="icon-font"><i class="icon-login"></i></span> Login--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="d-block d-sm-none">--}}
{{--                                <a href="#loginFormTabInModal-register" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">--}}
{{--                                    Login / Register--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li>
                                <button class="btn btn-toggle collapsed" data-toggle="collapse" data-target="#mobileMenu"></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-auto">

                    <div class="navbar-wrapper">

                        <div class="navbar navbar-expand-lg">

                            <div id="mobileMenu" class="collapse navbar-collapse">

                                <nav class="main-nav-menu main-menu-nav navbar-arrow">

                                    <ul class="main-nav">
                                        <li>
                                            <a href="{{route('index')}}">Home</a>
                                        </li>
                                        @foreach(\App\Page::all() as $page)
                                        <li>
                                            <a href="{{route('page', $page->slug)}}">{!! ucwords($page->slug) !!}</a>
                                        </li>
                                        @endforeach
                                        <li>
                                            <a href="javascript:void(0)">Tour Packages</a>
                                            <ul>
                                                @foreach(\App\Package::all() as $package)
                                                <li><a href="{{route('details', $package->title)}}">{!! $package->title !!}</a></li>
                                                @endforeach
{{--                                                <li><a href="tour-result-grid.html">Result - Grid</a></li>--}}
{{--                                                <li><a href="tour-detail.html">Detail 01</a></li>--}}
{{--                                                <li><a href="tour-detail-02.html">Detail 02</a></li>--}}
{{--                                                <li><a href="tour-detail-03.html">Detail 03</a></li>--}}
{{--                                                <li><a href="tour-detail-04.html">Detail 04</a></li>--}}
{{--                                                <li><a href="tour-detail-05.html">Detail 05</a></li>--}}
{{--                                                <li><a href="tour-detail-empty-booking.html">Detail - empty booking</a></li>--}}
{{--                                                <li><a href="tour-payment.html">Payment</a></li>--}}
{{--                                                <li><a href="tour-conformation.html">Conformation</a></li>--}}
{{--                                                <li><a href="destinations-01.html">Destinations 01</a></li>--}}
{{--                                                <li><a href="destinations-02.html">Destinations 02</a></li>--}}
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.html">Contact us</a></li>

                                    </ul>

                                </nav><!--/.nav-collapse -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>
