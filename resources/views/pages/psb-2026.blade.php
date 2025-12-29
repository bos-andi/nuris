@extends('layouts.app')

@section('content')

<style>
.psb-responsive {
    font-size: clamp(0.875rem, 2vw, 1rem);
}

.psb-section-padding {
    padding: 5vw 0;
}

.psb-card-padding {
    padding: clamp(1.5rem, 3vw, 2.5rem);
}

.psb-icon-size {
    font-size: clamp(2.5rem, 5vw, 3.75rem);
}

.psb-title-size {
    font-size: clamp(1.75rem, 4vw, 3rem);
}

.psb-subtitle-size {
    font-size: clamp(1rem, 2.5vw, 1.5rem);
}

.psb-text-size {
    font-size: clamp(0.875rem, 1.8vw, 1.125rem);
}

.psb-button-padding {
    padding: clamp(0.875rem, 2vw, 1.125rem) clamp(1.875rem, 4vw, 2.5rem);
}

.psb-border-radius {
    border-radius: clamp(0.9375rem, 2vw, 1.25rem);
}

.psb-box-shadow {
    box-shadow: 0 clamp(0.3125rem, 1vw, 0.625rem) clamp(1.25rem, 2.5vw, 2.5rem) rgba(0,0,0,0.1);
}
</style>

<!--===== HERO AREA STARTS =======-->
@php
    $baseUrl = request()->getSchemeAndHttpHost();
    $bannerImage = asset('img/banner/psb-banner-2026.jpg');
    // Fallback jika gambar belum ada
    if (!file_exists(public_path('img/banner/psb-banner-2026.jpg'))) {
        $bannerImage = asset('img/banner/nuris-hero-bg.jpg');
    }
