@extends('Layout.main')
@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">


          @if($user)
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                          <img alt="image" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" class="img-fluid rounded-circle"
                          style="width: 100px; margin: auto; margin-top: -3rem; margin-bottom: -0.5rem;" >
                            <h5 class="my-3">{{$user->nama}}</h5>
                            <p class="text-muted mb-1">Mahasiswa</p>
                            <p class="text-muted mb-4">Taluk Kuantan, Pekanbaru, Riau</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button class="btn btn-secondary bg-gray-500" type="button">Ganti foto</button>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NAMA LENGKAP</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control" aria-label="With textarea">{{$user->nama}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">EMAIL</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control" aria-label="With textarea">younoob07mei@gmail.com</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">TELEPON</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control" aria-label="With textarea">098724824824</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">ALAMAT</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control" aria-label="With textarea">Taluk Kuantan, Pekanbaru</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-5">
                                <div class="col-sm-3">
                                    <button class="btn btn-primary bg-blue-500" type="submit">Edit</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection
