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
                    <h4 class="card-title">Data Mahasiswa</h4>
                    <a href="/mhs/create"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="table-responsive pt-3">
                    <table class="display expandable-table" id="example" style="width:100%">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Program Studi</th>
                                {{-- <th>Fakultas</th> --}}
                                <th>Semester</th>
                                <th>IPK</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop data mahasiswa di sini -->
                            @foreach ($mahasiswa as $mahasiswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- Nomor urutan -->
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                    <td>{{ $mahasiswa->tanggal_lahir }}</td>
                                    <td>{{ $mahasiswa->alamat }}</td>
                                    <td>{{ $mahasiswa->telepon }}</td>
                                    <td>{{ $mahasiswa->program_studi }}</td>
                                    {{-- <td>{{ $mahasiswa->fakultas }}</td> --}}
                                    <td>{{ $mahasiswa->semester }}</td>
                                    <td>{{ $mahasiswa->ipk }}</td>
                                    <td><span class="badge badge-success">{{ $mahasiswa->status }}</span></td>
                                    <td>
                                        <div style="width:100px; flex; justify-content: space-between; align-item:center">
                                            <a class="text-success" href="/mhs/edit/{{ $mahasiswa->id }}"
                                                style="font-size: 1.3rem; margin-right:.5rem ">
                                                <i class="fa fa-edit"></i></a>
                                            <a class="text-danger" href="/mhs/destroy/{{ $mahasiswa->id }}"
                                                style="font-size: 1.3rem; margin-left:.5rem ">
                                                <i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
