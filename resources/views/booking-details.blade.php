@extends('app')

@section('content')
    <div class="main-wrapper scrollspy-container">

        <section class="page-wrapper page-detail">

            {{--            @include('partials.page-title')--}}

            <div class="container pt-30">

                <div class="row gap-20 gap-lg-40">

                    @include('partials.book-now')

                    @include('partials.booking-information-aside')

                </div>

            </div>

        </section>

    </div>
@endsection
