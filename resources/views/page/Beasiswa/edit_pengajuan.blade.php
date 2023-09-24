@extends('Layout.main')
@section('content')
    @php
        $mhs = \App\Models\Mahasiswa::where('user_id', auth()->user()->id)->first();
    @endphp
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title">Form Pengajuan Beasiswa</h4>
                    <form action="{{ route('pendaftaran_beasiswa.update', $pendaftaranBeasiswa->id) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="mahasiswa_id">Mahasiswa</label>
                            <input class="form-control" disabled type="text"
                                value="{{ $pendaftaranBeasiswa->mahasiswa->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="beasiswa_id">Nama Pengadaan Beasiswa</label>
                            <select class="form-control @error('beasiswa_id') is-invalid @enderror" id="beasiswa_id"
                                name="beasiswa_id" required>
                                <option value="">Pilih Beasiswa</option>
                                @foreach ($beasiswaList as $beasiswa)
                                    <option {{ $beasiswa->id == $pendaftaranBeasiswa->beasiswa_id ? 'selected' : '' }}
                                        value="{{ $beasiswa->id }}">
                                        {{ $beasiswa->judul }}
                                    </option>
                                @endforeach
                            </select>
                            @error('beasiswa_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan"
                                placeholder="Masukkan Keterangan" required rows="4">{{ old('keterangan', $pendaftaranBeasiswa->keterangan) }}</textarea>
                            @error('keterangan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="dokumen">Dokumen</label>
                            <input class="form-control-file @error('dokumen') is-invalid @enderror" id="dokumen"
                                name="dokumen" type="file">
                            @error('dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary bg-blue-500" type="submit">Update Pengajuan Beasiswa</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">Info Beasiswa</div>
                <div id="info-beasiswa"></div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js"></script>
    <script>
        const reqFunc = async (id) => {
                const readed = await axios.get(`/beasiswa/${id}/id`).catch(() => {
                    $("#info-beasiswa").html(``)
                })
                if (readed) {
                    const {
                        data
                    } = readed
                    console.log(readed);
                    var pdfUrl = "{{ asset('storage') }}";
                    const list = `
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pengadaan
                            <strong>${data?.judul??''}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sumber Beasiswa
                            <strong>${data?.sumber_beasiswa ??''}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Jumlah Penerima
                            <strong>${data?.jumlah_penerima ?? ''}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Jumlah Diterima
                            <strong>${data?.pendaftaran_beasiswa.length ??""}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tanggal Mulai
                            <strong>${data?.tanggal_mulai ??''}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tanggal Selesai
                            <strong>${data?.tanggal_selesai ??''}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Status
                            <strong>${data?.status ??''}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            PDF Doument keterangan
                            <strong><a href="/${data?.brosur}"><i class="fa fa-link"></i></a></strong>
                        </li>
                    </ul>
                    `;
                    $("#info-beasiswa").html(list)
                }
            }
            (function() {
                const id = `{{ $pendaftaranBeasiswa->beasiswa_id }}`
                reqFunc(id);
            })()
        $("#beasiswa_id").change(function() {
            const id = $(this).val();
            reqFunc(id);

        })
    </script>
@endsection
