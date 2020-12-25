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
            <div class="col-lg-12 mt-5">
                <h3 class="kursus-body-header mb-4">Transaksi Pembelian Kursus</h3>
                <div class="card border-0 px-3">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-12 row">
                                <table class="table table-striped">
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
                                        <td><span class="badge badge-warning">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <td>CRS/CT1/U2/5</td>
                                        <td>belajar python</td>
                                        <td>16 Nov 2020</td>
                                        <td>Rp 179.000</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>CRS/CT1/U2/6</td>
                                        <td>node js bootcamp</td>
                                        <td>16 Nov 2020</td>
                                        <td>Rp 179.000</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <h3 class="kursus-body-header mb-4">Transaksi Reservasi Privat</h3>
                <div class="card border-0 px-3">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-12 row">
                                <table style="width:100%" class="table table-striped">
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
                                        <td>Mahir recorder dengan cepat!</td>
                                        <td>14 Nov 2020</td>
                                        <td>10</td>
                                        <td>Rp 179.000</td>
                                        <td><span class="badge badge-warning">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <td>PVT/CT1/U2/4</td>
                                        <td>Bahasa Jepang</td>
                                        <td>16 Nov 2020</td>
                                        <td>10</td>
                                        <td>Rp 179.000</td>
                                        <td><span class="badge badge-success">Paid</span></td>
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
