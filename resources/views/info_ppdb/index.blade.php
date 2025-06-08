@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        @for ($i = 0; $i < 8; $i++)
        <div class="col d-flex align-items-stretch">
            <div class="card h-100 shadow-sm">
                <img src="https://img.freepik.com/free-photo/glass-background-with-frosted-pattern_53876-139919.jpg?semt=ais_hybrid&w=740"
                     class="card-img-top img-thumbnail"
                     style="cursor:pointer;"
                     alt="Pengumuman"
                     data-bs-toggle="modal"
                     data-bs-target="#imageModal">
                <div class="card-body">
                    <h5 class="card-title">Pengumuman</h5>
                    <p class="card-text">Klik gambar untuk melihat ukuran penuh.</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <img src="img/pengumuman.jpg" class="img-fluid w-100" alt="Pengumuman">
      </div>
    </div>
  </div>
</div>
@endsection