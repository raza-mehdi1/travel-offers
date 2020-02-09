<div class="card-body">
    <div class="col-12">
    <!-- Custom Tabs -->
        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
            <label>{{ __('general.image') }} *</label>
            <div class="input-group" id="image" data-target-input="nearest">
                <input type="file" name="path" class="form-control"  value="{{ @$image ? $image->path : old('path') }}"/>
            </div>
        </div>

        <!-- ./card -->
        <button class="btn btn-primary btn-block">{{__('general.save')}}</button>
    </div>
    <!-- /.col -->
</div>
