@extends('layouts.app')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        @for ($i = 0; $i < 6; $i++)
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card shadow-sm w-100">
                    <img src="https://sman1slawi.sch.id/storage/img/fotoguru/01JH5AMFCC4JSMEACH5VBF1AAQ.png" width="80" class="card-img-top" alt="Card image">
                    <div class="card-body d-flex flex-column rounded-pill">
                        <h5 class="card-title">Guru {{ $i + 1 }}</h5>
                        <p class="card-text flex-grow-1">Deskripsi singkat tentang guru ini. Informasi tambahan dapat ditambahkan di sini.</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection