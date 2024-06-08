@extends('layouts.app')

@section('content')
<div class="container-xxl py-5 bg-dark page-header mb-5" style="background:linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url('../../assets/img/profile.jpg') center center no-repeat; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">KONTAK</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('_home') }}">BERANDA</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('_pesan') }}">CARA PEMESANAN</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">KONTAK</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">KONTAK KAMI</h1>
                <div class="row g-4">

                    @if(session('success'))
                        <div class="alert alert-success" id="success-alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <span>Jl. Jakenan Winong No.KM 03, Batur Lor, Sembaturagung, Kec. Jakenan, Kabupaten Pati, Jawa Tengah 59182</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                    <span>marketing.arindoutama@gmail.com</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text-primary"></i>
                                    </div>
                                    <span>0295 4790 061</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.951585858133!2d111.1340811!3d-6.7570674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e772d0be97ea6bb%3A0x2c0b7cc9665b4b7f!2sPT%20Arindo%20Utama%20Perkasa!5e0!3m2!1sen!2sid!4v1603794290143!5m2!1sen!2sid"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <h1 style="text-align:center">DAPATKAN PENAWARAN</h1>
                            <p class="mb-4">Kontak kami untuk penawaran, bantuan atau bergabung sebagai distributor</a>.</p>
                            <form method="POST" action="{{ route('kontak.submit') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="toko" id="name" placeholder="Nama Toko/PT/CV">
                                            <label for="name">Nama Toko/PT/CV</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon">
                                            <label for="telepon">Telepon</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Lengkap">
                                            <label for="text">Alamat Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="order" id="order" placeholder="Order (Contoh:Benih Ultra Seed 1 Ton)">
                                            <label for="text">Order (Contoh:Benih Ultra Seed 1 Ton)</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="komentar" class="form-control" placeholder="Komentar" id="komentar" style="height: 150px"></textarea>
                                            <label for="komentar">Komentar</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
@endsection

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            var alert = document.getElementById('success-alert');
            if (alert) {
                alert.classList.add('fade-out');
                alert.addEventListener('transitionend', function() {
                    alert.style.display = 'none';
                });
            }
        }, 3000);
    });
</script>
<style>
    .fade-out {
        opacity: 0;
        transition: opacity 1s;
    }
</style>
@endpush