@extends('main.layouts.layout-white')

@section('title', 'Privat!')

@section('stylesheets')
<style>
.kursus-head {
    margin-top: 40px;
}

.parent-div {

}

.child-div {
    height: 100%;
}

#thumbPrivat {
    height: 300px !important;
    width: 300px !important;
    border-radius: 150px;
}

</style>

@endsection

@section('content')

<div class="container pb-5" style="margin-top: 100px;">
    <div class="row kursus-head">
        <div class="col-lg-4">
            <img class="card-img-top" src="{{ asset('main_resources') }}/kursus/mentor/2.jpg" alt="" id="thumbPrivat">
        </div>
        <div class="col-lg-5 parent-div">
            <div class="row child-div">
                <div class="col-12">
                    <h3 id="nama-kursus">Personal Trainer</h3>
                    <h3 id="nama-kursus" style="color: #249EA0 !important;">Chelsea Hassanah</h3>
                </div>
                <div class="col-12">
                    <img class="mr-2" src="{{ asset('main_resources') }}/partner-logo.png" width="25px" alt=""><span id="partner-text">Partner Mentor</span>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 parent-div">
            
                <div class="row child-div d-flex align-content-center">
                    <div class="col-12">
                        <h5 style="display: inline;">Rp 79.999</h5><span> /jam</span>
                    </div>
                    <div class="col-12 mt-3">
                        <form action="">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Daring</label>
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Luring</label>
                        </div>
                        <a href="" type="submit" class="btn btn-primary" style="width:100%;">Ajukan permintaan</a>
                        </form>
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
                                    <span class="subject">Fitness</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Penguatan Otot</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Stretching</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Skipping</span>
                                </div>
                                <div class="div-subject">
                                    <span class="subject">Prenatal Gym</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card border-0">
                            <div class="card-body row">
                                <div class="col-3 d-flex justify-content-end align-items-center">
                                    <div>
                                        <img class="mr-2" src="{{ asset('main_resources') }}/partner-logo.png" width="100px" alt="">
                                    </div>
                                    
                                </div>
                                <div class="col-9">
                                    <h5 class="mb-4 kursus-body-header">Partner Mentor</h5>
                                    <p>
                                        Salah satu mentor terbaik kami! Profil berkualitas tinggi, kualifikasi sudah terverifikasi, dan akan selalu merespon permintaan kursus Anda. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="mb-4 kursus-body-header">Metodologi</h5>
                                <p>
                                    Salah satu metodologi pengajaran saya adalah dengan sering mempraktekan bahasa inggris dengan siswa dan mengajak siswa untuk menggunakan vocabulary yang sudah siswa kuasai sehingga siswa terbiasa dan percaya diri dalam berbahasa Inggris.
                                </p>
                                <p>
                                    Menganalisa kelemahan siswa sehingga kita bisa mengetahui kemampuan apa saja yang harus ditingkatkan.
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
                            Ulasan untuk Personal Trainer
                        </h3>
                        <div class="row mt-5">
                            <div class="col-12 row">
                                <div class="col-4">
                                    <h6 class="kursus-body-header">Rafi Nizar Abiyyi</h6>
                                </div>
                                <div class="col-8">
                                    <p>
                                        Mengajar dengan cara yang mudah dipahami dan sabar
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 row">
                                <div class="col-4">
                                    <h6 class="kursus-body-header">Frediansyah</h6>
                                </div>
                                <div class="col-8">
                                    <p>
                                        Materi sangat lengkap dan pengajar sangat baik!
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 row">
                                <div class="col-4">
                                    <h6 class="kursus-body-header">Abdur Rohman</h6>
                                </div>
                                <div class="col-8">
                                    <p>
                                        Tidak hanya materi lengkap cara menyampaikannya pun mudah dimengerti
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
