@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Nuris Mart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Khidmah</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nuris Mart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== NURIS MART INTRO AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Unit Perdagangan</h5>
                        <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Nuris Mart</h2>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Nuris Mart adalah unit perdagangan yang menyediakan berbagai kebutuhan sehari-hari bagi santri, guru, karyawan, dan masyarakat sekitar Pondok Pesantren Nurul Islam dengan harga yang terjangkau dan kualitas yang terjamin.
                        </p>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Dengan prinsip jual beli yang halal dan transparan, Nuris Mart berkomitmen untuk menyediakan produk-produk berkualitas dengan harga yang wajar serta memberikan pelayanan yang ramah dan profesional.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <img class="w-100" src="{{ asset('img/about/vl-about-1.1.png') }}" alt="Nuris Mart" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== NURIS MART INTRO AREA ENDS =======-->

<!--===== VIDEO SECTION STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Dokumentasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Nuris Mart</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="video-wrapper" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; box-shadow: 0 0.625rem 1.875rem rgba(0,0,0,0.1);">
                    <iframe 
                        src="https://www.youtube.com/embed/TL50BiF-YIM" 
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

<!--===== PRODUK & LAYANAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Produk & Layanan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Produk yang Tersedia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-utensils" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Makanan & Minuman</h3>
                        <p>Berbagai jenis makanan dan minuman halal yang sehat dan berkualitas untuk memenuhi kebutuhan santri sehari-hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-book" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Alat Tulis & Buku</h3>
                        <p>Kebutuhan alat tulis, buku pelajaran, dan buku referensi untuk mendukung kegiatan belajar mengajar santri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-shirt" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pakaian & Perlengkapan</h3>
                        <p>Pakaian seragam, pakaian santri, dan berbagai perlengkapan lainnya yang dibutuhkan oleh santri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-soap" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kebutuhan Harian</h3>
                        <p>Berbagai kebutuhan harian seperti sabun, shampoo, pasta gigi, dan produk kebersihan lainnya dengan kualitas terjamin.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-tag" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Harga Terjangkau</h3>
                        <p>Harga yang terjangkau dan kompetitif dengan kualitas produk yang terjamin, khusus untuk kebutuhan santri dan civitas akademika.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-handshake" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pelayanan Ramah</h3>
                        <p>Pelayanan yang ramah, profesional, dan mengutamakan kepuasan pelanggan dengan prinsip jual beli yang halal dan transparan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PRODUK & LAYANAN AREA ENDS =======-->

<!--===== INFORMASI KONTAK AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Informasi Kontak</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Hubungi Nuris Mart</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="vl-about-icon-box text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-30">
                        <span><i class="fa-solid fa-store" style="font-size: clamp(3rem, 6vw, 3.75rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-20">Kontak Nuris Mart</h3>
                        <p style="font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8; margin-bottom: 30px;">
                            Untuk informasi lebih lanjut tentang produk dan layanan, silakan hubungi tim Nuris Mart.
                        </p>
                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <div class="vl-about-icon-box">
                                    <div class="vl-about-icon mb-15">
                                        <span><i class="fa-solid fa-clock" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title">Jam Operasional</h4>
                                        <p>Senin - Minggu: 07:00 - 20:00 WIB</p>
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
                    <h2 class="title text-anime-style-3 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen Terhadap Perdagangan Halal</h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 900px; margin: 0 auto; font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8;">
                        Nuris Mart berkomitmen untuk menyediakan produk-produk berkualitas dengan harga yang terjangkau serta memberikan pelayanan yang ramah dan profesional. Dengan prinsip jual beli yang halal dan transparan, kami hadir untuk memenuhi kebutuhan sehari-hari santri dan civitas akademika PP. Nurul Islam.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PENUTUP AREA ENDS =======-->

@endsection

