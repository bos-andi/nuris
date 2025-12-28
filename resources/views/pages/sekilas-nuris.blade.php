@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Sekilas PP. Nurul Islam</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang Nuris</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sekilas PP. Nurul Islam</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== SEKILAS NURIS AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Gambaran Umum</h5>
                        <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Pondok Pesantren Nurul Islam Mojokerto</h2>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Yayasan Pondok Pesantren Nurul Islam Mojokerto saat ini bergerak di Bidang Pendidikan, Dakwah, Sosial, Ekonomi dan Kesehatan. Sebagai lembaga yang berkomitmen untuk mendidik generasi muda dengan nilai-nilai Islam yang rahmatan lil alamin, PP. Nurul Islam berusaha menciptakan lingkungan belajar yang kondusif untuk pengembangan potensi santri secara optimal.
                        </p>
                        <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            Dengan sistem pendidikan terpadu yang mengintegrasikan ilmu agama dan ilmu umum, PP. Nurul Islam memiliki komitmen untuk menjadikan yayasan ini sebagai pilot project bagi masyarakat luas dalam sekala Nasional maupun Internasional, baik dari segi Kualitas, Kuantitas, Manajerial, Jangkauan Operasional, Administrasi, Sistem Pengelolaan serta Pelayanan kepada Masyarakat/umat lainnya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300" style="border-radius: clamp(1rem, 2vw, 1.25rem); overflow: hidden; box-shadow: 0 0.9375rem 3.125rem rgba(0,0,0,0.2); position: relative; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 0.625rem;">
                    <div style="position: relative; width: 100%; padding-bottom: 75%; overflow: hidden; border-radius: 0.75rem;">
                        <img class="w-100" src="{{ asset('img/about/nuris-gedung.jpg') }}" alt="Gedung Pondok Pesantren Nurul Islam" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);" onerror="this.onerror=null; this.src='{{ asset('img/about/vl-about-1.1.png') }}';" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== SEKILAS NURIS AREA ENDS =======-->

<!--===== BIDANG GARAPAN AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Bidang Garapan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Lima Bidang Utama</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-graduation-cap" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pendidikan</h3>
                        <p>Mengelola 17 lembaga pendidikan dan Pondok Pesantren mulai dari tingkat STAI, SLTP, SLTA, hingga Madrasah Diniyah yang tersebar di dua lokasi utama.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-megaphone" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Dakwah</h3>
                        <p>Menyelenggarakan penerbitan Majalah Nuris Media yang terbit setiap 3 bulan sekali sebagai media dakwah dan informasi untuk umat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-store" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Ekonomi</h3>
                        <p>Mengelola Unit Usaha Nuris Mart dan Nuris School Bank untuk mendukung perekonomian pesantren dan memberikan layanan kepada masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-heart-pulse" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kesehatan</h3>
                        <p>Mengelola Klinik atau Balai Pengobatan Nuris Medika untuk memberikan pelayanan kesehatan kepada santri, guru, karyawan, dan masyarakat sekitar.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-handshake" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Sosial</h3>
                        <p>Melakukan berbagai kegiatan sosial untuk membantu masyarakat dan umat dalam rangka mewujudkan cita-cita "li I'lai kalimatillah wa 'izzul Islam wal Muslimin".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== BIDANG GARAPAN AREA ENDS =======-->

