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
</style>
<!--===== HERO AREA ENDS =======-->

<!--===== PERSYARATAN PENDAFTARAN STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" id="persyaratan" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 20% 50%, rgba(1, 113, 93, 0.03) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(251, 212, 89, 0.03) 0%, transparent 50%); z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <!-- Section Header -->
        <div class="vl-section-title-1 mb-60 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <h5 class="subtitle psb-subtitle-size">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Dokumen yang Diperlukan
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" style="color: #01715d; font-weight: 700;">
                Persyaratan Pendaftaran
            </h2>
            <p class="psb-text-size" style="max-width: 90%; margin: 0 auto; color: #6c757d; margin-top: clamp(0.75rem, 1.5vw, 1rem);">
                Siapkan dokumen-dokumen berikut untuk kelengkapan berkas pendaftaran
            </p>
        </div>

        <!-- Requirements List Card -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="card" style="border: none; border-radius: clamp(1.25rem, 3vw, 1.875rem); box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.08); overflow: hidden; background: #ffffff;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); padding: clamp(1.5rem, 3vw, 2rem); position: relative; overflow: hidden;">
                        <!-- Decorative shapes -->
                        <div style="position: absolute; top: -50%; right: -10%; width: clamp(12rem, 30vw, 18rem); height: clamp(12rem, 30vw, 18rem); background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
                        <div style="position: absolute; bottom: -50%; left: -10%; width: clamp(10rem, 25vw, 15rem); height: clamp(10rem, 25vw, 15rem); background: rgba(251, 212, 89, 0.1); border-radius: 50%;"></div>
                        
                        <div style="position: relative; z-index: 1;">
                            <h3 style="color: #ffffff; font-weight: 700; font-size: clamp(1.25rem, 2.5vw, 1.75rem); margin: 0 0 clamp(0.5rem, 1vw, 0.75rem) 0; display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem);">
                                <i class="fa-solid fa-file-circle-check" style="font-size: clamp(1.5rem, 3vw, 2rem);"></i>
                                Dokumen yang Harus Disiapkan
                            </h3>
                            <p style="color: rgba(255, 255, 255, 0.9); margin: 0; font-size: clamp(0.8125rem, 1.5vw, 0.9375rem);">
                                Pastikan semua dokumen telah dilengkapi sebelum melakukan pendaftaran
                            </p>
                        </div>
                    </div>
                    
                    <div style="padding: clamp(2rem, 4vw, 3.5rem);">
                        <div class="row">
                            <div class="col-lg-12">
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
                                    <li style="counter-increment: requirement-counter; margin-bottom: clamp(1rem, 2vw, 1.25rem); padding: clamp(0.875rem, 1.5vw, 1.125rem) clamp(1rem, 2vw, 1.25rem); background: #f8f9fa; border-left: 0.25rem solid #01715d; border-radius: clamp(0.5rem, 1vw, 0.625rem); transition: all 0.3s ease; position: relative; padding-left: clamp(3.5rem, 7vw, 4.5rem);" onmouseover="this.style.background='#f0f7f6'; this.style.transform='translateX(0.5rem)'; this.style.boxShadow='0 0.25rem 0.75rem rgba(1, 113, 93, 0.1)';" onmouseout="this.style.background='#f8f9fa'; this.style.transform='translateX(0)'; this.style.boxShadow='none';">
                                        <span style="position: absolute; left: clamp(1rem, 2vw, 1.25rem); top: clamp(0.875rem, 1.5vw, 1.125rem); width: clamp(2rem, 4vw, 2.5rem); height: clamp(2rem, 4vw, 2.5rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 700; font-size: clamp(0.875rem, 1.8vw, 1rem); box-shadow: 0 clamp(0.125rem, 0.4vw, 0.25rem) clamp(0.375rem, 0.8vw, 0.5rem) rgba(1, 113, 93, 0.2);">
                                            {{ $index + 1 }}
                                        </span>
                                        <span style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.6; display: block;">
                                            {{ $requirement }}
                                        </span>
                                    </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PERSYARATAN PENDAFTARAN ENDS =======-->

<!--===== JADWAL PENDAFTARAN STARTS =======-->
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

<!--===== PROSEDUR PENDAFTARAN STARTS =======-->
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
<!--===== PROSEDUR PENDAFTARAN ENDS =======-->

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

