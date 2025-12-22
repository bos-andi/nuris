@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Nuris School Bank</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Khidmah</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nuris School Bank</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== NURIS SCHOOL BANK INTRO AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Unit Keuangan</h5>
                        <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Nuris School Bank</h2>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Nuris School Bank adalah unit keuangan yang didedikasikan untuk memberikan layanan perbankan dan keuangan yang aman, terpercaya, dan edukatif bagi seluruh santri, guru, karyawan, dan masyarakat sekitar Pondok Pesantren Nurul Islam.
                        </p>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Dengan prinsip keuangan syariah dan transparansi, Nuris School Bank berkomitmen untuk memberikan layanan keuangan yang sesuai dengan nilai-nilai Islam serta mendidik santri tentang pentingnya mengelola keuangan dengan baik.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <img class="w-100" src="{{ asset('img/about/vl-about-1.1.png') }}" alt="Nuris School Bank" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== NURIS SCHOOL BANK INTRO AREA ENDS =======-->

<!--===== VIDEO SECTION STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Dokumentasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Nuris School Bank</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="video-wrapper" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <iframe 
                        src="https://www.youtube.com/embed/jY174g6MPt8" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== VIDEO SECTION ENDS =======-->

<!--===== LAYANAN BANK AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Layanan Keuangan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Layanan yang Tersedia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-piggy-bank" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Tabungan Santri</h3>
                        <p>Layanan tabungan khusus untuk santri dengan sistem yang mudah, aman, dan edukatif. Membantu santri belajar mengelola keuangan pribadi sejak dini.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-money-bill-transfer" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Transfer & Pembayaran</h3>
                        <p>Layanan transfer uang dan pembayaran untuk berbagai keperluan seperti SPP, uang saku, dan kebutuhan lainnya dengan sistem yang terpercaya.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-coins" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Penukaran Uang</h3>
                        <p>Layanan penukaran uang untuk keperluan sehari-hari dengan nilai tukar yang wajar dan transparan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-book" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Edukasi Keuangan</h3>
                        <p>Program edukasi keuangan untuk mengajarkan santri tentang pentingnya mengelola keuangan, menabung, dan berinvestasi dengan bijak.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-shield-halved" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Keamanan Transaksi</h3>
                        <p>Sistem keamanan yang ketat untuk melindungi setiap transaksi keuangan dengan standar keamanan yang tinggi dan pencatatan yang transparan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-file-invoice" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Laporan Keuangan</h3>
                        <p>Laporan keuangan yang transparan dan terperinci untuk setiap nasabah, membantu santri memahami kondisi keuangan mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== LAYANAN BANK AREA ENDS =======-->

<!--===== INFORMASI KONTAK AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Informasi Kontak</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Hubungi Nuris School Bank</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="vl-about-icon-box text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-30">
                        <span><i class="fa-solid fa-building-columns" style="font-size: 60px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-20">Kontak Nuris School Bank</h3>
                        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px;">
                            Untuk informasi lebih lanjut tentang layanan keuangan, silakan hubungi tim Nuris School Bank.
                        </p>
                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <div class="vl-about-icon-box">
                                    <div class="vl-about-icon mb-15">
                                        <span><i class="fa-solid fa-clock" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title">Jam Operasional</h4>
                                        <p>Senin - Jumat: 08:00 - 16:00 WIB<br>Sabtu: 08:00 - 12:00 WIB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-20">
                                <div class="vl-about-icon-box">
                                    <div class="vl-about-icon mb-15">
                                        <span><i class="fa-solid fa-location-dot" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title">Lokasi</h4>
                                        <p>Pondok Pesantren Nurul Islam<br>Mojokerto - Jawa Timur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== INFORMASI KONTAK AREA ENDS =======-->

<!--===== PENUTUP AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center">
                    <h2 class="title text-anime-style-3 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen Terhadap Keuangan Syariah</h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 900px; margin: 0 auto; font-size: 18px; line-height: 1.8;">
                        Nuris School Bank berkomitmen untuk memberikan layanan keuangan yang sesuai dengan prinsip syariah, transparan, dan edukatif. Dengan sistem yang aman dan profesional, kami membantu santri belajar mengelola keuangan dengan baik sejak dini.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PENUTUP AREA ENDS =======-->

@endsection

