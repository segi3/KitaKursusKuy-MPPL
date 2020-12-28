@extends('dashboard.layout')

@section('title', 'Kursus Baru')

@section('stylesheets')
<style>
    ul.syarat {
        list-style-type: none;
    }

</style>
@endsection

@section('content')
<div class="container d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">KitaKursusKuy Partner Program</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <div>
                        Program Partnership ini diperuntukan bagi mentor dengan komitmen membagikan ilmu mereka dan
                        membantu murid-murid mereka.
                        Mentor Partner adalah mentor yang berpengalaman dalam mengajar dan berbagi ilmu tidak terbatas
                        kategori ilmu.
                        Jika kamu suka berbagi ilmu yang kamu miliki dan mempunyai komunitas yang saling membantu dalam
                        proses pembelajaran maka Program ini sangat pantas bagimu!
                    </div>
                    <div class="mt-4">
                        <h6><strong>Sebagai Partner, kamu akan mendapatkan keuntungan</strong></h6>

                        <div class="mt-3">
                            <h6><strong>Kursus</strong>:</h6>
                            <ul>
                                <li>Partner Badge</li>
                                <li>Prioritas rekomendasi kursus</li>
                                <li><strong>Label</strong> pada forum: Menambah label pada thread forum diskusi</li>
                                <li>Kualias video sampai 1080 60fps</li>
                            </ul>
                        </div>
                        <div>
                            <h6><strong>Privat</strong>:</h6>
                            <ul>
                                <li>Partner Badge</li>
                                <li>Prioritas rekomendasi privat</li>
                            </ul>
                        </div>
                        <div>
                            <h6><strong>Dan keuntungan lain khusus untuk partner</strong>:</h6>
                            <ul>
                                <li>Kontak langsung dengan tim KitaKursusKuy untuk bantuan cepat dan mudah</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6><strong>Persyaratan dan progres</strong>:</h6>

                        <div class="row">
                            <div class="col-6 py-3 px-3">
                                Memiliki 10 Kursus
                                <div>
                                    Kamu memiliki 8
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-6 py-3 px-3">
                                Memiliki 5 Privat
                                <div>
                                    Kamu memiliki 1
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-6 py-3 px-3">
                                Memiliki total 100 murid kursus
                                <div>
                                    Kamu memiliki 89
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 89%"
                                        aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-6 py-3 px-3">
                                Melayani permintaan privat dari 10 murid
                                <div>
                                    Kamu telah melayani 5 permintaan
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 89%"
                                        aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary">Apply Partner</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
