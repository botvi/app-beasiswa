@extends('Layout.main')
@section('style')
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/heroicons@1.0.4/dist/css/heroicons.min.css" rel="stylesheet">
    <link href="{{ asset('plugins/summernote/summernote-lite.css') }}" rel="stylesheet">
    <style>
        .search-input {
            padding: 8px;
            width: 300px;
            border-radius: 4px 0 0 4px;
        }

        .search-btn {
            padding: 8px;
            border-radius: 0 4px 4px 0;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between mb-3">
            <h1 class="h4 mb-3">Form Input Berita</h1>
        </div>
        <div class="row" id="read"></div>
        <div class="card">
            <div class="card-body">
                <form action="/news/store" method="post">
                    @csrf
                   
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="judul">Judul</label>
                            <input class="form-control" id="judul" name="judul" required type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="block font-bold mb-2" for="artikel">Konten</label>
                                <textarea class="summernote" data-summer="true" id="artikel" name="artikel"></textarea>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary bg-blue-500" type="submit">Submit</button>
                    <button class="btn btn-secondary bg-gray-500" onClick="cancel()" type="button">Batal</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js">
    </script>
    <script src="{{ asset('plugins/summernote/summernote-lite.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> --}}
    <script>
        $(".summernote").summernote({
            tabsize: 2,
            height: "100vh",
            toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "clear"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["table", ["table"]],
                ["insert", ["link", "picture", "video"]],
                ["view", ["fullscreen", "codeview", "help"]],
            ],
        });

    </script>
@endsection