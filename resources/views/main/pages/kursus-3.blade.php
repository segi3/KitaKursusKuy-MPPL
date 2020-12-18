@extends('main.layouts.layout-white')

@section('title', 'Kursus!')

@section('stylesheets')
<style>
.kursus-head {
    margin-top: 40px;
}

.parent-div {

}

.child-div {
    height: 100%
}

</style>

@endsection

@section('content')

<div class="container pb-5">
    <div class="row kursus-head">
        <div class="col-lg-4">
            <img class="card-img-top" src="https://place-hold.it/286x180/F78104" alt="">
        </div>
        <div class="col-lg-6 parent-div">
            <div class="row child-div">
                <div class="col-12">
                    <h3 id="nama-kursus">Mengenal Deep Learning</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 parent-div">
            <div class="row child-div d-flex align-content-center">
                <div class="col-12">
                    <h5>Rp 179.999</h5>
                </div>
                <div class="col-12">
                    <a href="" class="btn btn-primary" style="width:100%;">Beli</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pt-5" style="background-color: #F3F3F3; height: 1000px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="mb-4 kursus-body-header">Subjek yang diajarkan</h5>
                                <div class="div-subject">
                                    <span class="subject">Intro</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Neural Network Dasar</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Vectorization Dengan Python</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Membuat Neural Network Sederhana</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="mb-4 kursus-body-header">Kebutuhan Kursus</h5>
                                <div class="div-subject">
                                    <span class="subject">Akses komputer dengan internet</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Memahami Kalkulus Dasar & Basic Python</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="mb-4 kursus-body-header">Deskripsi</h5>
                                <p>
                                    Interested in the field of Machine Learning? Then this course is for you!
                                </p>
                                <p>
                                    This course has been designed by two professional Data Scientists so that we can share our knowledge and help you learn complex theory, algorithms, and coding libraries in a simple way.
                                </p>
                                <p>
                                    We will walk you step-by-step into the World of Machine Learning. With every tutorial, you will develop new skills and improve your understanding of this challenging yet lucrative sub-field of Data Science.
                                </p>
                                <p>
                                    This course is fun and exciting, but at the same time, we dive deep into Machine Learning. It is structured the following way:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h3 class="kursus-body-header">
                            Ulasan untuk Mengenal Deep Learning
                        </h3>
                        <div class="row mt-5">
                            <div class="col-12 row">
                                <div class="col-4">
                                    <h6 class="kursus-body-header">Pengguna 1</h6>
                                </div>
                                <div class="col-8">
                                    <p>
                                        Mengajar dengan cara yang mudah dipahami dan sabar
                                    </p>
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

@section('scripts')

@endsection
