@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Dewan Pengurus Pusat</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item"><a href="#">Struktur Organisasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dewan Pengurus Pusat</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== DEWAN PENGURUS PUSAT AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Struktur Organisasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Dewan Pengurus Pusat PP. Nurul Islam</h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        Tahun Akademik 2025-2026
                    </p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 20px auto 0;">
                        Dewan Pengurus Pusat adalah badan pengawas dan penentu kebijakan strategis yang bertanggung jawab atas pengawasan dan pengembangan Pondok Pesantren Nurul Islam secara menyeluruh, baik dari aspek pendidikan, dakwah, sosial, ekonomi, maupun kesehatan.
                    </p>
                </div>
            </div>
        </div>
        @forelse($pengurusByCategory as $kategori => $pengurusList)
        <div class="row {{ !$loop->first ? 'mt-40' : '' }}">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-40">
                    <h3 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">{{ $kategori }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($pengurusList as $index => $pengurus)
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-team-parent" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ ($index + 1) * 100 + 300 }}" style="background: white; border-radius: clamp(0.9375rem, 2vw, 1.25rem); overflow: hidden; box-shadow: 0 clamp(0.3125rem, 1vw, 0.625rem) clamp(0.9375rem, 2vw, 1.875rem) rgba(0,0,0,0.1); transition: all 0.3s ease; max-width: clamp(18.75rem, 35vw, 25rem); margin: 0 auto;" onmouseover="this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 clamp(0.3125rem, 1vw, 0.625rem) clamp(0.9375rem, 2vw, 1.875rem) rgba(0,0,0,0.1)'">
                    <div class="vl-team-thumb" style="position: relative; width: 100%; padding-bottom: 133.33%; overflow: hidden; background: #f8f9fa;">
                        <img class="w-100" src="{{ $pengurus->foto ? asset('storage/' . $pengurus->foto) : asset('img/team/vl-team-inner-1.1.png') }}" alt="{{ $pengurus->nama }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <div class="vl-team-content text-center" style="padding: clamp(1.25rem, 2.5vw, 1.5rem);">
                        <h3 class="title" style="font-size: clamp(1rem, 2vw, 1.125rem); font-weight: 700; color: #2c3e50; margin-bottom: 0.5rem;">{{ $pengurus->jabatan }}</h3>
                        <p class="mb-10" style="font-size: clamp(0.9375rem, 1.8vw, 1rem); font-weight: 600; color: #01715d; margin-bottom: 0.5rem;">{{ $pengurus->nama }}</p>
                        <span style="font-size: clamp(0.8125rem, 1.5vw, 0.875rem); color: #6c757d;">{{ $pengurus->jabatan_lengkap ?? $pengurus->jabatan }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @empty
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center text-gray-500">Belum ada data pengurus dewan pusat.</p>
            </div>
        </div>
        @endforelse
    </div>
</section>
<!--===== DEWAN PENGURUS PUSAT AREA ENDS =======-->

<!--===== TUGAS & FUNGSI AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas & Fungsi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Tugas dan Fungsi Dewan Pengurus Pusat</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-gavel" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kebijakan Strategis</h3>
                        <p>Menetapkan kebijakan strategis dan arah pengembangan Pondok Pesantren Nurul Islam untuk jangka panjang dalam semua bidang garapan (Pendidikan, Dakwah, Sosial, Ekonomi, dan Kesehatan).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-eye" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pengawasan & Evaluasi</h3>
                        <p>Melakukan pengawasan dan evaluasi terhadap pelaksanaan program dan kegiatan di lingkungan pesantren, serta memastikan semua kegiatan berjalan sesuai dengan visi dan misi yayasan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-handshake" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Hubungan Eksternal</h3>
                        <p>Membangun dan menjaga hubungan dengan pihak eksternal, baik pemerintah, masyarakat, maupun lembaga lainnya dalam rangka pengembangan dan peningkatan kualitas yayasan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-chart-line" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pengembangan Strategis</h3>
                        <p>Merumuskan dan mengawal pelaksanaan program pengembangan strategis yayasan, termasuk pengembangan unit-unit usaha dan layanan baru yang mendukung visi jangka panjang.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-shield-halved" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Akuntabilitas & Transparansi</h3>
                        <p>Memastikan akuntabilitas dan transparansi dalam pengelolaan yayasan, termasuk pengelolaan keuangan, aset, dan sumber daya lainnya sesuai dengan prinsip-prinsip good governance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-globe" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Ekspansi & Go-Internasional</h3>
                        <p>Mengawal program ekspansi dan pengembangan yayasan menuju level internasional, termasuk menjalin kerjasama dengan lembaga-lembaga internasional dan mengikuti perkembangan zaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TUGAS & FUNGSI AREA ENDS =======-->

<!--===== KOMITMEN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen Dewan Pengurus Pusat</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="vl-about-content text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <p style="font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8; margin-bottom: 30px;">
                        Dewan Pengurus Pusat PP. Nurul Islam berkomitmen untuk terus mengawal dan mengembangkan yayasan menuju pencapaian visi sebagai lembaga pendidikan kader yang Robbani, berwawasan keilmuan, berdaya saing, ber-tafaqquhfiddin dan berakhlakulkarimah.
                    </p>
                    <p style="font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8;">
                        Dengan semangat "li I'lai kalimatillah wa 'izzul Islam wal Muslimin" (meninggikan Kalimah Allah dan memulyakan Islam dan Umat Islam), Dewan Pengurus Pusat senantiasa bekerja keras untuk mewujudkan cita-cita mulia tersebut melalui pengembangan di semua bidang garapan yayasan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== KOMITMEN AREA ENDS =======-->

@endsection

