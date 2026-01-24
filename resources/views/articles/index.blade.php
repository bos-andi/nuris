@extends('layouts.app')

@section('content')

<!--===== PAGE HEADER STARTS =======-->
<section class="vl-page-header" style="background-image: url({{ asset('img/banner/nuris-hero-bg.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-page-header-content text-center">
                    <h1 class="vl-page-title">Berita & Artikel</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Berita & Artikel</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== PAGE HEADER ENDS =======-->

<!--===== BERITA AREA STARTS =======-->
<section class="vl-about-section sp2" style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%); padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vl-section-title-1 text-center mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="color: #28a745; font-weight: 600; letter-spacing: 1px; margin-bottom: 15px;">
                        <i class="fa-solid fa-newspaper" style="margin-right: 8px;"></i>Informasi Terkini
                    </h5>
                    <h2 class="title text-anime-style-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 42px; font-weight: 700; color: #2c3e50; margin-bottom: 20px;">
                        Berita & Artikel PP. Nurul Islam
                    </h2>
                    <p class="pb-32" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="max-width: 800px; margin: 0 auto; font-size: 16px; color: #6c757d; line-height: 1.8;">
                        Dapatkan informasi terkini seputar kegiatan, program, dan perkembangan Pondok Pesantren Nurul Islam melalui berita dan artikel terbaru.
                    </p>
                </div>
            </div>
        </div>

        @if($articles->count() > 0)
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    @foreach($articles as $article)
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
                        @if($article->category)
                        <div class="vl-blog-category" style="position: absolute; top: 15px; right: 15px;">
                            <a href="#" style="display: inline-block; background: rgba(255,255,255,0.95); color: #28a745; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; text-decoration: none; box-shadow: 0 2px 8px rgba(0,0,0,0.15); transition: all 0.3s;" onmouseover="this.style.background='#28a745'; this.style.color='white'" onmouseout="this.style.background='rgba(255,255,255,0.95)'; this.style.color='#28a745'">
                                <i class="fa-solid fa-tag" style="margin-right: 5px; font-size: 10px;"></i>{{ $article->category }}
                            </a>
                        </div>
                        @endif
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
                            <span style="display: inline-flex; align-items: center; gap: 6px; color: #6c757d; font-size: 13px;">
                                <i class="fa-solid fa-eye" style="color: #ffc107; font-size: 12px;"></i>
                                <strong style="font-weight: 600;">{{ number_format($article->views) }}</strong>
                            </span>
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

                <!-- Pagination -->
                <div class="row">
                    <div class="col-lg-12">
                <div class="vl-pagination text-center mt-60" style="padding: 40px 0;">
                    <style>
                        .pagination {
                            display: inline-flex;
                            gap: 8px;
                            list-style: none;
                            padding: 0;
                            margin: 0;
                        }
                        .pagination li {
                            margin: 0;
                        }
                        .pagination a, .pagination span {
                            display: inline-flex;
                            align-items: center;
                            justify-content: center;
                            min-width: 40px;
                            height: 40px;
                            padding: 0 12px;
                            background: white;
                            color: #6c757d;
                            border: 2px solid #e9ecef;
                            border-radius: 8px;
                            text-decoration: none;
                            font-weight: 600;
                            transition: all 0.3s;
                            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
                        }
                        .pagination a:hover {
                            background: #28a745;
                            color: white;
                            border-color: #28a745;
                            transform: translateY(-2px);
                            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
                        }
                        .pagination .active span {
                            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
                            color: white;
                            border-color: #28a745;
                            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
                        }
                        .pagination .disabled span {
                            opacity: 0.5;
                            cursor: not-allowed;
                        }
                    </style>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <!-- Categories Widget -->
                <div class="vl-sidebar-widget mb-40" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    <h3 class="widget-title" style="font-size: 20px; font-weight: 700; color: #2c3e50; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #28a745;">
                        <i class="fa-solid fa-tags" style="margin-right: 8px; color: #28a745;"></i>Kategori
                    </h3>
                    <ul class="list-unstyled" style="margin: 0; padding: 0;">
                        @forelse($categories as $category)
                            <li style="margin-bottom: 12px;">
                                <a href="{{ route('articles.index', ['category' => $category->slug]) }}" style="display: flex; align-items: center; justify-content: space-between; color: #6c757d; text-decoration: none; padding: 10px 15px; border-radius: 8px; transition: all 0.3s; background: #f8f9fa;" onmouseover="this.style.background='#e9ecef'; this.style.color='#28a745';" onmouseout="this.style.background='#f8f9fa'; this.style.color='#6c757d';">
                                    <span style="display: flex; align-items: center; gap: 10px;">
                                        <span style="width: 12px; height: 12px; border-radius: 50%; background-color: {{ $category->color }};"></span>
                                        <span>{{ $category->name }}</span>
                                    </span>
                                    <span style="background: #28a745; color: white; padding: 2px 8px; border-radius: 12px; font-size: 12px; font-weight: 600;">{{ $category->articles_count }}</span>
                                </a>
                            </li>
                        @empty
                            <li style="color: #6c757d; font-size: 14px; padding: 10px;">Belum ada kategori</li>
                        @endforelse
                    </ul>
                </div>

                <!-- Tags Widget -->
                <div class="vl-sidebar-widget" style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    <h3 class="widget-title" style="font-size: 20px; font-weight: 700; color: #2c3e50; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #28a745;">
                        <i class="fa-solid fa-bookmark" style="margin-right: 8px; color: #28a745;"></i>Tag
                    </h3>
                    <div class="tag-cloud" style="display: flex; flex-wrap: wrap; gap: 8px;">
                        @forelse($tags as $tag)
                            <a href="{{ route('articles.index', ['tag' => $tag->slug]) }}" style="display: inline-block; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); color: #6c757d; padding: 8px 16px; border-radius: 20px; text-decoration: none; font-size: 13px; font-weight: 600; transition: all 0.3s; border: 1px solid #dee2e6;" onmouseover="this.style.background='linear-gradient(135deg, #28a745 0%, #20c997 100%)'; this.style.color='white'; this.style.borderColor='#28a745'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 12px rgba(40, 167, 69, 0.3)';" onmouseout="this.style.background='linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%)'; this.style.color='#6c757d'; this.style.borderColor='#dee2e6'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                {{ $tag->name }} <span style="opacity: 0.7;">({{ $tag->articles_count }})</span>
                            </a>
                        @empty
                            <p style="color: #6c757d; font-size: 14px; width: 100%;">Belum ada tag</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center py-80" style="background: white; border-radius: 16px; padding: 80px 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    <div style="width: 120px; height: 120px; margin: 0 auto 30px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-newspaper" style="font-size: 60px; color: #dee2e6;"></i>
                    </div>
                    <h3 style="font-size: 28px; font-weight: 700; color: #2c3e50; margin-bottom: 15px;">Belum Ada Berita</h3>
                    <p style="font-size: 16px; color: #6c757d; max-width: 500px; margin: 0 auto; line-height: 1.8;">
                        Belum ada berita yang dipublikasikan saat ini. Silakan kembali lagi nanti untuk mendapatkan informasi terbaru.
                    </p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!--===== BERITA AREA ENDS =======-->

@endsection
