@extends('main.layouts.layout-orange')

@section('title', 'Daftar Akun')

@section('stylesheets')
  <style>
  .register {
      margin-top: 40px;
  }

  .child-div {
      height: 100%
  }
  #register-area{
      height: 79vh;
  }

  </style>
  
@endsection

@section('content')
<div class="container py-5 mt-5" id="register-area">
    <div class="row register d-flex justify-content-center">
        <div class="col-lg-4 parent-div">
            <div class="row child-div">
                <div class="col-12">
                    <h3 id="daftar" style="font-weight: bold;">Daftar Akun</h3>
                    <form>
                    <div class="form-group"> 
                    <label for="username">Nama Lengkap</label>  
                        <input type="text" class="form-control" name="username" required> 
                    </div>
                    <div class="form-group"> 
                    <label for="alamat">Alamat</label> 
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-group"> 
                    <label for="email1">Email</label> 
                        <input type="email" class="form-control" name="email1" required>
                    </div>
                    <div class="form-group">
                    <label for="password1">Password</label>  
                        <input type="password" class="form-control" name="password1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button> 
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection