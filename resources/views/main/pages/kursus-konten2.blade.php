@extends('main.layouts.layout-orange')

@section('title', 'KitaKursusKuy!')

@section('stylesheets')
<style>
    #chat-window {
        font-size: 13px;
    }
    .mentor-chat {
        color: #249EA0;
    }
</style>

@endsection

@section('content')
<div style="background-color: #F3F3F3;">
    <div class="container mt-3">
        <div class="row pt-5 pb-5">
            <div class="col-lg-9">
                <video controls width="100%">
                    <source src="{{ asset('main_resources') }}/kursus/konten/kursus-poto-2.mp4" type="video/mp4">
                </video>
                <div class="row">
                    <div class="col-lg-12 my-3">
                        <h3 id="nama-kursus">Bab 1: Exposure</h3>
                    </div>
                    <div class="col-lg-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 id="nama-kursus">Deskripsi</h5>
                                <p class="mt-5">
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
            <div class="col-lg-3">
                <div class="card border-0 mb-3" >
                    <div class="card-header d-flex justify-content-between">
                        <h6>Diskusi Live</h6>
                        <span><i class="far fa-user"></i> 3</span>
                    </div>
                    <div class="card-body" style="height: 370px;">
                        <div id="chat-window" class="row">
                            <div class="col-12 row pr-0">
                                <div class="col-4">
                                    Freds :
                                </div>
                                <div class="col-8 pr-0">
                                    Jadi lensa itu tergantung kebutuhan ya?
                                </div>
                            </div>
                            <div class="col-12 row pr-0">
                                <div class="col-4">
                                    <span class="mentor-chat">Rafi </span>:
                                </div>
                                <div class="col-8 pr-0">
                                    Iya setiap lensa dibutuhkan untuk situasi tertentu
                                </div>
                            </div>
                            <div class="col-12 row pr-0">
                                <div class="col-4">
                                    Abdur :
                                </div>
                                <div class="col-8 pr-0">
                                    Biasanya lensa wide untuk pemandangan, makro untuk objek kecil
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 mt-5">
                            <form action="" class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputPassword2" placeholder="Pesan" style="width: 170px;">
                                    <button type="submit" class="btn btn-primary btn-sm">Send</button>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <a href="/forum/1" class="btn btn-primary" target="_blank">Forum Diskusi</a>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="mb-4 kursus-body-header">Subjek</h5>
                        <div class="div-subject">
                            <a href="/konten/1/1"><span class="subject">Bab 0: Intro</span></a>
                        </div>
                        <div class="div-subject">
                            <a href="/konten/1/2"><span class="subject">Bab 1: Exposure</span></a>
                        </div>
                        <div class="div-subject">
                            <a href="/konten/1/3"><span class="subject">Bab 2: Arpeture</span></a>
                        </div>
                        <div class="div-subject">
                            <a href="/konten/1/4"><span class="subject">Bab 3: Shutter Speed</span></a>
                        </div>
                        <div class="div-subject">
                            <a href="/konten/1/5"><span class="subject">Bab 4: ISO</span></a>
                        </div>
                        <div class="div-subject">
                            <a href="/konten/1/6"><span class="subject">Bab 5: Lenses</span></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 mt-3">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 id="nama-kursus">Ada pertanyaan?</h5>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Pertayaan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
