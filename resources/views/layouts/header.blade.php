<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="{{ route('_home') }}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                 <img src="{{ asset('assets/img/logo.png') }}" alt="Arindo Logo" class="img-circle" width="50px" height="auto" style="margin-right: 10px;">
                <h6 class="m-0 text-primary">PT. ARINDO UTAMA PERKASA</h6>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('_home') }}" class="nav-item nav-link active">Beranda</a>
                    <a href="{{ route('_profile') }}" class="nav-item nav-link">Profil</a>
                    <a href="{{ route('_produk') }}" class="nav-item nav-link">Produk</a>
                    <a href="{{ route('_pesan') }}" class="nav-item nav-link">Cara Pemesanan</a>
                    <a href="{{ route('_kontak') }}" class="nav-item nav-link">Kontak</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">Job List</a>
                            <a href="job-detail.html" class="dropdown-item">Job Detail</a>
                        </div>
                    </div> --}}
                    {{-- <a href="{{ route('_login') }}" class="nav-item nav-link">Login</a> --}}
                </div>
                <a href="{{ route('_pesan') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Jadi Distributor<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>