<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
           
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0"><span class="text-primary">s</span>dnyatu</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('profil.*') ? 'active' : '' }}" data-toggle="dropdown">PROFIL</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('profil.sambutan_kepala_sekolah')}}" class="dropdown-item {{ request()->routeIs('profil.sambutan_kepala_sekolah') ? 'active' : '' }}">Sambutan Kepala Sekolah</a>
                                <a href="{{route('profil.sejarah')}}" class="dropdown-item {{ request()->routeIs('profil.sejarah') ? 'active' : '' }}">Sejarah</a>
                                <a href="{{route('profil.visiMisi')}}" class="dropdown-item {{ request()->routeIs('profil.visiMisi') ? 'active' : '' }}">Visi & Misi</a>
                                <a href="{{route('profil.fasilitas')}}" class="dropdown-item {{ request()->routeIs('profil.fasilitas') ? 'active' : '' }}">Fasilitas</a>
                                <a href="{{route('profil.guru')}}" class="dropdown-item {{ request()->routeIs('profil.guru') ? 'active' : '' }}">Guru</a>
                            </div>
                        </div>
                        <a href="{{route('berita')}}" class="nav-item nav-link {{ request()->routeIs('berita') ? 'active' : '' }}">BERITA</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('galeri.*') ? 'active' : '' }}" data-toggle="dropdown">GALERI</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <!-- mengarahkan ke bagian sesuai id masing2 di halaman gallery -->
                                <a href="{{route('galeri.foto')}}" class="dropdown-item {{ request()->routeIs('galeri.foto') ? 'active' : '' }}">Foto</a>
                                <a href="{{route('galeri.video')}}" class="dropdown-item {{ request()->routeIs('galeri.video') ? 'active' : '' }}">Video</a>
                            </div>
                        </div>
                        <a href="{{route('ppdb')}}" class="nav-item nav-link {{ request()->routeIs('ppdb') ? 'active' : '' }}">INFO PPDB</a>
                        <a href="{{route('kontak')}}" class="nav-item nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}">KONTAK</a>
                    </div>
                    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="">Daftar Sekarang</a>
                </div>
            </nav>
        </div>
    </div>
</div>