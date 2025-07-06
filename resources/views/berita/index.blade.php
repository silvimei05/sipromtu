@extends("layouts.app")
@section("content")
    <!-- Header Start -->
    <div class="container-fluid page-header"
        style="margin-bottom: 10px; background-image: url('img/berita-header.jpg');bg-opacity-10">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">BERITA</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Berita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Berita Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row pb-3">

                @foreach ($beritas as $berita)
                    
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{'storage/' . $berita->gambar}}" style="height: 467px, width: 350px" alt="">
                        <a class="blog-overlay text-decoration-none" href="{{route('berita.show', ['slug' => $berita->slug])}}">
                            <h5 class="text-white mb-3"> {{$berita->judul}} </h5>
                            <p class="text-primary m-0">{{$berita->created_at_human}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
