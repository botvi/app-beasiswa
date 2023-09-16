@extends('Layout.main')
@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h4 mb-3">{!! $judul !!}</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="blog_details">

                            <p>
                            <p>{!! $artikel !!}</p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