@endphp
<div class="vl-banner p-relative fix">
    <div class="vl-hero-slider vl-hero-bg" style="position: relative; background-image: url({{ $bannerImage }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="vl-hero-shape shape-1">
            <img src="{{ asset('img/shape/vl-hero-shape-1.1.png') }}" alt="">
        </div>
        <div class="vl-hero-shape shape-2">
            <img src="{{ asset('img/shape/vl-hero-shape-1.2.png') }}" alt="">
        </div>


        <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center;">
            <div class="row" style="width: 100%;">
                <div class="col-lg-12">
                    <div class="vl-hero-section-title text-center">
                        <h5 class="vl-subtitle">
                            <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> <span style="color: #ffffff; font-weight: 700; background: rgba(1, 113, 93, 0.9); padding: 0.3125rem 0.9375rem; border-radius: 0.5rem; display: inline-block; text-shadow: none;">Tahun Akademik 2026/2027</span>
                        </h5>
                        <h1 class="vl-title text-anime-style-3">Penerimaan Santri Baru (PSB) 2026</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Hero Banner dengan rasio 4119x956 (rasio aspek ~4.31:1) */
    /* Height = (956 / 4119) * 100 = ~23.21% dari width */
    .vl-banner {
        width: 100%;
        height: 0;
        padding-bottom: 23.21%; /* 956/4119 * 100 = 23.21% */
        position: relative;
        overflow: hidden;
    }
    
    .vl-hero-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100% !important;
        display: flex !important;
        align-items: center;
        min-height: clamp(18.75rem, 23.21vw, 25rem); /* Minimum height untuk mobile */
    }
    
    /* Fallback untuk layar yang sangat kecil */
    @media (max-width: 768px) {
        .vl-banner {
            padding-bottom: clamp(28%, 35vw, 40%); /* Lebih tinggi di mobile untuk readability */
            min-height: clamp(18.75rem, 40vh, 25rem);
        }
        
        .vl-hero-slider {
            min-height: clamp(18.75rem, 40vh, 25rem) !important;
        }
    }
    
    /* Untuk layar sangat kecil */
    @media (max-width: 480px) {
        .vl-banner {
            padding-bottom: clamp(35%, 45vw, 50%);
            min-height: clamp(15rem, 45vh, 20rem);
        }
        
        .vl-hero-slider {
            min-height: clamp(15rem, 45vh, 20rem) !important;
        }
    }
    
    .vl-hero-section-title {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    
    .vl-hero-section-title .vl-title {
        color: #ffffff;
        text-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.3);
    }
    
    .vl-hero-section-title .vl-subtitle {
        color: rgba(255, 255, 255, 0.95);
    }
    
    .vl-hero-section-title .vl-subtitle span[style*="color: #01715d"] {
        color: #01715d !important;
        font-weight: 600;
    }
    
    .vl-hero-section-title .breadcrumb-item a {
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .vl-hero-section-title .breadcrumb-item a:hover {
        color: #FBD459;
    }
    
    /* Remove dimming overlay on header image */
    .vl-banner .vl-hero-bg:after {
        display: none !important;
    }
</style>
<!--===== HERO AREA ENDS =======-->

<!--===== UNIT PENDIDIKAN STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" id="unit">
    <div class="container">
        <div class="vl-section-title-1 mb-60 text-center">
            <h5 class="subtitle psb-subtitle-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Pilihan Unit
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Unit Pendidikan yang Tersedia</h2>
            <p class="psb-text-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto;">
                Pondok Pesantren Nurul Islam menyediakan berbagai unit pendidikan formal untuk putra-putri Anda
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="background: white; border-radius: 0.9375rem; height: 100%; box-shadow: 0 0.3125rem 1.25rem rgba(0,0,0,0.1); border-top: 0.25rem solid #01715d;">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-school psb-icon-size" style="color: #01715d;"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: 0.9375rem;">Jenjang SLTP</h3>
                        <ul style="list-style: none; padding: 0; margin: 0; color: #6c757d;">
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #01715d;"></i>
                                MTs 1 Nurul Islam
                            </li>
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #01715d;"></i>
                                MTs 2 Nurul Islam
                            </li>
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #01715d;"></i>
                                SMP UBQ Nurul Islam
                            </li>
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #01715d;"></i>
                                SMP 2 Trans-Sains Nurul Islam
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="background: white; border-radius: 0.9375rem; height: 100%; box-shadow: 0 0.3125rem 1.25rem rgba(0,0,0,0.1); border-top: 0.25rem solid #FBD459;">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-graduation-cap psb-icon-size" style="color: #FBD459;"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: 0.9375rem;">Jenjang SLTA Reguler</h3>
                        <ul style="list-style: none; padding: 0; margin: 0; color: #6c757d;">
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #FBD459;"></i>
                                MA 1 Nurul Islam
                            </li>
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #FBD459;"></i>
                                SMK UBP Nurul Islam
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-30">
                <div class="vl-about-icon-box psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="background: white; border-radius: 0.9375rem; height: 100%; box-shadow: 0 0.3125rem 1.25rem rgba(0,0,0,0.1); border-top: 0.25rem solid #28a745;">
                    <div class="vl-about-icon">
                        <span><i class="fa-solid fa-globe psb-icon-size" style="color: #28a745;"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: 0.9375rem;">Jenjang SLTA Internasional</h3>
                        <ul style="list-style: none; padding: 0; margin: 0; color: #6c757d;">
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #28a745;"></i>
                                MA 2 Ad-Dauliyah Nurul Islam
                            </li>
                            <li class="psb-text-size" style="margin-bottom: 0.5rem; padding-left: 1.25rem; position: relative;">
                                <i class="fa-solid fa-check" style="position: absolute; left: 0; color: #28a745;"></i>
                                SMA Global School Nurul Islam
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== UNIT PENDIDIKAN ENDS =======-->

<!--===== TIMELINE GELOMBANG & PERSYARATAN STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" id="timeline-persyaratan" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 20% 50%, rgba(1, 113, 93, 0.03) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(251, 212, 89, 0.03) 0%, transparent 50%); z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <!-- Section Header -->
        <div class="vl-section-title-1 mb-60 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <h5 class="subtitle psb-subtitle-size">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Informasi Penting
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" style="color: #01715d; font-weight: 700;">
                Timeline Gelombang & Persyaratan
            </h2>
            <p class="psb-text-size" style="max-width: 90%; margin: 0 auto; color: #6c757d; margin-top: clamp(0.75rem, 1.5vw, 1rem);">
                Informasi lengkap mengenai timeline gelombang pendaftaran dan persyaratan yang diperlukan
            </p>
        </div>

        <div class="row">
            <!-- Kolom 1: Persyaratan -->
            <div class="col-lg-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="card" style="border: none; border-radius: clamp(1.25rem, 3vw, 1.875rem); box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.08); overflow: hidden; background: #ffffff; height: 100%;">
                    <div style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); padding: clamp(1.5rem, 3vw, 2rem); position: relative; overflow: hidden;">
                        <!-- Decorative shapes -->
                        <div style="position: absolute; top: -50%; right: -10%; width: clamp(12rem, 30vw, 18rem); height: clamp(12rem, 30vw, 18rem); background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
                        <div style="position: absolute; bottom: -50%; left: -10%; width: clamp(10rem, 25vw, 15rem); height: clamp(10rem, 25vw, 15rem); background: rgba(251, 212, 89, 0.1); border-radius: 50%;"></div>
                        
                        <div style="position: relative; z-index: 1;">
                            <h3 style="color: #ffffff; font-weight: 700; font-size: clamp(1.25rem, 2.5vw, 1.75rem); margin: 0 0 clamp(0.5rem, 1vw, 0.75rem) 0; display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem);">
                                <i class="fa-solid fa-file-circle-check" style="font-size: clamp(1.5rem, 3vw, 2rem);"></i>
                                Persyaratan Pendaftaran
                            </h3>
                            <p style="color: rgba(255, 255, 255, 0.9); margin: 0; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                Dokumen yang harus disiapkan
                            </p>
                        </div>
                    </div>
                    
                    <div style="padding: clamp(1.5rem, 3vw, 2.5rem); max-height: 600px; overflow-y: auto;">
                        <ol style="list-style: none; padding: 0; margin: 0; counter-reset: requirement-counter;">
                            @php
                                $requirements = [
                                    'Legalisir Ijazah 3 Lembar (jika sudah ada)',
                                    'Fotokopi Rapor kelas 4-6 / 7-9 dilegalisir',
                                    'Fotokopi NISN 3 Lembar',
                                    'Fotokopi KK 3 Lembar',
                                    'Fotokopi Akta Kelahiran 3 Lembar',
                                    'Fotokopi KTP Orang Tua 3 Lembar',
                                    'Pas Foto Hitam Putih 3x4 - 3 Lembar',
                                    'Fotokopi KIP 3 Lembar (bagi yang punya)',
                                    'Materai 10.000',
                                    'Semua berkas dimasukkan map kancing (warna sesuai kode unit)',
                                ];
                            @endphp
                            
                            @foreach($requirements as $index => $requirement)
                            <li style="counter-increment: requirement-counter; margin-bottom: clamp(0.875rem, 1.5vw, 1rem); padding: clamp(0.75rem, 1.2vw, 0.875rem) clamp(0.875rem, 1.5vw, 1rem); background: #f8f9fa; border-left: 0.25rem solid #01715d; border-radius: clamp(0.5rem, 1vw, 0.625rem); transition: all 0.3s ease; position: relative; padding-left: clamp(3rem, 6vw, 3.5rem);" onmouseover="this.style.background='#f0f7f6'; this.style.transform='translateX(0.5rem)'; this.style.boxShadow='0 0.25rem 0.75rem rgba(1, 113, 93, 0.1)';" onmouseout="this.style.background='#f8f9fa'; this.style.transform='translateX(0)'; this.style.boxShadow='none';">
                                <span style="position: absolute; left: clamp(0.875rem, 1.5vw, 1rem); top: clamp(0.75rem, 1.2vw, 0.875rem); width: clamp(1.75rem, 3.5vw, 2.25rem); height: clamp(1.75rem, 3.5vw, 2.25rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 700; font-size: clamp(0.75rem, 1.5vw, 0.875rem); box-shadow: 0 clamp(0.125rem, 0.4vw, 0.25rem) clamp(0.375rem, 0.8vw, 0.5rem) rgba(1, 113, 93, 0.2);">
                                    {{ $index + 1 }}
                                </span>
                                <span style="color: #2c3e50; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem); line-height: 1.6; display: block;">
                                    {{ $requirement }}
                                </span>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Kolom 2: Timeline Gelombang -->
            <div class="col-lg-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                <div class="card" style="border: none; border-radius: clamp(1.25rem, 3vw, 1.875rem); box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.08); overflow: hidden; background: #ffffff; height: 100%;">
                    <div style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); padding: clamp(1.5rem, 3vw, 2rem); position: relative; overflow: hidden;">
                        <div style="position: relative; z-index: 1;">
                            <h3 style="color: #ffffff; font-weight: 700; font-size: clamp(1.25rem, 2.5vw, 1.75rem); margin: 0 0 clamp(0.5rem, 1vw, 0.75rem) 0; display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem);">
                                <i class="fa-solid fa-calendar-days" style="font-size: clamp(1.5rem, 3vw, 2rem);"></i>
                                Timeline Gelombang
                            </h3>
                            <p style="color: rgba(255, 255, 255, 0.9); margin: 0; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                Jadwal pendaftaran per gelombang
                            </p>
                        </div>
                    </div>
                    
                    <div style="padding: clamp(1.5rem, 3vw, 2.5rem); max-height: 600px; overflow-y: auto;">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" style="margin: 0; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">
                                <thead style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); color: #fff;">
                                    <tr>
                                        <th style="padding: clamp(0.75rem, 1.5vw, 1rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.75rem, 1.3vw, 0.875rem); width: 8%;">NO</th>
                                        <th style="padding: clamp(0.75rem, 1.5vw, 1rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.75rem, 1.3vw, 0.875rem); width: 25%;">WAKTU</th>
                                        <th style="padding: clamp(0.75rem, 1.5vw, 1rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.75rem, 1.3vw, 0.875rem); width: 42%;">KEGIATAN</th>
                                        <th style="padding: clamp(0.75rem, 1.5vw, 1rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.75rem, 1.3vw, 0.875rem); width: 25%;">GELOMBANG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Gelombang I -->
                                    <tr style="background-color: #ffffff;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">1</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">1 Jan - 7 Mar 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Pendaftaran & Seleksi</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang I</td>
                                    </tr>
                                    <tr style="background-color: #ffffff;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">2</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">7-8 Mar 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Tes Masuk</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang I</td>
                                    </tr>
                                    <tr style="background-color: #e9ecef;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">3</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">8 Mar - 18 Apr 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.7rem, 1.2vw, 0.8125rem); font-weight: 600;">Daftar Ulang</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #dee2e6; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang I</td>
                                    </tr>
                                    
                                    <!-- Gelombang II -->
                                    <tr style="background-color: #ffffff;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">4</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">8 Mar - 29 Apr 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Pendaftaran & Seleksi</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang II</td>
                                    </tr>
                                    <tr style="background-color: #ffffff;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">5</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">29-30 Apr 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Tes Masuk</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang II</td>
                                    </tr>
                                    <tr style="background-color: #e9ecef;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">6</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">30 Apr - 13 Jun 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.7rem, 1.2vw, 0.8125rem); font-weight: 600;">Daftar Ulang</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #dee2e6; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang II<br><small style="color: #dc3545; font-weight: 600;">+Rp. 500.000</small></td>
                                    </tr>
                                    
                                    <!-- Gelombang III -->
                                    <tr style="background-color: #ffffff;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">7</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">1 Mei - 13 Jun 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Pendaftaran & Seleksi</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang III</td>
                                    </tr>
                                    <tr style="background-color: #ffffff;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">8</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">13-14 Jun 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Tes Masuk</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang III</td>
                                    </tr>
                                    <tr style="background-color: #e9ecef;">
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: none; font-size: clamp(0.75rem, 1.3vw, 0.875rem);">9</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: none; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">14-30 Jun 2026</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #2c3e50; border-bottom: none; font-size: clamp(0.7rem, 1.2vw, 0.8125rem); font-weight: 600;">Daftar Ulang</td>
                                        <td style="padding: clamp(0.75rem, 1.5vw, 1rem); vertical-align: middle; color: #6c757d; border-bottom: none; font-size: clamp(0.7rem, 1.2vw, 0.8125rem);">Gelombang III<br><small style="color: #dc3545; font-weight: 600;">+Rp. 750.000</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TIMELINE GELOMBANG & PERSYARATAN ENDS =======-->

