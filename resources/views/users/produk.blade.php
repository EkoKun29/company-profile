@extends('layouts.app')

@section('content')
        <div class="container-xxl py-5 bg-dark page-header mb-5">
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
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-1" style="display: flex; flex-direction: column; align-items: stretch; gap: 10px;">
                                            <a class="btn btn-warning" style="display: block; padding: 10px 20px; font-size: 16px; text-align: center; vertical-align: middle; white-space: nowrap; border-radius: 4px; width: 100%; text-decoration: none; color: white;" href="">Detail Produk</a>
                                            <button class="btn btn-primary" style="display: block; padding: 10px 20px; font-size: 16px; text-align: center; vertical-align: middle; white-space: nowrap; border-radius: 4px; width: 100%;">Pesan Sekarang</button>
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