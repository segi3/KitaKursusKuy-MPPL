@extends('main.layouts.layout-orange')

@section('title', 'KitaKursusKuy!')

@section('stylesheets')
<style>
    body {
        max-width: 100%;
        overflow-x: hidden;
    }
    #mentorSection {
        background-color: black;
    }

    #kategoriSection {
        background-color: black;
    }
    #myVideo {
        width: 100vw;
    }
    #title-vid {
        position: absolute; /* Reposition logo from the natural layout */
        left: 75px;
        top: 500px;
        width: 300px;
        height: 200px;
        z-index: 2;
        color: #ffffff;
    }

</style>
@endsection

{{-- @section('content-header')
<header class="mt-3">
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
@endsection --}}

@section('content-header')
<div style="background-color: black;">
    <video autoplay muted loop id="myVideo" style="z-index: -1;">
        <source src="{{ asset('main_resources') }}/superprof_trouvez-le-professeur-parfait_desktop.mp4" type="video/mp4">
    </video>
    <div id="title-vid">
        <h1><span id="jd1">Kita</span><span id="jd2">Kursus</span><span id="jd3">Kuy!</span></h1>
        <p>Kuasai hobi dan bakatmu</p>
    </div>
    
</div>
@endsection

@section('content')
{{-- mentor --}}
<div id="mentorSection" class="px-5 py-5">
    <div class="row mt-5">
        <div class="col-lg-7">
            <div class="row" id="collagecontainer">
                <div class="col-lg-4 mcollage">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-startup-stock-photos-7369(1).jpg" alt="">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-cottonbro-4753927.jpg" alt="">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-rodnae-productions-6192176.jpg" alt="">
                </div>
                <div class="col-lg-4 mcollage">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-kyle-loftus-3379933.jpg" alt="">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-mentatdgt-2173508.jpg" alt="">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-hitesh-choudhary-1261427.jpg" alt="">
                </div>
                <div class="col-lg-4 mcollage">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-burst-374054.jpg" alt="">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-gabriel-santos-fotografia-2102568.jpg"
                        alt="">
                    <img src="{{ asset('main_resources') }}/home/mentor/pexels-budgeron-bach-5149569.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="mheading">
                Guru
            </div>
            <div class="mheading">
                Pelatih
            </div>
            <div class="mheading">
                Seniman
            </div>
            <div class="mheading">
                Mentor
            </div>
            <div class="mheading">
                Para ahli di bidangnya
            </div>
        </div>
    </div>

