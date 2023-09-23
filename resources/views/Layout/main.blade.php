<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sisfo SDIT</title>
    <!-- plugins:css -->
    <link href="{{ asset('dist/css/feather/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/ti-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/vendor.bundle.base.css') }}" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"> --}}
    {{-- <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css"> --}}
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="{{ asset('dist/css/vertical-layout/style.css') }}" rel="stylesheet">
    <!-- endinject -->
    <link href="{{ asset('landing-page') }}/assets/img/sdit/favicon.ico" rel="shortcut icon" />
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        referrerpolicy="no-referrer" rel="stylesheet" />
    @yield('style')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .collapse {
            visibility: visible !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller text-gray-900">
        @include('Layout.topbar')
        <div class="container-fluid page-body-wrapper">
            @include('Layout.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('dist/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('dist/js/chart.js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dist/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dist/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dist/js/template.js') }}"></script>
    <script src="{{ asset('dist/js/settings.js') }}"></script>
    <script src="{{ asset('dist/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    {{-- JQUERY --}}
    {{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> --}}
    {{-- DatePicker --}}
    {{-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script> --}}
    @yield('script')
    <script>
        function cancel() {
            window.location.reload()
        }
    </script>
</body>
