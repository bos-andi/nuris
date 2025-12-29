@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Sistem Kepengasuhan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sistem Kepengasuhan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== KEPENGURUSAN AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Struktur Organisasi
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Kepengurusan di Pondok Pesantren Nurul Islam</h2>
                    <p class="psb-text-size" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto; margin-top: clamp(0.75rem, 1.5vw, 1rem);">
                        Kepengurusan di Pondok Pesantren Nurul Islam bertingkat-tingkat
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card" style="border: none; border-radius: clamp(1.25rem, 3vw, 1.875rem); box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.08); overflow: hidden; background: #ffffff;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); padding: clamp(1.5rem, 3vw, 2rem); position: relative; overflow: hidden;">
                        <!-- Decorative shapes -->
                        <div style="position: absolute; top: -50%; right: -10%; width: clamp(12rem, 30vw, 18rem); height: clamp(12rem, 30vw, 18rem); background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
                        <div style="position: absolute; bottom: -50%; left: -10%; width: clamp(10rem, 25vw, 15rem); height: clamp(10rem, 25vw, 15rem); background: rgba(251, 212, 89, 0.1); border-radius: 50%;"></div>
                        
                        <div style="position: relative; z-index: 1;">
                            <h3 style="color: #ffffff; font-weight: 700; font-size: clamp(1.25rem, 2.5vw, 1.75rem); margin: 0 0 clamp(0.5rem, 1vw, 0.75rem) 0; display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem); justify-content: center;">
                                <i class="fa-solid fa-sitemap" style="font-size: clamp(1.5rem, 3vw, 2rem);"></i>
                                Tingkatan Kepengurusan
                            </h3>
                        </div>
                    </div>
                    
                    <div style="padding: clamp(2rem, 4vw, 3.5rem);">
                        <ol style="list-style: none; padding: 0; margin: 0; counter-reset: management-counter;">
                            @php
                                $management_levels = [
                                    [
                                        'title' => 'Musyrif / Musyrifah',
                                        'description' => 'Pembimbing santri baru diambilkan dari santri senior pilihan',
                                        'icon' => 'fa-user-graduate'
                                    ],
                                    [
                                        'title' => 'Pengurus Kamar',
                                        'description' => 'Berasal dari anggota kamar',
                                        'icon' => 'fa-door-open'
                                    ],
                                    [
                                        'title' => 'Pengurus Asrama',
                                        'description' => 'Berasal dari senior asrama',
                                        'icon' => 'fa-building'
                                    ],
                                    [
                                        'title' => 'Pengurus Pusat',
                                        'description' => 'Berasal dari Dewan Asatidz-Asatidzah Muqimin-Muqimat',
                                        'icon' => 'fa-users-gear'
                                    ],
                                    [
                                        'title' => 'Pengurus Pondok',
                                        'description' => 'Adalah pengurus YPP. Nurul Islam',
                                        'icon' => 'fa-landmark'
                                    ],
                                ];
                            @endphp
                            
                            @foreach($management_levels as $index => $level)
                            <li style="counter-increment: management-counter; margin-bottom: clamp(1.25rem, 2.5vw, 1.75rem); padding: clamp(1rem, 2vw, 1.5rem); background: #f8f9fa; border-left: 0.25rem solid #01715d; border-radius: clamp(0.5rem, 1vw, 0.625rem); transition: all 0.3s ease; position: relative; padding-left: clamp(4rem, 8vw, 5.5rem);" onmouseover="this.style.background='#f0f7f6'; this.style.transform='translateX(0.5rem)'; this.style.boxShadow='0 0.25rem 0.75rem rgba(1, 113, 93, 0.1)';" onmouseout="this.style.background='#f8f9fa'; this.style.transform='translateX(0)'; this.style.boxShadow='none';">
                                <span style="position: absolute; left: clamp(1rem, 2vw, 1.25rem); top: clamp(1rem, 2vw, 1.5rem); width: clamp(2.5rem, 5vw, 3.5rem); height: clamp(2.5rem, 5vw, 3.5rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 700; font-size: clamp(1rem, 2vw, 1.25rem); box-shadow: 0 clamp(0.125rem, 0.4vw, 0.25rem) clamp(0.375rem, 0.8vw, 0.5rem) rgba(1, 113, 93, 0.2);">
                                    {{ $index + 1 }}
                                </span>
                                <div style="display: flex; align-items: center; gap: clamp(1rem, 2vw, 1.5rem); margin-bottom: clamp(0.5rem, 1vw, 0.75rem);">
                                    <i class="fa-solid {{ $level['icon'] }}" style="color: #01715d; font-size: clamp(1.25rem, 2.5vw, 1.5rem);"></i>
                                    <h4 style="color: #01715d; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem); margin: 0;">
                                        {{ $level['title'] }}
                                    </h4>
                                </div>
                                <p style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.6; margin: 0; padding-left: clamp(2.5rem, 5vw, 3rem);">
                                    {{ $level['description'] }}
                                </p>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== KEPENGURUSAN AREA ENDS =======-->

