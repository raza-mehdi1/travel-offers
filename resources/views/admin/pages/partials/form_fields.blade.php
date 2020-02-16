<div class="card-body">
    <div class="col-12">
    <!-- Custom Tabs -->
        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
            <label>{{ __('general.slug') }} *</label>
            <div class="input-group">
                <input id="slug" type="text" name="slug" class="form-control" value="{{ @$page ? $page->slug : old('slug') }}"/>
            </div>
        </div>

        @include('admin.pages.partials.translations')
        <!-- ./card -->
        <button class="btn btn-primary btn-block">{{__('general.save')}}</button>
    </div>
    <!-- /.col -->
</div>
