<div class="card-body">
    <div class="col-12">
    <!-- Custom Tabs -->
{{--        <div class="form-group {{ $errors->has('trip_start_date_time') ? 'has-error' : '' }}">--}}
{{--            <label>{{ __('general.trip_start_date_time') }} *</label>--}}
{{--            <div class="input-group date date-field " id="trip_start_date_time" data-target-input="nearest">--}}
{{--                <div class="input-group-append" data-target="#trip_start_date_time" data-toggle="datetimepicker">--}}
{{--                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>--}}
{{--                </div>--}}
{{--                <input type="text" name="trip_start_date_time" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#trip_start_date_time"  value="{{ @$itinerary ? $itinerary->trip_start_date_time : old('trip_start_date_time') }}"/>--}}
{{--            </div>--}}
{{--        </div>--}}
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
