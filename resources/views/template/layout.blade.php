<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>App Beasiswa</title>
    <!-- plugins:css -->
    <link href="{{ asset('template/vendors/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link href="{{ asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/js/select.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="{{ asset('template/css/vertical-layout-light/style.css') }}" rel="stylesheet" />
    <!-- endinject -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href="{{ asset('template/images/favicon.png') }}" rel="shortcut icon" />
    @yield('style')
    <style>
        .change::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: rgb(255, 255, 255);
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center bg-primary ">
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-first bg-primary text-light">
                <button class="navbar-toggler navbar-toggler align-self-center" data-toggle="minimize" type="button">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block ">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search text-white"></i>
                                </span>
                            </div>
                            <input aria-describedby="search" aria-label="search" class="form-control "
                                id="navbar-search-input" style="color: white;" type="text" value="Search now">
                        </div>
                    </li>
                </ul>


                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" data-toggle="offcanvas"
                    type="button">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->

            @include('template.navbar')

            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper ">
                    <div class="row ">


                        @yield('content')


                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @yield('modal')
    {{-- @include('sweetalert::alert') --}}


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- plugins:js -->

    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('template/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('template/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/js/template.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <script src="{{ asset('template/js/todolist.js') }}"></script>
    <!-- End custom js for this page-->
    @yield('script')
    <script>
        function destory(url) {
            console.log("ok");
            Swal.fire({
                title: 'Yakin?',
                text: "data ini akan di hapus?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oke'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
    </script>

</body>

</html>
