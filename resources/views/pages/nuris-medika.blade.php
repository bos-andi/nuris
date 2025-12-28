@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Nuris Medika</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Khidmah</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nuris Medika</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== NURIS MEDIKA INTRO AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Unit Kesehatan</h5>
                        <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Nuris Medika</h2>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Nuris Medika adalah unit kesehatan yang didedikasikan untuk memberikan pelayanan kesehatan terbaik bagi seluruh santri, guru, karyawan, dan masyarakat sekitar Pondok Pesantren Nurul Islam. Dengan komitmen untuk menjaga kesehatan dan kesejahteraan seluruh civitas akademika, Nuris Medika menyediakan layanan kesehatan yang komprehensif dan profesional.
                        </p>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Unit kesehatan ini beroperasi dengan standar medis yang tinggi dan didukung oleh tenaga medis yang berpengalaman serta peralatan medis yang memadai untuk memberikan pelayanan kesehatan yang optimal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <img class="w-100" src="{{ asset('img/about/vl-about-1.1.png') }}" alt="Nuris Medika" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== NURIS MEDIKA INTRO AREA ENDS =======-->

<!--===== VIDEO SECTION STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Dokumentasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Nuris Medika</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="video-wrapper" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; box-shadow: 0 0.625rem 1.875rem rgba(0,0,0,0.1);">
                    <iframe 
                        src="https://www.youtube.com/embed/lvug0KfxZ0Q" 
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

<!--===== LAYANAN KESEHATAN AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Layanan Kesehatan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Layanan yang Tersedia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-stethoscope" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Konsultasi Medis</h3>
                        <p>Layanan konsultasi medis umum untuk diagnosis dan pengobatan berbagai keluhan kesehatan. Dilayani oleh dokter yang berpengalaman dan siap membantu mengatasi masalah kesehatan santri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-pills" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Apotek & Obat</h3>
                        <p>Penyediaan obat-obatan yang diperlukan untuk pengobatan. Apotek dilengkapi dengan berbagai jenis obat yang aman dan terjamin kualitasnya sesuai dengan resep dokter.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-thermometer" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pemeriksaan Kesehatan</h3>
                        <p>Pemeriksaan kesehatan rutin seperti pengecekan tekanan darah, suhu tubuh, dan pemeriksaan kesehatan dasar lainnya untuk memantau kondisi kesehatan santri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-bandage" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pertolongan Pertama</h3>
                        <p>Layanan pertolongan pertama untuk menangani cedera ringan, luka, dan kondisi darurat medis. Dilengkapi dengan peralatan P3K yang lengkap dan standar.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-syringe" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Vaksinasi & Imunisasi</h3>
                        <p>Program vaksinasi dan imunisasi untuk menjaga kesehatan santri. Bekerja sama dengan puskesmas dan rumah sakit untuk program kesehatan preventif.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-heart-pulse" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kesehatan Mental</h3>
                        <p>Konsultasi kesehatan mental dan dukungan psikologis untuk santri yang membutuhkan. Bekerja sama dengan psikolog untuk memberikan layanan yang komprehensif.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== LAYANAN KESEHATAN AREA ENDS =======-->

<!--===== FASILITAS MEDIS AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Fasilitas Medis</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Fasilitas yang Tersedia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-bed" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Ruang Perawatan</h3>
                        <p>Ruang perawatan yang nyaman dengan tempat tidur untuk santri yang memerlukan istirahat atau observasi medis. Dilengkapi dengan peralatan medis dasar yang diperlukan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-kit-medical" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Peralatan Medis</h3>
                        <p>Peralatan medis yang lengkap dan modern untuk mendukung pelayanan kesehatan, termasuk alat pemeriksaan, alat bantu pernapasan, dan peralatan darurat medis.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-file-medical" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Rekam Medis</h3>
                        <p>Sistem rekam medis yang terorganisir untuk mencatat riwayat kesehatan setiap santri. Data kesehatan disimpan dengan baik untuk keperluan medis dan monitoring kesehatan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-ambulance" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Rujukan Medis</h3>
                        <p>Kerjasama dengan rumah sakit dan puskesmas terdekat untuk rujukan medis jika diperlukan. Sistem rujukan yang cepat dan terkoordinasi untuk penanganan kasus yang memerlukan perawatan lebih lanjut.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== FASILITAS MEDIS AREA ENDS =======-->

