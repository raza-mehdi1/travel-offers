@extends('app')

@section('content')

    <!-- start Main Wrapper -->
    <div class="main-wrapper scrollspy-container">

        <section class="page-wrapper page-detail pt-0">

            <div class="pt-0 pt-xl-15"></div>

            @include('partials.details-page-menu')

            @include('partials.slick-carousel')

{{--            @include('partials.page-title')--}}

            <div class="container pt-30">

                <div class="row gap-20 gap-lg-40">

                    <div class="col-12 col-lg-8">

                        <div class="content-wrapper">

                            @include('partials.package-details')

                            <div class="mb-50"></div>

                            @include('partials.itineraries')

{{--                            @include('partials.map')--}}

                            @include('partials.addons')

{{--                            @include('partials.availabilities')--}}

{{--                            @include('partials.similar-tours')--}}

{{--                            @include('partials.faq')--}}

{{--                            @include('partials.reviews')--}}

                        </div>

                    </div>

                    @include('partials.make-booking')

                </div>

            </div>

        </section>

    </div>
    <!-- end Main Wrapper -->

@endsection


@section('scripts')

    <script type="text/javascript" src="/theme/js/custom-multiply-sticky.js"></script>
    <script>
        var packagePricePerHead = parseFloat('{{$package->price_per_head}}');
        var child_rate_fraction = parseFloat('{{config('travel-offers.child_rate_fraction')}}');
        // alert(child_rate_fraction);
        $('.slick-hero').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true
        });

        $('input[name="adult_guests"], input[name="child_guests"]').on('change', function () {
            calculate();
            console.log(adultsTotal+childrenTotal);
        });

        function calculate() {
            let adults = $('input[name="adult_guests"]').val();
            let children = $('input[name="child_guests"]').val();

            let packagePricePerHeadChildren = (packagePricePerHead * child_rate_fraction);

            let adultsTotal = Math.round(adults * packagePricePerHead);
            let childrenTotal = Math.round(children * packagePricePerHeadChildren);

            $('#child_cost_total').html(childrenTotal);
            $('#adult_cost_total').html(adultsTotal);

            $('#cost_per_head_adult').html(packagePricePerHead);
            $('#cost_per_head_child').html(packagePricePerHeadChildren);

            $('#adults').html(adults);
            $('#children').html(children);

            $('#total').html('AZN '+(adultsTotal+childrenTotal));
        }

        calculate();
    </script>
@endsection
