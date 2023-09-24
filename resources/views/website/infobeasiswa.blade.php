@extends('website.layout')
@section('content')
    <div class="container">
        <table class="display nowrap" id="example" style="width:100%">
            <thead class="bg-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Pengadaan</th>
                    <th>Sumber Pengadaan</th>
                    <th>Keterangan</th>
                    <th>Brosur</th>
                    <th>Jumlah Slot</th>
                    <th>Jumlah Pendaftar</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Selesai</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($beasiswa as $item)
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
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
