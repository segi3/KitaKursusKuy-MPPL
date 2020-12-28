@extends('dashboard.layout')

@section('title', 'Privat Baru')

@section('stylesheets')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function add_subject() {
        var newnode = document.querySelector(".subjek-in").cloneNode(true);
        document.getElementById('subjContainer').appendChild(newnode);
    }
</script>
@endsection

@section('content')
<div class="container d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Buat Privat Baru</h1>
</div>
<div class="container">
    <form>
        <div class="row">
            <div class="col-lg-12 card shadow">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="judulInput">Judul Privat</label>
                                <input type="text" class="form-control" id="judulInput" aria-describedby="judulHelp"
                                    placeholder="Judul" name="judul">
                                <small id="judulHelp" class="form-text text-muted">Judul dari kursus</small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="hargaInput">Harga /jam</label>
                                <input type="text" class="form-control" id="hargaInput" aria-describedby="hargaHelp"
                                    placeholder="0000.00" name="harga">
                                <small id="hargaHelp" class="form-text text-muted">Hanya Nominal dalam rupiah</small>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="descInput">Metodologi Privat</label>
                                <textarea class="form-control" id="descInput" rows="3" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 card shadow mt-3">
                <div class="card-body">
                    <h4>Subjek</h4>
                    <a onclick="add_subject()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah subjek</a>
                    <div id="subjContainer">
                        <div class="subjek-in mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="judulsubjek">Judul Subjek</label>
                                                <input type="text" class="form-control" id="judulsubjek"
                                                    aria-describedby="judulSubjek[]" placeholder="Judul" name="judul">
                                                {{-- <small id="judulSubjek[]" class="form-text text-muted">Judul subjek</small> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fileRekaman">Berkas Rekaman</label>
                                                <input type="file" class="form-control-file" id="fileRekaman"
                                                    name="fileRekaman[]">
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="descInput">Deskripsi subjek</label>
                                                <textarea class="form-control" id="descInput" rows="2"
                                                    name="deskripsiSubjek[]"></textarea>
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
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
</div>

@endsection

@section('scripts')

@endsection
