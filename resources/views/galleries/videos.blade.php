@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Gallery Video</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery Video</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== GALLERY VIDEOS AREA STARTS =======-->
<section class="vl-about-section sp2">
    <div class="container">
        <div class="vl-section-title-1 text-center mb-60">
            <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <span><img src="{{ asset('img/icons/vl-sub-title-icon.svg') }}" alt=""></span> Gallery
            </h5>
            <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Gallery Video PP. Nurul Islam</h2>
            <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto;">
                Video dokumentasi kegiatan, program, dan momen-momen penting di Pondok Pesantren Nurul Islam.
            </p>
        </div>

        @if($videos->count() > 0)
        <div class="row">
            @foreach($videos as $video)
            <div class="col-lg-6 col-md-6 mb-40" data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="video-gallery-card" style="background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 25px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 35px rgba(1,113,93,0.25)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 25px rgba(0,0,0,0.1)';">
                    <div class="video-wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background: #000;">
                        @if($video->video_embed_code)
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                {!! $video->video_embed_code !!}
                            </div>
                        @elseif($video->video_url)
                            @php
                                // Use the embed_url accessor to convert YouTube URL to embed format
                                $embedUrl = $video->embed_url;
                                
                                // Fallback: if embed_url returns original URL and it's not embed format, try to convert manually
                                if ($embedUrl && strpos($embedUrl, 'youtube.com/embed/') === false && strpos($embedUrl, 'youtu.be/') !== false) {
                                    // Extract video ID from youtu.be URL
                                    if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $embedUrl, $matches)) {
                                        $embedUrl = 'https://www.youtube.com/embed/' . $matches[1];
                                    }
                                }
                            @endphp
                            @if($embedUrl && strpos($embedUrl, 'youtube.com/embed/') !== false)
                            <iframe 
                                src="{{ $embedUrl }}" 
                                frameborder="0"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen
                                loading="lazy">
                            </iframe>
                            @else
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, #01715d 0%, #00a085 100%); display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; padding: 20px;">
                                <i class="fa-solid fa-exclamation-triangle" style="font-size: 48px; margin-bottom: 15px;"></i>
                                <p style="font-size: 16px; text-align: center; margin: 0;">URL video tidak valid atau tidak dapat dimuat</p>
                                <p style="font-size: 12px; text-align: center; margin: 10px 0 0 0; opacity: 0.8;">{{ $video->video_url }}</p>
                            </div>
                            @endif
                        @elseif($video->image_path)
                            <img src="{{ asset('storage/' . $video->image_path) }}" alt="{{ $video->title }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';">
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(1, 113, 93, 0.9); border-radius: 50%; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.transform='translate(-50%, -50%) scale(1.1)'; this.style.background='rgba(1, 113, 93, 1)';" onmouseout="this.style.transform='translate(-50%, -50%) scale(1)'; this.style.background='rgba(1, 113, 93, 0.9)';">
                                <i class="fa-solid fa-play" style="color: #fff; font-size: 28px; margin-left: 4px;"></i>
                            </div>
                        @else
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, #01715d 0%, #00a085 100%); display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-video" style="color: rgba(255,255,255,0.3); font-size: 64px;"></i>
                            </div>
                        @endif
                    </div>
                    @if($video->title || $video->description)
                    <div class="video-content" style="padding: 25px;">
                        @if($video->title)
                        <h3 style="color: #1a1a1a; font-size: 22px; font-weight: 700; margin: 0 0 12px 0; line-height: 1.3;">
                            {{ $video->title }}
                        </h3>
                        @endif
                        @if($video->description)
                        <p style="color: #666; font-size: 15px; line-height: 1.7; margin: 0;">{{ \Illuminate\Support\Str::limit($video->description, 150) }}</p>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination-wrapper text-center mt-40">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center py-60">
                    <p style="font-size: 18px; color: #666;">Belum ada video di gallery.</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!--===== GALLERY VIDEOS AREA ENDS =======-->

@endsection

