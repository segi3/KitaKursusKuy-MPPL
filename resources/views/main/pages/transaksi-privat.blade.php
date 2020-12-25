@extends('main.layouts.layout-orange')

@section('title', 'Transaksi Privat')

@section('stylesheets')
<style>
    .kursus-head {
        margin-top: 40px;
    }

    .child-div {
        height: 100%
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

</style>

@endsection

@section('content')
<div class="pt-5" style="background-color: #F3F3F3;">
    <div class="container">
        <h3 class="kursus-body-header">Privat Saya</h3>
        <div class="row">
            
            <div class="col-lg-12 my-5">
                <div class="card border-0">
                    <div class="card-body">
                        <span class="kategori-title">Kategori: <span class="badge badge-secondary">Bahasa</span></span>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <div class="kursus-head-ks d-flex justify-content-between">
                                    <div>
                                        <h5 class="kursus-title-ks">Bahasa Jepang</h5>
                                        
                                    </div>
                                    <div>
                                        <h7 style="color: #249EA0;">M Frediansyah</h7>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 row mt-3 pl-5">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <th scope="col">Subjek</th>
                                                    <th scope="col">Waktu</th>
                                                    <th scope="col">Meeting</th>
                                                    <th scope="col">Durasi (jam)</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Introduksi Huruf Hiragana</td>
                                                        <td>20 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                                                        <td><a href="#">Meeting</a></td>
                                                        <td>2 Jam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Latihan Menulis Huruf</td>
                                                        <td>26 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                                                        <td><a href="#">Meeting</a></td>
                                                        <td>2 Jam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                        <span class="kategori-title">Kategori: <span class="badge badge-secondary">Olahraga</span></span>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <div class="kursus-head-ks d-flex justify-content-between">
                                    <div>
                                        <h5 class="kursus-title-ks">Privat Renang</h5>
                                        
                                    </div>
                                    <div>
                                        <h7 style="color: #249EA0;">Rafi Nizar</h7>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 row mt-3 pl-5">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <th scope="col">Subjek</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Meeting</th>
                                                    <th scope="col">Durasi (jam)</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Gaya Bebas: pt1</td>
                                                        <td>20 Nov 2020 <span class="badge badge-dark">16.00 WIB</span></td>
                                                        <td>Kolam Renang Pondok Bakie Kasei</td>
                                                        <td>3 Jam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gaya Bebas: pt2</td>
                                                        <td>26 Nov 2020 <span class="badge badge-dark">16.00 WIB</span></td>
                                                        <td>Kolam Renang Pondok Bakie Kasei</td>
                                                        <td>3 Jam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gaya Bebas: pt3</td>
                                                        <td>30 Nov 2020 <span class="badge badge-dark">16.00 WIB</span></td>
                                                        <td>Kolam Renang Pondok Bakie Kasei</td>
                                                        <td>3 Jam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
