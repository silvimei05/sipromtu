@extends("layouts.app")
@section("content")
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-left mb-4">
                        <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Fasilitas Belajar Untuk
                            Siswa</h1>
                        <h5 class="text-black mb-3">Membuat siswa lebih nyaman dan efektif dalam kegiatan pembelajaran.</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row g-4">
                        @foreach (["Ruang Kelas", "Ruang Kantor & Administrasi", "Perpustakaan", "Lab Komputer", "Lapangan Olahraga", "Ruang Ekstrakurikuler", "Fasilitas Sanitasi & Kesehatan", "Mushola"] as $item)
                            <div class="col-md-3">
                                <div class="card mb-3 h-100 shadow-sm border-0">
                                    <img src="https://fithub.id/_next/image?url=https%3A%2F%2Fphoto-fhad-fithub.s3.ap-southeast-1.amazonaws.com%2Fclass_area_853c73c79d.jpeg&w=1920&q=75" class="card-img-top" alt="Fasilitas {{$item}}">
                                    <div class="card-img-overlay d-flex align-items-end justify-content-center p-0">
                                        <p class="card-title w-100 text-center fw-bold text-white mb-3" style="background: rgba(0,0,0,0.4);">
                                            {{$item}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endsection
        @extends("layouts.app")
        @section("content")
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="text-left mb-4">
                                <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Fasilitas Belajar Untuk
                                    Siswa</h1>
                                <h5 class="text-black mb-3">Membuat siswa lebih nyaman dan efektif dalam kegiatan pembelajaran.</h5>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row g-4">
        
                                @php
                                    $fasilitas = [
                                        ["nama" => "Ruang Kelas", "gambar" => "url_gambar_ruang_kelas.jpg"],
                                        ["nama" => "Ruang Kantor & Administrasi", "gambar" => "url_gambar_kantor.jpg"],
                                        ["nama" => "Perpustakaan", "gambar" => "url_gambar_perpustakaan.jpg"],
                                        ["nama" => "Lab Komputer", "gambar" => "url_gambar_lab_komputer.jpg"],
                                        ["nama" => "Lapangan Olahraga", "gambar" => "url_gambar_lapangan.jpg"],
                                        ["nama" => "Ruang Ekstrakurikuler", "gambar" => "url_gambar_ekstrakurikuler.jpg"],
                                        ["nama" => "Fasilitas Sanitasi & Kesehatan", "gambar" => "url_gambar_sanitasi.jpg"],
                                        ["nama" => "Mushola", "gambar" => "url_gambar_mushola.jpg"]
                                    ];
                                @endphp
        
                                @foreach ($fasilitas as $item)
                                    <div class="col-md-3">
                                        <div class="card mb-3 h-100 shadow-sm border-0">
                                            <img src="{{ $item['gambar'] }}" class="card-img-top" alt="Fasilitas {{ $item['nama'] }}">
                                            <div class="card-img-overlay d-flex align-items-end justify-content-center p-0">
                                                <p class="card-title w-100 text-center fw-bold text-white mb-3" style="background: rgba(0,0,0,0.4);">
                                                    {{ $item['nama'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        