<!--===== ALUR PENDAFTARAN STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" style="background: linear-gradient(to bottom, #e8f5f3 0%, #ffffff 50%); position: relative;" id="prosedur">
    <!-- Background Pattern -->
    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 50%; background-image: repeating-linear-gradient(45deg, rgba(1, 113, 93, 0.03) 0px, rgba(1, 113, 93, 0.03) 10px, transparent 10px, transparent 20px); z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <!-- Title Banner -->
        <div class="text-center mb-60" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <div style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); border-radius: clamp(1.25rem, 3vw, 1.875rem); padding: clamp(1.25rem, 2.5vw, 1.875rem); display: inline-block; box-shadow: 0 clamp(0.3125rem, 1vw, 0.625rem) clamp(1.25rem, 2.5vw, 2.5rem) rgba(251, 212, 89, 0.3);">
                <h2 class="psb-title-size" style="color: #ffffff; margin: 0; font-weight: 700; text-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.2);">Alur Pendaftaran</h2>
            </div>
        </div>

        <!-- Content Card -->
        <div class="card" style="background: #ffffff; border-radius: clamp(1.25rem, 3vw, 1.875rem); border: 0.1875rem solid #FBD459; box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.1); padding: clamp(2rem, 4vw, 3rem);" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
            <div class="row">
                @php
                    $steps = [
                        [
                            'number' => 1,
                            'title' => 'Screening Santri',
                            'description' => 'Wawancara Calon Santri dan Calon Wali Santri',
                            'icon' => 'fa-search'
                        ],
                        [
                            'number' => 2,
                            'title' => 'Membeli Formulir',
                            'description' => 'Membeli dikantor sekretariat PSB PP. Nurul Islam Mojokerto',
                            'icon' => 'fa-file-invoice'
                        ],
                        [
                            'number' => 3,
                            'title' => 'Mengisi Formulir',
                            'description' => 'Serta melengkapi seluruh persyaratan yang telah ditentukan Panitia PSB',
                            'icon' => 'fa-file-pen'
                        ],
                        [
                            'number' => 4,
                            'title' => 'Melakukan Pendaftaran',
                            'description' => 'Menyerahkan Berkas & Mengisi Surat Pernyataan dan Membayar Mahar',
                            'icon' => 'fa-clipboard-check'
                        ],
                        [
                            'number' => 5,
                            'title' => 'Tes Expert Classes',
                            'description' => 'Mengerjakan tes expert classes berbasis komputer',
                            'icon' => 'fa-laptop'
                        ],
                        [
                            'number' => 6,
                            'title' => 'Penandatanganan Pakta Integritas',
                            'description' => 'Mengisi Surat Pernyataan Kesanggupan Mematuhi Seluruh Aturan Pesantren',
                            'icon' => 'fa-signature'
                        ],
                        [
                            'number' => 7,
                            'title' => 'Daftar Ulang',
                            'description' => 'Melakukan pelunasan dan menerima kain seragam',
                            'icon' => 'fa-money-bill-wave'
                        ],
                        [
                            'number' => 8,
                            'title' => 'Santri Masuk',
                            'description' => 'Sesuai Pengumuman Resmi berupa Surat Edaran dari Pondok',
                            'icon' => 'fa-check-circle'
                        ],
                    ];
                @endphp
                
                @foreach($steps as $index => $step)
                <div class="col-lg-12 mb-4" style="position: relative;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ 500 + ($index * 100) }}">
                    @if($index < count($steps) - 1)
                    <!-- Arrow -->
                    <div style="position: absolute; left: 50%; top: 100%; transform: translateX(-50%); z-index: 2; display: flex; align-items: center; justify-content: center; width: clamp(2.5rem, 5vw, 3.5rem); height: clamp(2.5rem, 5vw, 3.5rem); background: #FBD459; border-radius: 50%; margin-top: clamp(0.5rem, 1vw, 0.75rem);">
                        <i class="fa-solid fa-arrow-down" style="color: #2c3e50; font-size: clamp(1rem, 2vw, 1.25rem); font-weight: 700;"></i>
                    </div>
                    @endif
                    
                    <div style="display: flex; align-items: center; gap: clamp(1rem, 2.5vw, 1.5rem);">
                        <!-- Step Banner -->
                        <div style="flex: 1; position: relative;">
                            <div style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); border-radius: clamp(0.625rem, 1.5vw, 0.9375rem) clamp(0.625rem, 1.5vw, 0.9375rem) 0 0; padding: clamp(0.75rem, 1.5vw, 1rem) clamp(1rem, 2vw, 1.5rem); position: relative; clip-path: polygon(0 0, calc(100% - clamp(1.5rem, 3vw, 2rem)) 0, 100% 100%, 0 100%);">
                                <div style="display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem);">
                                    <span style="color: #ffffff; font-weight: 700; font-size: clamp(1.25rem, 2.5vw, 1.5rem); line-height: 1;">{{ $step['number'] }}.</span>
                                    <h3 style="color: #ffffff; font-weight: 700; font-size: clamp(1rem, 2vw, 1.25rem); margin: 0; line-height: 1.3;">{{ $step['title'] }}</h3>
                                </div>
                            </div>
                            <div style="background: #ffffff; padding: clamp(0.875rem, 1.5vw, 1.125rem) clamp(1rem, 2vw, 1.5rem); border-radius: 0 0 clamp(0.625rem, 1.5vw, 0.9375rem) clamp(0.625rem, 1.5vw, 0.9375rem); border: 0.125rem solid #FBD459; border-top: none;">
                                <p style="color: #2c3e50; margin: 0; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem); line-height: 1.6;">{{ $step['description'] }}</p>
                            </div>
                        </div>
                        
                        <!-- Icon Circle -->
                        <div style="flex-shrink: 0; width: clamp(4rem, 8vw, 5.5rem); height: clamp(4rem, 8vw, 5.5rem); background: #ffffff; border: 0.1875rem solid #FBD459; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(251, 212, 89, 0.3);">
                            <i class="fa-solid {{ $step['icon'] }}" style="color: #FBD459; font-size: clamp(1.5rem, 3vw, 2rem);"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--===== ALUR PENDAFTARAN ENDS =======-->

