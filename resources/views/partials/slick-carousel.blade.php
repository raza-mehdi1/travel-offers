<div class="slick-carousel-wrapper slick-hero-wrapper clearfix">

    <div class="slick-carousel-inner">

        <div class="slick-hero">

            @foreach($package->images as $image)
            <div class="slick-item">
                <img src="{{$image->storage_path}}" alt="Images" style="height: 100%; width: auto; margin-left: 0" />
            </div>
            @endforeach

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/02.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/03.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/04.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/05.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/06.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/07.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/08.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

{{--            <div class="slick-item">--}}
{{--                <div class="image"><img src="/theme/images/image-slick-hero/09.jpg" alt="Images" /></div>--}}
{{--            </div>--}}

        </div>

    </div>

</div>