<!--===== SISTEM DISIPLIN AREA STARTS =======-->
<section class="vl-about-section sp2" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 20% 50%, rgba(1, 113, 93, 0.03) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(251, 212, 89, 0.03) 0%, transparent 50%); z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Sistem Disiplin
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Disiplin dan Ketertiban</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card" style="border: none; border-radius: clamp(1.25rem, 3vw, 1.875rem); box-shadow: 0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.08); overflow: hidden; background: #ffffff;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div style="padding: clamp(2rem, 4vw, 3rem);">
                        <div style="background: linear-gradient(135deg, rgba(1, 113, 93, 0.1) 0%, rgba(1, 113, 93, 0.05) 100%); border-left: 0.375rem solid #01715d; border-radius: clamp(0.5rem, 1vw, 0.75rem); padding: clamp(1.5rem, 3vw, 2rem); margin-bottom: clamp(2rem, 4vw, 2.5rem);">
                            <p style="color: #2c3e50; font-size: clamp(0.9375rem, 1.9vw, 1.125rem); line-height: 1.8; margin: 0;">
                                Untuk meminimalisir pelanggaran dan menciptakan ketertiban kegiatan, keselarasan hidup santri, ketenangan dan kondusifitas pesantren maka di Pondok Pesantren Nurul Islam dikondisikan <strong>disiplin tinggi dan full aktifitas</strong>. Namun apabila terdapat santri yang melakukan pelanggaran peraturan maka:
                            </p>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                                <div style="background: #ffffff; border: 0.125rem solid #e9ecef; border-radius: clamp(0.75rem, 1.5vw, 1rem); padding: clamp(1.5rem, 3vw, 2rem); height: 100%; box-shadow: 0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05); transition: all 0.3s ease;" onmouseover="this.style.borderColor='#01715d'; this.style.boxShadow='0 clamp(0.375rem, 1vw, 0.625rem) clamp(0.875rem, 1.8vw, 1.5rem) rgba(1, 113, 93, 0.15)';" onmouseout="this.style.borderColor='#e9ecef'; this.style.boxShadow='0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05)';">
                                    <div style="display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem); margin-bottom: clamp(1rem, 2vw, 1.25rem);">
                                        <div style="width: clamp(2.5rem, 5vw, 3rem); height: clamp(2.5rem, 5vw, 3rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <span style="color: #ffffff; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem);">1</span>
                                        </div>
                                        <h4 style="color: #01715d; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem); margin: 0;">
                                            Wewenang Menghukum
                                        </h4>
                                    </div>
                                    <p style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.7; margin: 0;">
                                        Yang berhak menghukum adalah <strong>pengurus pusat</strong> yaitu <strong>Dewan Asatidz/Asatidzah</strong>.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
                                <div style="background: #ffffff; border: 0.125rem solid #e9ecef; border-radius: clamp(0.75rem, 1.5vw, 1rem); padding: clamp(1.5rem, 3vw, 2rem); height: 100%; box-shadow: 0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05); transition: all 0.3s ease;" onmouseover="this.style.borderColor='#01715d'; this.style.boxShadow='0 clamp(0.375rem, 1vw, 0.625rem) clamp(0.875rem, 1.8vw, 1.5rem) rgba(1, 113, 93, 0.15)';" onmouseout="this.style.borderColor='#e9ecef'; this.style.boxShadow='0 clamp(0.25rem, 0.8vw, 0.5rem) clamp(0.625rem, 1.5vw, 1.25rem) rgba(0,0,0,0.05)';">
                                    <div style="display: flex; align-items: center; gap: clamp(0.75rem, 1.5vw, 1rem); margin-bottom: clamp(1rem, 2vw, 1.25rem);">
                                        <div style="width: clamp(2.5rem, 5vw, 3rem); height: clamp(2.5rem, 5vw, 3rem); background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <span style="color: #ffffff; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem);">2</span>
                                        </div>
                                        <h4 style="color: #01715d; font-weight: 700; font-size: clamp(1.125rem, 2.2vw, 1.375rem); margin: 0;">
                                            Jenis Hukuman
                                        </h4>
                                    </div>
                                    <p style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.7; margin: 0 0 clamp(0.75rem, 1.5vw, 1rem) 0;">
                                        Jenis hukuman tidak ada yang berupa hukuman fisik tetapi berupa hukuman yang mendidik, contoh:
                                    </p>
                                    <ul style="color: #2c3e50; font-size: clamp(0.875rem, 1.8vw, 1rem); line-height: 1.8; margin: 0; padding-left: clamp(1.25rem, 2.5vw, 1.5rem);">
                                        <li>Menghafal Juz Amma</li>
                                        <li>Menulis Surat-surat Pendek</li>
                                        <li>Menghafal Surat-surat penting</li>
                                        <li>Hukuman terberat: menghafal dan menulis Surat Yasin</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div style="background: linear-gradient(135deg, rgba(251, 212, 89, 0.1) 0%, rgba(251, 212, 89, 0.05) 100%); border-left: 0.375rem solid #FBD459; border-radius: clamp(0.5rem, 1vw, 0.75rem); padding: clamp(1.5rem, 3vw, 2rem); margin-top: clamp(2rem, 4vw, 2.5rem);">
                            <p style="color: #2c3e50; font-size: clamp(0.9375rem, 1.9vw, 1.125rem); line-height: 1.8; margin: 0;">
                                Seluruh aktifitas yang diselenggarakan di PP. Nuris dikomando langsung oleh <strong>Pengasuh</strong> dan seluruh potensi pesantren digerakkan secara maksimal dengan menerapkan <strong>Manajemen Professional</strong>. Jadi Insyaallah semua akan berjalan dengan penuh <strong>Akhlaq (beradab)</strong> dan <strong>Rohmah (kasih sayang)</strong> serta profesional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== SISTEM DISIPLIN AREA ENDS =======-->