<!--===== TIM MEDIS AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tim Medis</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tenaga Medis Profesional</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-user-doctor" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Dokter</h3>
                        <p>Dokter yang berpengalaman dan berkompeten siap melayani konsultasi medis dan penanganan kesehatan santri dengan profesional dan penuh perhatian.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-user-nurse" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Perawat</h3>
                        <p>Perawat yang terlatih dan berpengalaman siap memberikan perawatan kesehatan, pertolongan pertama, dan pendampingan medis untuk santri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-user-injured" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Staf Medis</h3>
                        <p>Staf medis yang terlatih untuk membantu operasional klinik, administrasi medis, dan pendukung pelayanan kesehatan yang optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TIM MEDIS AREA ENDS =======-->

<!--===== PROGRAM KESEHATAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Program Kesehatan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Program Kesehatan Preventif</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                    <img class="w-100" src="{{ asset('img/about/vl-about-1.2.png') }}" alt="Program Kesehatan" style="border-radius: 10px;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h2 class="title text-anime-style-3 mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">Program Kesehatan untuk Santri</h2>
                        <p class="pb-32" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                            Nuris Medika tidak hanya memberikan pelayanan kuratif, tetapi juga mengembangkan program kesehatan preventif untuk menjaga kesehatan santri secara menyeluruh.
                        </p>
                        <div class="vl-about-grid">
                            <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-calendar-check" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Pemeriksaan Kesehatan Berkala</h4>
                                    <p>Program pemeriksaan kesehatan rutin untuk memantau kondisi kesehatan santri secara berkala dan mendeteksi masalah kesehatan sedini mungkin.</p>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="500">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-book-medical" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Edukasi Kesehatan</h4>
                                    <p>Program edukasi kesehatan untuk meningkatkan kesadaran santri tentang pentingnya menjaga kesehatan, pola hidup sehat, dan pencegahan penyakit.</p>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-shield-virus" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Program Vaksinasi</h4>
                                    <p>Program vaksinasi dan imunisasi untuk melindungi santri dari berbagai penyakit menular dan meningkatkan kekebalan tubuh.</p>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="700">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-heart-circle-check" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Monitoring Kesehatan</h4>
                                    <p>Sistem monitoring kesehatan yang terintegrasi untuk memantau kondisi kesehatan santri secara berkelanjutan dan memberikan perhatian khusus bagi yang memerlukan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PROGRAM KESEHATAN AREA ENDS =======-->

<!--===== INFORMASI KONTAK AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Informasi Kontak</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Hubungi Nuris Medika</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="vl-about-icon-box text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-30">
                        <span><i class="fa-solid fa-phone" style="font-size: clamp(3rem, 6vw, 3.75rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-20">Kontak Darurat 24 Jam</h3>
                        <p style="font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8; margin-bottom: 30px;">
                            Untuk keperluan darurat medis, Nuris Medika siap melayani 24 jam. Jangan ragu untuk menghubungi kami jika Anda memerlukan bantuan medis segera.
                        </p>
                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <div class="vl-about-icon-box">
                                    <div class="vl-about-icon mb-15">
                                        <span><i class="fa-solid fa-clock" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title">Jam Operasional</h4>
                                        <p>Senin - Minggu: 24 Jam<br>Pelayanan Darurat: 24 Jam</p>
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
                            <a href="tel:081234567890" class="header-btn1" style="display: inline-block; margin: 10px;">
                                <i class="fa-solid fa-phone"></i> Hubungi: (081) 234-567-890
                            </a>
                            <a href="mailto:medika@nuris.ac.id" class="header-btn1" style="display: inline-block; margin: 10px;">
                                <i class="fa-solid fa-envelope"></i> Email: medika@nuris.ac.id
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
                    <h2 class="title text-anime-style-3 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen Terhadap Kesehatan</h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 900px; margin: 0 auto; font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8;">
                        Nuris Medika berkomitmen untuk memberikan pelayanan kesehatan terbaik dengan standar medis yang tinggi. Dengan tenaga medis yang profesional, fasilitas yang memadai, dan program kesehatan yang komprehensif, kami siap menjaga kesehatan dan kesejahteraan seluruh santri dan civitas akademika PP. Nurul Islam.
                    </p>
                    <div class="vl-about-icon-box text-center mt-40" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500">
                        <div class="vl-about-icon mb-20">
                            <span><i class="fa-solid fa-heart" style="font-size: clamp(3rem, 6vw, 3.75rem); color: var(--ztc-text-text-4);"></i></span>
                        </div>
                        <div class="vl-icon-content">
                            <h3 class="title">Kesehatan adalah Prioritas Utama</h3>
                            <p style="font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8;">
                                Dengan pelayanan kesehatan yang profesional dan penuh perhatian, Nuris Medika hadir untuk mendukung proses pendidikan dan pengembangan santri dengan kondisi kesehatan yang optimal.
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

