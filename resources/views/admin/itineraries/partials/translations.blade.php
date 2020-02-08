<div class="card">
    <div class="card-header d-flex p-0">
        <h3 class="card-title p-3">Translatable fields</h3>
        <ul class="nav nav-pills ml-auto p-2">
            @foreach(\App\Locale::all() as $locale)
                <li class="nav-item {{$locale->locale == 'en' ? 'active' : ''}}"><a class="nav-link {{$locale->locale == 'en' ? 'active' : ''}}" href="#tab_{{$locale->locale}}" data-toggle="tab">{{$locale->locale_name}}</a></li>
                <input type="hidden" name="locale[]" value="{{ $locale->locale }}" >
            @endforeach
        </ul>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content">
            @foreach(\App\Locale::all() as $locale)
                <div class="tab-pane {{$locale->locale == 'en' ? 'active' : ''}}" id="tab_{{$locale->locale}}">

                    <div class="form-group  {{ $errors->has($locale->locale.'.title') ? 'has-error' : '' }}">
                        <label>{{ __('general.title') }} *</label>
                        <input class="form-control" name="{{$locale->locale}}[title]" value="{{ @$itinerary ? $itinerary->translate($locale->locale)->title : old($locale->locale.'.title' ,optional($locale->locale)->{'title:'.$locale->locale}) }}" placeholder="@lang('general.title')">
                    </div>

                    <div class="form-group  {{ $errors->has($locale->locale.'.side_title') ? 'has-error' : '' }}">
                        <label>{{ __('general.side_title') }} *</label>
                        <input class="form-control" name="{{$locale->locale}}[side_title]" value="{{ @$itinerary ? $itinerary->translate($locale->locale)->side_title : old($locale->locale.'.side_title' ,optional($locale->locale)->{'side_title:'.$locale->locale}) }}" placeholder="@lang('general.side_title')">
                    </div>

                    <div class="form-group  {{ $errors->has($locale->locale.'.description') ? 'has-error' : '' }}">
                        <label>{{ __('general.description') }} *</label>
                        <textarea class="form-control" name="{{$locale->locale}}[description]"  placeholder="@lang('general.description')">{{ @$itinerary ? $itinerary->translate($locale->locale)->description : old($locale->locale.'.description' ,optional($locale->locale)->{'description:'.$locale->locale}) }}</textarea>
                    </div>

                </div>

            @endforeach

        </div>
        <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
