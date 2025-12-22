@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">{{ $gallery->title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('galleries.photos') }}">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $gallery->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== GALLERY DETAIL AREA STARTS =======-->
<section class="vl-gallery sp2" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <!-- Gallery Header -->
        <div class="row mb-50">
            <div class="col-lg-12">
                <div class="gallery-detail-header text-center" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08);" data-aos="fade-up" data-aos-duration="800">
                    <div class="mb-3">
                        <span class="badge" style="background: linear-gradient(135deg, #01715d 0%, #00a085 100%); color: white; padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 600; letter-spacing: 0.5px;">
                            <i class="fa-solid fa-images me-2"></i>Gallery Foto
                        </span>
                    </div>
                    <h1 class="mb-3" style="font-size: 42px; font-weight: 800; color: #1a1a1a; margin: 20px 0; line-height: 1.2;">
                        {{ $gallery->title }}
                    </h1>
                    @if($gallery->description)
                    <p style="font-size: 18px; color: #555; line-height: 1.8; max-width: 800px; margin: 0 auto 20px;">
                        {{ $gallery->description }}
                    </p>
                    @endif
                    <div style="display: inline-flex; align-items: center; gap: 15px; padding: 12px 30px; background: #f0f7f5; border-radius: 50px; margin-top: 15px;">
                        <i class="fa-solid fa-images" style="color: #01715d; font-size: 20px;"></i>
                        <span style="font-size: 16px; font-weight: 600; color: #01715d;">{{ $gallery->items->count() }} Foto</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Photos Grid -->
        @if($gallery->items->count() > 0)
        <div class="row mb-50">
            @foreach($gallery->items as $item)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="gallery-photo-item" style="position: relative; overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: white; cursor: pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 35px rgba(1,113,93,0.25)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.1)';">
                    <a href="{{ asset('storage/' . $item->image_path) }}" data-lightbox="gallery-{{ $gallery->slug }}" data-title="{{ $gallery->title }} - Foto {{ $loop->iteration }}" style="display: block; position: relative; overflow: hidden;">
                        <div style="position: relative; overflow: hidden; border-radius: 12px 12px 0 0;">
                            <img class="w-100" src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $gallery->title }} - Foto {{ $loop->iteration }}" style="height: 320px; width: 100%; object-fit: cover; transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);" onerror="this.onerror=null; this.src='{{ asset('img/gallery/vl-gallery-1.1.png') }}';" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <div class="photo-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, rgba(1,113,93,0) 0%, rgba(1,113,93,0.7) 100%); opacity: 0; transition: opacity 0.4s ease; display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                                <div style="text-align: center; color: white; transform: translateY(20px); opacity: 0; transition: all 0.4s ease;" onmouseover="this.style.transform='translateY(0)'; this.style.opacity='1';" onmouseout="this.style.transform='translateY(20px)'; this.style.opacity='0';">
                                    <i class="fa-solid fa-expand" style="font-size: 48px; margin-bottom: 10px; display: block; text-shadow: 0 2px 10px rgba(0,0,0,0.3);"></i>
                                    <span style="font-size: 16px; font-weight: 600; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Klik untuk memperbesar</span>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 20px; background: white;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <span style="color: #01715d; font-size: 14px; font-weight: 600;">
                                    <i class="fa-solid fa-image me-2"></i>Foto {{ $loop->iteration }}
                                </span>
                                <span style="color: #999; font-size: 13px;">
                                    <i class="fa-solid fa-eye me-1"></i>Lihat
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center py-80" style="background: white; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08);">
                    <i class="fa-solid fa-images" style="font-size: 64px; color: #ddd; margin-bottom: 20px;"></i>
                    <p style="font-size: 20px; color: #999; font-weight: 500;">Belum ada foto di gallery ini.</p>
                </div>
            </div>
        </div>
        @endif

        <!-- Back Button -->
        <div class="row mb-50">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="{{ route('galleries.photos') }}" style="display: inline-flex; align-items: center; gap: 12px; padding: 14px 35px; background: linear-gradient(135deg, #01715d 0%, #00a085 100%); color: white; text-decoration: none; border-radius: 50px; font-size: 16px; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(1,113,93,0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(1,113,93,0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(1,113,93,0.3)';">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Kembali ke Gallery</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Galleries -->
        @if($relatedGalleries->count() > 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="related-galleries-section" style="background: white; padding: 50px 40px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08);">
                    <div class="text-center mb-50" data-aos="fade-up" data-aos-duration="800">
                        <span class="badge" style="background: linear-gradient(135deg, #01715d 0%, #00a085 100%); color: white; padding: 8px 20px; border-radius: 50px; font-size: 13px; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 20px; display: inline-block;">
                            <i class="fa-solid fa-images me-2"></i>Gallery Lainnya
                        </span>
                        <h2 style="font-size: 36px; font-weight: 800; color: #1a1a1a; margin: 15px 0; line-height: 1.2;">
                            Gallery Terkait
                        </h2>
                        <p style="font-size: 16px; color: #666; max-width: 600px; margin: 0 auto;">
                            Jelajahi gallery lainnya yang mungkin menarik untuk Anda
                        </p>
                    </div>
                    <div class="row">
                        @foreach($relatedGalleries as $related)
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                            <a href="{{ route('galleries.show', $related->slug) }}" style="text-decoration: none; display: block; height: 100%;">
                                <div class="related-gallery-card" style="position: relative; overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: white; cursor: pointer; height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 35px rgba(1,113,93,0.25)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.1)';">
                                    <div style="position: relative; overflow: hidden; flex: 1;">
                                        <img class="w-100" src="{{ $related->image_path ? asset('storage/' . $related->image_path) : asset('img/gallery/vl-gallery-1.1.png') }}" alt="{{ $related->title }}" style="height: 280px; width: 100%; object-fit: cover; transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);" onerror="this.onerror=null; this.src='{{ asset('img/gallery/vl-gallery-1.1.png') }}';" onmouseover="this.style.transform='scale(1.15)'" onmouseout="this.style.transform='scale(1)'">
                                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(1, 113, 93, 0); transition: background 0.4s ease; display: flex; align-items: center; justify-content: center;" onmouseover="this.style.background='rgba(1, 113, 93, 0.75)'" onmouseout="this.style.background='rgba(1, 113, 93, 0)'">
                                            <div style="text-align: center; color: white; transform: translateY(20px); opacity: 0; transition: all 0.4s ease;" onmouseover="this.style.transform='translateY(0)'; this.style.opacity='1';" onmouseout="this.style.transform='translateY(20px)'; this.style.opacity='0';">
                                                <i class="fa-solid fa-images" style="font-size: 48px; margin-bottom: 10px; display: block; text-shadow: 0 2px 10px rgba(0,0,0,0.3);"></i>
                                                <span style="font-size: 16px; font-weight: 600; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Lihat Gallery</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 20px; background: white; flex-shrink: 0;">
                                        <h4 style="color: #1a1a1a; font-size: 18px; font-weight: 700; margin: 0 0 8px 0;">{{ $related->title }}</h4>
                                        <p style="color: #01715d; font-size: 14px; margin: 0; font-weight: 600;">
                                            <i class="fa-solid fa-images me-2"></i>{{ $related->items->count() }} Foto
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!--===== GALLERY PHOTOS AREA ENDS =======-->

@endsection