<!--===== TIMELINE PENDAFTARAN STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" style="background-color: #f8f9fa;" id="jadwal">
    <div class="container">
        <div class="vl-section-title-1 mb-60 text-center">
            <h5 class="subtitle psb-subtitle-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Timeline Pendaftaran
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Jadwal Pendaftaran PSB 2026</h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="border-radius: 0.9375rem; box-shadow: 0 0.3125rem 1.25rem rgba(0,0,0,0.1); overflow: hidden;">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" style="margin: 0;">
                            <thead style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); color: #fff;">
                                <tr>
                                    <th style="padding: clamp(0.9375rem, 2vw, 1.25rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.875rem, 1.6vw, 1rem); width: 5%;">NO</th>
                                    <th style="padding: clamp(0.9375rem, 2vw, 1.25rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.875rem, 1.6vw, 1rem); width: 20%;">WAKTU</th>
                                    <th style="padding: clamp(0.9375rem, 2vw, 1.25rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.875rem, 1.6vw, 1rem); width: 50%;">JENIS KEGIATAN</th>
                                    <th style="padding: clamp(0.9375rem, 2vw, 1.25rem); font-weight: 700; border: none; text-align: center; vertical-align: middle; font-size: clamp(0.875rem, 1.6vw, 1rem); width: 25%;">KET.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Gelombang I -->
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">1</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        1 Januari - 7 Maret 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Pendaftaran & Seleksi
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang I
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">2</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        7 - 8 Maret 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Tes Masuk (MA 2 & SMA Global School, Expert Class)
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang I
                                    </td>
                                </tr>
                                <tr style="background-color: #e9ecef;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #dee2e6;">3</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        8 Maret - 18 April 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem); font-weight: 600;">
                                        Daftar Ulang
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #dee2e6; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang I
                                    </td>
                                </tr>
                                
                                <!-- Gelombang II -->
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">4</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        8 Maret - 29 April 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Pendaftaran & Seleksi
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang II
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">5</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        29 - 30 April 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Tes Masuk (MA 2 & SMA Global School, Expert Class)
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang II
                                    </td>
                                </tr>
                                <tr style="background-color: #e9ecef;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #dee2e6;">6</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        30 April - 13 Juni 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem); font-weight: 600;">
                                        Daftar Ulang
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #dee2e6; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang II<br>
                                        <small style="color: #dc3545; font-weight: 600;">Kenaikan Biaya Rp. 500.000,-</small>
                                    </td>
                                </tr>
                                
                                <!-- Gelombang III -->
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">7</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        1 Mei - 13 Juni 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Pendaftaran & Seleksi
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang III
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">8</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        13 - 14 Juni 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Tes Masuk (MA 2 & SMA Global School, Expert Class)
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang III
                                    </td>
                                </tr>
                                <tr style="background-color: #e9ecef;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #dee2e6;">9</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        14 - 30 Juni 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #dee2e6; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem); font-weight: 600;">
                                        Daftar Ulang
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #dee2e6; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Gelombang III<br>
                                        <small style="color: #dc3545; font-weight: 600;">Kenaikan Biaya Rp. 750.000,-</small>
                                    </td>
                                </tr>
                                
                                <!-- Post-Registration -->
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">10</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        8 - 12 Juli 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Masuk Asrama Santri Baru
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        -
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">11</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        13 Juli 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        MATSAMA & MPLS
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        -
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: 1px solid #e9ecef;">12</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        20 - 24 Juli 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: 1px solid #e9ecef; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Tes Baca Al-Qur'an & Pengumuman
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: 1px solid #e9ecef; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        -
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff;">
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); text-align: center; vertical-align: middle; font-weight: 700; color: #2c3e50; border-bottom: none;">13</td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: none; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        27 Juli 2026
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #2c3e50; border-bottom: none; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                        Mulai Kegiatan Belajar Mengajar (KBM)
                                    </td>
                                    <td style="padding: clamp(0.9375rem, 2vw, 1.25rem); vertical-align: middle; color: #6c757d; border-bottom: none; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Catatan Penting -->
                <div class="mt-40" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="alert alert-info" style="background: linear-gradient(135deg, rgba(1, 113, 93, 0.1) 0%, rgba(1, 113, 93, 0.05) 100%); border-left: 0.25rem solid #01715d; padding: clamp(1.25rem, 2.5vw, 1.5625rem); border-radius: 0.625rem; margin-top: clamp(2rem, 3vw, 2.5rem);">
                        <h4 style="color: #01715d; font-weight: 700; margin-bottom: 0.9375rem; font-size: clamp(1rem, 2vw, 1.25rem);">
                            <i class="fa-solid fa-info-circle" style="margin-right: 0.625rem;"></i>Catatan Penting
                        </h4>
                        <ul style="color: #2c3e50; line-height: 1.8; margin: 0; padding-left: 1.25rem; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                            <li style="margin-bottom: 0.625rem;">Apabila kuota siswa/santri baru telah terpenuhi maka pendaftaran gelombang selanjutnya sewaktu-waktu bisa ditutup.</li>
                            <li style="margin-bottom: 0.625rem;">Pembayaran angsuran 1 setelah mengisi formulir pendaftaran (sudah dinyatakan lolos screening) <strong>Rp. 1.000.000,-</strong> & pelunasan sebelum atau pada waktu daftar ulang.</li>
                            <li style="margin-bottom: 0.625rem;">Untuk daftar ulang gelombang II ada kenaikan biaya <strong>Rp. 500.000,-</strong></li>
                            <li style="margin-bottom: 0.625rem;">Untuk daftar ulang gelombang III ada kenaikan biaya <strong>Rp. 750.000,-</strong></li>
                            <li>Apabila batal mendaftar, maka biaya pendaftaran yang telah dibayar tidak dapat dikembalikan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== JADWAL PENDAFTARAN ENDS =======-->

