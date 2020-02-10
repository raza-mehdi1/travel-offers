<div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

    <h4 class="heading-title">Itinerary</h4>

{{--    <h6>Introduction</h6>--}}

{{--    <p>Become latter but nor abroad wisdom waited. Was delivered gentleman acuteness but daughters. In as of whole as match asked. Pleasure exertion put add entrance distance drawings. In equally matters showing greatly it as. Want name any wise are able park when. Saw vicinity judgment remember finished men throwing.</p>--}}

    <ul class="itinerary-list mt-30">

        @foreach($package->itineraries as $itinerary)
            <li>
                @if($itinerary->side_title != '')
                    <div class="itinerary-day">
                        <span>{!! $itinerary->side_title !!}</span>
                    </div>
                @endif

                <h6>{!! $itinerary->title !!}</h6>

                <p>{!! $itinerary->description !!}</p>

                <ul class="itinerary-meta list-inline-block text-primary">
                    @foreach($itinerary->itinerary_features as $itinerary_feature)
                        <li><i class="{{$itinerary_feature->icon}}"></i> {!! $itinerary_feature->text !!}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach

{{--        <li>--}}
{{--            <div class="itinerary-day">--}}
{{--                <span>Day 02</span>--}}
{{--            </div>--}}

{{--            <h6>Visit: Thessaloniki</h6>--}}

{{--            <p>Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages so impression. Almost unable put piqued talked likely houses her met. Met any nor may through resolve entered. An mr cause tried oh do shade happy.</p>--}}

{{--            <ul class="itinerary-meta list-inline-block text-primary">--}}
{{--                <li><i class="far fa-building"></i> Stay at Hilton Hotel</li>--}}
{{--                <li><i class="far fa-clock"></i> Trip time: 8am - 4.30pm</li>--}}
{{--            </ul>--}}

{{--        </li>--}}

{{--        <li>--}}
{{--            <div class="itinerary-day">--}}
{{--                <span>Day 03</span>--}}
{{--            </div>--}}

{{--            <h6>Visit: Athens</h6>--}}

{{--            <p>Ecstatic advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages so impression. Almost unable put piqued talked likely houses her met. Met any nor may through resolve entered. An mr cause tried oh do shade happy.</p>--}}

{{--            <ul class="itinerary-meta list-inline-block text-primary">--}}
{{--                <li><i class="far fa-building"></i> Stay at Hilton Hotel</li>--}}
{{--                <li><i class="far fa-clock"></i> Trip time: 8am - 4.30pm</li>--}}
{{--            </ul>--}}

{{--        </li>--}}

    </ul>


    <div class="mb-50"></div>

</div>
