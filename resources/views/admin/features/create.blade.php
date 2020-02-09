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
                        <h1>Create Package Feature</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Package Features</a></li>
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
                    <form action="{{route('features.store')}}" method="post" autocomplete="off">
                        @csrf
                        @include('admin.features.partials.form_fields')
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

        $('#trip_start_date_time').datetimepicker(
            {
                minDate: 'now',
                format: 'YYYY-MM-DD HH:mm:ss',
                defaultDate:'now'
            }
        );

        $('#trip_end_date_time').datetimepicker(
            {
                minDate: 'now',
                format: 'YYYY-MM-DD HH:mm:ss',
                defaultDate: moment(new Date()).add(1,'days')
            }
        );




        //Initialize Select2 Elements
        $('.select2').select2()
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