<!--===== BIAYA PENDAFTARAN STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" id="biaya">
    <div class="container">
        <div class="vl-section-title-1 mb-60 text-center">
            <h5 class="subtitle psb-subtitle-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Informasi Biaya
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Rincian Biaya Unit Pendidikan</h2>
            <p class="psb-text-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto; color: #6c757d;">
                Download atau review rincian biaya lengkap untuk setiap unit pendidikan formal di bawah ini
            </p>
        </div>

        @php
            $units = [
                ['name' => 'MTs 1 Nurul Islam', 'slug' => 'mts-1-nurul-islam', 'category' => 'SLTP'],
                ['name' => 'MTs 2 Nurul Islam', 'slug' => 'mts-2-nurul-islam', 'category' => 'SLTP'],
                ['name' => 'SMP UBQ Nurul Islam', 'slug' => 'smp-ubq-nurul-islam', 'category' => 'SLTP'],
                ['name' => 'SMP 2 Trans-Sains Nurul Islam', 'slug' => 'smp-2-trans-sains-nurul-islam', 'category' => 'SLTP'],
                ['name' => 'MA 1 Nurul Islam', 'slug' => 'ma-1-nurul-islam', 'category' => 'SLTA Reguler'],
                ['name' => 'SMK UBP Nurul Islam', 'slug' => 'smk-ubp-nurul-islam', 'category' => 'SLTA Reguler'],
                ['name' => 'MA 2 Ad-Dauliyah Nurul Islam', 'slug' => 'ma-2-ad-dauliyah-nurul-islam', 'category' => 'SLTA Internasional'],
                ['name' => 'SMA Global School Nurul Islam', 'slug' => 'sma-global-school-nurul-islam', 'category' => 'SLTA Internasional'],
            ];
        @endphp

        <div class="row">
            @foreach($units as $index => $unit)
                <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ 300 + ($index * 100) }}">
                    <div class="card" style="border-radius: 0.9375rem; box-shadow: 0 0.3125rem 1.25rem rgba(0,0,0,0.1); border: none; height: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 0.625rem 2.5rem rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.3125rem 1.25rem rgba(0,0,0,0.1)';">
                        <div class="card-body psb-card-padding" style="padding: clamp(1.25rem, 2.5vw, 1.5625rem);">
                            <div class="d-flex align-items-center mb-3">
                                <div style="width: clamp(3rem, 5vw, 4rem); height: clamp(3rem, 5vw, 4rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: clamp(0.9375rem, 2vw, 1.25rem); flex-shrink: 0;">
                                    <i class="fa-solid fa-school" style="color: #FBD459; font-size: clamp(1.25rem, 2vw, 1.5rem);"></i>
                                </div>
                                <div style="flex: 1;">
                                    <h3 class="psb-subtitle-size" style="font-weight: 700; color: #2c3e50; margin-bottom: 0.3125rem; font-size: clamp(1rem, 2vw, 1.125rem);">
                                        {{ $unit['name'] }}
                                    </h3>
                                    <p class="psb-text-size" style="color: #6c757d; margin: 0; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                        Unit {{ $unit['category'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-3" style="display: flex; gap: 0.625rem; margin-top: 1rem;">
                                @php
                                    $baseUrl = request()->getSchemeAndHttpHost();
                                    $pdfUrl = $baseUrl . '/pdf/biaya/' . $unit['slug'] . '.pdf';
                                @endphp
                                <a href="{{ $pdfUrl }}" target="_blank" class="btn" style="flex: 1; background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); color: white; border: none; padding: clamp(0.625rem, 1.2vw, 0.75rem) clamp(1rem, 2vw, 1.25rem); border-radius: 0.5rem; font-weight: 600; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem); text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 0.3125rem 1.25rem rgba(1, 113, 93, 0.3)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                                    <i class="fa-solid fa-eye"></i> Review
                                </a>
                                <a href="{{ $pdfUrl }}" download class="btn" style="flex: 1; background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); color: #2c3e50; border: none; padding: clamp(0.625rem, 1.2vw, 0.75rem) clamp(1rem, 2vw, 1.25rem); border-radius: 0.5rem; font-weight: 600; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem); text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 0.3125rem 1.25rem rgba(251, 212, 89, 0.3)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                                    <i class="fa-solid fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-40">
            <div class="col-lg-12">
                <div class="alert alert-info psb-card-padding" style="background: linear-gradient(135deg, rgba(1, 113, 93, 0.1) 0%, rgba(1, 113, 93, 0.05) 100%); border-left: 0.25rem solid #01715d; border-radius: 0.625rem;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1100">
                    <h4 class="psb-subtitle-size" style="color: #01715d; font-weight: 700; margin-bottom: 0.9375rem;">
                        <i class="fa-solid fa-info-circle" style="margin-right: 0.625rem;"></i>Catatan Penting
                    </h4>
                    <ul class="psb-text-size" style="color: #2c3e50; line-height: 1.8; margin: 0; padding-left: 1.25rem; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                        <li style="margin-bottom: 0.625rem;">Rincian biaya lengkap untuk setiap unit pendidikan dapat di-download atau di-review melalui tombol di atas</li>
                        <li style="margin-bottom: 0.625rem;">Biaya dapat dibayar secara bertahap sesuai kesepakatan dengan pihak pesantren</li>
                        <li style="margin-bottom: 0.625rem;">Untuk informasi lebih detail mengenai biaya, silakan hubungi panitia PSB</li>
                        <li style="margin-bottom: 0.625rem;">Biaya sudah termasuk seragam, buku pelajaran, dan fasilitas pesantren</li>
                        <li>Tersedia program beasiswa untuk santri berprestasi dan kurang mampu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== BIAYA PENDAFTARAN ENDS =======-->