<!--===== KONTAK PSB STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); position: relative; overflow: hidden;" id="kontak">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="vl-section-title-1 mb-60 text-center">
            <h5 class="subtitle psb-subtitle-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: rgba(255, 255, 255, 0.9);">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt="" style="filter: brightness(0) invert(1);"></span> Hubungi Kami
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="color: #ffffff;">Informasi & Kontak PSB</h2>
            <p class="psb-text-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto; color: rgba(255, 255, 255, 0.9);">
                Untuk informasi lebih lanjut mengenai pendaftaran, silakan hubungi panitia PSB
            </p>
        </div>

        <div class="row" style="display: flex; align-items: stretch;">
            <div class="col-lg-4 col-md-6 mb-30" style="display: flex;">
                <div class="vl-about-icon-box text-center psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(0.625rem); border-radius: 1.25rem; width: 100%; display: flex; flex-direction: column; border: 0.125rem solid rgba(255, 255, 255, 0.2);">
                    <div class="vl-about-icon" style="flex-shrink: 0;">
                        <span><i class="fa-solid fa-phone psb-icon-size" style="color: #FBD459;"></i></span>
                    </div>
                    <div class="vl-icon-content" style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: clamp(1rem, 2vw, 1.25rem); color: #ffffff;">Telepon</h3>
                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.9); font-weight: 600; margin-bottom: clamp(0.375rem, 0.8vw, 0.625rem);">
                                0822 3194 2642
                            </p>
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.8); margin: 0 0 clamp(0.75rem, 1.5vw, 0.9375rem) 0; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                Yusril Fahmi, S.Pd., M.Pd.
                            </p>
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.9); font-weight: 600; margin-bottom: clamp(0.375rem, 0.8vw, 0.625rem);">
                                0822 2817 7769
                            </p>
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.8); margin: 0; font-size: clamp(0.75rem, 1.4vw, 0.875rem);">
                                Lailatul Musyarofah, S.Pd.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-30" style="display: flex;">
                <div class="vl-about-icon-box text-center psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(0.625rem); border-radius: 1.25rem; width: 100%; display: flex; flex-direction: column; border: 0.125rem solid rgba(255, 255, 255, 0.2);">
                    <div class="vl-about-icon" style="flex-shrink: 0;">
                        <span><i class="fa-solid fa-location-dot psb-icon-size" style="color: #FBD459;"></i></span>
                    </div>
                    <div class="vl-icon-content" style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: clamp(1rem, 2vw, 1.25rem); color: #ffffff;">Alamat</h3>
                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.9); line-height: 1.8; margin: 0;">
                                Dsn. Guwo Ds. Jabontegal<br>
                                Kec. Pungging<br>
                                Kab. Mojokerto<br>
                                Kode Pos 61384
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-30" style="display: flex;">
                <div class="vl-about-icon-box text-center psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(0.625rem); border-radius: 1.25rem; width: 100%; display: flex; flex-direction: column; border: 0.125rem solid rgba(255, 255, 255, 0.2);">
                    <div class="vl-about-icon" style="flex-shrink: 0;">
                        <span><i class="fa-solid fa-clock psb-icon-size" style="color: #FBD459;"></i></span>
                    </div>
                    <div class="vl-icon-content" style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                        <h3 class="title psb-subtitle-size" style="margin-bottom: clamp(1rem, 2vw, 1.25rem); color: #ffffff;">Jam Pelayanan</h3>
                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                            <p class="psb-text-size" style="color: rgba(255, 255, 255, 0.9); line-height: 1.8; margin: 0;">
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

