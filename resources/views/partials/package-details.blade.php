<div id="detail-content-sticky-nav-01" class="detail-header mb-30">
    <h3>{{$package->title}}</h3>

{{--    @include('partials.details-page-reviews-component')--}}

    <p class="lead">{{$package->tag_line}}</p>

    <ul class="list-inline-block highlight-list mt-30">
        @foreach($package->features as $feature)
            <li>
                <span class="icon-font d-block">
                    <i class="{{$feature->icon}}"></i>
                </span>
                {!!  $feature->key !!}<br />{!! $feature->value !!}
            </li>
        @endforeach
{{--        <li>--}}
{{--            <span class="icon-font d-block">--}}
{{--                <i class="linea-icon-basic-flag1"></i>--}}
{{--            </span>--}}
{{--            starting point:<br /><strong>Zagreb</strong>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <span class="icon-font d-block">--}}
{{--                <i class="linea-icon-basic-flag2"></i>--}}
{{--            </span>--}}
{{--            ending point:<br /><strong>Athens</strong>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <span class="icon-font d-block">--}}
{{--                <i class="linea-icon-ecommerce-dollar"></i>--}}
{{--            </span>--}}
{{--            From<br /><strong>$125.99</strong> / person--}}
{{--        </li>--}}
    </ul>

    <div class="mb-30"></div>

    <p>{!! $package->description !!}</p>

{{--    <h5 class="mt-30">What makes this tour very interesting</h5>--}}

{{--    <ul class="list-icon-data-attr font-ionicons">--}}
{{--        <li data-content="&#xf383">Excited him now natural saw passage offices you minuter. Moments its musical age explain.</li>--}}
{{--        <li data-content="&#xf383">Farther so friends am to detract do private.</li>--}}
{{--        <li data-content="&#xf383">Procured is material his offering humanity laughing moderate can.</li>--}}
{{--        <li data-content="&#xf383">She did open find pain some out. If we landlord stanhill mr whatever pleasure</li>--}}
{{--    </ul>--}}

</div>