<!--===== KONTAK PSB STARTS =======-->
<style>
    /* Pastikan 3 kolom sejajar di laptop/komputer */
    #kontak .row {
        display: flex !important;
        flex-wrap: wrap !important;
        justify-content: space-between !important;
    }
    
    /* Desktop dan Laptop - 3 kolom sejajar dengan margin kecil */
    @media (min-width: 992px) {
        #kontak .col-lg-4 {
            width: calc(33.333333% - 0.67%) !important;
            flex: 0 0 calc(33.333333% - 0.67%) !important;
            max-width: calc(33.333333% - 0.67%) !important;
        }
    }
    
    /* Tablet - 3 kolom sejajar dengan margin kecil */
    @media (min-width: 768px) and (max-width: 991px) {
        #kontak .col-md-4 {
            width: calc(33.333333% - 0.67%) !important;
            flex: 0 0 calc(33.333333% - 0.67%) !important;
            max-width: calc(33.333333% - 0.67%) !important;
        }
    }
    
    /* Mobile - 1 kolom */
    @media (max-width: 767px) {
        #kontak .row {
            flex-direction: column !important;
        }
        #kontak .col-sm-12 {
            width: 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important;
            margin-bottom: 2rem;
        }
    }
    
    @media (min-width: 992px) and (max-width: 1199px) {
        #kontak .container {
            max-width: 95% !important;
        }
    }
    @media (min-width: 1200px) {
        #kontak .container {
            max-width: 85% !important;
        }
    }
    .whatsapp-contact-link {
        cursor: pointer !important;
    }
    .whatsapp-contact-link:hover {
        animation: pulse 1s ease-in-out infinite;
    }
    @keyframes pulse {
        0%, 100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.4);
        }
        50% {
            box-shadow: 0 0 0 0.5rem rgba(37, 211, 102, 0);
        }
    }
