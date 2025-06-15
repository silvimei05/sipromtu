@extends("layouts.app")
@section("content")
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-left mb-4">
                    <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Data Guru dan Karyawan</h1>
                    <h5 class="text-black mb-3">Kenali lebih dekat para pendidik dan staf kami.</h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($gurus as $guru)
                <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                    <div class="card shadow-sm w-100">
                        <img class="img-fluid" src="{{ asset("storage/" . $guru->foto) }}" alt=""
                            style="height: 500px" class="card-img-top" alt="Card image">
                        <div class="card-body d-flex flex-column rounded-pill">
                            <h5 class="card-title">{{ $guru->name }}</h5>
                            <p class="card-text flex-grow-1">{{ $guru->jabatan }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
