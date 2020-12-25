@extends('main.layouts.layout-orange')

@section('title', 'Transaksi Kursus')

@section('stylesheets')
<style>
    .kursus-head {
        margin-top: 40px;
    }

    .child-div {
        height: 100%
    }

    .kategori-title {
        color: #005F60;
        font-weight: 300;
    }

    .kursus-head-ks {
        background-color: #FAAB36;
        padding: 20px;
        border-radius: 20px;
    }

    .kursus-title-ks {
        color: #FFFFFF;
        font-weight: 600;
        margin: auto 0;
    }

    a {
        color: #212529;
    }

</style>

@endsection

@section('content')
<div class="pt-5" style="background-color: #F3F3F3;">
    <div class="container">
        <h3 class="kursus-body-header">Kursus Saya</h3>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h7 class="kursus-body-header">Kursus untuk mu</h7>
                        <p>
                            Kami merekomendasikan kamu kursus berikut dari mentor-mentor pilihan kami berdasarkan kursus yang telah kamu ikuti <span class="badge badge-secondary">Teknologi dan Software</span> <span class="badge badge-secondary">Seni</span> 
                        </p>
                        <div class="row">
                            <div class="col-lg-6 my-2">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title"><a href="#">PyGUI Mudah!</a></h5> 
                                        <p class="card-text">Nizar A</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-2">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title"><a href="#">Membuat Galeri Website dengan Django</a></h5> 
                                        <p class="card-text">R Abiyyi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-2">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title"><a href="#">Komposisi Terbaik: Fotografi Proffesional</a></h5> 
                                        <p class="card-text">Rohman A</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-2">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="#"><img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt=""></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title"><a href="#">Rahasia Fotografi</a></h5> 
                                        <p class="card-text">Fredi S</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card border-0">
                    <div class="card-body">
                        <span class="kategori-title">Kategori: <span class="badge badge-secondary">Teknologi dan Software</span></span>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <div class="kursus-head-ks d-flex justify-content-between">
                                    <h5 class="kursus-title-ks">Belajar Python</h5>
                                    <a href="#" class="btn btn-primary">Halaman Kursus</a>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Mengenai Python</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Compiled dan Interpreted language</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Variables</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Conditional Statements</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Loops</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Functions</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Object Oriented Programming</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <div class="kursus-head-ks d-flex justify-content-between">
                                    <h5 class="kursus-title-ks">Mobile Development</h5>
                                    <a href="#" class="btn btn-primary">Halaman Kursus</a>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Dasar Mobile Development</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Instalasi Android Studio</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Struktur Aplikasi Android</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">Membuat Halaman</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">JSON Objek</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3">API</h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-5">
                <div class="card border-0">
                    <div class="card-body">
                        <span class="kategori-title">Kategori: <span class="badge badge-secondary">Seni</span></span>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <div class="kursus-head-ks d-flex justify-content-between">
                                    <h5 class="kursus-title-ks">Fotografi 101</h5>
                                    <a href="konten/1/1" class="btn btn-primary">Halaman Kursus</a>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3"><a href="konten/1/1">Intro</a></h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3"><a href="konten/1/2">Exposure</a></h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3"><a href="konten/1/3">Arpeture</a></h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3"><a href="konten/1/4">Shutter Speed</a></h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3"><a href="konten/1/5">ISO</a></h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 row mt-3">
                                        <div class="col-6">
                                            <h6 class="ml-3"><a href="konten/1/6">Lenses</a></h6>
                                        </div>
                                        <div class="col-6 progress" style="padding: 0;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
