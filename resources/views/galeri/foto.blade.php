@extends("layouts.app")
@section("content")
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Foto</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Galeri</p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Foto</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->

    <div class="container-fluid py-5" id="foto"> <!-- ditambahkan id foto -->

        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Galeri</h5>
                <h1>Foto Kegiatan</h1>
            </div>
            <div class="row">
                @foreach ($fotos as $foto)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{ asset("storage/" . $foto->file) }}" alt=""
                                style="height: 262px; width: 350px;">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-end mb-3">
                                    <small class="m-0"><i
                                            class="far fa-calendar text-primary mr-2"></i>{{ $foto->created_at }}</small>
                                </div>
                                <a class="h5" href="">{{ $foto->judul }}</a>
                                <p>{{ $foto->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection
