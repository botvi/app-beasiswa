@extends('Layout.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow-lg">
            <div class="card-body">
                <h4 class="card-title">Form Beasiswa</h4>
                <form action="{{ route('beasiswa.update', $beasiswa->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="judul">Judul Beasiswa</label>
                                <input class="form-control @error('judul') is-invalid @enderror" id="judul"
                                    name="judul" placeholder="Masukkan Judul Beasiswa" required type="text"
                                    value="{{ old('judul', $beasiswa->judul) }}">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sumber_beasiswa">Sumber Beasiswa</label>
                                <input class="form-control @error('sumber_beasiswa') is-invalid @enderror"
                                    id="sumber_beasiswa" name="sumber_beasiswa" placeholder="Masukkan Sumber Beasiswa"
                                    required type="text"
                                    value="{{ old('sumber_beasiswa', $beasiswa->sumber_beasiswa) }}">
                                @error('sumber_beasiswa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah_penerima">Jumlah Penerima</label>
                                <input class="form-control @error('jumlah_penerima') is-invalid @enderror"
                                    id="jumlah_penerima" min="1" name="jumlah_penerima"
                                    placeholder="Masukkan Jumlah Penerima" required type="number"
                                    value="{{ old('jumlah_penerima', $beasiswa->jumlah_penerima) }}">
                                @error('jumlah_penerima')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_mulai">Tanggal Mulai</label>
                                <input class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai"
                                    name="tanggal_mulai" required type="date"
                                    value="{{ old('tanggal_mulai', $beasiswa->tanggal_mulai) }}">
                                @error('tanggal_mulai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_selesai">Tanggal Selesai</label>
                                <input class="form-control @error('tanggal_selesai') is-invalid @enderror"
                                    id="tanggal_selesai" name="tanggal_selesai" required type="date"
                                    value="{{ old('tanggal_selesai', $beasiswa->tanggal_selesai) }}">
                                @error('tanggal_selesai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brosur">Dokumen</label>
                                <input class="form-control-file" id="brosur" name="brosur" type="file">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" id="status"
                                    name="status" required>
                                    <option {{ old('status', $beasiswa->status) == 'Aktif' ? 'selected' : '' }}
                                        value="Aktif">Aktif</option>
                                    <option {{ old('status', $beasiswa->status) == 'Nonaktif' ? 'selected' : '' }}
                                        value="Nonaktif">Nonaktif</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                                    placeholder="Masukkan Deskripsi Beasiswa" required rows="4">{{ old('deskripsi', $beasiswa->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary bg-blue-500" type="submit">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
