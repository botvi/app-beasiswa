@extends('template.layout')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow-lg">
            <div class="card-body">
                <h4 class="card-title">Form Entry</h4>
                <form action="{{ route('mhs.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                                    placeholder="NIM" required type="text">
                                @error('nim')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control @error('nama') is-invalid @enderror" id="nama"
                                    name="nama" placeholder="Nama" required type="text">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                                    name="jenis_kelamin" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                                    name="tanggal_lahir" required type="date">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required
                                    rows="3"></textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                                    name="telepon" placeholder="Telepon" required type="text">
                                @error('telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="program_studi">Program Studi</label>
                                <select class="form-control @error('program_studi') is-invalid @enderror" id="program_studi"
                                    name="program_studi" required>
                                    <option disabled selected value="">-- Pilih Program Studi --</option>
                                    <option value="Program Studi 1">Program Studi 1</option>
                                    <option value="Program Studi 2">Program Studi 2</option>
                                    <option value="Program Studi 3">Program Studi 3</option>
                                    <!-- Tambahkan pilihan Program Studi sesuai dengan yang Anda butuhkan -->
                                </select>
                                @error('program_studi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="fakultas">Fakultas</label>
                                <select class="form-control @error('fakultas') is-invalid @enderror" id="fakultas"
                                    name="fakultas" required>
                                    <option disabled selected value="">-- Pilih Fakultas --</option>
                                    <option value="Fakultas 1">Fakultas 1</option>
                                    <option value="Fakultas 2">Fakultas 2</option>
                                    <option value="Fakultas 3">Fakultas 3</option>
                                    <!-- Tambahkan pilihan Fakultas sesuai dengan yang Anda butuhkan -->
                                </select>
                                @error('fakultas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="universitas">Universitas</label>
                                <input class="form-control @error('universitas') is-invalid @enderror" id="universitas"
                                    name="universitas" placeholder="Universitas" required type="text">
                                @error('universitas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select class="form-control @error('semester') is-invalid @enderror" id="semester"
                                    name="semester" required>
                                    <option disabled selected value="">-- Pilih Semester --</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                    <!-- Tambahkan pilihan Semester sesuai dengan yang Anda butuhkan -->
                                </select>
                                @error('semester')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ipk">IPK</label>
                                <input class="form-control @error('ipk') is-invalid @enderror" id="ipk" name="ipk"
                                    placeholder="IPK" required type="text">
                                @error('ipk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control @error('username') is-invalid @enderror" id="username"
                                    name="username" placeholder="username" required type="text">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password"
                                    name="password" placeholder="password" required type="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" id="status"
                                    name="status" required>
                                    <option disabled selected value="">-- Pilih Status --</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Nonaktif">Nonaktif</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="Email" required type="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password"
                                    name="password" placeholder="Password" required type="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="col-md-12" style="display: flex; justify-content: flex-end">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