</div>
<div id="kategoriSection" class="px-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="kheading col-lg-6">
                        +100
                    </div>
                    <div class="kheading col-lg-6">
                        Subjek
                        <p style="color: #979797; font-weight: 600; font-size: 30px;">
                            Pengetahuan yang tak terbatas
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center my-5 py-5">
                    <p style="color: #ffffff;">
                        apa yang ingin anda pelajari?
                    </p>

                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card border-0 card-kat">
                            <div class="card-body">
                                <strong style="color: #999999;">Akademik</strong>
                                <p class="mt-3">
                                    <a href="">Bimbingan Akademik</a>
                                </p>
                                <p>
                                    <a href="">Matematika</a>
                                </p>
                                <p>
                                    <a href="">Fisika</a>
                                </p>
                                <p>
                                    <a href="">Kimia</a>
                                </p>
                                <p>
                                    <a href="">Biologi</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card border-0 card-kat">
                            <div class="card-body">
                                <strong style="color: #999999;">Bahasa</strong>
                                <p class="mt-3">
                                    <a href="">Bimbingan Akademik</a>
                                </p>
                                <p>
                                    <a href="">Bahasa Inggris</a>
                                </p>
                                <p>
                                    <a href="">Bahasa Jerman</a>
                                </p>
                                <p>
                                    <a href="">Bahasa Jepang</a>
                                </p>
                                <p>
                                    <a href="">Bahasa Russia</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card border-0 card-kat">
                            <div class="card-body">
                                <strong style="color: #999999;">Teknologi</strong>
                                <p class="mt-3">
                                    <a href="">Komputer dan Internet</a>
                                </p>
                                <p>
                                    <a href="">Mobile</a>
                                </p>
                                <p>
                                    <a href="">Jaringan</a>
                                </p>
                                <p>
                                    <a href="">Kecerdasan Buatan</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card border-0 card-kat">
                            <div class="card-body">
                                <strong style="color: #999999;">Musik</strong>
                                <p class="mt-3">
                                    <a href="">Gitar</a>
                                </p>
                                <p>
                                    <a href="">Menyanyi</a>
                                </p>
                                <p>
                                    <a href="">Drum</a>
                                </p>
                                <p>
                                    <a href="">Biola</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card border-0 card-kat">
                            <div class="card-body">
                                <strong style="color: #999999;">Olahraga</strong>
                                <p class="mt-3">
                                    <a href="">Personal Trainer</a>
                                </p>
                                <p>
                                    <a href="">Tinju</a>
                                </p>
                                <p>
                                    <a href="">Renang</a>
                                </p>
                                <p>
                                    <a href="">Sepak Bola</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card border-0 card-kat">
                            <div class="card-body">
                                <strong style="color: #999999;">Seni</strong>
                                <p class="mt-3">
                                    <a href="">Melukis</a>
                                </p>
                                <p>
                                    <a href="">Akting</a>
                                </p>
                                <p>
                                    <a href="">Menari</a>
                                </p>
                                <p>
                                    <a href="">Memasak</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="caraKerja">
    <div class="container">
        <div class="" style="margin-top: 100px; margin-bottom: 100px;">
            <h1 style="font-weight: 700; text-align: center;">Bagaimana cara kerja KitaKursusKuy?</h1>
        </div>

        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 offset-lg-1 d-flex">
                        <div class="align-self-center" style="display: inline">
                            <h3 style="font-weight: 600;">Temukan Kursus dengan materi terlengkap</h3>
                            <p>
                                Cek subjek yang diberikan oleh masing-masing mentor dan ikuti kursus tersebut sampai
                                selesai
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <img style="width: 100%;" src="{{ asset('main_resources') }}/home/svg/undraw_studying_s3l7.svg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 my-5">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <img style="width: 100%;" src="{{ asset('main_resources') }}/home/svg/undraw_teaching_f1cm.svg"
                            alt="">
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="align-self-center" style="display: inline">
                            <h3 style="font-weight: 600;">Temukan mentor yang sempurna</h3>
                            <p>
                                Cek materi dan review guru secara bebas dan dapatkan ilmu langsung dari mentor terbaik
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 offset-lg-1 d-flex">
                        <div class="align-self-center" style="display: inline">
                            <h3 style="font-weight: 600;">Partner Mentor Kami<img class="ml-1" src="partner-logo.png"
                                    width="25px" alt=""></h3>
                            <p>
                                Salah satu mentor terbaik kami! Profil berkualitas tinggi, kualifikasi sudah
                                terverifikasi, dan akan selalu merespon permintaan kursus Anda
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <img style="width: 100%;"
                            src="{{ asset('main_resources') }}/home/svg/undraw_quitting_time_dm8t.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5 my-5">

    <h1 class="my-5" style="text-align: center; font-weight: 600;">Kursus Populer</h1>

    <!-- Marketing Icons Section -->
    <div class="row" id="kurus-pop">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="kursus/1"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/thumbnail/fotografi.png" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Fotografi</h5>
                    <p class="card-text">Rafi N</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="kursus/1" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="kursus/2"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/thumbnail/jepang.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Bahasa Jepang Tingkat Pemula</h5>
                    <p class="card-text">Fredi S</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="kursus/2" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="kursus/3"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/thumbnail/deep-learning.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Mengenal Deep Learning</h5>
                    <p class="card-text">A Rohman</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="kursus/3" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="kursus/4"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/thumbnail/ppt.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Dasar Microsoft Power Point Tingkat Pemula</h5>
                    <p class="card-text">Edi Naga</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="kursus/4" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="kursus/5"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/thumbnail/art.png" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Skill Dasar Dalam Menggambar</h5>
                    <p class="card-text">Rani Z</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="kursus/5" class="col-2 btn btn-primary beli-btn">Beli</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="kursus/6"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/thumbnail/gitar.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Belajar Gitar dari 0</h5>
                    <p class="card-text">Maman A</p>
                    <div class="row">
                        <span class="col-9 price-tag">Rp 179.999</span>
                        <a href="kursus/6" class="col-2 btn btn-primary beli-btn">Beli</a>
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
                <a href="/privat/1"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/mentor/1.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Eja Suryono</h5>
                    <p class="card-text">Bahasa Jerman</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>

                        <a href="/privat/1" class="col-2 btn btn-primary beli-btn">Cek</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="/privat/2"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/mentor/2.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Chelsea Hassanah</h5>
                    <p class="card-text">Personal Trainer</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>

                        <a href="/privat/2" class="col-2 btn btn-primary beli-btn">Cek</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="/privat/3"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/mentor/3.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Banara Wisnu Pranowo</h5>
                    <p class="card-text">Pemrograman Web/Android</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>

                        <a href="/privat/3" class="col-2 btn btn-primary beli-btn">Cek</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="/privat/4"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/mentor/4.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Winda Prastuti</h5>
                    <p class="card-text">Akting Seni Peran</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>

                        <a href="/privat/4" class="col-2 btn btn-primary beli-btn">Cek</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="/privat/5"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/mentor/5.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Irfan Maulana</h5>
                    <p class="card-text">Ilmu Pengetahuan Alam</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>

                        <a href="/privat/5" class="col-2 btn btn-primary beli-btn">Cek</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 border-0">
                <a href="/privat/6"><img class="card-img-top" src="{{ asset('main_resources') }}/kursus/mentor/6.jpg" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">Rini Paramita Lestari</h5>
                    <p class="card-text">Biola</p>
                    <div class="row">
                        <div class="col-9">
                            <span class="price-tag">Rp 179.999 </span><span class="hr-tag">/jam</span>
                        </div>

                        <a href="/privat/6" class="col-2 btn btn-primary beli-btn">Cek</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ribbon-yellow mt-5 pt-5 pb-5">
    <h1 class="">Kursus Privat</h1>
    <p>Kami privat bagi kalian yang sedang mencari mentor</p>
    <div class="d-flex justify-content-center">
        <a href="#" class="btn btn-primary ">Cari mentor</a>
    </div>
</div>
{{-- 
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
</div> --}}

<div class="row" style="height: 50vh;">
    <div class="col-6 ribbon-orange d-flex">
        <div class="align-self-center">
            <h1 class="">Tunggu apalagi? Mulai kembangkankan bakat mu!</h1>
            <p>Daftar akun sekarang</p>
            <div class="d-flex justify-content-center">
                <a href="/user-register" class="btn btn-primary ">Daftar Akun</a>
            </div>
        </div>
        
    </div>
    <div class="col-6 ribbon-ligreen d-flex">
        <div class="align-self-center">
            <h1 class="">Berbagi ilmu dengan semua orang!</h1>
            <p>Daftar menjadi mentor</p>
            <div class="d-flex justify-content-center">
                <a href="/mentor-register" class="btn btn-primary ">Daftar Mentor</a>
            </div>
        </div>
        
    </div>
</div>

@endsection

@section('scripts')

@endsection
