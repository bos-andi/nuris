@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Nuris Media</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Khidmah</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nuris Media</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== NURIS MEDIA INTRO AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Unit Media & Komunikasi</h5>
                        <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Nuris Media</h2>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Nuris Media adalah unit media dan komunikasi yang bertanggung jawab untuk mengelola dan mengembangkan konten media digital, dokumentasi kegiatan, serta menyebarluaskan informasi tentang Pondok Pesantren Nurul Islam kepada masyarakat luas.
                        </p>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Dengan memanfaatkan teknologi media modern, Nuris Media berkomitmen untuk menyajikan konten yang informatif, edukatif, dan inspiratif yang mencerminkan nilai-nilai keislaman dan kependidikan yang diusung oleh PP. Nurul Islam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <img class="w-100" src="{{ asset('img/about/vl-about-1.1.png') }}" alt="Nuris Media" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== NURIS MEDIA INTRO AREA ENDS =======-->

<!--===== VIDEO SECTION STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Dokumentasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Nuris Media</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="video-wrapper" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <iframe 
                        src="https://www.youtube.com/embed/-KNtCaUNoKE" 
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

<!--===== NARASI VIDEO SECTION STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Transkrip Video</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Narasi Video</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="narasi-content" style="background-color: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); line-height: 1.8; font-size: 16px; color: #333;">
                        <p style="margin-bottom: 20px;">
                            <strong>Narasi dari Video:</strong>
                        </p>
                        <div class="transcript-text" style="text-align: justify;">
                            <!-- Narasi/transkrip video akan ditampilkan di sini -->
                            <p style="margin-bottom: 15px;">
                                [Silakan tambahkan narasi atau transkrip dari video YouTube di sini. Anda dapat menggunakan alat transkripsi online untuk mengonversi audio video menjadi teks, kemudian tempelkan hasil transkripnya di bagian ini.]
                            </p>
                            <p style="margin-bottom: 15px;">
                                Untuk mendapatkan transkrip video, Anda dapat menggunakan berbagai alat transkripsi online seperti UniScribe, Transcriptingly, atau Mapify yang dapat mengonversi audio dari video YouTube menjadi teks secara otomatis.
                            </p>
                            <p style="margin-bottom: 15px;">
                                Setelah mendapatkan transkrip, silakan ganti teks placeholder ini dengan narasi atau transkrip yang sebenarnya dari video tersebut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== NARASI VIDEO SECTION ENDS =======-->

<!--===== LAYANAN MEDIA AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Layanan Media</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Layanan yang Tersedia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-video" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Produksi Video</h3>
                        <p>Produksi video dokumentasi kegiatan, profil, dan konten edukatif untuk berbagai keperluan media dan komunikasi Pondok Pesantren Nurul Islam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-camera" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Dokumentasi Foto</h3>
                        <p>Dokumentasi foto kegiatan, acara, dan momen penting di Pondok Pesantren Nurul Islam dengan kualitas profesional untuk keperluan arsip dan publikasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-bullhorn" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Publikasi & Media Sosial</h3>
                        <p>Pengelolaan konten media sosial dan publikasi informasi tentang kegiatan, program, dan prestasi Pondok Pesantren Nurul Islam kepada masyarakat luas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-pen-nib" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Desain Grafis</h3>
                        <p>Pembuatan desain grafis untuk keperluan publikasi, promosi, dan branding Pondok Pesantren Nurul Islam dengan desain yang menarik dan profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-microphone" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Siaran & Podcast</h3>
                        <p>Produksi konten audio seperti podcast, siaran radio, dan konten audio lainnya untuk menyebarluaskan informasi dan edukasi kepada masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-newspaper" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Konten Artikel</h3>
                        <p>Pembuatan konten artikel, berita, dan tulisan untuk website, media sosial, dan publikasi lainnya dengan konten yang informatif dan berkualitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== LAYANAN MEDIA AREA ENDS =======-->

<!--===== VISI MISI MEDIA AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h2 class="title text-anime-style-3 mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Visi & Misi Nuris Media</h2>
                        <div class="vl-about-grid">
                            <div class="vl-about-icon-box mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-eye" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Visi</h4>
                                    <p>Menjadi unit media dan komunikasi yang profesional dalam menyebarluaskan informasi, nilai-nilai keislaman, dan kependidikan Pondok Pesantren Nurul Islam kepada masyarakat luas melalui berbagai platform media modern.</p>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-bullseye" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Misi</h4>
                                    <p>Mengembangkan konten media yang berkualitas, informatif, dan edukatif; mendokumentasikan kegiatan dan program pesantren; serta membangun komunikasi yang efektif dengan masyarakat melalui berbagai saluran media.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <img class="w-100" src="{{ asset('img/about/vl-about-1.2.png') }}" alt="Visi Misi Nuris Media" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== VISI MISI MEDIA AREA ENDS =======-->

<!--===== INFORMASI KONTAK AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Informasi Kontak</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Hubungi Nuris Media</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="vl-about-icon-box text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-30">
                        <span><i class="fa-solid fa-envelope" style="font-size: 60px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-20">Kontak Nuris Media</h3>
                        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px;">
                            Untuk informasi lebih lanjut tentang layanan media, dokumentasi, atau kerjasama media, silakan hubungi tim Nuris Media.
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
                        <div class="mt-30">
                            <a href="mailto:media@nuris.ac.id" class="header-btn1" style="display: inline-block; margin: 10px;">
                                <i class="fa-solid fa-envelope"></i> Email: media@nuris.ac.id
                            </a>
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
                    <h2 class="title text-anime-style-3 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen Terhadap Media & Komunikasi</h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 900px; margin: 0 auto; font-size: 18px; line-height: 1.8;">
                        Nuris Media berkomitmen untuk menjadi jembatan komunikasi yang efektif antara Pondok Pesantren Nurul Islam dengan masyarakat luas. Melalui konten media yang berkualitas, dokumentasi yang profesional, dan komunikasi yang transparan, kami berupaya menyebarluaskan nilai-nilai keislaman, kependidikan, dan kebaikan kepada seluruh masyarakat.
                    </p>
                    <div class="vl-about-icon-box text-center mt-40" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500">
                        <div class="vl-about-icon mb-20">
                            <span><i class="fa-solid fa-broadcast-tower" style="font-size: 60px; color: var(--ztc-text-text-4);"></i></span>
                        </div>
                        <div class="vl-icon-content">
                            <h3 class="title">Media untuk Kebaikan</h3>
                            <p style="font-size: 16px; line-height: 1.8;">
                                Dengan memanfaatkan kekuatan media modern, Nuris Media hadir untuk menyebarkan informasi positif, inspirasi, dan nilai-nilai luhur yang dapat memberikan manfaat bagi masyarakat luas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PENUTUP AREA ENDS =======-->

@endsection