<!--===== SISTEM KEPENGASUHAN AREA STARTS =======-->
<section class="vl-about-section sp2" style="background: linear-gradient(135deg, #01715d 0%, #014d3f 50%, #015a4a 100%); position: relative; overflow: hidden; padding: clamp(4rem, 8vw, 6rem) 0;">
    <!-- Enhanced Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: 
        radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.08) 0%, transparent 40%), 
        radial-gradient(circle at 80% 70%, rgba(251, 212, 89, 0.12) 0%, transparent 45%),
        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.03) 0%, transparent 60%); 
        z-index: 0;"></div>
    
    <!-- Animated Background Elements -->
    <div style="position: absolute; top: -10%; right: -5%; width: clamp(20rem, 40vw, 30rem); height: clamp(20rem, 40vw, 30rem); background: rgba(255, 255, 255, 0.03); border-radius: 50%; z-index: 0; animation: float 20s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -10%; left: -5%; width: clamp(15rem, 30vw, 25rem); height: clamp(15rem, 30vw, 25rem); background: rgba(251, 212, 89, 0.05); border-radius: 50%; z-index: 0; animation: float 25s ease-in-out infinite reverse;"></div>
    
    <style>
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(20px, -20px) scale(1.1); }
        }
        .kepengasuhan-card {
            background: rgba(255, 255, 255, 0.12) !important;
            backdrop-filter: blur(20px) saturate(180%) !important;
            border: 2px solid rgba(255, 255, 255, 0.25) !important;
            border-radius: clamp(1.25rem, 2.5vw, 1.5rem) !important;
            padding: clamp(2rem, 4vw, 2.5rem) !important;
            height: 100% !important;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
            position: relative !important;
            overflow: hidden !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
        }
        .kepengasuhan-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }
        .kepengasuhan-card:hover::before {
            left: 100%;
        }
        .kepengasuhan-card:hover {
            background: rgba(255, 255, 255, 0.18) !important;
            transform: translateY(-8px) scale(1.02) !important;
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.3) !important;
            border-color: rgba(255, 255, 255, 0.4) !important;
        }
        .kepengasuhan-icon-wrapper {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.15) 100%) !important;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.3) !important;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }
        .kepengasuhan-card:hover .kepengasuhan-icon-wrapper {
            transform: scale(1.1) rotate(5deg) !important;
            box-shadow: 0 12px 32px rgba(251, 212, 89, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
        }
        .kepengasuhan-letter-badge {
            background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%) !important;
            box-shadow: 0 4px 16px rgba(251, 212, 89, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.3) !important;
            transition: all 0.3s ease !important;
        }
        .kepengasuhan-card:hover .kepengasuhan-letter-badge {
            transform: scale(1.15) !important;
            box-shadow: 0 6px 20px rgba(251, 212, 89, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
        }
    </style>
    
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: rgba(255, 255, 255, 0.95); font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: clamp(1rem, 2vw, 1.5rem);">
                        <span style="display: inline-block; margin-right: 0.75rem;"><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt="" style="filter: brightness(0) invert(1); width: clamp(1.5rem, 3vw, 2rem);"></span> Sistem Kepengasuhan
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="color: #ffffff; font-size: clamp(2rem, 4.5vw, 3rem); font-weight: 700; text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); margin-bottom: clamp(1rem, 2vw, 1.5rem);">
                        Sistem Kepengasuhan di PP. Nuris
                    </h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="color: rgba(255, 255, 255, 0.85); font-size: clamp(1rem, 2vw, 1.125rem); max-width: 800px; margin: 0 auto; line-height: 1.8;">
                        Pendekatan komprehensif dalam membimbing dan mendidik santri dengan metode yang terstruktur dan berkarakter
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @php
                $kepengasuhan_systems = [
                    [
                        'letter' => 'A',
                        'title' => 'Tarbiyah',
                        'description' => 'Transfer ilmu pengetahuan dan nilai-nilai keislaman secara sistematis dan terstruktur',
                        'icon' => 'fa-book-open-reader',
                        'color' => '#01715d',
                        'gradient' => 'linear-gradient(135deg, rgba(1, 113, 93, 0.2) 0%, rgba(1, 113, 93, 0.1) 100%)'
                    ],
                    [
                        'letter' => 'B',
                        'title' => 'Qudwah',
                        'description' => 'Konseling dan membimbing santri dengan pendekatan personal dan penuh kasih sayang',
                        'icon' => 'fa-hands-praying',
                        'color' => '#FBD459',
                        'gradient' => 'linear-gradient(135deg, rgba(251, 212, 89, 0.2) 0%, rgba(251, 212, 89, 0.1) 100%)'
                    ],
                    [
                        'letter' => 'C',
                        'title' => 'Uswah Hasanah',
                        'description' => 'Memberikan contoh teladan yang baik dalam setiap aspek kehidupan dan perilaku',
                        'icon' => 'fa-star',
                        'color' => '#01715d',
                        'gradient' => 'linear-gradient(135deg, rgba(1, 113, 93, 0.2) 0%, rgba(1, 113, 93, 0.1) 100%)'
                    ],
                    [
                        'letter' => 'D',
                        'title' => 'Reward',
                        'description' => 'Memberi penghargaan dan apresiasi untuk memotivasi dan mengapresiasi prestasi santri',
                        'icon' => 'fa-trophy',
                        'color' => '#FBD459',
                        'gradient' => 'linear-gradient(135deg, rgba(251, 212, 89, 0.2) 0%, rgba(251, 212, 89, 0.1) 100%)'
                    ],
                    [
                        'letter' => 'E',
                        'title' => 'Punishment',
                        'description' => 'Memberi hukuman mendidik yang konstruktif bagi santri yang melanggar peraturan',
                        'icon' => 'fa-balance-scale',
                        'color' => '#01715d',
                        'gradient' => 'linear-gradient(135deg, rgba(1, 113, 93, 0.2) 0%, rgba(1, 113, 93, 0.1) 100%)'
                    ],
                ];
            @endphp
            
            @foreach($kepengasuhan_systems as $index => $system)
            <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ 500 + ($index * 100) }}">
                <div class="kepengasuhan-card">
                    <!-- Enhanced Decorative Elements -->
                    <div style="position: absolute; top: -3rem; right: -3rem; width: clamp(10rem, 20vw, 12rem); height: clamp(10rem, 20vw, 12rem); background: {{ $system['gradient'] }}; border-radius: 50%; z-index: 0; opacity: 0.6;"></div>
                    <div style="position: absolute; bottom: -2rem; left: -2rem; width: clamp(8rem, 16vw, 10rem); height: clamp(8rem, 16vw, 10rem); background: rgba(255, 255, 255, 0.05); border-radius: 50%; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1;">
                        <div style="display: flex; align-items: flex-start; gap: clamp(1.25rem, 2.5vw, 1.75rem); margin-bottom: clamp(1rem, 2vw, 1.25rem);">
                            <div class="kepengasuhan-icon-wrapper" style="flex-shrink: 0; width: clamp(5rem, 10vw, 6.5rem); height: clamp(5rem, 10vw, 6.5rem); border-radius: 20px; display: flex; align-items: center; justify-content: center; border: 2px solid rgba(255, 255, 255, 0.3);">
                                <i class="fa-solid {{ $system['icon'] }}" style="color: #FBD459; font-size: clamp(2rem, 4vw, 2.5rem); filter: drop-shadow(0 2px 8px rgba(251, 212, 89, 0.4));"></i>
                            </div>
                            <div style="flex: 1; padding-top: 0.5rem;">
                                <div style="display: flex; align-items: center; gap: clamp(0.875rem, 1.75vw, 1.125rem); margin-bottom: clamp(0.75rem, 1.5vw, 1rem);">
                                    <span class="kepengasuhan-letter-badge" style="width: clamp(2.5rem, 5vw, 3rem); height: clamp(2.5rem, 5vw, 3rem); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #2c3e50; font-weight: 800; font-size: clamp(1.125rem, 2.25vw, 1.375rem); flex-shrink: 0; letter-spacing: 0;">
                                        {{ $system['letter'] }}
                                    </span>
                                    <h4 style="color: #ffffff; font-weight: 700; font-size: clamp(1.25rem, 2.5vw, 1.5rem); margin: 0; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); letter-spacing: 0.02em;">
                                        {{ $system['title'] }}
                                    </h4>
                                </div>
                                <p style="color: rgba(255, 255, 255, 0.92); font-size: clamp(0.9375rem, 1.9vw, 1.0625rem); line-height: 1.75; margin: 0; text-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);">
                                    {{ $system['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--===== SISTEM KEPENGASUHAN AREA ENDS =======-->

@endsection

