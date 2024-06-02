@extends('layouts.app')

@section('content')
<div class="container-xxl py-5 bg-dark page-header mb-5"><div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">TENTANG KAMI</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('_home') }}">BERANDA</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('_produk') }}">PRODUK</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">PROFIL</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                                <img class="img-fluid" src="../../assets/img/gudang1.jpg" width= "500px" height="auto">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">PT. ARINDO UTAMA PERKASA</h1>
                        <p class="mb-4" style="text-align:justify">PT ARINDO UTAMA PERKASA (PT. AUP) adalah perusahaan yang bergerak dibidang pertanian. Pertama kali berdiri tahun 2000 berbentuk PB (Produsen Benih), 
                        setelah beroperasi selama 3 tahun berubah menjadi CV pada tahun 2003, empat tahun kemudian menjadi PT. ARINDO UTAMA PERKASA mengawali usaha sebagai penyedia benih padi dengan merk Cap Bintang. Selama hampir 10 tahun, merk ini telah menjadi andalan para petani untuk kebutuhan benih padi bagi lahan pertanian.</p>
                        <p class="mb-4" style="text-align:justify">Seiring dengan pertumbuhan usaha, PT. AUP tahun ini mengembangkan sayap bisnisnya dengan meningkatkan benih-benih pilihan yang dibutuhkan petani saat ini. Berbekal pengalaman di bidang pertanian selama 14 tahun, kami akan selalu berusaha untuk memberikan yang terbaik bagi para petani padi Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
   <div class="container-xxl py-5">
    <div class="container">
        {{-- <h1 class="text-center mb-3 wow fadeInUp" data-wow-delay="0.1s">Visi Misi</h1> --}}
        <div class="row g-4">
            <div class="col-lg-12 col-sm-6 wow fadeInUp d-flex flex-lg-row flex-column" style="background-color: #00B074; justify-content: space-around;" data-wow-delay="0.1s">
                <div class="col-lg-4 col-sm-12 mb-3" style="text-align:center; margin:0 auto">
                    <a class="cat-item rounded p-4 d-block mx-auto">
                        <h1 class="col-lg-12 mb-2 wow fadeInUp" style="color:white;" data-wow-delay="0.1s">VISI</h1>
                        <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/2023/12/ico2.png" width="200px" height="auto">
                        <h6 class="mb-3" style="color:white; margin-top:40px; font-size:20px">MENJADI PRODUSEN BENIH UNGGUL NASIONAL</h6>
                    </a>
                </div>
                <div class="col-lg-8 col-sm-12 mb-3" style="text-align:center; margin:0 auto">
                    <a class="cat-item rounded p-4 d-block mx-auto">
                        <h1 class="col-lg-12 mb-2 wow fadeInUp" style="color:white;" data-wow-delay="0.1s">MISI</h1>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt2-qfl4b7u3jebqtbs1un9sweqz3kflsvtpr9xbvuxj6g.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Meningkatkan hasil petani dengan menyediakan benih yang berkualitas</h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt3-qfl4b9prx2ebgjpbjo321e9wac6c8a16fj8aueuqu0.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Mensukseskan program pemerintah yaitu Ketahanan Pangan Nasional</h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt4-qfl4bblgaqgw3rml8owb6dsth3x2no8n3sj9syryhk.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Menciptakan lapangan kerja</h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt5-qfl4bcjahki6fdl837axqvka2hsfvdcdfx6ra8qkbc.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Meningkatkan kesejahteraan karyawan, mitra kerja "Kelompok Tani"</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt6-qfl4beeyv8kr2lihs846vv3799j6arju46hq8snryw.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Mencerdaskan petani melalui pola tanam secara intensif</h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt7-qfl4bgan8wnbptfrh8xg0um4g19wq5rasfsp7ckzmg.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Mengembangkan ilmu dan teknologi pertanian</h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt8-qfl4bi6bmkpwd1d169qp5u51mt0n5jyrgp3o5wi7a0.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Membangun hubungan sosial kemasyarakatan yang harmonis</h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="http://arindoutamaperkasa.co.id/wp-content/uploads/elementor/thumbs/pt9-qfl4bk2008sh09aavajyatnytkrdky684yen4gfexk.png" width="50px" height="auto">
                                    <h6 style="color:white; margin-left: 10px; text-align: left;">Ikut serta dalam sosial kemasyarakatan</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">PENGALAMAN KERJA</h1>
                <p class="mb-4" style="text-align:justify">Selama ini PT. ARINDO UTAMA PERKASA telah berpengalaman dalam memproduksi benih unggul bersertifikat. Wilayah yang kami layani meliputi Kabupaten Pati serta daerah lain sekitarnya, diantaranya Kabupaten Blora, Kabupaten Rembang, Kabupaten Jepara, Kabupaten Kudus, Kabupaten Demak, Kabupaten Grobogan, Kabupaten Boyolali, Kabupaten Klaten, 
                Wilayah Jawa Timur dan Jawa Barat. Hal ini bisa dilihat dengan telah adanya jaringan pemasaran (distributor) yang siap membantu memasarkan barang yang kami perdagangkan, sebagaimana yang dicantumkan dalam Daftar Distributor.</p>
                <p class="mb-4" style="text-align:justify">Jadi pengalaman dalam hal produksi / pendistribusian barang terutama Benih Unggul Bersertifikat kepada petani melalui distributor bukan merupakan hal yang baru bagi perusahaan kami dalam memperdagangkan / memasarkan produk pertanian terutama dalam penjualan benih serta pembinaan distributor dan kelompok tani di wilayah kerja yang telah ditetapkan.</p>
                <p class="mb-4" style="text-align:justify">Dari segi usaha, sumber daya manusia, manajemen, serta sarana dan prasarana, PT. ARINDO UTAMA PERKASA telah siap untuk mengembangkan usaha perbenihan untuk wilayah seluruh indonesia.</p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="../../assets/img/alat.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="../../assets/img/alat2.jpg" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="../../assets/img/alat2.jpg" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="../../assets/img/alat1.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection