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
                    <form method="POST" action="{{ route('users.register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group"> 
                    <label for="username">Nama Lengkap</label>  
                        <input type="text" class="form-control" name="name_user" required> 
                    </div>
                    <div class="form-group"> 
                    <label for="alamat">Alamat</label> 
                        <input type="text" class="form-control" name="address_user" required>
                    </div>
                    <div class="form-group"> 
                    <label for="email1">Email</label> 
                        <input type="email" class="form-control" name="email_user" required>
                    </div>
                    <div class="form-group">
                    <label for="password1">Password</label>  
                        <input type="password" class="form-control" name="password_user" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button> 
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection