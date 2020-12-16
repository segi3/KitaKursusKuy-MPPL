@extends('main.layouts.layout-orange')

@section('title', 'Login Mentor')

@section('stylesheets')
<style>
    .login {
        margin-top: 40px;
    }

    .child-div {
        height: 100%
    }
    #login-area {
        height: 79vh;
    }

</style>

@endsection

@section('content')
<div class="container py-5 mt-5" id="login-area">
    <div class="row login child-div mt-5 pt-5">
        <div class="col-lg-6">
            <img class="card-img" src="http://127.0.0.1:8000/main_resources/imgs/jumbotron1.jpeg" alt="" height="270px">
        </div>
        <div class="col-lg-3 parent-div">
            <div class="row child-div">
                <div class="col-12">
                    <h3 id="login1" style="font-weight: bold;">Login Mentor</h3>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                required>
                        </div>
                        <div class="form-group">
                            Belum punya akun? <a href="#"> daftar disini </a>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
