<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Beasiswa- Uniks</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('landing-page') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('landing-page') }}/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('landing-page') }}/css/swiper.css" rel="stylesheet">
	<link href="{{ asset('landing-page') }}/css/magnific-popup.css" rel="stylesheet">
	<link href="{{ asset('landing-page') }}/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('landing-page') }}/images/favicon.ico">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            {{-- <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('landing-page') }}/images/logo.svg" alt="alternative"></a> 
             --}}
             <h2 class="text-dark">UNIKS</h2>
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/berita">BERITA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/kontak">KONTAK <span class="sr-only">(current)</span></a>
                    </li>
                  
                <span class="nav-item">
                    <a class="btn-outline-sm" href="/login">LOG IN</a>
                </span>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="/daftar">DAFTAR</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    @yield('content')



    	
    <!-- Scripts -->
    <script src="{{ asset('landing-page') }}/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('landing-page') }}/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('landing-page') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('landing-page') }}/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('landing-page') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('landing-page') }}/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('landing-page') }}/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('landing-page') }}/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>