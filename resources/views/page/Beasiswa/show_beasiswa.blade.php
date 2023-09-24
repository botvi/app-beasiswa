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
                    <h4 class="card-title">Data Pengadaan Beasiswa</h4>
                    @if (auth()->user()->role != 'mahasiswa')
                        <a href="/beasiswa/create"><i class="fa fa-plus"></i> Tambah Data</a>
                    @endif
                </div>
                <div class="table-responsive pt-3">
                    <table class="display expandable-table" id="example" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengadaan</th>
                                <th>Sumber Pengadaan</th>
                                <th>keterngan</th>
                                <th>Brosur</th>
                                <th>Jumlah Slot</th>
                                <th>Jumlah Pendaftar</th>
                                <th>Tgl Mulai</th>
                                <th>Tgl Selesai</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getbeasiswa as $item)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->sumber_beasiswa }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td><a href="{{ asset($item->brosur ?? '') }}"><i class="fa fa-file"></i></a></td>
                                    <td>{{ $item->jumlah_penerima }}</td>
                                    <td>{{ count($item->pendaftaranBeasiswa ?? []) }}</td>
                                    <td>{{ $item->tanggal_mulai }}</td>
                                    <td>{{ $item->tanggal_selesai }}</td>
                                    <td>{{ $item->status }}</td>
                                    @if (auth()->user()->role == 'mahasiswa')
                                        <td>
                                            {{-- <a class="flex justufy-center item-center" href=""><i
                                                    class="fa fa-link"></i> Ajukan</a> --}}
                                        </td>
                                    @else
                                        <td>
                                            <div
                                                style="width:100px; flex; justify-content: space-between; align-item:center">
                                                <a class="text-success"
                                                    href="/pendaftaran_beasiswa/{{ $item->id }}/edit"
                                                    style="font-size: 1.3rem; margin-right:.5rem ">
                                                    <i class="fa fa-edit"></i></a>
                                                <a class="text-danger"
                                                    href="/pendaftaran_beasiswa/{{ $item->id }}/destroy"
                                                    style="font-size: 1.3rem; margin-left:.5rem ">
                                                    <i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
