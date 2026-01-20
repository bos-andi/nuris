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
                                @php
                                    // Get font settings from slide, ensure it's an array
                                    $fontSettings = is_array($slide->font_settings) ? $slide->font_settings : (is_string($slide->font_settings) ? json_decode($slide->font_settings, true) : []);
                                    $titleFont = $fontSettings['title'] ?? [];
                                    $subtitleFont = $fontSettings['subtitle'] ?? [];
                                    $descriptionFont = $fontSettings['description'] ?? [];
                                    
                                    // Build inline styles for title - apply if any setting exists
                                    $titleStyle = '';
                                    if (!empty($titleFont) && (isset($titleFont['font_family']) || isset($titleFont['font_size']) || isset($titleFont['font_weight']) || isset($titleFont['font_style']) || isset($titleFont['color']) || isset($titleFont['text_align']))) {
                                        if (isset($titleFont['font_family'])) $titleStyle .= 'font-family: ' . $titleFont['font_family'] . ' !important; ';
                                        if (isset($titleFont['font_size'])) $titleStyle .= 'font-size: ' . $titleFont['font_size'] . ' !important; ';
                                        if (isset($titleFont['font_weight'])) $titleStyle .= 'font-weight: ' . $titleFont['font_weight'] . ' !important; ';
                                        if (isset($titleFont['font_style'])) $titleStyle .= 'font-style: ' . $titleFont['font_style'] . ' !important; ';
                                        if (isset($titleFont['color'])) $titleStyle .= 'color: ' . $titleFont['color'] . ' !important; ';
                                        if (isset($titleFont['text_align'])) $titleStyle .= 'text-align: ' . $titleFont['text_align'] . ' !important; ';
                                    }
                                    
                                    // Build inline styles for subtitle - apply if any setting exists
                                    $subtitleStyle = '';
                                    if (!empty($subtitleFont) && (isset($subtitleFont['font_family']) || isset($subtitleFont['font_size']) || isset($subtitleFont['font_weight']) || isset($subtitleFont['font_style']) || isset($subtitleFont['color']) || isset($subtitleFont['text_align']))) {
                                        if (isset($subtitleFont['font_family'])) $subtitleStyle .= 'font-family: ' . $subtitleFont['font_family'] . ' !important; ';
                                        if (isset($subtitleFont['font_size'])) $subtitleStyle .= 'font-size: ' . $subtitleFont['font_size'] . ' !important; ';
                                        if (isset($subtitleFont['font_weight'])) $subtitleStyle .= 'font-weight: ' . $subtitleFont['font_weight'] . ' !important; ';
                                        if (isset($subtitleFont['font_style'])) $subtitleStyle .= 'font-style: ' . $subtitleFont['font_style'] . ' !important; ';
                                        if (isset($subtitleFont['color'])) $subtitleStyle .= 'color: ' . $subtitleFont['color'] . ' !important; ';
                                        if (isset($subtitleFont['text_align'])) $subtitleStyle .= 'text-align: ' . $subtitleFont['text_align'] . ' !important; ';
                                    }
                                    
                                    // Build inline styles for description - apply if any setting exists
                                    $descriptionStyle = '';
                                    if (!empty($descriptionFont) && (isset($descriptionFont['font_family']) || isset($descriptionFont['font_size']) || isset($descriptionFont['font_weight']) || isset($descriptionFont['font_style']) || isset($descriptionFont['color']) || isset($descriptionFont['text_align']))) {
                                        if (isset($descriptionFont['font_family'])) $descriptionStyle .= 'font-family: ' . $descriptionFont['font_family'] . ' !important; ';
                                        if (isset($descriptionFont['font_size'])) $descriptionStyle .= 'font-size: ' . $descriptionFont['font_size'] . ' !important; ';
                                        if (isset($descriptionFont['font_weight'])) $descriptionStyle .= 'font-weight: ' . $descriptionFont['font_weight'] . ' !important; ';
                                        if (isset($descriptionFont['font_style'])) $descriptionStyle .= 'font-style: ' . $descriptionFont['font_style'] . ' !important; ';
                                        if (isset($descriptionFont['color'])) $descriptionStyle .= 'color: ' . $descriptionFont['color'] . ' !important; ';
                                        if (isset($descriptionFont['text_align'])) $descriptionStyle .= 'text-align: ' . $descriptionFont['text_align'] . ' !important; ';
                                    }
                                @endphp
                                @if($slide->subtitle)
                                <h5 class="vl-subtitle" @if($subtitleStyle) style="{{ $subtitleStyle }}" @endif> <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> {{ $slide->subtitle }}</h5>
                                @endif
                                <h1 class="vl-title text-anime-style-3" @if($titleStyle) style="{{ $titleStyle }}" @endif>{{ $slide->title }}</h1>
                                @if($slide->description)
                                <p @if($descriptionStyle) style="{{ $descriptionStyle }}" @endif>{{ $slide->description }}</p>
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

    <!--===== IDENTITAS RESMI AREA STARTS =======-->
    <section class="vl-about-section sp2" style="background-color: #f8f9fa; padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-4">
                        <h1 class="vl-section-title" style="font-size: 2.5rem; font-weight: 700; color: #01715d; margin-bottom: 1.5rem;">
                            Website Resmi PP Nurul Islam Mojokerto
                        </h1>
                        <div class="vl-section-content" style="max-width: 900px; margin: 0 auto; text-align: justify;">
                            <p style="font-size: 1.125rem; line-height: 1.8; color: #333; margin-bottom: 1rem;">
                                <strong>Website Resmi PP Nurul Islam Mojokerto</strong> merupakan sumber informasi resmi Pondok Pesantren Nurul Islam (Nuris) Mojokerto. Melalui website ini, kami menyediakan informasi lengkap mengenai profil pesantren, program pendidikan, berita dan kegiatan, serta berbagai informasi penting lainnya bagi masyarakat.
                            </p>
                            <p style="font-size: 1.125rem; line-height: 1.8; color: #333;">
                                Pondok Pesantren Nurul Islam Mojokerto adalah lembaga pendidikan Islam yang berkomitmen untuk mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin. Kami menyediakan pendidikan berkualitas dari tingkat dasar hingga perguruan tinggi, dengan berbagai unit pendidikan yang tersebar di Mojokerto dan sekitarnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== IDENTITAS RESMI AREA ENDS =======-->

    <!--===== PROFIL PENGASUH AREA STARTS =======-->
    <section class="vl-about-section sp2">
        <div class="container">
            <div class="row" style="align-items: flex-start;">
                <div class="col-lg-4 col-md-6 mb-30" style="padding-left: 0.9375rem; padding-right: 1.875rem; display: flex; align-items: flex-start;">
                    <div class="vl-about-large-thumb pengasuh-photo-wrapper homepage-pengasuh-photo" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" style="height: 100%; width: 100%; position: relative; transform: none !important; visibility: visible !important;">
                        <style>
                            .homepage-pengasuh-photo::before {
                                display: none !important;
                                animation: none !important;
                                opacity: 0 !important;
                                visibility: hidden !important;
                                width: 0 !important;
                                height: 0 !important;
                                background: none !important;
                                content: "" !important;
                            }
                            .homepage-pengasuh-photo {
                                transform: none !important;
                                visibility: visible !important;
                                overflow: visible !important;
                            }
                            .homepage-pengasuh-photo img {
                                transform: none !important;
                                visibility: visible !important;
                            }
                        </style>
                        <script>
                            // Prevent GSAP reveal animation on homepage pengasuh photo
                            document.addEventListener('DOMContentLoaded', function() {
                                const pengasuhPhoto = document.querySelector('.homepage-pengasuh-photo');
                                if (pengasuhPhoto) {
                                    // Remove reveal class if accidentally added
                                    pengasuhPhoto.classList.remove('reveal');
                                    // Force reset transform
                                    pengasuhPhoto.style.transform = 'none';
                                    pengasuhPhoto.style.visibility = 'visible';
                                    const img = pengasuhPhoto.querySelector('img');
                                    if (img) {
                                        img.style.transform = 'none';
                                        img.style.visibility = 'visible';
                                    }
                                }
                            });
                            // Also prevent after GSAP loads
                            window.addEventListener('load', function() {
                                const pengasuhPhoto = document.querySelector('.homepage-pengasuh-photo');
                                if (pengasuhPhoto) {
                                    pengasuhPhoto.style.transform = 'none';
                                    pengasuhPhoto.style.visibility = 'visible';
                                    const img = pengasuhPhoto.querySelector('img');
                                    if (img) {
                                        img.style.transform = 'none';
                                    }
                                }
                            });
                        </script>
                        @php
                            $baseUrl = request()->getSchemeAndHttpHost();
                            $photoPath = public_path('img/team/abah-yai.jpg');
                            $fallbackPath = public_path('img/team/abah-yai.png');
                            $defaultPath = 'img/team/vl-team-inner-1.1.png';
                            
                            if (file_exists($photoPath)) {
                                $finalPath = 'img/team/abah-yai.jpg';
                            } elseif (file_exists($fallbackPath)) {
                                $finalPath = 'img/team/abah-yai.png';
                            } else {
                                $finalPath = $defaultPath;
                            }
                        @endphp
                        <img class="w-100 pengasuh-photo" src="{{ $baseUrl }}/{{ $finalPath }}" alt="Profil Pengasuh PP. Nurul Islam" onerror="this.onerror=null; this.src='{{ $baseUrl }}/img/team/vl-team-inner-1.1.png';">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6" style="padding-left: 1.875rem; padding-right: 0.9375rem;">
                    <div class="vl-about-content">
                        <div class="vl-section-title-1">
                            <h5 class="subtitle" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">Profil Pengasuh</h5>
                            <h2 class="title text-anime-style-3" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">Dr. KH. Ahmad Siddiq, S.E., M.M.</h2>
                            <p class="pb-20" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300" style="font-size: clamp(0.875rem, 1.8vw, 1.125rem); color: var(--ztc-text-text-4); font-weight: 600;">
                                Pengasuh Pondok Pesantren Nurul Islam
                            </p>
                            <p class="pb-32" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                                Dr. KH. Ahmad Siddiq, S.E., M.M. adalah pengasuh Pondok Pesantren Nurul Islam yang memiliki dedikasi tinggi dalam mendidik generasi muda dengan nilai-nilai Islam yang rahmatan lil alamin. Dengan latar belakang pendidikan pesantren yang kuat dan pengalaman bertahun-tahun, beliau berperan penting dalam membimbing dan mengarahkan santri-santri untuk menjadi generasi yang unggul, berakhlak mulia, dan bermanfaat bagi umat.
                            </p>
                        </div>
                        <div class="vl-about-grid">
                            <!-- single icon box -->
                            <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-graduation-cap" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h3 class="title">Pendidikan & Pengalaman</h3>
                                    <p>23 tahun menuntut i  lmu di pesantren dan S1 Manajemen di Universitas Islam Sunan Giri Surabaya</p>
                                </div>
                            </div>
                            <!-- single icon box -->
                            <div class="vl-about-icon-box mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="500">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-heart" style="font-size: clamp(2rem, 4vw, 2.5rem); color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h3 class="title">Dedikasi & Komitmen</h3>
                                    <p>Dengan dedikasi tinggi, beliau senantiasa berkomitmen untuk membimbing santri-santri menjadi generasi yang berakhlak mulia dan bermanfaat bagi masyarakat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area mt-4" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
                            <a href="{{ route('pages.display', 'profil-pengasuh') }}" class="header-btn1">Selengkapnya <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== PROFIL PENGASUH AREA ENDS =======-->

    <!--===== KETERANGAN & VIDEO PROFIL AREA STARTS =======-->
    <section class="vl-about-section sp2" style="background-color: #01715d; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: -3.125rem; right: -3.125rem; width: clamp(15vw, 25vw, 18.75rem); height: clamp(15vw, 25vw, 18.75rem); background: rgba(255, 255, 255, 0.05); border-radius: 50%; z-index: 0;"></div>
        <div style="position: absolute; bottom: -6.25rem; left: -6.25rem; width: clamp(20vw, 30vw, 25rem); height: clamp(20vw, 30vw, 25rem); background: rgba(255, 255, 255, 0.02); border-radius: 50%; z-index: 0;"></div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <!-- Section Header -->
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #FBD459; font-weight: 600; letter-spacing: 0.125rem; margin-bottom: 0.9375rem; background: rgba(251, 212, 89, 0.15); padding: clamp(0.75rem, 1.5vw, 0.9375rem) clamp(1.5rem, 3vw, 2rem); border-radius: clamp(2rem, 4vw, 3.125rem); display: inline-block; backdrop-filter: blur(0.625rem); border: 0.125rem solid rgba(251, 212, 89, 0.3);">
                    <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt="" style="filter: brightness(0) saturate(100%) invert(70%) sepia(91%) saturate(1568%) hue-rotate(2deg) brightness(105%) contrast(101%); margin-right: 0.5rem;"></span> Tentang Kami
                </h5>
                <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="color: #ffffff; font-size: clamp(1.75rem, 4vw, 2.625rem); font-weight: 700; text-shadow: 0 0.125rem 0.625rem rgba(0,0,0,0.3); margin-bottom: 1.25rem;">Pondok Pesantren Nurul Islam</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto; color: rgba(255, 255, 255, 0.95); font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8;">
                    Lembaga pendidikan Islam yang berkomitmen untuk mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin
                </p>
            </div>

            <!-- Video Profil Section -->
            <div class="row mb-60">
                <div class="col-lg-10 mx-auto">
                    <div class="video-profile-wrapper" id="video-profile-section" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: clamp(0.9375rem, 2vw, 1rem); box-shadow: 0 1.25rem 3.75rem rgba(0,0,0,0.15); background: #000; transition: all 0.3s ease;">
                        <div id="youtube-player-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;"></div>
                        <!-- Play Button Overlay (optional) -->
                        <div class="video-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%); z-index: 1; pointer-events: none; border-radius: clamp(0.9375rem, 2vw, 1rem);"></div>
                    </div>
                    <div class="text-center mt-4">
                        <h4 style="color: #ffffff; font-weight: 700; font-size: clamp(1.125rem, 2.5vw, 1.5rem); margin-bottom: 0.5rem;">Video Profil Pesantren</h4>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: clamp(0.875rem, 1.6vw, 1rem);">Kenali lebih dekat tentang Pondok Pesantren Nurul Islam</p>
                    </div>
                </div>
            </div>

            <!-- Keterangan Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Keterangan Utama -->
                        <div class="col-lg-6 mb-30">
                            <div class="keterangan-content" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" style="background: #fff; padding: clamp(2rem, 4vw, 2.5rem); border-radius: clamp(0.9375rem, 2vw, 1rem); box-shadow: 0 0.625rem 1.875rem rgba(0,0,0,0.08); height: 100%;">
                                <h3 style="color: var(--ztc-text-text-3); font-weight: 700; font-size: clamp(1.25rem, 3vw, 1.75rem); margin-bottom: 1.25rem; line-height: 1.3;">
                                    Visi & Misi Kami
                                </h3>
                                <p style="color: var(--ztc-text-text-2); font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; margin-bottom: 1.25rem;">
                                    Pondok Pesantren Nurul Islam (Nuris) Mojokerto adalah lembaga pendidikan Islam yang berkomitmen untuk mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin. Kami menyelenggarakan pendidikan terpadu yang mengintegrasikan ilmu agama dan ilmu umum untuk membentuk santri yang berakhlak mulia, berprestasi, dan bermanfaat bagi masyarakat.
                                </p>
                                <p style="color: var(--ztc-text-text-2); font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8;">
                                    Dengan berbagai program unggulan dan fasilitas yang memadai, kami berusaha memberikan pendidikan terbaik untuk mengembangkan potensi santri dalam berbagai bidang, baik akademik, keagamaan, maupun keterampilan hidup.
                                </p>
                            </div>
                        </div>

                        <!-- Program Unggulan Cards -->
                        <div class="col-lg-6 mb-30">
                            <div class="program-cards" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                                <!-- Card 1 -->
                                <div class="program-card mb-20" style="background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%); padding: clamp(1.5rem, 3vw, 1.875rem); border-radius: clamp(0.9375rem, 2vw, 1rem); box-shadow: 0 0.625rem 1.875rem rgba(26, 188, 156, 0.2); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-0.3125rem)'; this.style.boxShadow='0 0.9375rem 2.5rem rgba(26, 188, 156, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.625rem 1.875rem rgba(26, 188, 156, 0.2)';">
                                    <div style="display: flex; align-items: flex-start;">
                                        <div style="background: rgba(255,255,255,0.2); width: clamp(3.5rem, 5vw, 4.375rem); height: clamp(3.5rem, 5vw, 4.375rem); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-right: 1.25rem; flex-shrink: 0;">
                                            <i class="fa-solid fa-mosque" style="font-size: clamp(1.75rem, 3.5vw, 2rem); color: #fff;"></i>
                                        </div>
                                        <div style="flex: 1;">
                                            <h4 style="color: #fff; font-weight: 700; font-size: clamp(1.125rem, 2.3vw, 1.375rem); margin-bottom: 0.5rem;">Pendidikan Agama</h4>
                                            <p style="color: rgba(255,255,255,0.9); font-size: clamp(0.8125rem, 1.6vw, 0.9375rem); line-height: 1.6; margin: 0;">
                                                Pembelajaran Al-Qur'an, Hadits, Fiqih, dan ilmu-ilmu keislaman lainnya dengan metode yang modern dan efektif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="program-card mb-20" style="background: linear-gradient(135deg, #FBD459 0%, #F39C12 100%); padding: clamp(1.5rem, 3vw, 1.875rem); border-radius: clamp(0.9375rem, 2vw, 1rem); box-shadow: 0 0.625rem 1.875rem rgba(251, 212, 89, 0.2); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-0.3125rem)'; this.style.boxShadow='0 0.9375rem 2.5rem rgba(251, 212, 89, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.625rem 1.875rem rgba(251, 212, 89, 0.2)';">
                                    <div style="display: flex; align-items: flex-start;">
                                        <div style="background: rgba(255,255,255,0.2); width: clamp(3.5rem, 5vw, 4.375rem); height: clamp(3.5rem, 5vw, 4.375rem); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-right: 1.25rem; flex-shrink: 0;">
                                            <i class="fa-solid fa-book" style="font-size: clamp(1.75rem, 3.5vw, 2rem); color: #fff;"></i>
                                        </div>
                                        <div style="flex: 1;">
                                            <h4 style="color: #fff; font-weight: 700; font-size: clamp(1.125rem, 2.3vw, 1.375rem); margin-bottom: 0.5rem;">Pendidikan Umum</h4>
                                            <p style="color: rgba(255,255,255,0.9); font-size: clamp(0.8125rem, 1.6vw, 0.9375rem); line-height: 1.6; margin: 0;">
                                                Kurikulum terpadu yang mengintegrasikan ilmu agama dan ilmu umum untuk membentuk generasi yang berprestasi
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="program-card" style="background: linear-gradient(135deg, #3498DB 0%, #2980B9 100%); padding: clamp(1.5rem, 3vw, 1.875rem); border-radius: clamp(0.9375rem, 2vw, 1rem); box-shadow: 0 0.625rem 1.875rem rgba(52, 152, 219, 0.2); transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-0.3125rem)'; this.style.boxShadow='0 0.9375rem 2.5rem rgba(52, 152, 219, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.625rem 1.875rem rgba(52, 152, 219, 0.2)';">
                                    <div style="display: flex; align-items: flex-start;">
                                        <div style="background: rgba(255,255,255,0.2); width: clamp(3.5rem, 5vw, 4.375rem); height: clamp(3.5rem, 5vw, 4.375rem); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; margin-right: 1.25rem; flex-shrink: 0;">
                                            <i class="fa-solid fa-users" style="font-size: clamp(1.75rem, 3.5vw, 2rem); color: #fff;"></i>
                                        </div>
                                        <div style="flex: 1;">
                                            <h4 style="color: #fff; font-weight: 700; font-size: clamp(1.125rem, 2.3vw, 1.375rem); margin-bottom: 0.5rem;">Pengembangan Karakter</h4>
                                            <p style="color: rgba(255,255,255,0.9); font-size: clamp(0.8125rem, 1.6vw, 0.9375rem); line-height: 1.6; margin: 0;">
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
    <section class="vl-team-bg-1 sp1" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e22ce 100%); padding: clamp(5rem, 8vw, 6.25rem) 0; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: -6.25rem; right: -6.25rem; width: clamp(20vw, 30vw, 25rem); height: clamp(20vw, 30vw, 25rem); background: rgba(255,255,255,0.05); border-radius: 50%; z-index: 0;"></div>
        <div style="position: absolute; bottom: -9.375rem; left: -9.375rem; width: clamp(25vw, 35vw, 31.25rem); height: clamp(25vw, 35vw, 31.25rem); background: rgba(255,255,255,0.03); border-radius: 50%; z-index: 0;"></div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <div class="vl-team-section-title mb-60 text-center">
                <div class="vl-section-title-1">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #ffffff; font-weight: 700; letter-spacing: 0.125rem; margin-bottom: 0.9375rem; text-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.3); background: rgba(255,255,255,0.15); padding: 0.75rem 1.5rem; border-radius: clamp(2rem, 4vw, 3.125rem); display: inline-block; backdrop-filter: blur(0.625rem);">
                        <i class="fa-solid fa-sitemap" style="margin-right: 0.5rem;"></i>Struktur Organisasi
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: clamp(1.75rem, 4vw, 2.625rem); font-weight: 700; color: white; margin-bottom: 1.25rem; text-shadow: 0 0.125rem 0.625rem rgba(0,0,0,0.1);">
                        Pengurus Yayasan PP. Nurul Islam
                    </h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 90%; margin: 0 auto; font-size: clamp(0.875rem, 1.6vw, 1rem); color: rgba(255,255,255,0.9); line-height: 1.8;">
                        Pengurus Yayasan adalah badan yang bertanggung jawab atas pengelolaan dan pengembangan Pondok Pesantren Nurul Islam secara keseluruhan. Tahun Akademik 2025-2026.
                    </p>
                </div>
            </div>
            <div class="row">
                <div id="team1" class="owl-carousel owl-theme">
                    @forelse($pengurusYayasan as $pengurus)
                    <div class="vl-team-parent" style="background: white; border-radius: clamp(1rem, 2vw, 1.25rem); overflow: hidden; box-shadow: 0 0.625rem 2.5rem rgba(0,0,0,0.2); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.transform='translateY(-0.625rem)'; this.style.boxShadow='0 1.25rem 3.75rem rgba(0,0,0,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.625rem 2.5rem rgba(0,0,0,0.2)'">
                        <div class="vl-team-thumb" style="position: relative; overflow: hidden; height: clamp(15rem, 25vw, 18.75rem);">
                            <img class="w-100" src="{{ $pengurus->foto ? asset('storage/' . $pengurus->foto) : asset('img/team/vl-team-inner-1.1.png') }}" alt="{{ $pengurus->nama }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, transparent 0%, rgba(102, 126, 234, 0.1) 100%);"></div>
                        </div>
                        <div class="vl-team-content text-center" style="padding: clamp(1.5rem, 3vw, 1.875rem) 1.25rem; background: white;">
                            <a href="{{ route('pages.display', 'pengurus-yayasan') }}" class="title" style="color: #2c3e50; text-decoration: none; font-size: clamp(1rem, 2vw, 1.25rem); font-weight: 700; line-height: 1.4; margin-bottom: 0.5rem; display: block; transition: color 0.3s;" onmouseover="this.style.color='#667eea'" onmouseout="this.style.color='#2c3e50'">
                                {{ $pengurus->nama }}
                            </a>
                            <span style="color: #6c757d; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); font-weight: 500; display: block;">
                                {{ $pengurus->jabatan_lengkap ?? $pengurus->jabatan }}
                            </span>
                        </div>
                    </div>
                    @empty
                    <div class="vl-team-parent" style="background: white; border-radius: clamp(1rem, 2vw, 1.25rem); overflow: hidden; box-shadow: 0 0.625rem 2.5rem rgba(0,0,0,0.2);">
                        <div class="vl-team-thumb" style="position: relative; overflow: hidden; height: clamp(15rem, 25vw, 18.75rem);">
                            <img class="w-100" src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="Pengurus Yayasan" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="vl-team-content text-center" style="padding: clamp(1.5rem, 3vw, 1.875rem) 1.25rem; background: white;">
                            <a href="{{ route('pages.display', 'pengurus-yayasan') }}" class="title" style="color: #2c3e50; text-decoration: none; font-size: clamp(1rem, 2vw, 1.25rem); font-weight: 700; line-height: 1.4; margin-bottom: 0.5rem; display: block;">
                                Belum ada data
                            </a>
                            <span style="color: #6c757d; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); font-weight: 500; display: block;">
                                Pengurus Yayasan
                            </span>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="text-center" style="margin-top: clamp(4rem, 6vw, 5rem); margin-bottom: 1.25rem;">
                <a href="{{ route('pages.display', 'pengurus-yayasan') }}" class="header-btn1" style="display: inline-flex; align-items: center; gap: 0.75rem; background: white; color: #1e3c72; padding: clamp(1rem, 2vw, 1.125rem) clamp(2rem, 4vw, 2.5rem); border-radius: clamp(2rem, 4vw, 3.125rem); text-decoration: none; font-weight: 700; font-size: clamp(0.875rem, 1.6vw, 1rem); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 0.5rem 1.875rem rgba(255,255,255,0.3); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-0.1875rem)'; this.style.boxShadow='0 0.75rem 2.5rem rgba(255,255,255,0.4)'; this.style.background='#1e3c72'; this.style.color='white';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.5rem 1.875rem rgba(255,255,255,0.3)'; this.style.background='white'; this.style.color='#1e3c72';">
                    <span style="position: relative; z-index: 1;">Lihat Semua Pengurus</span>
                    <i class="fa-solid fa-arrow-right" style="font-size: clamp(0.8125rem, 1.5vw, 0.875rem); position: relative; z-index: 1; transition: transform 0.3s;"></i>
                    <span style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transition: left 0.5s;"></span>
                </a>
            </div>
        </div>
    </section>
    <!--===== PENGURUS YAYASAN AREA ENDS =======-->

    <!--===== STATISTIK PESANTREN AREA STARTS =======-->
    <section class="vl-about-section sp2 stats-section" style="background: linear-gradient(135deg, #01715d 0%, #014d3f 100%); padding: clamp(5rem, 8vw, 6.25rem) 0; position: relative; overflow: hidden;">
        <!-- Background Overlay -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('{{ asset('img/banner/nuris-hero-bg.jpg') }}') center center; background-size: cover; opacity: 0.2; z-index: 0;"></div>
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(1, 113, 93, 0.95) 0%, rgba(1, 77, 63, 0.95) 100%); z-index: 1;"></div>
        
        <!-- Background Decoration -->
        <div style="position: absolute; top: -6.25rem; right: -6.25rem; width: clamp(20vw, 30vw, 25rem); height: clamp(20vw, 30vw, 25rem); background: rgba(251, 212, 89, 0.1); border-radius: 50%; z-index: 2;"></div>
        <div style="position: absolute; bottom: -9.375rem; left: -9.375rem; width: clamp(25vw, 35vw, 31.25rem); height: clamp(25vw, 35vw, 31.25rem); background: rgba(251, 212, 89, 0.08); border-radius: 50%; z-index: 2;"></div>
        
        <div class="container" style="position: relative; z-index: 3;">
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #FBD459; font-weight: 600; letter-spacing: 0.125rem; margin-bottom: 0.9375rem; background: rgba(251, 212, 89, 0.15); padding: clamp(0.75rem, 1.5vw, 0.9375rem) clamp(1.5rem, 3vw, 2rem); border-radius: clamp(2rem, 4vw, 3.125rem); display: inline-block; backdrop-filter: blur(0.625rem); border: 0.125rem solid rgba(251, 212, 89, 0.3);">
                    <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt="" style="filter: brightness(0) saturate(100%) invert(70%) sepia(91%) saturate(1568%) hue-rotate(2deg) brightness(105%) contrast(101%); margin-right: 0.5rem;"></span> Statistik Pesantren
                </h5>
                <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="color: #ffffff; font-size: clamp(1.75rem, 4vw, 2.625rem); font-weight: 700; text-shadow: 0 0.125rem 0.625rem rgba(0,0,0,0.3); margin-bottom: 1.25rem;">
                    Data Statistik PP. Nurul Islam
                </h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" style="max-width: 90%; margin: 0 auto; color: rgba(255, 255, 255, 0.95); font-size: clamp(0.875rem, 1.6vw, 1rem); line-height: 1.8; margin-top: clamp(0.75rem, 1.5vw, 1rem);">
                    Perkembangan dan pencapaian Pondok Pesantren Nurul Islam dalam membina generasi unggul
                </p>
            </div>
            
            <div class="row">
                @php
                    $statistics = [
                        [
                            'number' => 9492,
                            'label' => 'Jumlah Santri',
                            'icon' => 'fa-user-graduate',
                            'suffix' => '',
                            'delay' => 300
                        ],
                        [
                            'number' => 975,
                            'label' => 'Pendidik dan Tenaga Kependidikan',
                            'icon' => 'fa-chalkboard-user',
                            'suffix' => '',
                            'delay' => 400
                        ],
                        [
                            'number' => 258,
                            'label' => 'Jumlah Pegawai',
                            'icon' => 'fa-users',
                            'suffix' => '',
                            'delay' => 500
                        ],
                        [
                            'number' => 3,
                            'label' => 'Unit Khidmah',
                            'icon' => 'fa-building',
                            'suffix' => '',
                            'delay' => 600
                        ],
                    ];
                @endphp
                
                @foreach($statistics as $stat)
                <div class="col-lg-3 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $stat['delay'] }}">
                    <div class="statistic-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(0.625rem); border: 0.125rem solid rgba(255, 255, 255, 0.2); border-radius: clamp(1rem, 2vw, 1.25rem); padding: clamp(2rem, 4vw, 3rem); text-align: center; height: 100%; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden;" onmouseover="this.style.background='rgba(255, 255, 255, 0.15)'; this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 clamp(0.625rem, 2vw, 1.25rem) clamp(1.875rem, 4vw, 3.75rem) rgba(0, 0, 0, 0.3)'; this.style.borderColor='rgba(251, 212, 89, 0.5)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(255, 255, 255, 0.2)';">
                        <!-- Decorative circle -->
                        <div style="position: absolute; top: -2rem; right: -2rem; width: clamp(6rem, 12vw, 8rem); height: clamp(6rem, 12vw, 8rem); background: rgba(251, 212, 89, 0.1); border-radius: 50%; z-index: 0;"></div>
                        
                        <div style="position: relative; z-index: 1;">
                            <div style="margin-bottom: clamp(1.5rem, 3vw, 2rem);">
                                <div style="width: clamp(4rem, 8vw, 5rem); height: clamp(4rem, 8vw, 5rem); background: rgba(251, 212, 89, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; border: 0.1875rem solid rgba(251, 212, 89, 0.3);">
                                    <i class="fa-solid {{ $stat['icon'] }}" style="color: #FBD459; font-size: clamp(1.75rem, 3.5vw, 2.25rem);"></i>
                                </div>
                            </div>
                            
                            <div class="statistic-number" style="margin-bottom: clamp(1rem, 2vw, 1.25rem);">
                                <span class="counter-value" data-target="{{ $stat['number'] }}" style="color: #ffffff; font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 700; line-height: 1.2; text-shadow: 0 0.125rem 0.625rem rgba(0,0,0,0.2); display: block;">0</span>
                            </div>
                            
                            <div class="statistic-label" style="margin-top: clamp(0.75rem, 1.5vw, 1rem);">
                                <h4 style="color: rgba(255, 255, 255, 0.95); font-size: clamp(0.9375rem, 1.8vw, 1.125rem); font-weight: 600; line-height: 1.4; margin: 0; text-shadow: 0 0.0625rem 0.3125rem rgba(0,0,0,0.2);">
                                    {{ $stat['label'] }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--===== STATISTIK PESANTREN AREA ENDS =======-->

    <!--===== BERITA TERBARU AREA STARTS =======-->
    @if(isset($latestArticles) && $latestArticles->count() > 0)
    <section class="vl-blg sp2" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%); padding: clamp(4rem, 6vw, 5rem) 0;">
        <div class="container">
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #28a745; font-weight: 600; letter-spacing: 0.0625rem; margin-bottom: 0.9375rem;">
                    <i class="fa-solid fa-newspaper" style="margin-right: 0.5rem;"></i>Informasi Terkini
                </h5>
                <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: clamp(1.75rem, 4vw, 2.625rem); font-weight: 700; color: #2c3e50; margin-bottom: 1.25rem;">Berita & Artikel Terbaru</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 90%; margin: 0 auto; font-size: clamp(0.875rem, 1.6vw, 1rem); color: #6c757d; line-height: 1.8;">
                    Dapatkan informasi terkini seputar kegiatan, program, dan perkembangan Pondok Pesantren Nurul Islam melalui berita dan artikel terbaru.
                </p>
            </div>
            <div class="row">
                @foreach($latestArticles as $article)
                <div class="col-lg-4 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="vl-blog-card" style="background: white; border-radius: clamp(0.9375rem, 2vw, 1rem); overflow: hidden; box-shadow: 0 0.25rem 1.25rem rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 0.75rem 2.5rem rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.25rem 1.25rem rgba(0,0,0,0.08)'">
                        <div class="vl-blog-thumb" style="position: relative; overflow: hidden; height: clamp(12.5rem, 20vw, 15.625rem); background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <a href="{{ route('articles.show', $article->slug) }}" style="display: block; width: 100%; height: 100%; position: relative;">
                                @if($article->featured_image)
                                    <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                @else
                                    <img src="{{ asset('img/blog/vl-blog-1.1.png') }}" alt="{{ $article->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                @endif
                                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                            </a>
                        </div>
                        <div class="vl-blog-content" style="padding: clamp(1.5rem, 3vw, 1.875rem); flex: 1; display: flex; flex-direction: column;">
                            <div class="vl-blog-meta" style="display: flex; flex-wrap: wrap; gap: 0.9375rem; margin-bottom: 0.9375rem; padding-bottom: 0.9375rem; border-bottom: 1px solid #f0f0f0;">
                                <span style="display: inline-flex; align-items: center; gap: 0.375rem; color: #6c757d; font-size: clamp(0.75rem, 1.4vw, 0.8125rem);">
                                    <i class="fa-solid fa-calendar" style="color: #28a745; font-size: clamp(0.6875rem, 1.2vw, 0.75rem);"></i>
                                    <strong style="font-weight: 600;">{{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}</strong>
                                </span>
                                @if($article->author)
                                <span style="display: inline-flex; align-items: center; gap: 0.375rem; color: #6c757d; font-size: clamp(0.75rem, 1.4vw, 0.8125rem);">
                                    <i class="fa-solid fa-user" style="color: #007bff; font-size: clamp(0.6875rem, 1.2vw, 0.75rem);"></i>
                                    <strong style="font-weight: 600;">{{ $article->author }}</strong>
                                </span>
                                @endif
                            </div>
                            <h3 class="vl-blog-title" style="margin-bottom: 0.9375rem; flex: 1;">
                                <a href="{{ route('articles.show', $article->slug) }}" style="color: #2c3e50; text-decoration: none; font-size: clamp(1rem, 2vw, 1.25rem); font-weight: 700; line-height: 1.4; transition: color 0.3s; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" onmouseover="this.style.color='#28a745'" onmouseout="this.style.color='#2c3e50'">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            @if($article->excerpt)
                            <p style="color: #6c757d; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); line-height: 1.7; margin-bottom: 1.25rem; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex: 1;">
                                {{ Str::limit($article->excerpt, 150) }}
                            </p>
                            @else
                            <p style="color: #6c757d; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); line-height: 1.7; margin-bottom: 1.25rem; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex: 1;">
                                {{ Str::limit(strip_tags($article->content), 150) }}
                            </p>
                            @endif
                            <div class="vl-blog-btn" style="margin-top: auto;">
                                <a href="{{ route('articles.show', $article->slug) }}" class="header-btn1" style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); transition: all 0.3s; box-shadow: 0 0.25rem 0.9375rem rgba(40, 167, 69, 0.3);" onmouseover="this.style.transform='translateX(0.3125rem)'; this.style.boxShadow='0 0.375rem 1.25rem rgba(40, 167, 69, 0.4)'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 0.25rem 0.9375rem rgba(40, 167, 69, 0.3)'">
                                    Baca Selengkapnya <i class="fa-solid fa-arrow-right" style="font-size: clamp(0.6875rem, 1.2vw, 0.75rem);"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-50">
                <a href="{{ route('articles.index') }}" class="header-btn1" style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; padding: clamp(0.9375rem, 2vw, 1.125rem) clamp(1.5rem, 3vw, 1.875rem); border-radius: 0.5rem; text-decoration: none; font-weight: 600; font-size: clamp(0.875rem, 1.6vw, 1rem); transition: all 0.3s; box-shadow: 0 0.25rem 0.9375rem rgba(40, 167, 69, 0.3);" onmouseover="this.style.transform='translateY(-0.125rem)'; this.style.boxShadow='0 0.375rem 1.25rem rgba(40, 167, 69, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.25rem 0.9375rem rgba(40, 167, 69, 0.3)'">
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
    <section class="vl-blg sp2" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: clamp(4rem, 6vw, 5rem) 0; position: relative; overflow: hidden;">
        <!-- Background Pattern -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: rgba(255,255,255,0.9); font-weight: 600; letter-spacing: 0.0625rem; margin-bottom: 0.9375rem;">
                    <i class="fa-solid fa-calendar-check" style="margin-right: 0.5rem;"></i>Event & Kegiatan
                </h5>
                <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: clamp(1.75rem, 4vw, 2.625rem); font-weight: 700; color: white; margin-bottom: 1.25rem;">Kegiatan Terbaru</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 90%; margin: 0 auto; font-size: clamp(0.875rem, 1.6vw, 1rem); color: rgba(255,255,255,0.9); line-height: 1.8;">
                    Ikuti berbagai kegiatan dan event menarik yang diselenggarakan oleh Pondok Pesantren Nurul Islam.
                </p>
            </div>
            <div class="row">
                @foreach($latestEvents as $event)
                <div class="col-lg-4 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="vl-event-card" style="background: white; border-radius: clamp(0.9375rem, 2vw, 1rem); overflow: hidden; box-shadow: 0 0.5rem 1.875rem rgba(0,0,0,0.2); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-0.5rem)'; this.style.boxShadow='0 0.9375rem 3.125rem rgba(0,0,0,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.5rem 1.875rem rgba(0,0,0,0.2)'">
                        @if($event->featured_image)
                        <div class="vl-event-thumb" style="position: relative; overflow: hidden; height: clamp(11rem, 18vw, 13.75rem);">
                            <img src="{{ asset('storage/' . $event->featured_image) }}" alt="{{ $event->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <div style="position: absolute; top: 0.9375rem; left: 0.9375rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: 700; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); box-shadow: 0 0.25rem 0.9375rem rgba(0,0,0,0.2);">
                                <i class="fa-solid fa-calendar" style="margin-right: 0.3125rem;"></i>{{ $event->event_date->format('d M Y') }}
                            </div>
                            @if($event->isUpcoming())
                            <div style="position: absolute; top: 0.9375rem; right: 0.9375rem; background: #28a745; color: white; padding: 0.375rem 0.75rem; border-radius: clamp(1rem, 2vw, 1.25rem); font-size: clamp(0.625rem, 1vw, 0.6875rem); font-weight: 600; text-transform: uppercase;">
                                Upcoming
                            </div>
                            @endif
                        </div>
                        @else
                        <div class="vl-event-thumb" style="position: relative; overflow: hidden; height: clamp(11rem, 18vw, 13.75rem); background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-calendar-days" style="font-size: clamp(3rem, 6vw, 3.75rem); color: rgba(255,255,255,0.3);"></i>
                            <div style="position: absolute; top: 0.9375rem; left: 0.9375rem; background: rgba(255,255,255,0.95); color: #667eea; padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: 700; font-size: clamp(0.8125rem, 1.5vw, 0.875rem);">
                                <i class="fa-solid fa-calendar" style="margin-right: 0.3125rem;"></i>{{ $event->event_date->format('d M Y') }}
                            </div>
                            @if($event->isUpcoming())
                            <div style="position: absolute; top: 0.9375rem; right: 0.9375rem; background: #28a745; color: white; padding: 0.375rem 0.75rem; border-radius: clamp(1rem, 2vw, 1.25rem); font-size: clamp(0.625rem, 1vw, 0.6875rem); font-weight: 600; text-transform: uppercase;">
                                Upcoming
                            </div>
                            @endif
                        </div>
                        @endif
                        <div class="vl-event-content" style="padding: clamp(1.5rem, 3vw, 1.875rem); flex: 1; display: flex; flex-direction: column;">
                            <h3 class="vl-event-title" style="margin-bottom: 0.9375rem; flex: 1;">
                                <a href="#" style="color: #2c3e50; text-decoration: none; font-size: clamp(1.125rem, 2.3vw, 1.375rem); font-weight: 700; line-height: 1.4; transition: color 0.3s; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" onmouseover="this.style.color='#667eea'" onmouseout="this.style.color='#2c3e50'">
                                    {{ $event->title }}
                                </a>
                            </h3>
                            @if($event->description)
                            <p style="color: #6c757d; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); line-height: 1.7; margin-bottom: 1.25rem; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex: 1;">
                                {{ Str::limit($event->description, 120) }}
                            </p>
                            @endif
                            <div style="display: flex; flex-wrap: wrap; gap: 0.625rem; margin-bottom: 1.25rem; padding-top: 0.9375rem; border-top: 1px solid #f0f0f0;">
                                @if($event->location)
                                <span style="display: inline-flex; align-items: center; gap: 0.375rem; color: #6c757d; font-size: clamp(0.75rem, 1.4vw, 0.8125rem);">
                                    <i class="fa-solid fa-location-dot" style="color: #dc3545;"></i>
                                    <strong>{{ Str::limit($event->location, 25) }}</strong>
                                </span>
                                @endif
                                @if($event->organizer)
                                <span style="display: inline-flex; align-items: center; gap: 0.375rem; color: #6c757d; font-size: clamp(0.75rem, 1.4vw, 0.8125rem);">
                                    <i class="fa-solid fa-user-group" style="color: #007bff;"></i>
                                    <strong>{{ Str::limit($event->organizer, 25) }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="vl-event-btn" style="margin-top: auto;">
                                <a href="#" class="header-btn1" style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; font-size: clamp(0.8125rem, 1.5vw, 0.875rem); transition: all 0.3s; box-shadow: 0 0.25rem 0.9375rem rgba(102, 126, 234, 0.3); width: 100%; justify-content: center;" onmouseover="this.style.transform='translateY(-0.125rem)'; this.style.boxShadow='0 0.375rem 1.25rem rgba(102, 126, 234, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.25rem 0.9375rem rgba(102, 126, 234, 0.3)'">
                                    Detail Event <i class="fa-solid fa-arrow-right" style="font-size: clamp(0.6875rem, 1.2vw, 0.75rem);"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if($latestEvents->count() > 0)
            <div class="text-center mt-50">
                <a href="#" class="header-btn1" style="display: inline-flex; align-items: center; gap: 0.5rem; background: white; color: #667eea; padding: clamp(0.9375rem, 2vw, 1.125rem) clamp(1.5rem, 3vw, 1.875rem); border-radius: 0.5rem; text-decoration: none; font-weight: 600; font-size: clamp(0.875rem, 1.6vw, 1rem); transition: all 0.3s; box-shadow: 0 0.25rem 0.9375rem rgba(255,255,255,0.3);" onmouseover="this.style.transform='translateY(-0.125rem)'; this.style.boxShadow='0 0.375rem 1.25rem rgba(255,255,255,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0.25rem 0.9375rem rgba(255,255,255,0.3)'">
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
        height: clamp(50vh, 56.25vw, 67.5rem);
        min-height: clamp(31.25rem, 50vh, 37.5rem);
        overflow: hidden;
    }
    
    .slider-active-1 {
        height: clamp(50vh, 56.25vw, 67.5rem);
        min-height: clamp(31.25rem, 50vh, 37.5rem);
    }
    
    .vl-hero-slider {
        height: clamp(50vh, 56.25vw, 67.5rem) !important;
        min-height: clamp(31.25rem, 50vh, 37.5rem) !important;
        max-height: 67.5rem !important;
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
        min-height: 67.5rem;
        min-width: 120vw; /* 16:9 aspect ratio */
        pointer-events: none;
    }
    
    /* Responsive untuk mobile dan tablet */
    @media (max-width: 1920px) {
        .vl-banner {
            height: 56.25vw; /* 16:9 aspect ratio */
            min-height: clamp(31.25rem, 50vh, 37.5rem);
        }
        
        .slider-active-1 {
            height: 56.25vw;
            min-height: clamp(31.25rem, 50vh, 37.5rem);
        }
        
        .vl-hero-slider {
            height: 56.25vw !important;
            min-height: clamp(31.25rem, 50vh, 37.5rem) !important;
            max-height: 67.5rem !important;
        }
        
        .hero-youtube-bg iframe {
            min-height: 56.25vw;
        }
    }
    
    @media (max-width: 768px) {
        .vl-banner {
            height: 60vh;
            min-height: clamp(25rem, 50vh, 31.25rem);
        }
        
        .slider-active-1 {
            height: 60vh;
            min-height: clamp(25rem, 50vh, 31.25rem);
        }
        
        .vl-hero-slider {
            height: 60vh !important;
            min-height: clamp(25rem, 50vh, 31.25rem) !important;
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to format number with thousand separators
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Counter animation function
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16); // 60fps
            const counterElement = element;
            
            const timer = setInterval(function() {
                start += increment;
                if (start >= target) {
                    counterElement.textContent = formatNumber(target);
                    clearInterval(timer);
                } else {
                    counterElement.textContent = formatNumber(Math.floor(start));
                }
            }, 16);
        }

        // Intersection Observer for counter animation
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px'
        };

        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counterElements = entry.target.querySelectorAll('.counter-value');
                    counterElements.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        if (!counter.hasAttribute('data-animated')) {
                            counter.setAttribute('data-animated', 'true');
                            animateCounter(counter, target, 2000);
                        }
                    });
                }
            });
        }, observerOptions);

        // Observe the statistics section
        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            counterObserver.observe(statsSection);
        }

        // Fallback: if IntersectionObserver is not supported, animate on load
        if (!window.IntersectionObserver) {
            setTimeout(function() {
                document.querySelectorAll('.counter-value').forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    animateCounter(counter, target, 2000);
                });
            }, 1000);
        }
    });
</script>
@endpush

@endsection
