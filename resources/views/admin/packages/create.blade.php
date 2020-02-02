@extends('admin.layouts.app')

@section('styles')
{{--    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
{{--    <link href="/css/prettify-1.0.css" rel="stylesheet">--}}
{{--    <link href="/css/base.css" rel="stylesheet">--}}
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
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
                        <h1>Create Package</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Advanced Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Create New Package</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <form action="{{route('packages.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="col-12">
                                @include('admin.layouts.partials.message')
                                <!-- Custom Tabs -->
                                <div class="form-group">
                                    <label>{{ __('general.trip_start_date_time') }} *</label>
                                    <div class="input-group date" id="trip_start_date_time" data-target-input="nearest">
                                        <div class="input-group-append" data-target="#trip_start_date_time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        <input type="text" name="trip_start_date_time" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#trip_start_date_time"  value="{{ old('trip_start_date_time') }}"/>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('trip_end_date_time') ? 'has-error' : '' }}">
                                    <label>{{ __('general.trip_end_date_time') }} *</label>
                                    <div class="input-group date {{ $errors->has('trip_end_date_time') ? 'border-danger' : '' }}" id="trip_end_date_time"  data-target-input="nearest">
                                        <div class="input-group-append" data-target="#trip_end_date_time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        <input type="text" name="trip_end_date_time" class="form-control datetimepicker-input" data-toggle="datetimepicker"  data-target="#trip_end_date_time" value="{{ old('trip_end_date_time') }}"/>
                                    </div>
                                </div>

                                <div class="form-group  {{ $errors->has('price_per_head') ? 'has-error' : '' }}">
                                    <label>{{ __('general.price_per_head') }} *</label>
                                    <input class="form-control" name="price_per_head" {{ $errors->has('price_per_head') ? 'border-danger' : '' }} value="{{ old('price_per_head') }}" placeholder="@lang('general.price_per_head')">
                                </div>

                                @include('admin.packages.partials.translations')
                                <!-- ./card -->
                                <button class="btn btn-primary btn-block">{{__('general.save')}}</button>
                            </div>
                            <!-- /.col -->
                        </div>
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

<script>
    $(function () {

        $('#trip_start_date_time').datetimepicker({
            minDate: 'now',
            format: 'YYYY-MM-DD HH:mm:ss'
        });

        $('#trip_end_date_time').datetimepicker({
            minDate: 'now',
            format: 'YYYY-MM-DD HH:mm:ss'
        });




        //Initialize Select2 Elements
        // $('.select2').select2()
        //
        // //Initialize Select2 Elements
        // $('.select2bs4').select2({
        //     theme: 'bootstrap4'
        // })
        //
        // //Datemask dd/mm/yyyy
        // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
        // //Datemask2 mm/dd/yyyy
        // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
        // //Money Euro
        // $('[data-mask]').inputmask()
        //
        // //Date range picker
        // $('#reservation').daterangepicker()
        // //Date range picker with time picker
        // $('#reservationtime').daterangepicker({
        //     timePicker: true,
        //     timePickerIncrement: 30,
        //     locale: {
        //         format: 'MM/DD/YYYY hh:mm A'
        //     }
        // })
        // //Date range as a button
        // $('#daterange-btn').daterangepicker(
        //     {
        //         ranges   : {
        //             'Today'       : [moment(), moment()],
        //             'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //             'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        //             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //             'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        //             'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        //         },
        //         startDate: moment().subtract(29, 'days'),
        //         endDate  : moment()
        //     },
        //     function (start, end) {
        //         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        //     }
        // )
        //
        // //Timepicker
        // $('#timepicker').datetimepicker({
        //     format: 'LT'
        // })
        //
        // //Bootstrap Duallistbox
        // $('.duallistbox').bootstrapDualListbox()
        //
        // //Colorpicker
        // $('.my-colorpicker1').colorpicker()
        // //color picker with addon
        // $('.my-colorpicker2').colorpicker()
        //
        // $('.my-colorpicker2').on('colorpickerChange', function(event) {
        //     $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        // });
        //
        // $("input[data-bootstrap-switch]").each(function(){
        //     $(this).bootstrapSwitch('state', $(this).prop('checked'));
        // });

    })
</script>
@endsection
