@extends('main.layouts.layout-orange')

@section('title', 'KitaKursusKuy!')

@section('stylesheets')

@endsection

@section('content-header')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active"
                style="background-image: url('{{ asset('main_resources') }}/imgs/jumbotron1.jpeg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Tentukan Guru yang terbaik</h3>
                    <p>KitaKursusKuy menghadirkan padamu guru dan mentor terbaik se-Indonesia.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-image: url('{{ asset('main_resources') }}/imgs/jumbotron2.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Jadilah Pemenang!</h3>
                    <p>Kuasai hobi dan bakatmu lewat KitaKursusKuy.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
@endsection

@section('content')
<div class="container">

    <h1 class="my-5" style="text-align: center">Kursus Populer</h1>

    <!-- Marketing Icons Section -->
    <div class="row" id="kurus-pop">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Kursus</h5>
                    <p class="card-text">Author-kursus</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Kursus</h5>
                    <p class="card-text">Author-kursus</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Kursus</h5>
                    <p class="card-text">Author-kursus</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Kursus</h5>
                    <p class="card-text">Author-kursus</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Kursus</h5>
                    <p class="card-text">Author-kursus</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Kursus</h5>
                    <p class="card-text">Author-kursus</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ribbon-yellow my-5 pt-5 pb-5">
    <h1 class="">Dan masih banyak lagi!</h1>
    <p>Kami menyediakan berbagai macam kursus</p>
    <div class="d-flex justify-content-center">
        <a href="#" class="btn btn-primary ">Lihat semua kursus</a>
    </div>
</div>

<div class="container" id="mentor-pop">

    <h1 class="my-5" style="text-align: center">Privat Populer</h1>

    <div class="row" id="kurus-pop">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Mentor</h5>
                    <p class="card-text">Materi/judul-privat</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>
                        
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Mentor</h5>
                    <p class="card-text">Materi/judul-privat</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>
                        
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Mentor</h5>
                    <p class="card-text">Materi/judul-privat</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>
                        
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Mentor</h5>
                    <p class="card-text">Materi/judul-privat</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>
                        
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Mentor</h5>
                    <p class="card-text">Materi/judul-privat</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>
                        
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Nama-Mentor</h5>
                    <p class="card-text">Materi/judul-privat</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>
                        
                        <a href="#" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ribbon-yellow my-5 pt-5 pb-5">
    <h1 class="">Kursus Privat</h1>
    <p>Kami privat bagi kalian yang sedang mencari mentor</p>
    <div class="d-flex justify-content-center">
        <a href="#" class="btn btn-primary ">Cari mentor</a>
    </div>
</div>

<div class="container" id="kategori-pop">
    <div class="row">
        <div class="col-lg-4 d-flex justify-content-center align-content-center" style="background-color: #F78104;">
            <a class="stretched-link py-5" href="#kategori1">Kategori 1</a>
        </div>
        <div class="col-lg-4 d-flex justify-content-center align-content-center" style="background-color:  #FAAB36;">
            <a class="stretched-link py-5" href="#kategori2">Kategori 2</a>
        </div>
        <div class="col-lg-4 d-flex justify-content-center align-content-center" style="background-color:  #249EA0;">
            <a class="stretched-link py-5" href="#kategori3">Kategori 3</a>
        </div>
        <div class="col-lg-4 d-flex justify-content-center align-content-center" style="background-color:  #249EA0;">
            <a class="stretched-link py-5" href="#kategori4">Kategori 4</a>
        </div>
        <div class="col-lg-4 d-flex justify-content-center align-content-center" style="background-color:  #008083;">
            <a class="stretched-link py-5" href="#kategori5">Kategori 5</a>
        </div>
        <div class="col-lg-4 d-flex justify-content-center align-content-center" style="background-color:  #FD5901;">
            <a class="stretched-link py-5" href="#kategori6">Kategori 6</a>
        </div>
        
    </div>
</div>

<div class="ribbon-ligreen my-5 pt-5 pb-5">
    <h1 class="">Daftar menjadi mentor sekarang!</h1>
    <p>Gabung menjadi mentor dan dapatkan manfaatnya</p>
    <div class="d-flex justify-content-center">
        <a href="#" class="btn btn-primary ">Daftar Mentor</a>
    </div>
</div>

@endsection

@section('scripts')

@endsection
