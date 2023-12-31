<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Beasiswa- Uniks</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('website') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('website') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('website') }}/css/style.css" rel="stylesheet">
    @yield('style')
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a class="text-decoration-none" href="">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">BEASISWA</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">UNIKS</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a class="text-decoration-none d-block d-lg-none" href="">
                        <span class="h1 text-uppercase text-dark bg-light px-2">BEASISWA</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">UNIKS</span>
                    </a>
                    <button class="navbar-toggler" data-target="#navbarCollapse" data-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a class="nav-item nav-link active" href="/">Home</a>
                            <a class="nav-item nav-link" href="/infobeasiswa">Info Beasiswa</a>
                            <a class="nav-item nav-link" href="/berita">Berita</a>
                            <a class="nav-item nav-link" href="/about">About</a>
                            <a class="nav-item nav-link" href="/kontak">Contact</a>
                            <div class="navbar-nav mr-auto p-2">
                                <a class="btn btn-primary" href="/login">Login</a>
                                &nbsp;&nbsp;
                                {{-- <a href="/daftar" class="btn btn-secondary">Daftar</a> --}}

                            </div>

                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Content -->

    @yield('content')

    <!-- Content -->



    <!-- Back to Top -->

    <a class="btn btn-primary back-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>

    @yield('script')


    <!-- JavaScript Libraries -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('website') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('website') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('website') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('website') }}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('website') }}/js/main.js"></script>
    <script>
        new DataTable('#example', {
            fixedHeader: true,
            responsive: true
        });
    </script>
</body>

</html>
