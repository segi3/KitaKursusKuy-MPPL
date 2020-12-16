@extends('dashboard.layout')

@section('title', 'Home')

@section('stylesheets')

@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Mentor</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Buat Kursus</a>
</div>

<div class="row">
    <div class="col-lg-12 card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul Kursus</th>
                            <th>Harga</th>
                            <th>Peserta</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Judul Kursus</th>
                            <th>Harga</th>
                            <th>Peserta</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Rp 179.999</td>
                            <td>20</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        <tr>
                            <td>Fotografi Mudah 2020</td>
                            <td>Rp 179.999</td>
                            <td>13</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        <tr>
                            <td>Photoshop Bootcamp</td>
                            <td>Rp 179.999</td>
                            <td>9</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        <tr>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Rp 179.999</td>
                            <td>20</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        <tr>
                            <td>Fotografi Mudah 2020</td>
                            <td>Rp 179.999</td>
                            <td>13</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        <tr>
                            <td>Photoshop Bootcamp</td>
                            <td>Rp 179.999</td>
                            <td>9</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')

@endsection