<!--===== UNIT PENDIDIKAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Bidang Pendidikan</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">17 Unit Pendidikan</h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 900px; margin: 0 auto;">
                        Di bidang pendidikan, Yayasan Pondok Pesantren Nurul Islam Mojokerto mengelola 17 lembaga pendidikan dan Pondok Pesantren yang tersebar di dua lokasi utama.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h3 class="title mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Daftar Unit Pendidikan</h3>
                        <div class="vl-about-grid" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-university" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">1. STAI Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-school" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">2. MTs 1 Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-school" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">3. MTs 2 Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-school" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">4. SMP UBQ Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-school" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">5. SMP 2 Trans-Sains Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-graduation-cap" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">6. MA 1 Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-graduation-cap" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">7. MA 2 Ad-Dauliyah Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-graduation-cap" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">8. SMK UBP Nurul Islam</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-graduation-cap" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">9. SMA Global School Nurul Islam</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h3 class="title mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">Madrasah Diniyah</h3>
                        <div class="vl-about-grid" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">10. MDTA Nurul Islam 1</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">11. MDTA 1 Nurul Islam 2</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">12. MDTA 2 Nurul Islam 2</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">13. MDTA 3 Nurul Islam 2</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">14. MDTW Nurul Islam 1</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">15. MDTW 1 Nurul Islam 2</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">16. MDTW 2 Nurul Islam 2</h4>
                                </div>
                            </div>
                            <div class="vl-about-icon-box mb-20">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-mosque" style="font-size: clamp(1.25rem, 2.6vw, 1.5625rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title" style="font-size: clamp(0.875rem, 1.6vw, 1rem);">17. MDTU Nurul Islam</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== UNIT PENDIDIKAN AREA ENDS =======-->

<!--===== LOKASI PESANTREN AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Lokasi Pesantren</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Dua Lokasi Utama</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-location-dot" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pondok Pesantren Nurul Islam 1</h3>
                        <p class="mb-20"><strong>Lokasi:</strong> Desa Jabontegal, Kecamatan Pungging, Kabupaten Mojokerto</p>
                        <h4 class="title mb-15" style="font-size: clamp(0.875rem, 1.8vw, 1.125rem);">Unit Pendidikan:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MTs Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> SMK UBP Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MDTA Nurul Islam 1</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MDTW Nurul Islam 1</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-location-dot" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Pondok Pesantren Nurul Islam 2</h3>
                        <p class="mb-20"><strong>Lokasi:</strong> Desa Tunggalpager, Kecamatan Pungging, Kabupaten Mojokerto</p>
                        <h4 class="title mb-15" style="font-size: clamp(0.875rem, 1.8vw, 1.125rem);">Unit Pendidikan:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> SMP UBQ Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MTs 2 Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> SMP 2 Trans-Sains Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MA 1 Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MA 2 Ad-Dauliyah Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> SMA Global School Nurul Islam</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MDTA 1 Nurul Islam 2</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MDTA 2 Nurul Islam 2</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MDTW 1 Nurul Islam 2</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fa-solid fa-check" style="color: var(--ztc-text-text-4); margin-right: 0.5rem;"></i> MDTW 2 Nurul Islam 2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== LOKASI PESANTREN AREA ENDS =======-->

<!--===== VISI JANGKA PANJANG AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Visi Jangka Panjang</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Pengembangan Masa Depan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <p class="pb-32 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="max-width: 90%; margin: 0 auto; font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8;">
                            Dalam jangka panjang, Yayasan Pondok Pesantren Nurul Islam Mojokerto akan menjelma menjadi lembaga yang menggarap beberapa bidang hajat hidup Masyarakat selain Pendidikan, dakwah dan sosial, meliputi:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-hospital" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Rumah Sakit</h3>
                        <p>Pendirian Rumah Sakit berskala Nasional untuk memberikan pelayanan kesehatan yang lebih komprehensif.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-industry" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Manufaktur & Produksi</h3>
                        <p>Usaha Manufaktur dan Produksi meliputi Lumbung Pangan, Perusahaan Tahu dan Tempe, Perusahaan Percetakan, Garment, Taylor dan konveksi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-store" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Ritel & Agrobisnis</h3>
                        <p>Pengembangan usaha Ritel dan Agrobisnis yang melibatkan banyak karyawan untuk mendukung perekonomian.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-landmark" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Perbankan</h3>
                        <p>Pengembangan sektor Perbankan untuk menjadi pelaku ekonomi aktif dalam kancah perekonomian makro nasional.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-icon-box text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-handshake" style="font-size: clamp(2.5rem, 5.2vw, 3.125rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title">Kerjasama & Komunikasi</h3>
                        <p>Senantiasa berbenah di segala bidang serta terus menjalin komunikasi dan kerjasama dengan berbagai pihak dalam maupun luar negeri yang memiliki kepedulian dalam bidang pendidikan, dakwah, sosial, ekonomi dan kesehatan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-12">
                <div class="vl-about-icon-box text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="800">
                    <div class="vl-about-icon mb-20">
                        <span><i class="fa-solid fa-star" style="font-size: clamp(3rem, 6vw, 3.75rem); color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-20">Cita-Cita Mulia</h3>
                        <p style="font-size: clamp(0.875rem, 1.8vw, 1.125rem); line-height: 1.8; font-style: italic; color: var(--ztc-text-text-4);">
                            "li I'lai kalimatillah wa 'izzul Islam wal Muslimin"<br>
                            (Meninggikan Kalimah Allah dan memulyakan Islam dan Umat Islam)
                        </p>
                        <p class="mt-30" style="font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8;">
                            Beberapa garapan industri sebagaimana di atas akan dapat diwujudkan dalam rentang waktu yang terjangkau karena menjadi kebutuhan internal yang mendesak dan diproyeksikan menjadi pelaku ekonomi aktif dalam kancah perekonomian makro nasional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== VISI JANGKA PANJANG AREA ENDS =======-->

@endsection

