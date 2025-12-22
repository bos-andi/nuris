@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Fasilitas</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== FASILITAS INTRO AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Fasilitas Lengkap</h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Fasilitas Pondok Pesantren Nurul Islam</h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto;">
                        PP. Nurul Islam dilengkapi dengan berbagai fasilitas modern dan lengkap yang dirancang untuk mendukung proses pembelajaran, pengembangan karakter, dan kesejahteraan santri. Semua fasilitas dikelola dengan baik dan selalu dirawat untuk memberikan kenyamanan maksimal bagi seluruh civitas akademika.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== FASILITAS INTRO AREA ENDS =======-->

@if(isset($facilities) && $facilities->count() > 0)
    @php
        $categories = $facilities->groupBy('category');
        $uncategorized = $facilities->whereNull('category');
    @endphp

    @foreach($categories as $categoryName => $categoryFacilities)
        @if($categoryName)
        <!--===== FASILITAS {{ strtoupper($categoryName) }} AREA STARTS =======-->
        <section class="vl-about-section sp2" @if($loop->even) style="background-color: #f8f9fa;" @endif>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="vl-section-title-1 text-center mb-60">
                            <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">{{ $categoryName }}</h5>
                            <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Fasilitas {{ $categoryName }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($categoryFacilities as $facility)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="vl-about-icon">
                                @if($facility->image)
                                    <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->title }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 10px;">
                                @elseif($facility->icon)
                                    <span><i class="{{ $facility->icon }}" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                                @else
                                    <span><i class="fa-solid fa-building" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                                @endif
                            </div>
                            <div class="vl-icon-content">
                                <h3 class="title">{{ $facility->title }}</h3>
                                @if($facility->description)
                                    <p>{{ $facility->description }}</p>
                                @endif
                                @if($facility->video)
                                    <div class="mt-3">
                                        <a href="{{ $facility->video }}" target="_blank" class="btn btn-sm bg-primary text-white">
                                            <i class="fa-solid fa-play me-2"></i>Lihat Video
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--===== FASILITAS {{ strtoupper($categoryName) }} AREA ENDS =======-->
        @endif
    @endforeach

    @if($uncategorized->count() > 0)
    <!--===== FASILITAS LAINNYA AREA STARTS =======-->
    <section class="vl-about-section sp2" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vl-section-title-1 text-center mb-60">
                        <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Fasilitas Lainnya</h5>
                        <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Fasilitas Pendukung</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($uncategorized as $facility)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="vl-about-icon-box" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="vl-about-icon">
                            @if($facility->image)
                                <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->title }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 10px;">
                            @elseif($facility->icon)
                                <span><i class="{{ $facility->icon }}" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                            @else
                                <span><i class="fa-solid fa-building" style="font-size: 50px; color: var(--ztc-text-text-4);"></i></span>
                            @endif
                        </div>
                        <div class="vl-icon-content">
                            <h3 class="title">{{ $facility->title }}</h3>
                            @if($facility->description)
                                <p>{{ $facility->description }}</p>
                            @endif
                            @if($facility->video)
                                <div class="mt-3">
                                    <a href="{{ $facility->video }}" target="_blank" class="btn btn-sm bg-primary text-white">
                                        <i class="fa-solid fa-play me-2"></i>Lihat Video
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--===== FASILITAS LAINNYA AREA ENDS =======-->
    @endif
@else
<!--===== NO FACILITIES MESSAGE =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center py-60">
                    <i class="fa-solid fa-building" style="font-size: 80px; color: #ddd; margin-bottom: 20px;"></i>
                    <h3>Belum Ada Fasilitas</h3>
                    <p>Fasilitas akan segera ditambahkan.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!--===== PENUTUP AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center">
                    <h2 class="title text-anime-style-3 mb-30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Komitmen Terhadap Kualitas</h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 900px; margin: 0 auto; font-size: 18px; line-height: 1.8;">
                        PP. Nurul Islam terus berkomitmen untuk meningkatkan dan mengembangkan fasilitas-fasilitas yang ada. Semua fasilitas dirawat secara berkala dan diperbarui sesuai dengan perkembangan zaman untuk memberikan pengalaman terbaik bagi seluruh santri dalam menuntut ilmu dan mengembangkan potensi mereka.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PENUTUP AREA ENDS =======-->

@endsection
