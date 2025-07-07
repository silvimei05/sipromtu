@extends("layouts.app")
@section("content")
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">SDN NYATNYONO 01</h5>
                            <h1 class="display-3 text-white mb-md-4">Selamat Datang Di SDN NYATNYONO 01</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">SDN NYATNYONO 01</h5>
                            <h1 class="display-3 text-white mb-md-4">KEGIATAN SDN NYATNYONO 01</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">SDN NYATNYONO 01</h5>
                            <h1 class="display-3 text-white mb-md-4">SELAMAT HARI PENDIDIKAN</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Sambutan Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">SAMBUTAN KEPALA SEKOLAH
                        </h1>
                        <h5>Tri Haryani,S.Pd.</h5>
                    </div>
                    <p style="text-align: justify"> Assalamu'alaikum warahmatullahi wabarakatuh,
                        Salam sejahtera bagi kita semua,
                        Puji syukur kehadirat Allah SWT, atas rahmat-Nya
                        SD Negeri Nyatnyono 01 terus berkomitmen memberikan pendidikan terbaik bagi generasi penerus bangsa.
                        Kami bangga mendidik anak-anak agar cerdas, berakhlak mulia, dan siap menghadapi tantangan era
                        digital.
                        Website ini hadir untuk memudahkan komunikasi, meningkatkan transparansi, dan menyediakan informasi
                        bagi siswa, orang tua, serta masyarakat. Kami berharap platform ini dapat menjadi sarana akses cepat
                        dan mudah untuk segala kegiatan akademik maupun non-akademik sekolah.
                        Terima kasih kepada seluruh dewan guru, staf, komite sekolah, dan orang tua siswa atas dukungannya.
                        Semoga kerja sama ini terus membawa kemajuan bagi anak-anak kita.
                        Wassalamu'alaikum warahmatullahi wabarakatuh

                    </p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sambutan End -->

    <!-- Sejarah Sekolah Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Sejarah Sekolah</h1>
                        <h5 class="text-white">Kamu Harus Tahu!</h5>
                    </div>
                    <p class="text-white text-justify"style="text-indent: 30px"> Didirikan pada 1 Agustus 1987, SD Negeri Nyatnyono 01 hadir di jantung Desa Nyatnyono, Kabupaten Semarang. Berada di lokasi strategis dekat kantor desa, puskesmas, madrasah, dan wisata religi, sekolah ini tumbuh dalam lingkungan yang mendukung pendidikan berbasis budaya lokal. Dengan komitmen membentuk karakter dan meningkatkan mutu, SD ini terus berkembang menjadi sekolah unggulan, apalagi sejak bergabung dengan SD Negeri Nyatnyono 03 pada tahun 2015.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>🏫 Fasilitas Lengkap</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>🎯 Ekstrakurikuler Pilihan</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>📍 Lokasi Strategis</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div id="map" style="height: 360px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sejarah Sekolah End -->


    <!-- Guru Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
                <h1>Meet Our Teachers</h1>
            </div>
            <div class="row">
                @foreach ($fourGurus as $guru)
                    <div class="col-md-6 col-lg-3 text-center team mb-4">
                        <div class="team-item rounded overflow-hidden mb-2">
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="{{ asset("storage/" . $guru->foto) }}" alt=""
                                    style="height: 500px; object-fit: cover;">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="bg-secondary p-4">
                                <h5>{{ $guru->name }}</h5>
                                <p class="m-0">{{ $guru->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Guru End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">ULASAN</h5>
                <h1>Apa Kata Mereka??</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Guru berharap SD Negeri Nyatnyono 01 terus mengembangkan
                                pembelajaran berbasis teknologi, agar siswa mahir digital tanpa melupakan nilai moral dan
                                spiritual.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="m-0">Diah Purnamasari,S.Pd</h5>
                            <span>Guru Kelas 1Bn</span>
                        </div>

                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Guru berharap setiap siswa meraih prestasi unggul, baik
                                akademik maupun non-akademik, agar mampu bersaing di tingkat lokal hingga internasional</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="m-0">Imron Rosyadi,S.Pd.SD</h5>
                            <span>Guru Kelas 3</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Tenaga administrasi SD Negeri Nyatnyono 01 berupaya
                                meningkatkan efisiensi dan kualitas layanan agar kebutuhan siswa, guru, dan orang tua
                                terpenuhi dengan cepat, tepat, dan profesional demi kelancaran proses belajar mengajar</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="m-0">Siti Umamul Latifah, A.Md</h5>
                            <span>Tenaga Administrasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Testimonial End -->


    <!-- Berita Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h1>Berita Terbaru</h1>
            </div>
            <div class="row pb-3">
                @foreach ($berita_top_three as $berita)
                    <div class="col-lg-4 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{ asset("storage/" . $berita->gambar) }}" style="height: 467px, width: 350px"
                                alt="">
                            <a class="blog-overlay text-decoration-none" href="{{ route('berita.show', ['slug' => $berita->slug])}}">
                                <h5 class="text-white mb-3"> {{ $berita->judul }} </h5>
                                <p class="text-primary m-0"> {{$berita->created_at_human}} </p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2" href="{{ route("berita.index") }}">Lihat
                    Semua Berita</a>
            </div>
        </div>
    </div>
    <!-- Berita End -->

    <!-- Foto Aktivitas Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Aktivitas</h5>
                <h1>Foto</h1>
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
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Foto Aktivitas End -->

    <!-- Video Aktivitas Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Aktivitas</h5>
                <h1>Video</h1>
            </div>
            <div class="row">

                @foreach ($videos as $video)
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="video-item position-relative overflow-hidden rounded mb-2">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src={{ $video->embed_url }} allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Video Aktivitas Start -->
@endsection

@push("scripts")
    <script>
        var map = L.map('map').setView([-7.15, 110.4], 70);
        var greenIcon = L.icon({
            iconUrl: '/img/school.webp',

            iconSize: [98, 95], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62], // the same for the shadow
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-7.15, 110.4], {
                icon: greenIcon
            }).addTo(map)
            .bindPopup('SDN Nyatnyono 01<br>Jl.Hasan Munadi RT.006/RW.004,Desa Nyatnyono Kec.Ungaran Barat Kab.Semarang')
            .openPopup();
    </script>
@endpush
