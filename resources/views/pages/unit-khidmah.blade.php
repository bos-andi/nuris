@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">{{ $unit->title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Unit Khidmah</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $unit->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== INTRO AREA STARTS =======-->
@if($unit->intro_text || $unit->description)
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        @if($unit->subtitle)
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">{{ $unit->subtitle }}</h5>
                        @endif
                        <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">{{ $unit->title }}</h2>
                        @if($unit->intro_text)
                        <div class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            {!! nl2br(e($unit->intro_text)) !!}
                        </div>
                        @endif
                        @if($unit->description)
                        <div class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                            {!! nl2br(e($unit->description)) !!}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    @if($unit->image)
                        <img class="w-100" src="{{ asset('storage/' . $unit->image) }}" alt="{{ $unit->title }}" style="border-radius: 10px; width: 100%; height: auto; object-fit: cover;">
                    @else
                        <img class="w-100" src="{{ asset('img/about/vl-about-1.1.png') }}" alt="{{ $unit->title }}" style="border-radius: 10px;">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== INTRO AREA ENDS =======-->

<!--===== VIDEO SECTION STARTS =======-->
@if($unit->video_id || $unit->video_url)
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video Dokumentasi</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Video {{ $unit->title }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="video-wrapper" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <iframe 
                        src="https://www.youtube.com/embed/{{ $unit->video_id }}" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== VIDEO SECTION ENDS =======-->

<!--===== NARASI VIDEO SECTION STARTS =======-->
@if($unit->narasi)
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Transkrip Video</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Narasi Video</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="vl-about-content" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="narasi-content" style="background-color: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); line-height: 1.8; font-size: 16px; color: #333;">
                        <p style="margin-bottom: 20px;">
                            <strong>Narasi dari Video:</strong>
                        </p>
                        <div class="transcript-text" style="text-align: justify;">
                            {!! nl2br(e($unit->narasi)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== NARASI VIDEO SECTION ENDS =======-->

<!--===== VISI MISI AREA STARTS =======-->
@if($unit->visi || $unit->misi)
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="vl-about-content">
                    <div class="vl-section-title-1">
                        <h2 class="title text-anime-style-3 mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Visi & Misi {{ $unit->title }}</h2>
                        <div class="vl-about-grid">
                            @if($unit->visi)
                            <div class="vl-about-icon-box mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-eye" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Visi</h4>
                                    <p>{!! nl2br(e($unit->visi)) !!}</p>
                                </div>
                            </div>
                            @endif
                            @if($unit->misi)
                            <div class="vl-about-icon-box mb-30" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                                <div class="vl-about-icon">
                                    <span><i class="fa-solid fa-bullseye" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                </div>
                                <div class="vl-icon-content">
                                    <h4 class="title">Misi</h4>
                                    <p>{!! nl2br(e($unit->misi)) !!}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="vl-about-large-thumb reveal" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    @if($unit->image)
                        <img class="w-100" src="{{ asset('storage/' . $unit->image) }}" alt="Visi Misi {{ $unit->title }}" style="border-radius: 10px; width: 100%; height: auto; object-fit: cover;">
                    @else
                        <img class="w-100" src="{{ asset('img/about/vl-about-1.2.png') }}" alt="Visi Misi {{ $unit->title }}" style="border-radius: 10px;">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== VISI MISI AREA ENDS =======-->

<!--===== INFORMASI KONTAK AREA STARTS =======-->
@if($unit->contact_email || $unit->contact_phone || $unit->operational_hours || $unit->location)
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Informasi Kontak</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Hubungi {{ $unit->title }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="vl-about-icon-box text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <div class="vl-about-icon mb-30">
                        <span><i class="fa-solid fa-envelope" style="font-size: 60px; color: var(--ztc-text-text-4);"></i></span>
                    </div>
                    <div class="vl-icon-content">
                        <h3 class="title mb-20">Kontak {{ $unit->title }}</h3>
                        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px;">
                            Untuk informasi lebih lanjut tentang {{ $unit->title }}, silakan hubungi kami.
                        </p>
                        <div class="row">
                            @if($unit->operational_hours)
                            <div class="col-md-6 mb-20">
                                <div class="vl-about-icon-box">
                                    <div class="vl-about-icon mb-15">
                                        <span><i class="fa-solid fa-clock" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title">Jam Operasional</h4>
                                        <p>{!! nl2br(e($unit->operational_hours)) !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($unit->location)
                            <div class="col-md-6 mb-20">
                                <div class="vl-about-icon-box">
                                    <div class="vl-about-icon mb-15">
                                        <span><i class="fa-solid fa-location-dot" style="font-size: 30px; color: var(--ztc-text-text-4);"></i></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h4 class="title">Lokasi</h4>
                                        <p>{!! nl2br(e($unit->location)) !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="mt-30">
                            @if($unit->contact_phone)
                            <a href="tel:{{ preg_replace('/[^0-9]/', '', $unit->contact_phone) }}" class="header-btn1" style="display: inline-block; margin: 10px;">
                                <i class="fa-solid fa-phone"></i> Hubungi: {{ $unit->contact_phone }}
                            </a>
                            @endif
                            @if($unit->contact_email)
                            <a href="mailto:{{ $unit->contact_email }}" class="header-btn1" style="display: inline-block; margin: 10px;">
                                <i class="fa-solid fa-envelope"></i> Email: {{ $unit->contact_email }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--===== INFORMASI KONTAK AREA ENDS =======-->

@endsection

