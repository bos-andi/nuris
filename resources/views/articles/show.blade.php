@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">{{ $article->title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Berita & Artikel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($article->title, 30) }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== ARTICLE DETAIL AREA STARTS =======-->
<section class="vl-about-section sp2" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="vl-blog-detail" style="background: white; border-radius: 12px; padding: 40px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    @if($article->featured_image)
                    <div class="vl-blog-detail-thumb mb-40" style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-100" style="height: 450px; object-fit: cover;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';">
                    </div>
                    @endif

                    <div class="vl-blog-meta mb-30" style="display: flex; flex-wrap: wrap; gap: 20px; align-items: center; padding: 15px 0; border-bottom: 2px solid #f0f0f0;">
                        <span style="display: inline-flex; align-items: center; gap: 8px; color: #666; font-size: 14px;">
                            <i class="fa-solid fa-calendar" style="color: #28a745;"></i> 
                            <strong>{{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}</strong>
                        </span>
                        @if($article->author)
                        <span style="display: inline-flex; align-items: center; gap: 8px; color: #666; font-size: 14px;">
                            <i class="fa-solid fa-user" style="color: #007bff;"></i> 
                            <strong>{{ $article->author }}</strong>
                        </span>
                        @endif
                        <span style="display: inline-flex; align-items: center; gap: 8px; color: #666; font-size: 14px;">
                            <i class="fa-solid fa-eye" style="color: #ffc107;"></i> 
                            <strong>{{ number_format($article->views) }} views</strong>
                        </span>
                        @if($article->category)
                        <span style="display: inline-flex; align-items: center; gap: 8px; background: #e3f2fd; padding: 5px 12px; border-radius: 20px; color: #1976d2; font-size: 13px; font-weight: 600;">
                            <i class="fa-solid fa-tag"></i> {{ $article->category }}
                        </span>
                        @endif
                    </div>

                    <div class="vl-blog-detail-content" style="line-height: 1.8; color: #333; font-size: 16px;">
                        {!! $article->content !!}
                    </div>

                    <div class="vl-blog-share mt-50 pt-40" style="border-top: 2px solid #f0f0f0; margin-top: 50px;">
                        <h5 class="mb-20" style="font-size: 18px; font-weight: 600; color: #333; margin-bottom: 20px;">Bagikan Artikel:</h5>
                        <div class="vl-blog-share-icon" style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 45px; height: 45px; background: #1877f2; color: white; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(24, 119, 242, 0.3);" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 4px 12px rgba(24, 119, 242, 0.5)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 2px 8px rgba(24, 119, 242, 0.3)'">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 45px; height: 45px; background: #1da1f2; color: white; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(29, 161, 242, 0.3);" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 4px 12px rgba(29, 161, 242, 0.5)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 2px 8px rgba(29, 161, 242, 0.3)'">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article->title . ' - ' . url()->current()) }}" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 45px; height: 45px; background: #25d366; color: white; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(37, 211, 102, 0.3);" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 4px 12px rgba(37, 211, 102, 0.5)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 2px 8px rgba(37, 211, 102, 0.3)'">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($article->title) }}" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 45px; height: 45px; background: #0077b5; color: white; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(0, 119, 181, 0.3);" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 4px 12px rgba(0, 119, 181, 0.5)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 2px 8px rgba(0, 119, 181, 0.3)'">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 45px; height: 45px; background: #0088cc; color: white; border-radius: 50%; text-decoration: none; transition: all 0.3s; box-shadow: 0 2px 8px rgba(0, 136, 204, 0.3);" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 4px 12px rgba(0, 136, 204, 0.5)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 2px 8px rgba(0, 136, 204, 0.3)'">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="vl-blog-sidebar">
                    <!-- Related Articles -->
                    @if($relatedArticles->count() > 0)
                    <div class="vl-blog-sidebar-widget mb-40" style="background: white; border-radius: 12px; padding: 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                        <h4 class="vl-widget-title" style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 3px solid #28a745;">
                            <i class="fa-solid fa-newspaper" style="color: #28a745; margin-right: 10px;"></i>Artikel Terkait
                        </h4>
                        <div class="vl-blog-sidebar-post">
                            @foreach($relatedArticles as $related)
                            <div class="vl-sidebar-post-item mb-25" style="padding-bottom: 20px; border-bottom: 1px solid #f0f0f0;">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <div class="vl-sidebar-post-thumb" style="border-radius: 8px; overflow: hidden; height: 80px;">
                                            @if($related->featured_image)
                                                <img src="{{ asset('storage/' . $related->featured_image) }}" alt="{{ $related->title }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';">
                                            @else
                                                <img src="{{ asset('img/blog/vl-blog-1.1.png') }}" alt="{{ $related->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="vl-sidebar-post-content">
                                            <h6 style="margin-bottom: 8px; line-height: 1.4;">
                                                <a href="{{ route('articles.show', $related->slug) }}" style="color: #333; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.3s;" onmouseover="this.style.color='#28a745'" onmouseout="this.style.color='#333'">
                                                    {{ Str::limit($related->title, 60) }}
                                                </a>
                                            </h6>
                                            <span style="color: #999; font-size: 12px; display: flex; align-items: center; gap: 5px;">
                                                <i class="fa-solid fa-calendar" style="color: #28a745;"></i> 
                                                {{ $related->published_at ? $related->published_at->format('d M Y') : $related->created_at->format('d M Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Back to Articles -->
                    <div class="vl-blog-sidebar-widget">
                        <a href="{{ route('articles.index') }}" class="header-btn1 w-100 text-center" style="display: block; padding: 15px 20px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; transition: all 0.3s; box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(40, 167, 69, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(40, 167, 69, 0.3)'">
                            <i class="fa-solid fa-arrow-left" style="margin-right: 8px;"></i>Kembali ke Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== ARTICLE DETAIL AREA ENDS =======-->

@endsection
