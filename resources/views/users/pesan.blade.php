@extends('layouts.app')

@section('content')
         <div class="container-xxl py-5 bg-dark page-header mb-5" style="background:linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url('../../assets/img/produk.jpg') center center no-repeat; background-size: cover; background-position: center; background-repeat: no-repeat;">
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
                <p class="mb-4" style="text-align:justify">Bisa juga menghubungi salah satu nomor dibawah ini untuk diarahkan ke distributor kami atau jika ingin bergabung menjadi distributor: </p>
                <a class="btn btn-warning" style="color:white; margin-bottom: 10px;" href="https://wa.me/6281326491689">
                    <i class="fab fa-whatsapp"></i> Pesan Sekarang
                </a>
                <a class="btn btn-primary" style="margin-bottom: 10px;" href="https://wa.me/6281325517042">
                    <i class="fab fa-whatsapp"></i> Pesan Sekarang
                </a>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                <img class="img-fluid w-100" src="../../assets/img/bg-coba.png">
                    {{-- <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="../../assets/img/bg-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="../../assets/img/bg-2.jpg" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="../../assets/img/bg-5.jpg" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="../../assets/img/bg-4.jpg">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection