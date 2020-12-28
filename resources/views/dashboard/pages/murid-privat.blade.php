@extends('dashboard.layout')

@section('title', 'Murid Privat')

@section('stylesheets')

@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Murid Privat</h1>
</div>

<div class="containerrow">
    <div class="col-lg-12 card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Privat</th>
                            <th>Jam Total</th>
                            <th>Jam Terlaksana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Abdur Rohman</td>
                            <td>Python Master Class</td>
                            <td>6</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>M Frediansyah</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>12</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>15</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="d-sm-flex align-items-center justify-content-between my-4">
    <h1 class="h3 mb-0 text-gray-800">Jadwal</h1>
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
        data-target="#jadwalModal">
        Buat Jadwal
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="jadwalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Pilih Privat</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option selected="selected">Fotografi Bagi Pemula</option>
                            <option>Python Master Class</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Pilih Murid</label>
                        <select class="form-control" id="exampleFormControlSelect3">
                            <option>M Frediansyah</option>
                            <option>Rafi Yudhistira</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect4">Pilih Subjek</label>
                        <select class="form-control" id="exampleFormControlSelect4">
                            <option>Komposisi cahaya</option>
                            <option>Komposisi foto</option>
                            <option>Foto Makro</option>
                            <option>Foto Landscape</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Waktu</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail5">Durasi (jam)</label>
                                <input type="email" class="form-control" id="exampleInputEmail5" aria-describedby="emailHelp" placeholder="durasi">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Online
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Offline
                                    </label>
                                  </div>
                              </div>
                            <div class="form-group">
                                <label for="exampleInputEmail6">Lokasi</label>
                                <input type="email" class="form-control" id="exampleInputEmail6" aria-describedby="emailHelp" placeholder="lokasi">
                                <small id="emailHelp" class="form-text text-muted">Online hanya tulis link meeting</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="containerrow">
    <div class="col-lg-12 card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Privat</th>
                            <th>Subjek</th>
                            <th>Waktu</th>
                            <th>Durasi</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Komposisi foto</td>
                            <td>20 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td>Rumah Murid</td>
                        </tr>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Komposisi foto</td>
                            <td>18 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td>Rumah Murid</td>
                        </tr>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Komposisi foto</td>
                            <td>14 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td>Rumah Murid</td>
                        </tr>
                        <tr>
                            <td>Abdur Rohman</td>
                            <td>Python Master Class</td>
                            <td>Komposisi foto</td>
                            <td>14 Nov 2020 <span class="badge badge-dark">08.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td><a href="">Zoom</a></td>
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
