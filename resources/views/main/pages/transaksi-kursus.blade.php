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

  </style>

@endsection

@section('content')
<div class="pt-5" style="background-color: #F3F3F3; height: 1000px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h3 class="kursus-body-header">Transaksi Pembelian Kursus</h3>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-12 row">
                                <table style="width:100%" class="table">
                                    <tr>
                                    <th>Invoice</th>
                                    <th>Kursus</th>
                                    <th>Tanggal</th>
                                    <th>Harga</th>
                                    <th>Status Pembayaran</th>
                                    </tr>
                                    <tr>
                                    <td>CRS/CT1/U2/4</td>
                                    <td>ethical hacking</td>
                                    <td>14 Nov 2020</td>
                                    <td>Rp 179.000</td>
                                    <td>Unpaid</td>
                                    </tr>
                                    <tr>
                                    <td>CRS/CT1/U2/5</td>
                                    <td>belajar python</td>
                                    <td>16 Nov 2020</td>
                                    <td>Rp 179.000</td>
                                    <td>Paid</td>
                                    </tr>
                                    <tr>
                                    <td>CRS/CT1/U2/6</td>
                                    <td>node js bootcamp</td>
                                    <td>16 Nov 2020</td>
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
            <h3 class="kursus-body-header">Kursus</h3>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-12 row">
                                <div class="card w-100 text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold;">Belajar Python</h5>
                                        <p class="card-text">Nama-Mentor<a href="#" class="btn btn-primary" style="float:right;">Halaman Kursus</a></p>
                                    </div>
                                </div>
                                <div class="card w-100 text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold;">Node JS Bootcamp</h5>
                                        <p class="card-text">Nama-Mentor<a href="#" class="btn btn-primary" style="float:right;">Halaman Kursus</a></p>
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