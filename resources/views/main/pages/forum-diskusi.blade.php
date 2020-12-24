@extends('main.layouts.layout-orange')

@section('title', 'KitaKursusKuy!')

@section('stylesheets')
<style>
    a {
        color: #249EA0;
    }
</style>
@endsection

@section('content')
<div class="pt-5" style="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 id="">Forum: <span id="nama-kursus">Dasar Fotografi Pemula!</span></h3>
            </div>
            <div class="col-lg-12 mt-5">
                {{-- <div class="container-fluid mt-100"> --}}
                    <div class="d-flex flex-wrap justify-content-between">
                        <div> <button type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> Diskusi Baru </button> </div>
                        <div class="col-12 col-md-3 p-0 mb-3"> <input type="text" class="form-control" placeholder="Search..."> </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header pl-0 pr-0">
                            <div class="row no-gutters w-100 align-items-center">
                                <div class="col ml-3">Topics</div>
                                <div class="col-4 text-muted">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">Replies</div>
                                        <div class="col-8">Last update</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">Bagaimana cara mengatur f-stops lensa?</a>
                                    <div class="text-muted small mt-1">Dibuat 25 hari yang lalu &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Neon Mandela</a></div>
                                </div>
                                <div class="d-none d-md-block col-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">12</div>
                                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <div class="line-height-1 text-truncate">1 hari lalu</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Tim cook</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"> <a href="/forum/1/1" class="text-big" data-abc="true">Apa yang harus menjadi prioritas, aperture, iso, shutter?</a> <span class="badge badge-success align-text-bottom ml-1">Solved</span>
                                    <div class="text-muted small mt-1">Dibuat 5 hari yang lalu &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Allize Rome</a></div>
                                </div>
                                <div class="d-none d-md-block col-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">3</div>
                                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583319/AAA/3.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <div class="line-height-1 text-truncate">1 hari lalu</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Steve smith</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">Membuat objek apapun menjadi objek foto yang cantik</a> <span class="badge badge-secondary align-text-bottom ml-1">Locked</span>
                                    <div class="text-muted small mt-1">Dibuat 21 hari yang lalu &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Kane William</a></div>
                                </div>
                                <div class="d-none d-md-block col-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">42</div>
                                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <div class="line-height-1 text-truncate">2 hari lalu</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Brethwett sonm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">Lensa apa saja yang cocok untuk kamera ini</a>
                                    <div class="text-muted small mt-1">Dibuat 56 hari yang lalu &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Glen Maxwell</a></div>
                                </div>
                                <div class="d-none d-md-block col-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">632</div>
                                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <div class="line-height-1 text-truncate">11 hari lalu</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Neil patels</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">Mengenai lensa manual</a> <span class="badge badge-secondary align-text-bottom ml-1">Closed</span>
                                    <div class="text-muted small mt-1">Dibuat 25 hari yang lalu &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Marry Tom</a></div>
                                </div>
                                <div class="d-none d-md-block col-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">53</div>
                                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <div class="line-height-1 text-truncate">1 hari lalu</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Tibok tom</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"> <a href="javascript:void(0)" class="text-big" data-abc="true">Lensa manual atau lensa otomatis?</a>
                                    <div class="text-muted small mt-1">Dibuat 25 hari yang lalu &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Bob bulmer</a></div>
                                </div>
                                <div class="d-none d-md-block col-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">12</div>
                                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <div class="line-height-1 text-truncate">1 hari lalu</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Ross taylor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav>
                        <ul class="pagination mb-5">
                            <li class="page-item disabled"><a class="page-link" href="javascript:void(0)" data-abc="true">«</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)" data-abc="true">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">»</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        {{-- </div> --}}
    </div>
</div>

@endsection

@section('scripts')

@endsection
