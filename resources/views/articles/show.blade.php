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
                        @if($article->categoryModel)
                        <span style="display: inline-flex; align-items: center; gap: 8px; background: {{ $article->categoryModel->color }}20; padding: 5px 12px; border-radius: 20px; color: {{ $article->categoryModel->color }}; font-size: 13px; font-weight: 600; border: 1px solid {{ $article->categoryModel->color }}40;">
                            <i class="fa-solid fa-tag"></i> {{ $article->categoryModel->name }}
                        </span>
                        @elseif($article->category)
                        <span style="display: inline-flex; align-items: center; gap: 8px; background: #e3f2fd; padding: 5px 12px; border-radius: 20px; color: #1976d2; font-size: 13px; font-weight: 600;">
                            <i class="fa-solid fa-tag"></i> {{ $article->category }}
                        </span>
                        @endif
                        @if($article->tags->count() > 0)
                            @foreach($article->tags as $tag)
                            <span style="display: inline-flex; align-items: center; gap: 8px; background: #f8f9fa; padding: 5px 12px; border-radius: 20px; color: #6c757d; font-size: 13px; font-weight: 600; border: 1px solid #dee2e6;">
                                <i class="fa-solid fa-bookmark"></i> {{ $tag->name }}
                            </span>
                            @endforeach
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
                    <!-- Latest Articles -->
                    @if($latestArticles->count() > 0)
                    <div class="vl-blog-sidebar-widget mb-40" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                        <h4 class="vl-widget-title" style="font-size: 20px; font-weight: 700; color: #2c3e50; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #28a745;">
                            <i class="fa-solid fa-clock-rotate-left" style="color: #28a745; margin-right: 8px;"></i>Berita Terbaru
                        </h4>
                        <div class="vl-blog-sidebar-post">
                            @foreach($latestArticles as $latest)
                            <div class="vl-sidebar-post-item mb-25" style="padding-bottom: 20px; border-bottom: 1px solid #f0f0f0; transition: all 0.3s;" onmouseover="this.style.paddingLeft='5px'" onmouseout="this.style.paddingLeft='0'">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <div class="vl-sidebar-post-thumb" style="border-radius: 8px; overflow: hidden; height: 80px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                            @if($latest->featured_image)
                                                <img src="{{ asset('storage/' . $latest->featured_image) }}" alt="{{ $latest->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                            @else
                                                <img src="{{ asset('img/blog/vl-blog-1.1.png') }}" alt="{{ $latest->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="vl-sidebar-post-content">
                                            <h6 style="margin-bottom: 8px; line-height: 1.4;">
                                                <a href="{{ route('articles.show', $latest->slug) }}" style="color: #333; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.3s; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" onmouseover="this.style.color='#28a745'" onmouseout="this.style.color='#333'">
                                                    {{ $latest->title }}
                                                </a>
                                            </h6>
                                            <span style="color: #999; font-size: 12px; display: flex; align-items: center; gap: 5px;">
                                                <i class="fa-solid fa-calendar" style="color: #28a745;"></i> 
                                                {{ $latest->published_at ? $latest->published_at->format('d M Y') : $latest->created_at->format('d M Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Categories Widget -->
                    @if($categories->count() > 0)
                    <div class="vl-blog-sidebar-widget mb-40" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                        <h4 class="vl-widget-title" style="font-size: 20px; font-weight: 700; color: #2c3e50; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #28a745;">
                            <i class="fa-solid fa-tags" style="color: #28a745; margin-right: 8px;"></i>Kategori
                        </h4>
                        <ul class="list-unstyled" style="margin: 0; padding: 0;">
                            @foreach($categories as $category)
                                <li style="margin-bottom: 12px;">
                                    <a href="{{ route('articles.index', ['category' => $category->slug]) }}" style="display: flex; align-items: center; justify-content: space-between; color: #6c757d; text-decoration: none; padding: 10px 15px; border-radius: 8px; transition: all 0.3s; background: #f8f9fa;" onmouseover="this.style.background='#e9ecef'; this.style.color='#28a745';" onmouseout="this.style.background='#f8f9fa'; this.style.color='#6c757d';">
                                        <span style="display: flex; align-items: center; gap: 10px;">
                                            <span style="width: 12px; height: 12px; border-radius: 50%; background-color: {{ $category->color }};"></span>
                                            <span>{{ $category->name }}</span>
                                        </span>
                                        <span style="background: #28a745; color: white; padding: 2px 8px; border-radius: 12px; font-size: 12px; font-weight: 600;">{{ $category->articles_count }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Tags Widget -->
                    @if($tags->count() > 0)
                    <div class="vl-blog-sidebar-widget mb-40" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                        <h4 class="vl-widget-title" style="font-size: 20px; font-weight: 700; color: #2c3e50; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #28a745;">
                            <i class="fa-solid fa-bookmark" style="color: #28a745; margin-right: 8px;"></i>Tag
                        </h4>
                        <div class="tag-cloud" style="display: flex; flex-wrap: wrap; gap: 8px;">
                            @foreach($tags as $tag)
                                <a href="{{ route('articles.index', ['tag' => $tag->slug]) }}" style="display: inline-block; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); color: #6c757d; padding: 8px 16px; border-radius: 20px; text-decoration: none; font-size: 13px; font-weight: 600; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.background='linear-gradient(135deg, #28a745 0%, #20c997 100%)'; this.style.color='white'; this.style.borderColor='#28a745'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 12px rgba(40, 167, 69, 0.3)';" onmouseout="this.style.background='linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%)'; this.style.color='#6c757d'; this.style.borderColor='#dee2e6'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                    {{ $tag->name }} <span style="opacity: 0.7;">({{ $tag->articles_count }})</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Related Articles -->
                    @if($relatedArticles->count() > 0)
                    <div class="vl-blog-sidebar-widget mb-40" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                        <h4 class="vl-widget-title" style="font-size: 20px; font-weight: 700; color: #2c3e50; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #28a745;">
                            <i class="fa-solid fa-newspaper" style="color: #28a745; margin-right: 8px;"></i>Artikel Terkait
                        </h4>
                        <div class="vl-blog-sidebar-post">
                            @foreach($relatedArticles as $related)
                            <div class="vl-sidebar-post-item mb-25" style="padding-bottom: 20px; border-bottom: 1px solid #f0f0f0; transition: all 0.3s;" onmouseover="this.style.paddingLeft='5px'" onmouseout="this.style.paddingLeft='0'">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <div class="vl-sidebar-post-thumb" style="border-radius: 8px; overflow: hidden; height: 80px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                            @if($related->featured_image)
                                                <img src="{{ asset('storage/' . $related->featured_image) }}" alt="{{ $related->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onerror="this.onerror=null; this.src='{{ asset('img/blog/vl-blog-1.1.png') }}';" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                            @else
                                                <img src="{{ asset('img/blog/vl-blog-1.1.png') }}" alt="{{ $related->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="vl-sidebar-post-content">
                                            <h6 style="margin-bottom: 8px; line-height: 1.4;">
                                                <a href="{{ route('articles.show', $related->slug) }}" style="color: #333; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.3s; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" onmouseover="this.style.color='#28a745'" onmouseout="this.style.color='#333'">
                                                    {{ $related->title }}
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
