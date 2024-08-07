@extends('layouts.app')

@section('content')
        <div class="container-xxl py-5 bg-dark page-header mb-5" style="background:linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url('../../assets/img/produk.jpg') center center no-repeat; background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Produk</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('_home') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('_pesan') }}">Cara Pemesanan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Produk Kami</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/produk-1.jpg" alt="" style="width: 80px; height: auto;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">BENIH BINTANG</h5>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Tanggal Awal Produksi: 01 Jan, 2045</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/produk-2.jpg" alt="" style="width: 80px; height: auto;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">BENIH JUMBO STARSEED</h5>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Tanggal Awal Produksi: 01 Jan, 2045</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/produk-3.jpg" alt="" style="width: 80px; height: auto;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">BENIH ALINDOSEED</h5>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Tanggal Awal Produksi: 01 Jan, 2045</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/produk-4.jpg" alt="" style="width: 80px; height: auto;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">BENIH ULTRASEED</h5>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Tanggal Awal Produksi: 01 Jan, 2045</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
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