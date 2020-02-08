<div class="card-body">
    <div class="col-12">
    <!-- Custom Tabs -->
    @if(@$itinerary_features)
        <div class="form-group {{ $errors->has('itinerary_feature_ids') ? 'has-error' : '' }}">
            <label>{{ __('general.features') }} *</label>
            <div class="input-group">
                <select class="select2 form-control" name="itinerary_feature_ids[]"  multiple="multiple">
                    @foreach(@$itinerary_features as $itinerary_feature)
                        <option value="{{$itinerary_feature->id}}"
                            @if(@$itinerary)
                                {{
                                    (in_array($itinerary_feature->id, @$itinerary->itinerary_features()->pluck('itinerary_feature_id')->toArray()))
                                        ||
                                    !is_null(old('itinerary_feature_ids')) && in_array($itinerary_feature->id, old('itinerary_feature_ids'))
                                        ?
                                    'selected'
                                        :
                                    ''
                                }}
                            @else
                                {{
                                    !is_null(old('itinerary_feature_ids')) && in_array($itinerary_feature->id, old('itinerary_feature_ids'))
                                    ?
                                    'selected'
                                    :
                                    ''
                                }}
                            @endif
                        >
                            {{$itinerary_feature->text}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
{{--        <div class="form-group {{ $errors->has('trip_end_date_time') ? 'has-error' : '' }}">--}}
{{--            <label>{{ __('general.trip_end_date_time') }} *</label>--}}
{{--            <div class="input-group date date-field " id="trip_end_date_time"  data-target-input="nearest">--}}
{{--                <div class="input-group-append" data-target="#trip_end_date_time" data-toggle="datetimepicker">--}}
{{--                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>--}}
{{--                </div>--}}
{{--                <input type="text" name="trip_end_date_time" class="form-control datetimepicker-input" data-toggle="datetimepicker"  data-target="#trip_end_date_time" value="{{ @$itinerary ? $itinerary->trip_end_date_time : old('trip_end_date_time') }}"/>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="form-group  {{ $errors->has('price_per_head') ? 'has-error' : '' }}">--}}
{{--            <label>{{ __('general.price_per_head') }} *</label>--}}
{{--            <input class="form-control" name="price_per_head" value="{{ @$itinerary ? $itinerary->price_per_head : old('price_per_head') }}" placeholder="@lang('general.price_per_head')">--}}
{{--        </div>--}}

        @include('admin.itineraries.partials.translations')
        <!-- ./card -->
        <button class="btn btn-primary btn-block">{{__('general.save')}}</button>
    </div>
    <!-- /.col -->
</div>
