<div class="card-body">
    <div class="col-12">
    <!-- Custom Tabs -->
        <div class="form-group {{ $errors->has('trip_start_date_time') ? 'has-error' : '' }}">
            <label>{{ __('general.trip_start_date_time') }} *</label>
            <div class="input-group date date-field " id="trip_start_date_time" data-target-input="nearest">
                <div class="input-group-append" data-target="#trip_start_date_time" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input type="text" name="trip_start_date_time" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#trip_start_date_time"  value="{{ @$package ? $package->trip_start_date_time : old('trip_start_date_time') }}"/>
            </div>
        </div>
        <div class="form-group {{ $errors->has('trip_end_date_time') ? 'has-error' : '' }}">
            <label>{{ __('general.trip_end_date_time') }} *</label>
            <div class="input-group date date-field " id="trip_end_date_time"  data-target-input="nearest">
                <div class="input-group-append" data-target="#trip_end_date_time" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input type="text" name="trip_end_date_time" class="form-control datetimepicker-input" data-toggle="datetimepicker"  data-target="#trip_end_date_time" value="{{ @$package ? $package->trip_end_date_time : old('trip_end_date_time') }}"/>
            </div>
        </div>

        <div class="form-group  {{ $errors->has('price_per_head') ? 'has-error' : '' }}">
            <label>{{ __('general.price_per_head') }} *</label>
            <input class="form-control" name="price_per_head" value="{{ @$package ? $package->price_per_head : old('price_per_head') }}" placeholder="@lang('general.price_per_head')">
        </div>

        <div class="form-group  {{ $errors->has('itinerary_ids') ? 'has-error' : '' }}">
            <label>{{ __('general.itineraries') }} *</label>
            <select class="form-control select2" multiple="multiple" name="itinerary_ids[]">
                @foreach($itineraries as $itinerary)
                    <option value="{{$itinerary->id}}"
                        @include('admin.layouts.partials.select-option-decision',
                                    [
                                        'value'     =>  $itinerary->id,
                                        'old'       =>  old('itinerary_ids'),
                                        'editPageModelValuesArray'
                                                    =>
                                        !is_null(@$package) ? @$package->itineraries()->pluck('itinerary_id')->toArray() : []
                                    ]
                                )
                    >
                        {{$itinerary->title}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group  {{ $errors->has('feature_ids') ? 'has-error' : '' }}">
            <label>{{ __('general.features') }} *</label>
            <select class="form-control select2" multiple="multiple" name="feature_ids[]">
                @foreach($features as $feature)
                    <option value="{{$feature->id}}"
                        @include('admin.layouts.partials.select-option-decision',
                                    [
                                        'value'     =>  $feature->id,
                                        'old'       =>  old('feature_ids'),
                                        'editPageModelValuesArray'
                                                    =>
                                        !is_null(@$package) ? @$package->features()->pluck('feature_id')->toArray() : []
                                    ]
                                )
                    >
                        {!!  $feature->key !!}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group  {{ $errors->has('include_addon_ids') ? 'has-error' : '' }}">
            <label>{{ __('general.include_addons') }} *</label>
            <select class="form-control select2" multiple="multiple" name="include_addon_ids[]">
                @foreach($addons as $addon)
                    <option value="{{$addon->id}}"
                        @include('admin.layouts.partials.select-option-decision',
                                    [
                                        'value'     =>  $addon->id,
                                        'old'       =>  old('include_addon_ids'),
                                        'editPageModelValuesArray'
                                                    =>
                                        !is_null(@$package) ? @$package->included_addons()->pluck('addon_id')->toArray() : []
                                    ]
                                )
                    >
                        {{$addon->title}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group  {{ $errors->has('exclude_addon_ids') ? 'has-error' : '' }}">
            <label>{{ __('general.exclude_addons') }} *</label>
            <select class="form-control select2" multiple="multiple" name="exclude_addon_ids[]">
                @foreach($addons as $addon)
                    <option value="{{$addon->id}}"
                        @include('admin.layouts.partials.select-option-decision',
                                    [
                                        'value'     =>  $addon->id,
                                        'old'       =>  old('exclude_addon_ids'),
                                        'editPageModelValuesArray'
                                                    =>
                                        !is_null(@$package) ? @$package->excluded_addons()->pluck('addon_id')->toArray() : []
                                    ]
                                )
                    >
                        {{$addon->title}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group  {{ $errors->has('image_ids') ? 'has-error' : '' }}">
            <label>{{ __('general.images') }} *</label>
            <select id="imagepicker" class="form-control image-picker show-html" name="image_ids[]" multiple="multiple">
                @foreach($images as $image)
                    <option data-img-src="{{$image->storage_path}}"
                            data-img-class="image-size-in-image-picker"
                            value="{{$image->id}}"
                            @include('admin.layouts.partials.select-option-decision',
                                [
                                    'value'     =>  $image->id,
                                    'old'       =>  old('image_ids'),
                                    'editPageModelValuesArray'
                                                =>
                                    !is_null(@$package) ? @$package->images()->pluck('image_id')->toArray() : []
                                ]
                            )
                    >
                        {{asset($image->path)}}
                    </option>
                @endforeach
            </select>
        </div>

    @include('admin.packages.partials.translations')
    <!-- ./card -->
        <button class="btn btn-primary btn-block">{{__('general.save')}}</button>
    </div>
    <!-- /.col -->
</div>
