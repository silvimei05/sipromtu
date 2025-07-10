@extends("layouts.app")
@section("content")
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Kontak</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Kontak</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="text-primary">Kontak Kami</h1>
                <h5 class="mb-3">Hubungi kami tentang apapun yang terkait dengan layanan kami.<br>Kami akan melakukan yang terbaik untuk menghubungi Anda segera mungkin.</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" method="POST" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="sender_name" name="sender_name" placeholder="Nama Anda" required/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="sender_email" name="sender_email" placeholder="Email Anda" required/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subjek" name="subjek" placeholder="Subjek" required/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" name="message" placeholder="Pesan" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary fw-bold py-3 px-5" type="submit" id="sendMessageButton">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
