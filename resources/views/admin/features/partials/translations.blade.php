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

                    <div class="form-group  {{ $errors->has($locale->locale.'.key') ? 'has-error' : '' }}">
                        <label>{{ __('general.key') }} *</label>
                        <input class="form-control" name="{{$locale->locale}}[key]" value="{{ @$feature ? $feature->translate($locale->locale)->key : old($locale->locale.'.key' ,optional($locale->locale)->{'key:'.$locale->locale}) }}" placeholder="@lang('general.key')">
                    </div>
                    <div class="form-group  {{ $errors->has($locale->locale.'.value') ? 'has-error' : '' }}">
                        <label>{{ __('general.value') }} *</label>
                        <input class="form-control" name="{{$locale->locale}}[value]" value="{{ @$feature ? $feature->translate($locale->locale)->value : old($locale->locale.'.value' ,optional($locale->locale)->{'value:'.$locale->locale}) }}" placeholder="@lang('general.value')">
                    </div>

                </div>

            @endforeach

        </div>
        <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
