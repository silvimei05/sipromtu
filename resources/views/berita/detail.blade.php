@extends("layouts.app")
@section("content")
    <!-- Berita Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1> {{ $berita->judul }} </h1>
                <p class="text-normal"> {{ $berita->created_at_ina_format }} </p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-4 d-flex justify-content-center">
                    <img class="img-fluid" src="{{ asset("storage/" . $berita->gambar) }}" width="400" height="300"
                        alt="Gambar">
                </div>
            </div>
            <div class="col-lg-12 p-0">
                <p class="content-between justify-between text-justify" style="text-indent: 2em; text-align: justify;">
                    {!! $berita->isi !!}
                </p>

            </div>
        </div>
    </div>
    <!-- Sambutan End -->
    <div class="container mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-primary">
            &larr; Kembali
        </a>
    </div>
@endsection
