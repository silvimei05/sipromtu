@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
            @foreach ($infos as $info)
                <div class="col d-flex align-items-stretch">
                    <div class="card h-100 shadow-sm">
                        <div class="card overflow-hidden" style="width: 255px; height: 200px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#imageModal{{ $info->id }}">
                            <img src="{{ asset("storage/" . $info->image) }}" alt="Pengumuman"
                                class="card-img-top img-thumbnail" style="object-fit: cover;" />
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ $info->title }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Modal -->
        @foreach ($infos as $info)
            <div class="modal fade" id="imageModal{{ $info->id }}" tabindex="-1" aria-labelledby="imageModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <img src="{{ asset("storage/" . $info->image) }}" class="img-fluid w-100" alt="Pengumuman">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
