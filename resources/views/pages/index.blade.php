@extends('layouts.app')

@section('content')

    <!--===== HERO AREA STARTS =======-->
    @php
        // Helper function untuk extract YouTube video ID
        if (!function_exists('getYouTubeVideoId')) {
            function getYouTubeVideoId($url) {
                if (empty($url)) return null;
                
                // Jika sudah berupa ID (tidak ada http/https)
                if (!preg_match('/http/', $url)) {
                    return $url;
                }
                
                // Extract dari berbagai format YouTube URL
                preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $url, $matches);
                return isset($matches[1]) ? $matches[1] : null;
            }
        }
    @endphp
    <div class="vl-banner p-relative fix">
        <div class="slider-active-1">
            @forelse($slideshows as $slide)
            @php
                $isVideoSlide = ($slide->slide_type ?? 'image') === 'video';
                $videoId = $isVideoSlide && $slide->video_url ? getYouTubeVideoId($slide->video_url) : null;
            @endphp
            <div class="vl-hero-slider vl-hero-bg {{ $isVideoSlide ? 'vl-hero-video-slide' : '' }}" 
                 style="position: relative; {{ !$isVideoSlide ? 'background-image: url(' . ($slide->background_image ? asset('storage/' . $slide->background_image) : asset('img/banner/nuris-hero-bg.jpg')) . '); background-size: cover; background-position: center; background-repeat: no-repeat;' : 'background: #000;' }}">
                
                @if($isVideoSlide && $videoId)
                <!-- Video Background Container -->
                <div class="hero-video-bg-container" data-video-id="{{ $videoId }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; overflow: hidden;">
                    <div class="hero-youtube-bg" style="width: 100%; height: 100%;"></div>
                </div>
                @endif
                
                <div class="vl-hero-shape shape-1">
                    <img src="{{ asset('img/shape/vl-hero-shape-1.1.png') }}" alt="">
                </div>
                <div class="vl-hero-shape shape-2">
                    <img src="{{ asset('img/shape/vl-hero-shape-1.2.png') }}" alt="">
                </div>

                <div class="vl-hero-social d-none d-lg-block">
                    <h4 class="title">Follow Us:</h4>
                    <div class="vl-hero-social-icon">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center;">
                    <div class="row" style="width: 100%;">
                        <div class="col-lg-7">
                            <div class="vl-hero-section-title">
                                @if($slide->subtitle)
                                <h5 class="vl-subtitle"> <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> {{ $slide->subtitle }}</h5>
                                @endif
                                <h1 class="vl-title text-anime-style-3">{{ $slide->title }}</h1>
                                @if($slide->description)
                                <p>{{ $slide->description }}</p>
                                @endif
                                @if($slide->button_text && $slide->button_link)
                                <div class="vl-hero-btn">
                                    <a href="{{ $slide->button_link }}" class="header-btn1">{{ $slide->button_text }} <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                </div>
            </div>
            @empty
            <!-- Default slide jika tidak ada data -->
            <div class="vl-hero-slider vl-hero-bg" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="vl-hero-shape shape-1">
                    <img src="{{ asset('img/shape/vl-hero-shape-1.1.png') }}" alt="">
                </div>
                <div class="vl-hero-shape shape-2">
                    <img src="{{ asset('img/shape/vl-hero-shape-1.2.png') }}" alt="">
                </div>

                <div class="vl-hero-social d-none d-lg-block">
                    <h4 class="title">Follow Us:</h4>
                    <div class="vl-hero-social-icon">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center;">
                    <div class="row" style="width: 100%;">
                        <div class="col-lg-7">
                            <div class="vl-hero-section-title">
                                <h5 class="vl-subtitle"> <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Pondok Pesantren Nurul Islam</h5>
                                <h1 class="vl-title text-anime-style-3">Official Website Nuris Mojokerto - Jawa Timur</h1>
                                <p>Mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin <br> melalui pendidikan terpadu dan pengembangan karakter.</p>
                                <div class="vl-hero-btn">
                                    <a href="{{ route('pages.display', 'contact') }}" class="header-btn1">Daftar Sekarang <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
        <div class="vl-arrow">
            <span class="prev-arow"><i class="fa-solid fa-angle-right"></i></span>
            <span class="next-arow"><i class="fa-solid fa-angle-left"></i></span>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== PROFIL PENGASUH AREA STARTS =======-->
    <section class="vl-about-section sp2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="vl-about-content">
                        <div class="vl-section-title-1">
                            <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Profil Pengasuh
                            </h5>
                            <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Dr. KH. Ahmad Siddiq, S.E., M.M.</h2>
                            <p class="pb-20" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" style="font-size: 18px; color: var(--ztc-text-text-4); font-weight: 600;">
                                Pengasuh Pondok Pesantren Nurul Islam
                            </p>
                            <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                                Dr. KH. Ahmad Siddiq, S.E., M.M. adalah pengasuh Pondok Pesantren Nurul Islam yang memiliki dedikasi tinggi dalam mendidik generasi muda dengan nilai-nilai Islam yang rahmatan lil alamin. Dengan latar belakang pendidikan pesantren yang kuat dan pengalaman bertahun-tahun, beliau berperan penting dalam membimbing dan mengarahkan santri-santri untuk menjadi generasi yang unggul, berakhlak mulia, dan bermanfaat bagi umat.
                            </p>
                        </div>
                        <div class="vl-about-grid">
                            <!-- single icon box -->
                            <div class="vl-about-icon-box mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-graduation-cap" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h3 class="title">Pendidikan & Pengalaman</h3>
                                    <p>23 tahun menuntut ilmu di pesantren dan S1 Manajemen di Universitas Islam Sunan Giri Surabaya</p>
                                </div>
                            </div>
                            <!-- single icon box -->
                            <div class="vl-about-icon-box mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-heart" style="font-size: 40px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h3 class="title">Dedikasi & Komitmen</h3>
                                    <p>Dengan dedikasi tinggi, beliau senantiasa berkomitmen untuk membimbing santri-santri menjadi generasi yang berakhlak mulia dan bermanfaat bagi masyarakat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area mt-4" data-aos="fade-right" data-aos-duration="800" data-aos-delay="600">
                            <a href="{{ route('pages.display', 'profil-pengasuh') }}" class="header-btn1">Selengkapnya <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                    <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding: 20px; background: linear-gradient(135deg, rgba(1, 113, 93, 0.05) 0%, rgba(1, 113, 93, 0.1) 100%); border-radius: 20px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);">
                        @php
                            $photoPath = public_path('img/team/pengasuh-nuris.jpg');
                            $fallbackPath = public_path('img/team/pengasuh-nuris.png');
                            $defaultPath = 'img/team/vl-team-inner-1.1.png';
                            
                            if (file_exists($photoPath)) {
                                $finalPath = 'img/team/pengasuh-nuris.jpg';
                            } elseif (file_exists($fallbackPath)) {
                                $finalPath = 'img/team/pengasuh-nuris.png';
                            } else {
                                $finalPath = $defaultPath;
                            }
                        @endphp
                        <img class="w-100" src="{{ asset($finalPath) }}" alt="Profil Pengasuh PP. Nurul Islam" style="border-radius: 15px; object-fit: cover; width: 100%; height: auto; display: block;" onerror="this.onerror=null; this.src='{{ asset('img/team/vl-team-inner-1.1.png') }}';">
                    </div>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    <!--===== PROFIL PENGASUH AREA ENDS =======-->

    <!--===== KETERANGAN & VIDEO PROFIL AREA STARTS =======-->
    <section class="vl-about-section sp2" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background: rgba(251, 212, 89, 0.1); border-radius: 50%; z-index: 0;"></div>
        <div style="position: absolute; bottom: -100px; left: -100px; width: 400px; height: 400px; background: rgba(26, 188, 156, 0.05); border-radius: 50%; z-index: 0;"></div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <!-- Section Header -->
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Tentang Kami
                </h5>
                <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">Pondok Pesantren Nurul Islam</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 700px; margin: 0 auto;">
                    Lembaga pendidikan Islam yang berkomitmen untuk mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin
                </p>
            </div>

            <!-- Video Profil Section -->
            <div class="row mb-60">
                <div class="col-lg-10 mx-auto">
                    <div class="video-profile-wrapper" id="video-profile-section" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 16px; box-shadow: 0 20px 60px rgba(0,0,0,0.15); background: #000; transition: all 0.3s ease;">
                        <div id="youtube-player-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;"></div>
                        <!-- Play Button Overlay (optional) -->
                        <div class="video-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%); z-index: 1; pointer-events: none; border-radius: 16px;"></div>
                    </div>
                    <div class="text-center mt-4">
                        <h4 style="color: var(--ztc-text-text-3); font-weight: 700; font-size: 24px; margin-bottom: 8px;">Video Profil Pesantren</h4>
                        <p style="color: var(--ztc-text-text-2); font-size: 16px;">Kenali lebih dekat tentang Pondok Pesantren Nurul Islam</p>
                    </div>
                </div>
            </div>

            <!-- Keterangan Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Keterangan Utama -->
                        <div class="col-lg-6 mb-30">
                            <div class="keterangan-content" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" style="background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); height: 100%;">
                                <h3 style="color: var(--ztc-text-text-3); font-weight: 700; font-size: 28px; margin-bottom: 20px; line-height: 1.3;">
                                    Visi & Misi Kami
                                </h3>
                                <p style="color: var(--ztc-text-text-2); font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                    Pondok Pesantren Nurul Islam (Nuris) Mojokerto adalah lembaga pendidikan Islam yang berkomitmen untuk mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin. Kami menyelenggarakan pendidikan terpadu yang mengintegrasikan ilmu agama dan ilmu umum untuk membentuk santri yang berakhlak mulia, berprestasi, dan bermanfaat bagi masyarakat.
                                </p>
                                <p style="color: var(--ztc-text-text-2); font-size: 16px; line-height: 1.8;">
                                    Dengan berbagai program unggulan dan fasilitas yang memadai, kami berusaha memberikan pendidikan terbaik untuk mengembangkan potensi santri dalam berbagai bidang, baik akademik, keagamaan, maupun keterampilan hidup.
                                </p>
                            </div>
                        </div>

                        <!-- Program Unggulan Cards -->
                        <div class="col-lg-6 mb-30">
                            <div class="program-cards" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                                <!-- Card 1 -->
                                <div class="program-card mb-20" style="background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(26, 188, 156, 0.2); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 40px rgba(26, 188, 156, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(26, 188, 156, 0.2)';">
                                    <div style="display: flex; align-items: flex-start;">
                                        <div style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0;">
                                            <i class="fa-solid fa-mosque" style="font-size: 32px; color: #fff;"></i>
                                        </div>
                                        <div style="flex: 1;">
                                            <h4 style="color: #fff; font-weight: 700; font-size: 22px; margin-bottom: 8px;">Pendidikan Agama</h4>
                                            <p style="color: rgba(255,255,255,0.9); font-size: 15px; line-height: 1.6; margin: 0;">
                                                Pembelajaran Al-Qur'an, Hadits, Fiqih, dan ilmu-ilmu keislaman lainnya dengan metode yang modern dan efektif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="program-card mb-20" style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(251, 212, 89, 0.2); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 40px rgba(251, 212, 89, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(251, 212, 89, 0.2)';">
                                    <div style="display: flex; align-items: flex-start;">
                                        <div style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0;">
                                            <i class="fa-solid fa-book" style="font-size: 32px; color: #fff;"></i>
                                        </div>
                                        <div style="flex: 1;">
                                            <h4 style="color: #fff; font-weight: 700; font-size: 22px; margin-bottom: 8px;">Pendidikan Umum</h4>
                                            <p style="color: rgba(255,255,255,0.9); font-size: 15px; line-height: 1.6; margin: 0;">
                                                Kurikulum terpadu yang mengintegrasikan ilmu agama dan ilmu umum untuk membentuk generasi yang berprestasi
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="program-card" style="background: linear-gradient(135deg, #3498DB 0%, #2980B9 100%); padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(52, 152, 219, 0.2); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 40px rgba(52, 152, 219, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(52, 152, 219, 0.2)';">
                                    <div style="display: flex; align-items: flex-start;">
                                        <div style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0;">
                                            <i class="fa-solid fa-users" style="font-size: 32px; color: #fff;"></i>
                                        </div>
                                        <div style="flex: 1;">
                                            <h4 style="color: #fff; font-weight: 700; font-size: 22px; margin-bottom: 8px;">Pengembangan Karakter</h4>
                                            <p style="color: rgba(255,255,255,0.9); font-size: 15px; line-height: 1.6; margin: 0;">
                                                Program pembentukan karakter dan akhlak mulia melalui berbagai kegiatan yang menunjang perkembangan santri
                                            </p>
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
    <!--===== KETERANGAN & VIDEO PROFIL AREA ENDS =======-->

    <!--===== PENGURUS YAYASAN AREA STARTS =======-->
    <section class="vl-team-bg-1 sp1" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e22ce 100%); padding: 100px 0; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: rgba(255,255,255,0.05); border-radius: 50%; z-index: 0;"></div>
        <div style="position: absolute; bottom: -150px; left: -150px; width: 500px; height: 500px; background: rgba(255,255,255,0.03); border-radius: 50%; z-index: 0;"></div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <div class="vl-team-section-title mb-60 text-center">
                <div class="vl-section-title-1">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #ffffff; font-weight: 700; letter-spacing: 2px; margin-bottom: 15px; text-shadow: 0 2px 8px rgba(0,0,0,0.3); background: rgba(255,255,255,0.15); padding: 12px 24px; border-radius: 50px; display: inline-block; backdrop-filter: blur(10px);">
                        <i class="fa-solid fa-sitemap" style="margin-right: 8px;"></i>Struktur Organisasi
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 42px; font-weight: 700; color: white; margin-bottom: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        Pengurus Yayasan PP. Nurul Islam
                    </h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto; font-size: 16px; color: rgba(255,255,255,0.9); line-height: 1.8;">
                        Pengurus Yayasan adalah badan yang bertanggung jawab atas pengelolaan dan pengembangan Pondok Pesantren Nurul Islam secara keseluruhan. Tahun Akademik 2025-2026.
                    </p>
                </div>
            </div>
            <div class="row">
                <div id="team1" class="owl-carousel owl-theme">
                    @forelse($pengurusYayasan as $pengurus)
                    <div class="vl-team-parent" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.2); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.2)'">
                        <div class="vl-team-thumb" style="position: relative; overflow: hidden; height: 300px;">
                            <img class="w-100" src="{{ $pengurus->foto ? asset('storage/' . $pengurus->foto) : asset('img/team/vl-team-inner-1.1.png') }}" alt="{{ $pengurus->nama }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, transparent 0%, rgba(102, 126, 234, 0.1) 100%);"></div>
                        </div>
                        <div class="vl-team-social" style="position: absolute; top: 20px; right: 20px; z-index: 2;">
                            <ul style="display: flex; gap: 10px; list-style: none; padding: 0; margin: 0;">
                                <li>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.95); color: #1877f2; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(0,0,0,0.15);" onmouseover="this.style.background='#1877f2'; this.style.color='white'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,255,255,0.95)'; this.style.color='#1877f2'; this.style.transform='scale(1)'">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.95); color: #e4405f; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(0,0,0,0.15);" onmouseover="this.style.background='#e4405f'; this.style.color='white'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,255,255,0.95)'; this.style.color='#e4405f'; this.style.transform='scale(1)'">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.95); color: #1da1f2; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(0,0,0,0.15);" onmouseover="this.style.background='#1da1f2'; this.style.color='white'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,255,255,0.95)'; this.style.color='#1da1f2'; this.style.transform='scale(1)'">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.95); color: #0077b5; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(0,0,0,0.15);" onmouseover="this.style.background='#0077b5'; this.style.color='white'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,255,255,0.95)'; this.style.color='#0077b5'; this.style.transform='scale(1)'">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="vl-team-content text-center" style="padding: 30px 20px; background: white;">
                            <a href="{{ route('pages.display', 'pengurus-yayasan') }}" class="title" style="color: #2c3e50; text-decoration: none; font-size: 20px; font-weight: 700; line-height: 1.4; margin-bottom: 8px; display: block; transition: color 0.3s;" onmouseover="this.style.color='#667eea'" onmouseout="this.style.color='#2c3e50'">
                                {{ $pengurus->nama }}
                            </a>
                            <span style="color: #6c757d; font-size: 14px; font-weight: 500; display: block;">
                                {{ $pengurus->jabatan_lengkap ?? $pengurus->jabatan }}
                            </span>
                        </div>
                    </div>
                    @empty
                    <div class="vl-team-parent" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.2);">
                        <div class="vl-team-thumb" style="position: relative; overflow: hidden; height: 300px;">
                            <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Pengurus Yayasan" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="vl-team-content text-center" style="padding: 30px 20px; background: white;">
                            <a href="{{ route('pages.display', 'pengurus-yayasan') }}" class="title" style="color: #2c3e50; text-decoration: none; font-size: 20px; font-weight: 700; line-height: 1.4; margin-bottom: 8px; display: block;">
                                Belum ada data
                            </a>
                            <span style="color: #6c757d; font-size: 14px; font-weight: 500; display: block;">
                                Pengurus Yayasan
                            </span>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="text-center" style="margin-top: 80px; margin-bottom: 20px;">
                <a href="{{ route('pages.display', 'pengurus-yayasan') }}" class="header-btn1" style="display: inline-flex; align-items: center; gap: 12px; background: white; color: #1e3c72; padding: 18px 40px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 16px; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 30px rgba(255,255,255,0.3); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 40px rgba(255,255,255,0.4)'; this.style.background='#1e3c72'; this.style.color='white';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(255,255,255,0.3)'; this.style.background='white'; this.style.color='#1e3c72';">
                    <span style="position: relative; z-index: 1;">Lihat Semua Pengurus</span>
                    <i class="fa-solid fa-arrow-right" style="font-size: 14px; position: relative; z-index: 1; transition: transform 0.3s;"></i>
                    <span style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transition: left 0.5s;"></span>
                </a>
            </div>
        </div>
    </section>
    <!--===== PENGURUS YAYASAN AREA ENDS =======-->

    <!--===== BERITA TERBARU AREA STARTS =======-->
    @if(isset($latestArticles) && $latestArticles->count() > 0)
    <section class="vl-blg sp2" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%); padding: 80px 0;">
        <div class="container">
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #28a745; font-weight: 600; letter-spacing: 1px; margin-bottom: 15px;">
                    <i class="fa-solid fa-newspaper" style="margin-right: 8px;"></i>Informasi Terkini
                </h5>
                <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 42px; font-weight: 700; color: #2c3e50; margin-bottom: 20px;">Berita & Artikel Terbaru</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto; font-size: 16px; color: #6c757d; line-height: 1.8;">
                    Dapatkan informasi terkini seputar kegiatan, program, dan perkembangan Pondok Pesantren Nurul Islam melalui berita dan artikel terbaru.
                </p>
            </div>
            <div class="row">
                @foreach($latestArticles as $article)
                <div class="col-lg-4 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="vl-blog-card" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)'">
                        <div class="vl-blog-thumb" style="position: relative; overflow: hidden; height: 250px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <a href="{{ route('articles.show', $article->slug) }}" style="display: block; width: 100%; height: 100%; position: relative;">
                                @if($article->featured_image)
                                    <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                @else
                                    <img src="{{ asset('img/blog/vl-blog-1.1.png') }}" alt="{{ $article->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                @endif
                                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                            </a>
                        </div>
                        <div class="vl-blog-content" style="padding: 30px; flex: 1; display: flex; flex-direction: column;">
                            <div class="vl-blog-meta" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #f0f0f0;">
                                <span style="display: inline-flex; align-items: center; gap: 6px; color: #6c757d; font-size: 13px;">
                                    <i class="fa-solid fa-calendar" style="color: #28a745; font-size: 12px;"></i>
                                    <strong style="font-weight: 600;">{{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}</strong>
                                </span>
                                @if($article->author)
                                <span style="display: inline-flex; align-items: center; gap: 6px; color: #6c757d; font-size: 13px;">
                                    <i class="fa-solid fa-user" style="color: #007bff; font-size: 12px;"></i>
                                    <strong style="font-weight: 600;">{{ $article->author }}</strong>
                                </span>
                                @endif
                            </div>
                            <h3 class="vl-blog-title" style="margin-bottom: 15px; flex: 1;">
                                <a href="{{ route('articles.show', $article->slug) }}" style="color: #2c3e50; text-decoration: none; font-size: 20px; font-weight: 700; line-height: 1.4; transition: color 0.3s; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" onmouseover="this.style.color='#28a745'" onmouseout="this.style.color='#2c3e50'">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            @if($article->excerpt)
                            <p style="color: #6c757d; font-size: 14px; line-height: 1.7; margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex: 1;">
                                {{ Str::limit($article->excerpt, 150) }}
                            </p>
                            @else
                            <p style="color: #6c757d; font-size: 14px; line-height: 1.7; margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex: 1;">
                                {{ Str::limit(strip_tags($article->content), 150) }}
                            </p>
                            @endif
                            <div class="vl-blog-btn" style="margin-top: auto;">
                                <a href="{{ route('articles.show', $article->slug) }}" class="header-btn1" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; transition: all 0.3s; box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 6px 20px rgba(40, 167, 69, 0.4)'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 4px 15px rgba(40, 167, 69, 0.3)'">
                                    Baca Selengkapnya <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-50">
                <a href="{{ route('articles.index') }}" class="header-btn1" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; padding: 15px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 16px; transition: all 0.3s; box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(40, 167, 69, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(40, 167, 69, 0.3)'">
                    Lihat Semua Berita <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    @endif
    <!--===== BERITA TERBARU AREA ENDS =======-->

    <!--===== Gallery AREA STARTS =======-->
    @if($latestPhotos->count() > 0 || $latestVideos->count() > 0)
    <section class="vl-gallery sp2">
        <div class="container">
            <div class="vl-gallery-content mb-60">
                <div class="vl-section-title-1">
                    <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Gallery
                    </h5>
                    <h2 class="title text-anime-style-3">Gallery PP. Nurul Islam</h2>
                    <p data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Dokumentasi kegiatan, program, dan momen-momen penting <br> di Pondok Pesantren Nurul Islam.</p>
                </div>
                <div class="vl-gallery-btn text-end" data-aos="fade-left" data-aos-duration="900" data-aos-delay="300">
                    <div class="btn-area">
                        <a href="{{ route('galleries.photos') }}" class="header-btn1">Lihat Semua Gallery <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            @if($latestPhotos->count() > 0)
            <div class="row">
                @foreach($latestPhotos as $photo)
                <div class="col-lg-{{ $loop->index == 0 ? '6' : ($loop->index <= 2 ? '3' : ($loop->index == 3 ? '3' : ($loop->index == 4 ? '3' : '6'))) }} col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                        <a href="{{ $photo->image_path ? asset('storage/' . $photo->image_path) : asset('img/gallery/vl-gallery-1.1.png') }}" data-lightbox="gallery-preview">
                            <img class="w-100" src="{{ $photo->image_path ? asset('storage/' . $photo->image_path) : asset('img/gallery/vl-gallery-1.1.png') }}" alt="{{ $photo->title }}" onerror="this.onerror=null; this.src='{{ asset('img/gallery/vl-gallery-1.1.png') }}';">
                        </a>
                        <a href="{{ $photo->image_path ? asset('storage/' . $photo->image_path) : asset('img/gallery/vl-gallery-1.1.png') }}" data-lightbox="gallery-preview" class="search-ic">
                            <span><img src="{{ asset('img/icons/vl-gallery-search-1.1.svg') }}" alt=""></span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="row">
                @for($i = 1; $i <= 6; $i++)
                <div class="col-lg-{{ $i == 1 ? '6' : ($i <= 3 ? '3' : ($i == 4 ? '3' : ($i == 5 ? '3' : '6'))) }} col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="{{ ($i - 1) * 100 }}">
                        <a href="{{ asset('img/gallery/vl-gallery-1.' . $i . '.png') }}" data-lightbox="gallery-preview">
                            <img class="w-100" src="{{ asset('img/gallery/vl-gallery-1.' . $i . '.png') }}" alt="">
                        </a>
                        <a href="{{ asset('img/gallery/vl-gallery-1.' . $i . '.png') }}" data-lightbox="gallery-preview" class="search-ic">
                            <span><img src="{{ asset('img/icons/vl-gallery-search-1.1.svg') }}" alt=""></span>
                        </a>
                    </div>
                </div>
                @endfor
            </div>
            @endif
            <div class="text-center mt-40">
                <div class="btn-area d-inline-block me-3">
                    <a href="{{ route('galleries.photos') }}" class="header-btn1">Gallery Foto <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
                <div class="btn-area d-inline-block">
                    <a href="{{ route('galleries.videos') }}" class="header-btn1">Gallery Video <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!--===== EVENT AREA STARTS =======-->
    @if(isset($latestEvents) && $latestEvents->count() > 0)
    <section class="vl-blg sp2" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 80px 0; position: relative; overflow: hidden;">
        <!-- Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: rgba(255,255,255,0.9); font-weight: 600; letter-spacing: 1px; margin-bottom: 15px;">
                    <i class="fa-solid fa-calendar-check" style="margin-right: 8px;"></i>Event & Kegiatan
                </h5>
                <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 42px; font-weight: 700; color: white; margin-bottom: 20px;">Kegiatan Terbaru</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto; font-size: 16px; color: rgba(255,255,255,0.9); line-height: 1.8;">
                    Ikuti berbagai kegiatan dan event menarik yang diselenggarakan oleh Pondok Pesantren Nurul Islam.
                </p>
            </div>
            <div class="row">
                @foreach($latestEvents as $event)
                <div class="col-lg-4 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="vl-event-card" style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.2); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 50px rgba(0,0,0,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.2)'">
                        @if($event->featured_image)
                        <div class="vl-event-thumb" style="position: relative; overflow: hidden; height: 220px;">
                            <img src="{{ asset('storage/' . $event->featured_image) }}" alt="{{ $event->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <div style="position: absolute; top: 15px; left: 15px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 8px 16px; border-radius: 8px; font-weight: 700; font-size: 14px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                <i class="fa-solid fa-calendar" style="margin-right: 5px;"></i>{{ $event->event_date->format('d M Y') }}
                            </div>
                            @if($event->isUpcoming())
                            <div style="position: absolute; top: 15px; right: 15px; background: #28a745; color: white; padding: 6px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; text-transform: uppercase;">
                                Upcoming
                            </div>
                            @endif
                        </div>
                        @else
                        <div class="vl-event-thumb" style="position: relative; overflow: hidden; height: 220px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-calendar-days" style="font-size: 60px; color: rgba(255,255,255,0.3);"></i>
                            <div style="position: absolute; top: 15px; left: 15px; background: rgba(255,255,255,0.95); color: #667eea; padding: 8px 16px; border-radius: 8px; font-weight: 700; font-size: 14px;">
                                <i class="fa-solid fa-calendar" style="margin-right: 5px;"></i>{{ $event->event_date->format('d M Y') }}
                            </div>
                            @if($event->isUpcoming())
                            <div style="position: absolute; top: 15px; right: 15px; background: #28a745; color: white; padding: 6px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; text-transform: uppercase;">
                                Upcoming
                            </div>
                            @endif
                        </div>
                        @endif
                        <div class="vl-event-content" style="padding: 30px; flex: 1; display: flex; flex-direction: column;">
                            <h3 class="vl-event-title" style="margin-bottom: 15px; flex: 1;">
                                <a href="#" style="color: #2c3e50; text-decoration: none; font-size: 22px; font-weight: 700; line-height: 1.4; transition: color 0.3s; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" onmouseover="this.style.color='#667eea'" onmouseout="this.style.color='#2c3e50'">
                                    {{ $event->title }}
                                </a>
                            </h3>
                            @if($event->description)
                            <p style="color: #6c757d; font-size: 14px; line-height: 1.7; margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex: 1;">
                                {{ Str::limit($event->description, 120) }}
                            </p>
                            @endif
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px; padding-top: 15px; border-top: 1px solid #f0f0f0;">
                                @if($event->location)
                                <span style="display: inline-flex; align-items: center; gap: 6px; color: #6c757d; font-size: 13px;">
                                    <i class="fa-solid fa-location-dot" style="color: #dc3545;"></i>
                                    <strong>{{ Str::limit($event->location, 25) }}</strong>
                                </span>
                                @endif
                                @if($event->organizer)
                                <span style="display: inline-flex; align-items: center; gap: 6px; color: #6c757d; font-size: 13px;">
                                    <i class="fa-solid fa-user-group" style="color: #007bff;"></i>
                                    <strong>{{ Str::limit($event->organizer, 25) }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="vl-event-btn" style="margin-top: auto;">
                                <a href="#" class="header-btn1" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px; transition: all 0.3s; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3); width: 100%; justify-content: center;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(102, 126, 234, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(102, 126, 234, 0.3)'">
                                    Detail Event <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if($latestEvents->count() > 0)
            <div class="text-center mt-50">
                <a href="#" class="header-btn1" style="display: inline-flex; align-items: center; gap: 8px; background: white; color: #667eea; padding: 15px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 16px; transition: all 0.3s; box-shadow: 0 4px 15px rgba(255,255,255,0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(255,255,255,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(255,255,255,0.3)'">
                    Lihat Semua Event <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            @endif
        </div>
    </section>
    @endif
    <!--===== EVENT AREA ENDS =======-->

@push('scripts')
<style>
    /* Hero Slideshow Fixed Height - 1920x1080px */
    .vl-banner {
        height: 1080px;
        overflow: hidden;
    }
    
    .slider-active-1 {
        height: 1080px;
    }
    
    .vl-hero-slider {
        height: 1080px !important;
        min-height: 1080px !important;
        max-height: 1080px !important;
        display: flex !important;
        align-items: center;
        position: relative;
    }
    
    .vl-hero-section-title {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    
    /* Hero Video Slide Styles */
    .vl-hero-video-slide {
        position: relative;
        overflow: hidden;
    }
    
    .hero-video-bg-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
    }
    
    .hero-youtube-bg iframe {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100vw;
        height: 56.25vw; /* 16:9 aspect ratio */
        min-height: 1080px;
        min-width: 1920px; /* 16:9 aspect ratio */
        pointer-events: none;
    }
    
    /* Responsive untuk mobile dan tablet */
    @media (max-width: 1920px) {
        .vl-banner {
            height: 56.25vw; /* 16:9 aspect ratio */
            min-height: 600px;
        }
        
        .slider-active-1 {
            height: 56.25vw;
            min-height: 600px;
        }
        
        .vl-hero-slider {
            height: 56.25vw !important;
            min-height: 600px !important;
            max-height: 1080px !important;
        }
        
        .hero-youtube-bg iframe {
            min-height: 56.25vw;
        }
    }
    
    @media (max-width: 768px) {
        .vl-banner {
            height: 60vh;
            min-height: 500px;
        }
        
        .slider-active-1 {
            height: 60vh;
            min-height: 500px;
        }
        
        .vl-hero-slider {
            height: 60vh !important;
            min-height: 500px !important;
        }
    }
</style>
<!-- YouTube IFrame API -->
<script src="https://www.youtube.com/iframe_api"></script>
<script>
    let youtubePlayer;
    let isPlayerReady = false;
    let hasPlayed = false;
    let heroVideoPlayers = {};

    // Fungsi yang dipanggil oleh YouTube IFrame API
    function onYouTubeIframeAPIReady() {
        // Player untuk video profil section
        if (document.getElementById('youtube-player-container')) {
            youtubePlayer = new YT.Player('youtube-player-container', {
                videoId: 'cVxd_qeJQAI',
                playerVars: {
                    'start': 0,
                    'rel': 0,
                    'modestbranding': 1,
                    'autoplay': 0,
                    'controls': 1,
                    'enablejsapi': 1,
                    'playsinline': 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // Initialize video background players untuk slideshow
        initializeHeroVideoPlayers();
    }

    function onPlayerReady(event) {
        isPlayerReady = true;
    }

    function onPlayerStateChange(event) {
        // Event handler untuk state change (optional)
    }

    // Initialize video background players
    function initializeHeroVideoPlayers() {
        const videoContainers = document.querySelectorAll('.hero-video-bg-container');
        videoContainers.forEach(function(container, index) {
            const videoId = container.getAttribute('data-video-id');
            const playerId = 'hero-youtube-bg-' + index;
            const playerDiv = container.querySelector('.hero-youtube-bg');
            
            if (videoId && playerDiv) {
                playerDiv.id = playerId;
                
                heroVideoPlayers[playerId] = new YT.Player(playerId, {
                    videoId: videoId,
                    playerVars: {
                        'start': 0,
                        'rel': 0,
                        'modestbranding': 1,
                        'autoplay': 1,
                        'controls': 0,
                        'enablejsapi': 1,
                        'playsinline': 1,
                        'loop': 1,
                        'playlist': videoId, // Required for loop to work
                        'mute': 0,
                        'showinfo': 0,
                        'iv_load_policy': 3,
                        'fs': 0,
                        'cc_load_policy': 0
                    },
                    events: {
                        'onReady': function(event) {
                            // Video siap, sudah auto-play
                        },
                        'onStateChange': function(event) {
                            // Loop video ketika selesai
                            if (event.data === YT.PlayerState.ENDED) {
                                event.target.seekTo(0, true);
                                event.target.playVideo();
                            }
                        }
                    }
                });
            }
        });
    }

    // Intersection Observer untuk mendeteksi ketika section video masuk viewport
    document.addEventListener('DOMContentLoaded', function() {
        const videoSection = document.getElementById('video-profile-section');
        
        if (!videoSection) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5 // Video akan auto-play ketika 50% section terlihat
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && isPlayerReady && !hasPlayed) {
                    // Auto-play video ketika section terlihat, mulai dari menit 00:00
                    try {
                        youtubePlayer.seekTo(0, true); // Pastikan mulai dari awal
                        youtubePlayer.playVideo();
                        hasPlayed = true;
                    } catch (error) {
                        console.log('Error playing video:', error);
                    }
                } else if (!entry.isIntersecting && isPlayerReady && hasPlayed) {
                    // Pause video ketika section tidak terlihat lagi (optional)
                    // Uncomment baris di bawah jika ingin video pause ketika scroll keluar
                    // try {
                    //     youtubePlayer.pauseVideo();
                    // } catch (error) {
                    //     console.log('Error pausing video:', error);
                    // }
                }
            });
        }, observerOptions);

        observer.observe(videoSection);

        // Integrasi dengan Slick slider untuk hero video background
        if (typeof $ !== 'undefined' && $('.slider-active-1').length > 0) {
            // Tunggu sampai slider selesai diinisialisasi
            setTimeout(function() {
                $('.slider-active-1').on('afterChange', function(event, slick, currentSlide) {
                    // Pause semua video background
                    Object.keys(heroVideoPlayers).forEach(function(playerId) {
                        try {
                            const player = heroVideoPlayers[playerId];
                            if (player && typeof player.pauseVideo === 'function') {
                                player.pauseVideo();
                            }
                        } catch (error) {
                            console.log('Error pausing video:', error);
                        }
                    });

                    // Play video di slide yang aktif
                    const currentSlideElement = $(slick.$slides[currentSlide]);
                    const videoContainer = currentSlideElement.find('.hero-video-bg-container');
                    
                    if (videoContainer.length > 0) {
                        const videoId = videoContainer.attr('data-video-id');
                        const playerDiv = videoContainer.find('.hero-youtube-bg');
                        const playerId = playerDiv.attr('id');
                        
                        if (playerId && heroVideoPlayers[playerId]) {
                            setTimeout(function() {
                                try {
                                    const player = heroVideoPlayers[playerId];
                                    player.seekTo(0, true);
                                    player.playVideo();
                                } catch (error) {
                                    console.log('Error playing video:', error);
                                }
                            }, 300);
                        }
                    }
                });

                // Cek slide pertama saat halaman dimuat
                setTimeout(function() {
                    if ($('.slider-active-1').hasClass('slick-initialized')) {
                        const firstSlide = $('.slider-active-1').slick('slickCurrentSlide');
                        const firstSlideElement = $('.slider-active-1 .slick-slide').eq(firstSlide);
                        const videoContainer = firstSlideElement.find('.hero-video-bg-container');
                        
                        if (videoContainer.length > 0) {
                            const playerDiv = videoContainer.find('.hero-youtube-bg');
                            const playerId = playerDiv.attr('id');
                            
                            if (playerId && heroVideoPlayers[playerId]) {
                                setTimeout(function() {
                                    try {
                                        const player = heroVideoPlayers[playerId];
                                        player.seekTo(0, true);
                                        player.playVideo();
                                    } catch (error) {
                                        console.log('Error playing video on load:', error);
                                    }
                                }, 500);
                            }
                        }
                    }
                }, 1500);
            }, 500);
        }
    });
</script>
@endpush

@endsection
