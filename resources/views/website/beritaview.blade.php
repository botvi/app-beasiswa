@extends('website.layout')
@section('content')
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Berita</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/berita">List Berita</a></li>
                                        <li class="breadcrumb-item"><a href="#">Berita</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Berita view Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{!!$judul!!}
                            </h2>
                           
                            <p>
                                <p>{!!$artikel!!}</p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Berita view Area End -->
    <!-- Courses area End -->
@endsection
