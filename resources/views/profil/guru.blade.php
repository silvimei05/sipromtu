@extends('layouts.app')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        @foreach ($gurus as $guru)
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card shadow-sm w-100">
                    <img class="img-fluid" src="{{ asset('storage/' . $guru->foto) }}" alt="" width="80" class="card-img-top" alt="Card image">
                    <div class="card-body d-flex flex-column rounded-pill">
                        <h5 class="card-title">{{ $guru->name }}</h5>
                        <p class="card-text flex-grow-1">{{$guru->jabatan}}</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection