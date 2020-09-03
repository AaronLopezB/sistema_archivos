<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <title>
        Archivos | Pacific Travels
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- Font Awesome -->
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />
    <!-- iCheck -->
    <link href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet" />
    <!-- JQVMap -->
    {{--
        <link href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet"/>
    --}}
    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminlte.css') }}" rel="stylesheet" />
    <!-- overlayScrollbars -->
    <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet" />
    <!-- Daterange picker -->
    <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <!-- summernote -->
    <link href="{{ asset('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" />
    <!-- fullCalendar -->
    <link href="{{ asset('fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('fullcalendar/dist/fullcalendar.print.min.css') }}" media="print" rel="stylesheet" />
    <!-- SweetAlert2 -->
    <link href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}" rel="stylesheet" />
    <!-- Toastr -->
    <link href="{{ asset('plugins/toastr/toastr.min.css') }}" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.navbar')
        @include('layouts.asidebar')
        <div class="content-wrapper">
            @yield('navegacion')
            <div class="container-fluid" id="alerta">
            </div>
            @yield('content')
        </div>
        <footer class="main-footer">
            <strong>
                Copyright © {{ date('Y') }}
                <a href="javascript:;">
                    Pacific Travels
                </a>
                .
            </strong>
            All rights reserved.
            <strong class="pull-right">
                Power by
                <strong>
                    Diego Enrique Sanchez
                </strong>
            </strong>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script>
        var baseuri='{!!asset('');!!}';
    </script>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}">
    </script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}">
    </script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    </script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}">
    </script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}">
    </script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}">
    </script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}">
    </script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}">
    </script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}">
    </script>
    {{--
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('dist/js/pages/dashboard.js') }}">
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}">
    </script>
    --}}
    <!-- fullCalendar 2.2.5 -->
    <script src="{{ asset('fullcalendar/dist/fullcalendar.min.js') }}">
    </script>
    <script src="{{ asset('fullcalendar/dist/locale-all.js') }}">
    </script>
    <script src="{{ asset('fullcalendar/dist/locale/es.js') }}">
    </script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}">
    </script>
    <!-- Toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}">
    </script>
    <script>
        const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
            
            $('#origen_pacific_1').hide();
            $('#origen_home_1').hide();
            $('#srf_pacific_1').hide();
            $('#hmt_1').hide();
            $('#hmi_1').hide();
                        

            // $(document).ready(function(){
            resultados();
            setInterval(resultados,2000);
            // });

            function resultados(){
                $.ajax({
                    url: baseuri+'datos-cookies',
                    type: 'GET',
                    dataType: 'json',
                    success:function(res){
                        if (res.res1 == true && res.res2 == true) {
                            $('#alerta').html('<div class="alert alert-primary" role="alert">El sistema ya se encuentra actualizado</div>');
                        }

                        if (res.origen_pacific != null) {
                            $('#origen_pacific_1').show();
                            $('#origen_pacific').html(res.origen_pacific);
                        }else {
                            $('#origen_pacific_1').hide();
                            $('#origen_pacific').html('');
                        }
                        if (res.origen_home != null) {
                            $('#origen_home_1').show();
                            $('#origen_home').html(res.origen_home);
                        }else {
                            $('#origen_home_1').hide();
                            $('#origen_home').html('');
                        }
                        if (res.srf_pacific != null) {
                            $('#srf_pacific_1').show();
                            $('#srf_pacific').html(res.srf_pacific);
                        }else {
                            $('#srf_pacific_1').hide();
                            $('#srf_pacific').html('');
                        }

                        if (res.errores_pacific != null) {
                            $('#errores_pacific_1').show();
                            $('#errores_pacific').html(res.errores_pacific);
                        }else {
                            $('#errores_pacific_1').hide();
                            $('#errores_pacific').html('');
                        }

                        if (res.srf_pacific_update != null) {
                            $('#srf_pacific_2').show();
                            $('#srf_pacific_udpate').html(res.srf_pacific_update);
                        }else {
                            $('#srf_pacific_2').hide();
                            $('#srf_pacific_udpate').html('');
                        }

                        if (res.hmt != null) {
                            $('#hmt_1').show();
                            $('#hmt').html(res.hmt);
                        }else {
                            $('#hmt_1').hide();
                            $('#hmt').html('');
                        }
                        if (res.hmi != null) {
                            $('#hmi_1').show();
                            $('#hmi').html(res.hmi);
                        }else {
                            $('#hmi_1').hide();
                            $('#hmi').html('');
                        }

                        if (res.errores_home != null) {
                            $('#errores_home_1').show();
                            $('#errores_home').html(res.errores_home);
                        }else {
                            $('#errores_home_1').hide();
                            $('#errores_home').html('');
                        }

                        if (res.hmt_update != null) {
                            $('#hmt_2').show();
                            $('#hmt_update').html(res.hmt_update);
                        }else {
                            $('#hmt_2').hide();
                            $('#hmt_update').html('');
                        }
                        if (res.hmi_update != null) {
                            $('#hmi_2').show();
                            $('#hmi_update').html(res.hmi_update);
                        }else {
                            $('#hmi_2').hide();
                            $('#hmi_update').html('');
                        }
                    }
                });
            }
    </script>
    @yield('script')
</body>

</html>