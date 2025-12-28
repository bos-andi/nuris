@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Data Guru & Karyawan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Guru & Karyawan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== INTRO AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tenaga Pendidik & Tenaga Kependidikan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Data Guru & Karyawan PP. Nurul Islam</h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        PP. Nurul Islam didukung oleh tenaga pendidik dan tenaga kependidikan yang profesional, berpengalaman, dan berkomitmen tinggi dalam mendidik dan mengembangkan potensi santri.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== INTRO AREA ENDS =======-->

<!--===== GURU AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tenaga Pendidik</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Guru PP. Nurul Islam</h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        Tim guru yang berdedikasi dan berpengalaman dalam bidangnya masing-masing, siap membimbing santri menuju kesuksesan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Guru Agama -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Guru Pendidikan Agama</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Guru Agama">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Ustadz/Ustadzah</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Pendidikan Agama</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.2.png') }}" alt="Guru Agama">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Ustadz/Ustadzah</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Pendidikan Agama</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.3.png') }}" alt="Guru Agama">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Ustadz/Ustadzah</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Pendidikan Agama</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.4.png') }}" alt="Guru Agama">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Ustadz/Ustadzah</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Pendidikan Agama</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Guru Umum -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Guru Mata Pelajaran Umum</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.5.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Matematika</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.6.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Bahasa Indonesia</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.7.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Bahasa Inggris</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.8.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru IPA</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.9.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru IPS</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-1.1.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Seni & Budaya</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-1.2.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru Olahraga</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-1.3.png') }}" alt="Guru Umum">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Guru</h4>
                        <p class="mb-10">Nama Guru</p>
                        <span>Guru TIK</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== GURU AREA ENDS =======-->

<!--===== KARYAWAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tenaga Kependidikan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Karyawan PP. Nurul Islam</h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        Tim karyawan yang profesional dan berdedikasi dalam mendukung kelancaran operasional dan kegiatan di PP. Nurul Islam.
                    </p>
                </div>
            </div>
        </div>

        <!-- Karyawan Administrasi -->
        <div class="row mb-60">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Karyawan Administrasi</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-1.4.png') }}" alt="Karyawan Administrasi">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff Administrasi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Karyawan Administrasi">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff Keuangan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.2.png') }}" alt="Karyawan Administrasi">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff TU</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.3.png') }}" alt="Karyawan Administrasi">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff Perpustakaan</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Karyawan Operasional -->
        <div class="row mb-60" style="background-color: #f8f9fa; padding: clamp(2rem, 4vw, 2.5rem) 0; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="vl-section-title-1 mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Karyawan Operasional</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.4.png') }}" alt="Karyawan Operasional">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff Kebersihan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.5.png') }}" alt="Karyawan Operasional">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff Keamanan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.6.png') }}" alt="Karyawan Operasional">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff Dapur</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.7.png') }}" alt="Karyawan Operasional">
                    </div>
                    <div class="vl-team-content text-center">
                        <h4 class="title">Staff</h4>
                        <p class="mb-10">Nama Karyawan</p>
                        <span>Staff Maintenance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== KARYAWAN AREA ENDS =======-->

<!--===== STATISTIK AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Statistik</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Data Tenaga Pendidik & Kependidikan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-chalkboard-teacher" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title" style="font-size: clamp(2rem, 5vw, 3rem); color: var(--ztc-text-text-4);">50+</h3>
                        <p>Guru</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-users" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title" style="font-size: clamp(2rem, 5vw, 3rem); color: var(--ztc-text-text-4);">30+</h3>
                        <p>Karyawan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-graduation-cap" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title" style="font-size: clamp(2rem, 5vw, 3rem); color: var(--ztc-text-text-4);">80+</h3>
                        <p>Total Tenaga</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-star" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title" style="font-size: clamp(2rem, 5vw, 3rem); color: var(--ztc-text-text-4);">90%</h3>
                        <p>Berpengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== STATISTIK AREA ENDS =======-->

@endsection

