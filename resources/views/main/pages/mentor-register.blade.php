@extends('main.layouts.layout-orange')

@section('title', 'Daftar Mentor')

@section('stylesheets')
<style>
    .register {
        margin-top: 40px;
    }

    .child-div {
        height: 100%
    }

    #register-area {
        height: 100vh;
    }

</style>

@endsection

@section('content')
<div class="container py-5 mt-5" id="register-area">
    <div class="row register d-flex justify-content-center">
        <div class="col-lg-4 parent-div">
            <div class="row child-div">
                <div class="col-12">
                    <h3 id="daftar" style="font-weight: bold;">Daftar Mentor</h3>
                    <form>
                        <div class="form-group">
                            <label for="username1">Nama Lengkap</label>
                            <input type="text" class="form-control" name="username1" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat1">Alamat</label>
                            <input type="text" class="form-control" name="alamat1" required>
                        </div>
                        <div class="form-group">
                            <label for="email2">Email</label>
                            <input type="email" class="form-control" name="email2" required>
                        </div>
                        <div class="form-group">
                            <label for="password2">Password</label>
                            <input type="password" class="form-control" name="password2" required>
                        </div>
                        <div class="form-group">
                            <label for="BerkasKTP">Berkas KTP</label>
                            <input type="file" class="form-control-file" id="BerkasKTP">
                        </div>
                        <div class="form-group">
                            <label for="Foto">Foto anda</label>
                            <input type="file" class="form-control-file" id="Foto">
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
