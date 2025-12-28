@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Pengurus Pesantren</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item"><a href="#">Struktur Organisasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengurus Pesantren</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== PENGURUS PESANTREN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Struktur Organisasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Dewan Pengurus Pesantren PP. Nurul Islam</h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        Tahun Akademik 2025-2026
                    </p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 20px auto 0;">
                        Dewan Pengurus Pesantren adalah tim yang bertanggung jawab atas pengelolaan operasional dan kegiatan sehari-hari di Pondok Pesantren Nurul Islam.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($pengurusUtama as $index => $pengurus)
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ ($index + 1) * 100 + 200 }}">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ $pengurus->foto ? asset('storage/' . $pengurus->foto) : asset('img/team/vl-team-inner-1.1.png') }}" alt="{{ $pengurus->nama }}">
                    </div>
                    <div class="vl-team-content text-center">
                        <h3 class="title">{{ $pengurus->jabatan }}</h3>
                        <p class="mb-10">{{ $pengurus->nama }}</p>
                        <span>{{ $pengurus->jabatan_lengkap ?? $pengurus->jabatan . ' PP. Nurul Islam' }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center text-gray-500">Belum ada data pengurus pesantren.</p>
            </div>
            @endforelse
        </div>

        @foreach($pengurusByCategory as $kategori => $pengurusList)
        <div class="row mt-40">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">{{ $kategori }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($pengurusList as $index => $pengurus)
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ ($index + 1) * 100 + 300 }}">
                    <div class="vl-team-thumb">
                        <img class="w-100" src="{{ $pengurus->foto ? asset('storage/' . $pengurus->foto) : asset('img/team/vl-team-inner-1.1.png') }}" alt="{{ $pengurus->nama }}">
                    </div>
                    <div class="vl-team-content text-center">
                        <h3 class="title">{{ $pengurus->jabatan }}</h3>
                        <p class="mb-10">{{ $pengurus->nama }}</p>
                        <span>{{ $pengurus->jabatan_lengkap ?? $pengurus->jabatan }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>
<!--===== PENGURUS PESANTREN AREA ENDS =======-->

<!--===== TUGAS & FUNGSI AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas & Fungsi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas dan Fungsi Pengurus Pesantren</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-book-open" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pengelolaan Pendidikan</h3>
                        <p>Mengelola dan mengawasi pelaksanaan kegiatan pendidikan dan pengajaran di lingkungan pesantren.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-users" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pembinaan Santri</h3>
                        <p>Melakukan pembinaan dan pengembangan karakter santri melalui berbagai program dan kegiatan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-building" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pengelolaan Fasilitas</h3>
                        <p>Mengelola dan memelihara fasilitas serta sarana prasarana pesantren agar tetap berfungsi dengan baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TUGAS & FUNGSI AREA ENDS =======-->

@endsection

