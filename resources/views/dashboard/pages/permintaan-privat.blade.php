@extends('dashboard.layout')

@section('title', 'PrivatKu')

@section('stylesheets')

@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Permintaan Privat</h1>
</div>

<div class="containerrow">
    <div class="col-lg-12 card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Privat</th>
                            <th>Durasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Imam Ikta</td>
                            <td>ikta@email.com</td>
                            <td>Python Master Class</td>
                            <td>10 jam</td>
                            <td><a href="#" class="btn btn-success btn-sm">Terima</a><a href="#" class="btn btn-danger btn-sm">Tolak</a></td>
                        </tr>
                        <tr>
                            <td>Nodas</td>
                            <td>nodas@email.com</td>
                            <td>Python Master Class</td>
                            <td>12 jam</td>
                            <td><a href="#" class="btn btn-success btn-sm">Terima</a><a href="#" class="btn btn-danger btn-sm">Tolak</a></td>
                        </tr>
                        <tr>
                            <td>Kinas</td>
                            <td>meow@email.com</td>
                            <td>Python Master Class</td>
                            <td>10 jam</td>
                            <td><a href="#" class="btn btn-success btn-sm">Terima</a><a href="#" class="btn btn-danger btn-sm">Tolak</a></td>
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
