@extends('layouts.app')

@section('content')
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Cara Pemesanan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('_home') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('_produk') }}">Produk</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Cara Pemesanan</li>
                    </ol>
                </nav>
            </div>
        </div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Pemesanan</h1>
                <p class="mb-4" style="text-align:justify">Pemesanan produk bisa melalui distributor terdekat kami: </p>
                <p class="mb-4" style="text-align:justify">Atau bisa menghubungi salah satu nomor dibawah ini untuk diarahkan ke distributor: </p>
                <a class="btn btn-warning" style="color:white;" href="https://wa.me/6281326491689"> <i class="fab fa-whatsapp"></i> Pesan Sekarang</a>
                <a class="btn btn-primary" href="https://wa.me/6281325517042"><i class="fab fa-whatsapp"></i> Pesan Sekarang</a>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection