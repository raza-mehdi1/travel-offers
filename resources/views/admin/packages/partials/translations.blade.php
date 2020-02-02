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

                    <div class="form-group  {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label>{{ __('general.title') }} *</label>
                        <input class="form-control" name="{{$locale->locale}}[title]" {{ $errors->has('en.title') ? 'border-danger' : '' }} value="{{ old($locale->locale.'.title' ,optional($locale->locale)->{'title:'.$locale->locale}) }}" placeholder="@lang('general.title')">
                    </div>

                    <div class="form-group  {{ $errors->has('tag_line') ? 'has-error' : '' }}">
                        <label>{{ __('general.tag_line') }} *</label>
                        <input class="form-control" name="{{$locale->locale}}[tag_line]" {{ $errors->has('en.tag_line') ? 'border-danger' : '' }} value="{{ old($locale->locale.'.tag_line' ,optional($locale->locale)->{'tag_line:'.$locale->locale}) }}" placeholder="@lang('general.tag_line')">
                    </div>

                    <div class="form-group  {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label>{{ __('general.description') }} *</label>
                        <input class="form-control" name="{{$locale->locale}}[description]" {{ $errors->has('en.description') ? 'border-danger' : '' }} value="{{ old($locale->locale.'.description' ,optional($locale->locale)->{'description:'.$locale->locale}) }}" placeholder="@lang('general.description')">
                    </div>

                </div>

            @endforeach

        </div>
        <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