<!--===== FORM PENDAFTARAN STARTS =======-->
<section class="vl-about-section sp2 psb-section-padding" id="pendaftaran">
    <div class="container">
        <div class="vl-section-title-1 mb-60 text-center">
            <h5 class="subtitle psb-subtitle-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Formulir Pendaftaran
            </h5>
            <h2 class="title text-anime-style-3 psb-title-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Daftar Sekarang</h2>
            <p class="psb-text-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto;">
                Isi formulir di bawah ini untuk memulai proses pendaftaran. Tim kami akan segera menghubungi Anda.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="vl-about-content psb-card-padding" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="background: white; border-radius: 1.25rem; box-shadow: 0 0.625rem 2.5rem rgba(0,0,0,0.1);">
                    <form id="psb-form" style="max-width: 100%;">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">Nama Lengkap Calon Santri <span style="color: red;">*</span></label>
                                <input type="text" id="nama" name="nama" class="form-control psb-text-size" required style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; transition: all 0.3s; width: 100%;" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tempat_lahir" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">Tempat, Tanggal Lahir <span style="color: red;">*</span></label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control psb-text-size" required style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; transition: all 0.3s; width: 100%;" placeholder="Contoh: Mojokerto, 15 Januari 2010">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="jenis_kelamin" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">Jenis Kelamin <span style="color: red;">*</span></label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control psb-text-size" required style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; width: 100%;">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="unit_pendidikan" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">Unit Pendidikan yang Dipilih <span style="color: red;">*</span></label>
                                <select id="unit_pendidikan" name="unit_pendidikan" class="form-control psb-text-size" required style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; width: 100%;">
                                    <option value="">Pilih Unit Pendidikan</option>
                                    <option value="MTs 1 Nurul Islam">MTs 1 Nurul Islam</option>
                                    <option value="MTs 2 Nurul Islam">MTs 2 Nurul Islam</option>
                                    <option value="SMP UBQ Nurul Islam">SMP UBQ Nurul Islam</option>
                                    <option value="SMP 2 Trans-Sains Nurul Islam">SMP 2 Trans-Sains Nurul Islam</option>
                                    <option value="MA 1 Nurul Islam">MA 1 Nurul Islam</option>
                                    <option value="MA 2 Ad-Dauliyah Nurul Islam">MA 2 Ad-Dauliyah Nurul Islam</option>
                                    <option value="SMK UBP Nurul Islam">SMK UBP Nurul Islam</option>
                                    <option value="SMA Global School Nurul Islam">SMA Global School Nurul Islam</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_ortu" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">Nama Orang Tua/Wali <span style="color: red;">*</span></label>
                                <input type="text" id="nama_ortu" name="nama_ortu" class="form-control psb-text-size" required style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; transition: all 0.3s; width: 100%;" placeholder="Nama lengkap orang tua/wali">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_hp" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">No. HP/WhatsApp <span style="color: red;">*</span></label>
                                <input type="tel" id="no_hp" name="no_hp" class="form-control psb-text-size" required style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; transition: all 0.3s; width: 100%;" placeholder="08xxxxxxxxxx">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">Alamat Lengkap <span style="color: red;">*</span></label>
                            <textarea id="alamat" name="alamat" class="form-control psb-text-size" rows="3" required style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; transition: all 0.3s; width: 100%;" placeholder="Alamat lengkap tempat tinggal"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="psb-text-size" style="font-weight: 600; color: #2c3e50; margin-bottom: 0.5rem; display: block;">Catatan/Keterangan Tambahan</label>
                            <textarea id="catatan" name="catatan" class="form-control psb-text-size" rows="3" style="padding: 0.75rem 0.9375rem; border: 0.125rem solid #e0e0e0; border-radius: 0.5rem; transition: all 0.3s; width: 100%;" placeholder="Catatan atau keterangan tambahan (opsional)"></textarea>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="header-btn1 psb-button-padding psb-text-size" style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); color: white; border: none; border-radius: 3.125rem; font-weight: 700; cursor: pointer; transition: all 0.3s; box-shadow: 0 0.625rem 1.875rem rgba(1, 113, 93, 0.3); display: inline-block;" onmouseover="this.style.transform='translateY(-0.125rem)'; this.style.boxShadow='0 0.9375rem 2.5rem rgba(1, 113, 93, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.625rem 1.875rem rgba(1, 113, 93, 0.3)'">
                                Kirim Pendaftaran <span><i class="fa-solid fa-paper-plane"></i></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== FORM PENDAFTARAN ENDS =======-->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('psb-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            
            // Create WhatsApp message
            const message = `Halo, saya ingin mendaftarkan putra/putri saya untuk PSB 2026:\n\n` +
                          `Nama: ${data.nama}\n` +
                          `Tempat, Tgl Lahir: ${data.tempat_lahir}\n` +
                          `Jenis Kelamin: ${data.jenis_kelamin}\n` +
                          `Unit Pendidikan: ${data.unit_pendidikan}\n` +
                          `Nama Orang Tua/Wali: ${data.nama_ortu}\n` +
                          `No. HP: ${data.no_hp}\n` +
                          `Alamat: ${data.alamat}\n` +
                          (data.catatan ? `Catatan: ${data.catatan}\n` : '');
            
            // Open WhatsApp
            const phoneNumber = '6282231942642'; // Format: 62 (kode negara) + nomor tanpa 0
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
            
            // Show success message
            alert('Formulir akan dibuka di WhatsApp. Silakan kirim pesan untuk melanjutkan pendaftaran.');
        });
    }
});
</script>

@endsection
