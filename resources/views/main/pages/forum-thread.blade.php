@extends('main.layouts.layout-orange')

@section('title', 'KitaKursusKuy!')

@section('stylesheets')
<style>
    a,
    a:hover {
        color: #249EA0;
        text-decoration: none;
    }

    .badge-mentor {
        background-color: #249EA0;
    }
    .badge-mentor-partner {
        background-color: #FD5901;
    }
    

</style>
@endsection

@section('content')
<div class="pt-5" style="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 id="">Thread: <span id="nama-kursus">Apa yang harus menjadi prioritas, aperture, iso,
                        shutter?</span><span class="badge badge-success align-text-bottom ml-1">Solved</span></h5>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="container-fluid mt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="media flex-wrap w-100 align-items-center"> <img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg"
                                            class="d-block ui-w-40 rounded-circle" alt="">
                                        <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">Tom
                                                Harry</a>
                                            <div class="text-muted small">13 hari yang lalu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Mode kamera apa yang digunakan sebagian besar fotografer pro?

                                        <ul>
                                            <li>Manual</li>
                                            <li>Shutter priority</li>
                                            <li>Aperture priority</li>
                                        </ul>

                                    </p>
                                    <p>
                                        Saya sudah mencoba menggunakan manual tetapi butuh waktu lama untuk menyesuaikan
                                        apertur terbaik, kecepatan rana dan ISO.
                                    </p>
                                    <p>
                                        Pemotretan manual, foto saya cenderung cerah karena ISO, Aperture, atau
                                        kecepatan rana salah.
                                    </p>
                                    <p>
                                        Haruskah saya terus mencoba memotret secara manual sampai saya mengetahui kamera
                                        saya cukup baik atau apakah sebaiknya menggunakan program "Shutter priority"
                                        atau "Aperture priority"?
                                    </p>
                                    <p>
                                        Saya akan memotret beberapa satwa liar dan melakukan itu dengan pengaturan
                                        manual tidak mungkin bagi saya karena butuh banyak waktu untuk mengatur dan saya
                                        akan melewatkan pemotretan saya.
                                    </p>
                                </div>
                                <div
                                    class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                                    <div class="px-4 pt-3"> <a href="javascript:void(0)"
                                            class="text-muted d-inline-flex align-items-center align-middle"
                                            data-abc="true"> </a> <span
                                            class="text-muted d-inline-flex align-items-center align-middle ml-4"> <i
                                                class="fa fa-eye text-muted fsize-3"></i>&nbsp; <span
                                                class="align-middle">125</span> </span> </div>
                                    <div class="px-4 pt-3"> <button type="button" class="btn btn-primary"><i
                                                class="ion ion-md-create"></i>&nbsp; Reply</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="media flex-wrap w-100 align-items-center"> <img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"
                                            class="d-block ui-w-40 rounded-circle" alt="">
                                        <div class="media-body ml-3"> <a href="javascript:void(0)"
                                                data-abc="true">Brehwett Sonm</a> <span
                                                class="badge badge-secondary badge-mentor align-text-bottom ml-1">Mentor</span>
                                                <span class="badge badge-secondary badge-mentor-partner align-text-bottom ml-1">
                                                    <img class="mr-2" src="{{ asset('main_resources') }}/partner-logo.png" width="12px" alt="">
                                                    Partner Mentor
                                                </span>
                                                
                                            <div class="text-muted small">13 hari yang lalu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Apapun yang terbaik untuk situasi mereka saat ini.
                                    </p>
                                    <p>
                                        Saya berpikir bahwa saat belajar, jauh lebih baik menggunakan prioritas Aperture
                                        atau Shutter (dan untuk banyak situasi Aperture cenderung lebih berguna). Anda
                                        dapat menggunakan Manual dalam kondisi terkontrol untuk membandingkan efek dari
                                        pengaturan yang berbeda tetapi hingga Anda benar-benar memahami semua aspek
                                        eksposur, ini tidak berguna untuk pemotretan sehari-hari.
                                    </p>

                                </div>
                                <div
                                    class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                                    <div class="px-4 pt-3"> <a href="javascript:void(0)"
                                            class="text-muted d-inline-flex align-items-center align-middle"
                                            data-abc="true"> </a> <span
                                            class="text-muted d-inline-flex align-items-center align-middle ml-4"> <i
                                                class="fa fa-eye text-muted fsize-3"></i>&nbsp; <span
                                                class="align-middle">110</span> </span> </div>
                                    <div class="px-4 pt-3"> <button type="button" class="btn btn-primary"><i
                                                class="ion ion-md-create"></i>&nbsp; Reply</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="media flex-wrap w-100 align-items-center"> <img
                                            src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583319/AAA/3.jpg"
                                            class="d-block ui-w-40 rounded-circle" alt="">
                                        <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">Steve
                                                Smith</a>
                                            <div class="text-muted small">13 hari yang lalu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Saya setuju dengan Sonm. Saya bukan seorang profesional, tetapi saya cenderung
                                        menggunakan prioritas rana atau apertur tergantung pada subjeknya. Jika saya
                                        ingin kedalaman bidang yang dangkal atau dalam, saya menggunakan prioritas
                                        apertur (dan kompensasi pencahayaan, bila perlu).
                                    </p>
                                    <p>
                                        Jika saya memotret pemandangan yang bergerak lebih cepat, seperti burung,
                                        pesawat terbang, atau satwa liar, saya memilih kecepatan rana yang sesuai. Jika
                                        cahayanya buruk, saya akan menggunakan mode manual untuk memilih kecepatan dan
                                        apertur dan menggunakan ISO yang wajar atau ISO otomatis. (Seringkali saya
                                        berencana untuk berakhir dengan gambar yang kurang terang dan menambahkan
                                        beberapa pemberhentian dalam pemrosesan pasca.)
                                    </p>
                                    <p>
                                        Perhatikan bahwa tidak ada gunanya sebenarnya tentang mengatur eksposur (ringan)
                                        gambar.
                                    </p>
                                    <p>
                                        Biasanya saya menggunakan mode manual ketika situasi membuat kesulitan untuk
                                        mode lainnya. Misalnya, ketika ada perubahan cahaya di latar belakang tetapi
                                        saya ingin latar depan terekspos dengan benar, saya dapat "mengukur" pemandangan
                                        dengan mode P, A, atau S dan kemudian beralih ke manual dan menyesuaikan sesuai
                                        kebutuhan. Juga untuk cahaya redup atau astrofotografi, mode manual biasanya
                                        diperlukan.
                                    </p>
                                    <p>
                                        Saya akan tetap berpegang pada prioritas rana atau apertur terlebih dahulu,
                                        belajar menggunakan kompensasi pencahayaan, dan kemudian mulai bermain dengan
                                        ISO - terutama jika kamera Anda akan memilih nilai ISO gila dengan terlalu
                                        banyak noise. Saat Anda menemukan situasi sulit untuk salah satu mode, alihkan
                                        ke manual dan bereksperimen.
                                    </p>
                                </div>
                                <div
                                    class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                                    <div class="px-4 pt-3"> <a href="javascript:void(0)"
                                            class="text-muted d-inline-flex align-items-center align-middle"
                                            data-abc="true"> </a> <span
                                            class="text-muted d-inline-flex align-items-center align-middle ml-4"> <i
                                                class="fa fa-eye text-muted fsize-3"></i>&nbsp; <span
                                                class="align-middle">103</span> </span> </div>
                                    <div class="px-4 pt-3"> <button type="button" class="btn btn-primary"><i
                                                class="ion ion-md-create"></i>&nbsp; Reply</button> </div>
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
