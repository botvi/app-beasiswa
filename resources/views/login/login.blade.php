<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>Beasiswa</title>
    <!-- plugins:css -->
    <link href="{{ asset('template/vendors/feather/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="{{ asset('template/css/vertical-layout-light/style.css') }}" rel="stylesheet">
    <!-- endinject -->
    <link href="{{ asset('template/images/favicon.png') }}" rel="shortcut icon" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h4>SISTEM INFORMASI BESISWA</h4>
                            <h6 class="font-weight-light">UNIVERSITAS ISLAM KUANTAN SINGINGI</h6>
                            <form action="{{ route('postlogin') }}" class="pt-3" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control form-control-lg" id="username" name="username"
                                        placeholder="Username" type="username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" id="password" name="password"
                                        placeholder="Password" type="password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-warning btn-block " type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template//js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/js/template.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <script src="{{ asset('template/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>
