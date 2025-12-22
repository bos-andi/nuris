@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">{{ $program->title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Program Unggulan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $program->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== HERO SECTION STARTS =======-->
@if($program->intro_text || $program->description || $program->image)
<section class="vl-about-section sp2" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        @if($program->subtitle)
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> {{ $program->subtitle }}
                        </h5>
                        @endif
                        <h2 class="title text-anime-style-3 mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" style="font-size: 42px; font-weight: 800; color: #1a1a1a;">{{ $program->title }}</h2>
                        @if($program->intro_text)
                        <div class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400" style="font-size: 18px; line-height: 1.8; color: #555;">
                            {!! nl2br(e($program->intro_text)) !!}
                        </div>
                        @endif
                        @if($program->description)
                        <div class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500" style="font-size: 16px; line-height: 1.8; color: #666;">
                            {!! nl2br(e($program->description)) !!}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    @if($program->image)
                        <img class="w-100" src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}" style="border-radius: 15px; width: 100%; height: auto; object-fit: cover; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                    @else
                        <img class="w-100" src="{{ asset('img/about/vl-about-1.1.png') }}" alt="{{ $program->title }}" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== HERO SECTION ENDS =======-->

<!--===== VIDEO SECTION STARTS =======-->
@if($program->video_id || $program->video_url)
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Video Dokumentasi
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video {{ $program->title }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="video-wrapper" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                    @php
                        $embedUrl = $program->embed_url;
                    @endphp
                    @if($embedUrl)
                        <iframe 
                            src="{{ $embedUrl }}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px;">
                        </iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== VIDEO SECTION ENDS =======-->

<!--===== PROGRAM DETAILS SECTION STARTS =======-->
@if($program->tujuan || $program->materi || $program->durasi || $program->sasaran || $program->benefit)
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Detail Program
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Informasi Program</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if($program->tujuan)
            <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div class="program-info-card" style="background: white; padding: 35px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="program-icon mb-20" style="width: 70px; height: 70px; background: linear-gradient(135deg, #01715d 0%, #00a085 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fa-solid fa-bullseye" style="font-size: 32px; color: white;"></i>
                    </div>
                    <h3 class="title mb-20" style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin-bottom: 15px;">Tujuan Program</h3>
                    <p style="font-size: 16px; line-height: 1.8; color: #666; margin: 0;">{!! nl2br(e($program->tujuan)) !!}</p>
                </div>
            </div>
            @endif

            @if($program->materi)
            <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="program-info-card" style="background: white; padding: 35px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="program-icon mb-20" style="width: 70px; height: 70px; background: linear-gradient(135deg, #01715d 0%, #00a085 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fa-solid fa-book-open" style="font-size: 32px; color: white;"></i>
                    </div>
                    <h3 class="title mb-20" style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin-bottom: 15px;">Materi Pembelajaran</h3>
                    <p style="font-size: 16px; line-height: 1.8; color: #666; margin: 0;">{!! nl2br(e($program->materi)) !!}</p>
                </div>
            </div>
            @endif

            @if($program->durasi || $program->sasaran)
            <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                <div class="program-info-card" style="background: white; padding: 35px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="program-icon mb-20" style="width: 70px; height: 70px; background: linear-gradient(135deg, #01715d 0%, #00a085 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fa-solid fa-clock" style="font-size: 32px; color: white;"></i>
                    </div>
                    <h3 class="title mb-20" style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin-bottom: 15px;">Informasi Program</h3>
                    @if($program->durasi)
                    <div class="mb-15">
                        <strong style="color: #01715d;">Durasi:</strong> <span style="color: #666;">{{ $program->durasi }}</span>
                    </div>
                    @endif
                    @if($program->sasaran)
                    <div>
                        <strong style="color: #01715d;">Sasaran Peserta:</strong> <span style="color: #666;">{{ $program->sasaran }}</span>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            @if($program->benefit)
            <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <div class="program-info-card" style="background: white; padding: 35px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="program-icon mb-20" style="width: 70px; height: 70px; background: linear-gradient(135deg, #01715d 0%, #00a085 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fa-solid fa-star" style="font-size: 32px; color: white;"></i>
                    </div>
                    <h3 class="title mb-20" style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin-bottom: 15px;">Manfaat Program</h3>
                    <p style="font-size: 16px; line-height: 1.8; color: #666; margin: 0;">{!! nl2br(e($program->benefit)) !!}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif
<!--===== PROGRAM DETAILS SECTION ENDS =======-->

<!--===== CONTENT SECTION STARTS =======-->
@if($program->content)
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="content-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="background: white; padding: 50px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08);">
                    <div class="vl-section-title-1 text-center mb-40">
                        <h2 class="title text-anime-style-3" style="font-size: 36px; font-weight: 800; color: #1a1a1a; margin-bottom: 30px;">Tentang Program</h2>
                    </div>
                    <div class="content-text" style="font-size: 18px; line-height: 1.9; color: #555; text-align: justify;">
                        {!! nl2br(e($program->content)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== CONTENT SECTION ENDS =======-->

<!--===== PENDAFTARAN SECTION STARTS =======-->
@if($program->pendaftaran_info || $program->contact_email || $program->contact_phone)
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Informasi Pendaftaran
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Daftar Sekarang</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="pendaftaran-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="background: linear-gradient(135deg, #01715d 0%, #00a085 100%); padding: 50px; border-radius: 20px; box-shadow: 0 15px 40px rgba(1,113,93,0.3); color: white; text-align: center;">
                    @if($program->pendaftaran_info)
                    <div class="mb-30" style="font-size: 18px; line-height: 1.8; margin-bottom: 30px;">
                        {!! nl2br(e($program->pendaftaran_info)) !!}
                    </div>
                    @endif
                    <div class="contact-buttons mt-30">
                        @if($program->contact_phone)
                        <a href="tel:{{ preg_replace('/[^0-9]/', '', $program->contact_phone) }}" class="header-btn1" style="display: inline-block; margin: 10px; background: white; color: #01715d; border: 2px solid white;" onmouseover="this.style.background='rgba(255,255,255,0.9)'; this.style.color='#01715d';" onmouseout="this.style.background='white'; this.style.color='#01715d';">
                            <i class="fa-solid fa-phone me-2"></i>{{ $program->contact_phone }}
                        </a>
                        @endif
                        @if($program->contact_email)
                        <a href="mailto:{{ $program->contact_email }}" class="header-btn1" style="display: inline-block; margin: 10px; background: white; color: #01715d; border: 2px solid white;" onmouseover="this.style.background='rgba(255,255,255,0.9)'; this.style.color='#01715d';" onmouseout="this.style.background='white'; this.style.color='#01715d';">
                            <i class="fa-solid fa-envelope me-2"></i>{{ $program->contact_email }}
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== PENDAFTARAN SECTION ENDS =======-->

@endsection

