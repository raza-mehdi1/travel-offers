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
                    <div class="form-group  {{ $errors->has($locale->locale.'.body') ? 'has-error' : '' }}">
                        <label>{{ __('general.body') }} *</label>
                        <textarea id="summernote{{$locale->locale}}" class=" form-control" name="{{$locale->locale}}[body]"  placeholder="@lang('general.body')">
                            {{ @$page ? $page->translate($locale->locale)->body : old($locale->locale.'.body' ,optional($locale->locale)->{'body:'.$locale->locale}) }}
                        </textarea>
                    </div>

                </div>

            @endforeach

        </div>
        <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
