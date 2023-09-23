@extends('website.layout')
@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1  class="text-dark">Berita</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="/">Home</a><i class="fa fa-angle-double-right"></i><span>Berita</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

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
                                    <h3 class="mb-3 text-primary">{{$item->judul}}</h3>
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
