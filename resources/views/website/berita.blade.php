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
                                <h1 data-animation="bounceIn" data-delay="0.2s">List Berita</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">List Berita</a></li>
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
 <!-- Blog Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5 wow slideInUp mb-5">
                    @foreach ($result as $item)
                        {{-- <div class="col-md-6 wow slideInUp mb-5" data-wow-delay="0.1s"> --}}
                            <div class="blog-item  rounded overflow-hidden">
                                {{-- <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/berita-1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                        href="">Web Design</a>
                                </div> --}}
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i
                                                class="far fa-calendar-alt text-primary me-2"></i>{{ $item->created_at }}</small>
                                    </div>
                                    <h4 class="mb-3">{{$item->judul}}</h4>
                                    {{-- <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p> --}}
                                    {{-- <a class="text-uppercase" href="{{ url('berita/beritaview/' . $item->id) }}">Read More <i
                                            class="bi bi-arrow-right"></i></a> --}}
                                            <p>
                                                {{Str::limit(strip_tags($item->artikel))}} </p>
                                            <a href="{{ url('berita/beritaview/' . $item->id) }}" class="btn">Read More..</a>


                                </div>
                            {{-- </div> --}}
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- Blog list End -->

        </div>
    </div>
</div>
@endsection



