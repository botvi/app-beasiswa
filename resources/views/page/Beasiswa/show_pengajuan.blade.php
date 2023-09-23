@extends('Layout.main')
@section('style')
    <style>
        thead th {
            color: #111 !important;
        }
    </style>
@endsection
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow-lg">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between">
                    <h4 class="card-title">Data Pengajuan</h4>
                    @if (auth()->user()->role == 'admin')
                        <a href="/pengajuan/form-pengajuan"><i class="fa fa-plus"></i> Form Pengajuan</a>
                    @endif
                </div>
                <div class="table-responsive pt-3">
                    <table class="display expandable-table" id="example" style="width:100%">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Pengadaan Beasiswa</th>
                                <th>Tanggal Daftar</th>
                                <th>Document Pengajuan</th>
                                <th>Telepon</th>
                                <th>Status Pengajuan</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop data mahasiswa di sini -->
                            @foreach ($PendaftaranBeasiswa as $item)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td>{{ $item->mahasiswa->nim ?? '' }}</td>
                                    <td>{{ $item->mahasiswa->nama ?? '' }}</td>
                                    <td>{{ $item->beasiswa->judul ?? '' }}</td>
                                    <td>{{ $item->created_at ?? '' }}</td>
                                    <td><a href="{{ asset($item->dokument ?? '') }}"><i class="fa fa-file"></i> Lampiran</a>
                                    </td>
                                    <td>{{ $item->mahasiswa->telepon ?? '' }}</td>
                                    <td>{{ $item->status ?? '' }}</td>
                                    <td>
                                        @if ($item->status == 'Dalam Proses' && auth()->user()->role == 'admin')
                                            <div
                                                style="width:120px; flex; justify-content: space-between; align-item:center">
                                                <button class="btn btn-success btn-sm actions" data-action="acc"
                                                    data-id="{{ $item->id }}" data-target="#exampleModal"
                                                    data-toggle="modal">Terima</button>
                                                <button class="btn btn-danger btn-sm actions" data-action="rej"
                                                    data-id="{{ $item->id }}" data-target="#exampleModal"
                                                    data-toggle="modal">Tolak</button>
                                            </div>
                                        @elseif($item->status != 'Dalam Proses' && auth()->user()->role != 'admin')
                                            <div>
                                                <small>{{ $item->catatan }} </small>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="modal" id="exampleModal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Catatan</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="text-gray-500" for="">Catatan</label>
                            <textarea class="form-control" cols="30" name="catatan" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary text-blue-500" type="submit" type="button">Save changes</button>
                        <button class="btn btn-secondary text-gray-500" data-dismiss="modal" type="button">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(".actions").click(function() {
            const id = $(this).data("id")
            const actions = $(this).data("action")
            $("#form").attr("action", `/pengajuan/update/${id}/${actions}`)
        })
    </script>
@endsection