</style>
<section class="vl-about-section sp2 psb-section-padding" style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); position: relative; overflow: hidden; padding: 5% 0;" id="kontak">
    <!-- Decorative Background Elements -->
    <div style="position: absolute; top: -10%; right: -5%; width: 30%; height: 30%; background: rgba(251, 212, 89, 0.05); border-radius: 50%; filter: blur(3rem);"></div>
    <div style="position: absolute; bottom: -10%; left: -5%; width: 25%; height: 25%; background: rgba(255, 255, 255, 0.03); border-radius: 50%; filter: blur(3rem);"></div>
    
    <div class="container" style="position: relative; z-index: 1; max-width: 90%; width: 100%;">
        <div class="vl-section-title-1 mb-60 text-center" style="margin-bottom: 4%;">
            <h5 class="subtitle psb-subtitle-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #FBD459; font-weight: 700; text-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.3);">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt="" style="filter: brightness(0) saturate(100%) invert(77%) sepia(67%) saturate(1234%) hue-rotate(1deg) brightness(102%) contrast(98%);"></span> Hubungi Kami
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="color: #ffffff; font-weight: 700; text-shadow: 0 0.125rem 0.75rem rgba(0, 0, 0, 0.3);">Informasi & Kontak PSB</h2>
            <p class="psb-text-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 80%; margin: 1.5% auto 0; color: rgba(255, 255, 255, 0.95); line-height: 1.6;">
                Untuk informasi lebih lanjut mengenai pendaftaran, silakan hubungi panitia PSB
            </p>
        </div>

        <div class="row" style="display: flex; align-items: stretch; gap: 1%; margin: 0;">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-30" style="display: flex; padding: 0 0.5%; margin-bottom: 1.5rem;">
                <div class="vl-about-icon-box text-center psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(1rem); border-radius: 1.5rem; width: 100%; display: flex; flex-direction: column; border: 0.125rem solid rgba(255, 255, 255, 0.25); box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.15); transition: all 0.3s ease; padding: 5% 4%;" onmouseover="this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 0.75rem 2.5rem rgba(0, 0, 0, 0.2)'; this.style.borderColor='rgba(251, 212, 89, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.5rem 2rem rgba(0, 0, 0, 0.15)'; this.style.borderColor='rgba(255, 255, 255, 0.25)';">
                    <div class="vl-about-icon" style="flex-shrink: 0; margin-bottom: 3%;">
                        <span style="display: inline-block; width: 4.5rem; height: 4.5rem; background: linear-gradient(135deg, rgba(251, 212, 89, 0.2) 0%, rgba(251, 212, 89, 0.1) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 0.125rem solid rgba(251, 212, 89, 0.3);">
                            <i class="fa-brands fa-whatsapp psb-icon-size" style="color: #FBD459; font-size: 2.5rem;"></i>
                        </span>
                    </div>
                    <div class="vl-icon-content" style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: 4%; color: #ffffff; font-weight: 700; font-size: 1.25rem;">Contact Person</h3>
                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; gap: 3%;">
                            @php
                                $contacts = [
                                    ['phone' => '081234953728', 'display' => '0812-3495-3728', 'name' => 'Ust. M. Syafi\'un Nuroyn, S.Pd.'],
                                    ['phone' => '085855756629', 'display' => '0858-5575-6629', 'name' => 'Ust. Salman Al Farizi, S.Ak. M.E'],
                                    ['phone' => '082228177769', 'display' => '0822-2817-7769', 'name' => 'Ustdh. Lailatul Musyarofah, S.Pd.'],
                                ];
                                $whatsappMessage = urlencode('Saya Ingin Bertanya Tentang Informasi Penerimaan Santri Baru Nuris');
                            @endphp
                            
                            @foreach($contacts as $contact)
                            <div style="text-align: left; position: relative;">
                                @php
                                    // Format nomor untuk WhatsApp: 62 + nomor tanpa 0 di depan
                                    $whatsappNumber = '62' . substr($contact['phone'], 1);
                                @endphp
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ $whatsappMessage }}" target="_blank" class="whatsapp-contact-link" style="display: inline-flex; align-items: center; gap: 0.75rem; color: rgba(255, 255, 255, 0.95); font-weight: 600; text-decoration: none; transition: all 0.3s ease; padding: 0.75rem 1rem; border-radius: 0.75rem; background: rgba(37, 211, 102, 0.1); border: 0.125rem solid rgba(37, 211, 102, 0.3); cursor: pointer; position: relative; width: 100%;" onmouseover="this.style.color='#ffffff'; this.style.backgroundColor='rgba(37, 211, 102, 0.2)'; this.style.borderColor='rgba(37, 211, 102, 0.5)'; this.style.transform='translateX(0.5rem)';" onmouseout="this.style.color='rgba(255, 255, 255, 0.95)'; this.style.backgroundColor='rgba(37, 211, 102, 0.1)'; this.style.borderColor='rgba(37, 211, 102, 0.3)'; this.style.transform='translateX(0)';">
                                    <i class="fa-brands fa-whatsapp" style="font-size: 1.5rem; color: #25D366; flex-shrink: 0;"></i>
                                    <span class="psb-text-size" style="font-size: 0.9375rem; flex: 1;">{{ $contact['display'] }}</span>
                                    <span style="display: inline-flex; align-items: center; gap: 0.25rem; background: rgba(37, 211, 102, 0.2); padding: 0.25rem 0.5rem; border-radius: 0.375rem; font-size: 0.6875rem; color: #25D366; font-weight: 600; white-space: nowrap;">
                                        <i class="fa-solid fa-hand-pointer" style="font-size: 0.625rem;"></i> Klik
                                    </span>
                                </a>
                                <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.85); margin: 0.5rem 0 0 3rem; font-size: 0.8125rem; font-style: italic; line-height: 1.4;">
                                    {{ $contact['name'] }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-30" style="display: flex; padding: 0 0.5%; margin-bottom: 1.5rem;">
                <div class="vl-about-icon-box text-center psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(1rem); border-radius: 1.5rem; width: 100%; display: flex; flex-direction: column; border: 0.125rem solid rgba(255, 255, 255, 0.25); box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.15); transition: all 0.3s ease; padding: 5% 4%;" onmouseover="this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 0.75rem 2.5rem rgba(0, 0, 0, 0.2)'; this.style.borderColor='rgba(251, 212, 89, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.5rem 2rem rgba(0, 0, 0, 0.15)'; this.style.borderColor='rgba(255, 255, 255, 0.25)';">
                    <div class="vl-about-icon" style="flex-shrink: 0; margin-bottom: 3%;">
                        <span style="display: inline-block; width: 4.5rem; height: 4.5rem; background: linear-gradient(135deg, rgba(251, 212, 89, 0.2) 0%, rgba(251, 212, 89, 0.1) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 0.125rem solid rgba(251, 212, 89, 0.3);">
                            <i class="fa-solid fa-location-dot psb-icon-size" style="color: #FBD459; font-size: 2.5rem;"></i>
                        </span>
                    </div>
                    <div class="vl-icon-content" style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: 4%; color: #ffffff; font-weight: 700; font-size: 1.25rem;">Alamat</h3>
                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.95); line-height: 1.8; margin: 0; text-align: left; font-size: 0.9375rem;">
                                Kantor Sekretariat PSB di PP. Nurul Islam 1 (Induk)<br><br>
                                Dsn. Guwo Ds. Jabontegal<br>
                                Kec. Pungging<br>
                                Kab. Mojokerto
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-30" style="display: flex; padding: 0 0.5%; margin-bottom: 1.5rem;">
                <div class="vl-about-icon-box text-center psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(1rem); border-radius: 1.5rem; width: 100%; display: flex; flex-direction: column; border: 0.125rem solid rgba(255, 255, 255, 0.25); box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.15); transition: all 0.3s ease; padding: 5% 4%;" onmouseover="this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 0.75rem 2.5rem rgba(0, 0, 0, 0.2)'; this.style.borderColor='rgba(251, 212, 89, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.5rem 2rem rgba(0, 0, 0, 0.15)'; this.style.borderColor='rgba(255, 255, 255, 0.25)';">
                    <div class="vl-about-icon" style="flex-shrink: 0; margin-bottom: 3%;">
                        <span style="display: inline-block; width: 4.5rem; height: 4.5rem; background: linear-gradient(135deg, rgba(251, 212, 89, 0.2) 0%, rgba(251, 212, 89, 0.1) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 0.125rem solid rgba(251, 212, 89, 0.3);">
                            <i class="fa-solid fa-clock psb-icon-size" style="color: #FBD459; font-size: 2.5rem;"></i>
                        </span>
                    </div>
                    <div class="vl-icon-content" style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: 4%; color: #ffffff; font-weight: 700; font-size: 1.25rem;">Jam Pelayanan</h3>
                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.95); line-height: 1.8; margin: 0; font-size: 0.9375rem;">
                                Senin - Jumat<br>
                                08:00 - 16:00 WIB<br><br>
                                Sabtu<br>
                                08:00 - 12:00 WIB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== KONTAK PSB ENDS =======-->

@endsection
