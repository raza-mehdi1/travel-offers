<div class="card-body">
    <div class="col-12">
    <!-- Custom Tabs -->
        <div class="form-group {{ $errors->has('icon') ? 'has-error' : '' }}">
            <label>{{ __('general.icon') }} *</label>
            <div class="input-group" id="icon" data-target-input="nearest">
                <select name="icon" class="form-control select2">
                    @foreach(config('linea-icons') as $icon)
                        <option class="" value="{{$icon}}"
                            @if(@$feature && !is_null(@$feature))
                                {{$feature->icon == $icon ? 'selected' : ''}}
                            @endif
                        >
                            {{$icon}}
                        </option>
                    @endforeach
                </select>
{{--                <input type="text" name="trip_start_date_time" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#trip_start_date_time"  value="{{ @$itinerary ? $itinerary->trip_start_date_time : old('trip_start_date_time') }}"/>--}}
            </div>
        </div>

        @include('admin.features.partials.translations')
        <!-- ./card -->
        <button class="btn btn-primary btn-block">{{__('general.save')}}</button>
    </div>
    <!-- /.col -->
</div>
