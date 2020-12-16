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

  </style>

@endsection

@section('content')
<div class="pt-5" style="background-color: #F3F3F3; height: 1000px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="kursus-body-header">Transaksi Reservasi Privat</h3>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-12 row">
                                <table style="width:100%" class="table">
                                    <tr>
                                    <th>Invoice</th>
                                    <th>Kursus</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Harga</th>
                                    <th>Status Pembayaran</th>
                                    </tr>
                                    <tr>
                                    <td>PVT/CT1/U2/4</td>
                                    <td>Alat Musik</td>
                                    <td>14 Nov 2020</td>
                                    <td>10</td>
                                    <td>Rp 179.000</td>
                                    <td>Unpaid</td>
                                    </tr>
                                    <tr>
                                    <td>PVT/CT1/U2/4</td>
                                    <td>Bahasa Jepang</td>
                                    <td>16 Nov 2020</td>
                                    <td>10</td>
                                    <td>Rp 179.000</td>
                                    <td>Paid</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5">
            <h3 class="kursus-body-header">Privat</h3>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-12 row">
                                <div class="card w-100 text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold;">Bahasa Jepang</h5>
                                        <p class="card-text">Nama-Mentor</p>
                                    </div>
                                </div>
                                <table style="width:100%" class="table">
                                    <tr>
                                    <th>Pertemuan</th>
                                    <th>Tanggal</th>
                                    <th>Meeting</th>
                                    <th>Durasi (Jam)</th>
                                    </tr>
                                    <tr>
                                    <td>Introduksi Huruf Hiragana</td>
                                    <td>20 Nov 2020</td>
                                    <td>link-meeting</td>
                                    <td>2 Jam</td>
                                    </tr>
                                    <tr>
                                    <td>Latihan Menulis Huruf</td>
                                    <td>26 Nov 2020</td>
                                    <td>link-meeting</td>
                                    <td>2 Jam</td>
                                    </tr>
                                </table>
                                <div class="card w-100 text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold;">Nama-Kursus</h5>
                                        <p class="card-text">Nama-Mentor</p>
                                    </div>
                                </div>
                                <table style="width:100%" class="table">
                                    <tr>
                                    <th>Pertemuan</th>
                                    <th>Tanggal</th>
                                    <th>Meeting</th>
                                    <th>Durasi (Jam)</th>
                                    </tr>
                                    <tr>
                                    <td>Introduksi Huruf Hiragana</td>
                                    <td>20 Nov 2020</td>
                                    <td>link-meeting</td>
                                    <td>2 Jam</td>
                                    </tr>
                                    <tr>
                                    <td>Belajar sesuatu</td>
                                    <td>20 Nov 2020</td>
                                    <td>link-meeting</td>
                                    <td>2 Jam</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection