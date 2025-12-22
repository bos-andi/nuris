@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Gallery Foto</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery Foto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== GALLERY PHOTOS AREA STARTS =======-->
<section class="vl-gallery sp2">
    <div class="container">
        <div class="vl-section-title-1 text-center mb-60">
            <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Gallery
            </h5>
            <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Gallery Foto PP. Nurul Islam</h2>
            <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto;">
                Dokumentasi kegiatan, program, dan momen-momen penting di Pondok Pesantren Nurul Islam.
            </p>
        </div>

        @if($galleries->count() > 0)
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-lg-4 col-md-6 mb-30" data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                <a href="{{ route('galleries.show', $gallery->slug) }}" style="text-decoration: none; display: block; height: 100%;">
                    <div class="vl-single-box gallery-card-clickable" style="position: relative; cursor: pointer; transition: all 0.3s ease; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 30px rgba(1,113,93,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)';">
                        <div style="position: relative; overflow: hidden; flex: 1;">
                            <img class="w-100" src="{{ $gallery->image_path ? asset('storage/' . $gallery->image_path) : asset('img/gallery/vl-gallery-1.1.png') }}" alt="{{ $gallery->title }}" style="height: 300px; width: 100%; object-fit: cover; transition: transform 0.5s;" onerror="this.onerror=null; this.src='{{ asset('img/gallery/vl-gallery-1.1.png') }}';" onmouseover="this.style.transform='scale(1.15)'" onmouseout="this.style.transform='scale(1)'">
                            <div class="gallery-overlay-hover" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(1, 113, 93, 0); transition: all 0.3s ease; display: flex; align-items: center; justify-content: center;" onmouseover="this.style.background='rgba(1, 113, 93, 0.75)'" onmouseout="this.style.background='rgba(1, 113, 93, 0)'">
                                <div style="text-align: center; color: white; transform: translateY(20px); opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(0)'; this.style.opacity='1';" onmouseout="this.style.transform='translateY(20px)'; this.style.opacity='0';">
                                    <i class="fa-solid fa-images" style="font-size: 56px; margin-bottom: 15px; display: block; text-shadow: 0 2px 10px rgba(0,0,0,0.3);"></i>
                                    <span style="font-size: 18px; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.3); letter-spacing: 1px;">LIHAT GALLERY</span>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-caption" style="background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.7) 50%, rgba(0,0,0,0.4) 100%); padding: 25px 20px 20px; color: #fff; flex-shrink: 0;">
                            <h4 style="color: #fff; font-size: 20px; font-weight: 700; margin: 0 0 8px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">{{ $gallery->title }}</h4>
                            <p style="color: rgba(255,255,255,0.95); font-size: 15px; margin: 0 0 5px 0; font-weight: 500;">
                                <i class="fa-solid fa-images me-2"></i>{{ $gallery->items->count() }} Foto
                            </p>
                            @if($gallery->description)
                            <p style="color: rgba(255,255,255,0.85); font-size: 13px; margin: 5px 0 0 0; line-height: 1.4;">{{ \Illuminate\Support\Str::limit($gallery->description, 70) }}</p>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination-wrapper text-center mt-40">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center py-60">
                    <p style="font-size: 18px; color: #666;">Belum ada gallery foto.</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!--===== GALLERY PHOTOS AREA ENDS =======-->

@endsection

