@extends('admin.layouts.app')

@section('styles')
    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    <style>
        .pull-right{
            float: right;
        }
        .mt-60{
            margin-top: 60px;"
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            @include('admin.layouts.partials.message')
            <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-tools">
                            <a class="btn btn-primary btn-flat" type="button" href="{{url()->previous()}}" class="btn btn-tool">Back</a>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <form action="{{route('pages.store')}}" method="post" autocomplete="off">
                        @csrf
                        @include('admin.pages.partials.form_fields')
                    </form>
                </div>

                    <!-- /.card-body -->
                <div class="card-footer">
{{--                Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about--}}
{{--                the plugin.--}}
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection


@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            var locales = ['en', 'az'];
            locales.forEach(function (locale, key) {
                $('#summernote'+locale).summernote({
                    height: 600,
                });
            });
        });
    </script>
@endsection
