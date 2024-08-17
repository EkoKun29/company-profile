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
                                        <small><i class="fas fa-quote-left text-primary me-2"></i>Benih padi dengan kualitas terbaik dan teruji lolos uji sertifikasi dan ISO 9001 – 2015.</small>
                                        <small>Diawasi langsung tanpa adanya orang ketiga. Varietas Ciherang, IR-64, Inpari 30, Memberamo, Situ Bagendit , Inpari Sidenuk dan Cibago. <i class="fas fa-quote-right text-primary me-2"></i></small>
                                        
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/produk-5.jpg" alt="" style="width: 80px; height: auto;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">BENIH JUMBO OPTIMA SEED</h5>
                                        <small><i class="fas fa-quote-left text-primary me-2"></i>Premium benih padi dengan kualitas unggul. Sudah sertifikasi benih dan ISO 9001-2015. <i class="fas fa-quote-right text-primary me-2"></i></small>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/produk-3.jpg" alt="" style="width: 80px; height: auto;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">BENIH ALINDO SEED</h5>
                                        <small><i class="fas fa-quote-left text-primary me-2"></i>Premium benih padi dengan kualitas unggul. Sudah sertifikasi benih dan ISO 9001-2015. <i class="fas fa-quote-right text-primary me-2"></i></small>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="../../assets/img/produk-4.jpg" alt="" style="width: 80px; height: auto;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">BENIH ULTRA SEED</h5>
                                        <small><i class="fas fa-quote-left text-primary me-2"></i>Premium benih padi dengan kualitas unggul. Sudah sertifikasi benih dan ISO 9001-2015. <i class="fas fa-quote-right text-primary me-2"></i></small>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="">Detail Benih</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">Varietas Unggulan Kami</h1>
                <div class="col-12">
                       <div class="row g-4">
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>INPARI 32 HDB</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>MEKONGGA</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>CIHERANG</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>INPARI 42 AGRITAN</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>IR 64</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>INPARI 49</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>SUNGGAL</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 wow fadeIn d-flex" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4 flex-grow-1">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fas fa-seedling text-primary"></i>
                                    </div>
                                    <span>SITU BAGENDIT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
@endsection