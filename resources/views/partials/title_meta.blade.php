<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@php
    // Gunakan URL dari request saat ini untuk asset
    $baseUrl = request()->getSchemeAndHttpHost();
    
    // SEO Default Values - Website Resmi PP Nurul Islam Mojokerto
    $siteName = 'PP Nurul Islam Mojokerto';
    $officialWebsiteText = 'Website Resmi PP Nurul Islam Mojokerto';
    $siteDescription = 'Website Resmi PP Nurul Islam Mojokerto. Informasi resmi Pondok Pesantren Nurul Islam Mojokerto, meliputi profil, pendidikan, berita, dan kegiatan pesantren.';
    
    // Get settings from database
    $favicon = \App\Models\SiteSetting::get('favicon', 'img/logo/nuris-favicon.png');
    $heroLogo = \App\Models\SiteSetting::get('hero_logo');
    $ogImage = \App\Models\SiteSetting::get('og_image');
    
    // Determine canonical URL - Always use https://nuris.or.id
    $canonicalUrl = 'https://nuris.or.id' . request()->getPathInfo();
    if (request()->getQueryString()) {
        $canonicalUrl .= '?' . request()->getQueryString();
    }
    
    // Check if this is an article page
    // Only use article meta tags if:
    // 1. Article variable exists AND is Article instance
    // 2. NOT on homepage (route is not '/')
    // 3. NOT on articles index page (route is not '/berita')
    $article = isset($article) ? $article : null;
    $isHomepage = request()->getPathInfo() === '/' || request()->getPathInfo() === '';
    $isArticlesIndex = request()->getPathInfo() === '/berita';
    $isArticlePage = $article && $article instanceof \App\Models\Article && !$isHomepage && !$isArticlesIndex;
    
    // OG Values - Default
    $ogUrl = 'https://nuris.or.id' . request()->getPathInfo();
    $ogTitle = $officialWebsiteText;
    $ogDescription = $officialWebsiteText . ' – sumber informasi resmi Pondok Pesantren Nurul Islam Mojokerto.';
    $ogImageUrl = null;
    
    // If article exists and this is an article detail page, use article data for OG
    if ($isArticlePage) {
        $ogTitle = $article->title . ' | ' . $siteName;
        $ogUrl = 'https://nuris.or.id' . request()->getPathInfo();
        
        // Use excerpt if available, otherwise use truncated content
        if ($article->excerpt) {
            $ogDescription = strip_tags($article->excerpt);
        } elseif ($article->meta_description) {
            $ogDescription = $article->meta_description;
        } else {
            $ogDescription = \Illuminate\Support\Str::limit(strip_tags($article->content), 160);
        }
        
        // Use featured image if available
        if ($article->featured_image) {
            $imagePath = $article->featured_image;
            if (strpos($imagePath, 'storage/') === 0) {
                $ogImageUrl = 'https://nuris.or.id/' . $imagePath;
            } elseif (strpos($imagePath, 'http') === 0) {
                $ogImageUrl = $imagePath;
            } else {
                $ogImageUrl = 'https://nuris.or.id/storage/' . $imagePath;
            }
        }
    }
    
    $twitterCard = \App\Models\SiteSetting::get('twitter_card', 'summary_large_image');
    
    // Determine logo URL for structured data and favicon
    $logoUrl = null;
    if ($heroLogo) {
        if (strpos($heroLogo, 'storage/') === 0) {
            $logoUrl = $baseUrl . '/' . $heroLogo;
        } else {
            $logoUrl = $baseUrl . '/storage/' . $heroLogo;
        }
    } else {
        $logoUrl = $baseUrl . '/img/logo/nuris-logo.png';
    }
    
    // Determine favicon URL
    $faviconUrl = null;
    if ($favicon && strpos($favicon, 'storage/') === 0) {
        $faviconUrl = $baseUrl . '/' . $favicon;
    } elseif ($favicon) {
        $faviconUrl = $baseUrl . '/' . $favicon;
    } else {
        $faviconUrl = $baseUrl . '/img/logo/nuris-favicon.png';
    }
    
    // Page-specific title (for non-homepage)
    // If article exists and this is an article detail page, use article title
    if ($isArticlePage) {
        $pageTitle = $article->title;
        $finalTitle = $pageTitle . ' | ' . $siteName;
    } else {
        $pageTitle = isset($title) ? $title . ' | Nuris' : null;
        $finalTitle = $pageTitle ? $officialWebsiteText . ' | ' . $pageTitle : ($officialWebsiteText . ' | Nuris');
    }
@endphp

<!-- Canonical URL -->
<link rel="canonical" href="{{ $canonicalUrl }}">

<title>{{ $finalTitle }}</title>

<!--=====FAB ICON & APPLE TOUCH ICON=======-->
<!-- Primary favicon for Google Search -->
<link rel="icon" type="image/x-icon" href="{{ $faviconUrl }}">
<link rel="shortcut icon" href="{{ $faviconUrl }}" type="image/x-icon">
<link rel="icon" href="{{ $faviconUrl }}" type="image/png">
<link rel="apple-touch-icon" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="57x57" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ $logoUrl }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ $logoUrl }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ $faviconUrl }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ $faviconUrl }}">
<link rel="manifest" href="{{ $baseUrl }}/site.webmanifest">

<!--=====META TAGS=======-->
@if($isArticlePage)
    @if($article->meta_description)
        <meta name="description" content="{{ $article->meta_description }}">
    @elseif($article->excerpt)
        <meta name="description" content="{{ strip_tags($article->excerpt) }}">
    @else
        <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($article->content), 160) }}">
    @endif
    <meta name="keywords" content="{{ $article->categoryModel ? $article->categoryModel->name . ', ' : '' }}{{ $article->tags->pluck('name')->implode(', ') }}, Website Resmi PP Nurul Islam Mojokerto, Pondok Pesantren Nurul Islam, Nuris Mojokerto">
@else
    <meta name="description" content="{{ $siteDescription }}">
    <meta name="keywords" content="Website Resmi PP Nurul Islam Mojokerto, Pondok Pesantren Nurul Islam, Nuris Mojokerto, Pendidikan Islam, Pesantren Mojokerto">
@endif
<meta name="theme-color" content="#1a472a">
<meta name="author" content="PP Nurul Islam Mojokerto">
<meta name="robots" content="index, follow">

<!--=====OPEN GRAPH / FACEBOOK=======-->
<meta property="og:type" content="{{ $isArticlePage ? 'article' : 'website' }}">
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:url" content="{{ $ogUrl }}">
<meta property="og:site_name" content="{{ $officialWebsiteText }}">
<meta property="og:locale" content="id_ID">
@if($isArticlePage)
    @if($article->author)
        <meta property="article:author" content="{{ $article->author }}">
    @endif
    @if($article->published_at)
        <meta property="article:published_time" content="{{ $article->published_at->toIso8601String() }}">
    @endif
    @if($article->categoryModel)
        <meta property="article:section" content="{{ $article->categoryModel->name }}">
    @endif
    @if($article->tags->count() > 0)
        @foreach($article->tags as $tag)
            <meta property="article:tag" content="{{ $tag->name }}">
        @endforeach
    @endif
@endif
@if($ogImageUrl && $isArticlePage)
    {{-- Use article featured image for article pages --}}
    <meta property="og:image" content="{{ $ogImageUrl }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
@elseif($ogImage && !$isArticlePage)
    {{-- Use custom OG image for non-article pages --}}
    <meta property="og:image" content="{{ $baseUrl }}/storage/{{ $ogImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
@elseif($logoUrl)
    {{-- Default: Use logo for homepage and other pages --}}
    <meta property="og:image" content="{{ $logoUrl }}">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
@endif

<!--=====TWITTER CARD=======-->
<meta name="twitter:card" content="{{ $twitterCard }}">
<meta name="twitter:title" content="{{ $ogTitle }}">
<meta name="twitter:description" content="{{ $ogDescription }}">
@if($ogImageUrl && $isArticlePage)
    {{-- Use article featured image for article pages --}}
    <meta name="twitter:image" content="{{ $ogImageUrl }}">
@elseif($ogImage && !$isArticlePage)
    {{-- Use custom OG image for non-article pages --}}
    <meta name="twitter:image" content="{{ $baseUrl }}/storage/{{ $ogImage }}">
@elseif($logoUrl)
    {{-- Default: Use logo for homepage and other pages --}}
    <meta name="twitter:image" content="{{ $logoUrl }}">
@endif

<!--=====STRUCTURED DATA (JSON-LD) FOR GOOGLE SEARCH=======-->
@php
    // Ensure logo URL is absolute and accessible
    $organizationLogoUrl = $logoUrl;
    if (!filter_var($organizationLogoUrl, FILTER_VALIDATE_URL)) {
        $organizationLogoUrl = 'https://nuris.or.id/' . ltrim(str_replace($baseUrl, '', $organizationLogoUrl), '/');
    }
    
    // Organization Schema - Primary
    $structuredData1 = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'PP Nurul Islam Mojokerto',
        'alternateName' => 'Nuris Mojokerto',
        'legalName' => 'Pondok Pesantren Nurul Islam Mojokerto',
        'description' => $officialWebsiteText,
        'url' => $ogUrl,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $organizationLogoUrl,
            'contentUrl' => $organizationLogoUrl
        ],
        'image' => $organizationLogoUrl,
        'sameAs' => [], // Add social media URLs here when available
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jl. Raya Jabontegal, Jabontegal',
            'addressLocality' => 'Mojokerto',
            'addressRegion' => 'Jawa Timur',
            'postalCode' => '61355',
            'addressCountry' => [
                '@type' => 'Country',
                'name' => 'ID'
            ]
        ]
    ];
    
    // WebSite Schema with SearchAction
    $structuredData2 = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $officialWebsiteText,
        'url' => $ogUrl,
        'description' => $siteDescription,
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'PP Nurul Islam Mojokerto',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $organizationLogoUrl
            ]
        ],
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => $ogUrl . '/search?q={search_term_string}'
            ],
            'query-input' => 'required name=search_term_string'
        ]
    ];
    
    // EducationalOrganization Schema
    $structuredData3 = [
        '@context' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => 'PP Nurul Islam Mojokerto',
        'alternateName' => 'Nuris Mojokerto',
        'legalName' => 'Pondok Pesantren Nurul Islam Mojokerto',
        'description' => $officialWebsiteText,
        'url' => $ogUrl,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $organizationLogoUrl,
            'contentUrl' => $organizationLogoUrl
        ],
        'image' => $organizationLogoUrl,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jl. Raya Jabontegal, Jabontegal',
            'addressLocality' => 'Mojokerto',
            'addressRegion' => 'Jawa Timur',
            'postalCode' => '61355',
            'addressCountry' => [
                '@type' => 'Country',
                'name' => 'ID'
            ]
        ]
    ];
    
    // Article Schema (if article exists and this is article detail page)
    $articleSchema = null;
    if ($isArticlePage) {
        $articleImageUrl = null;
        if ($article->featured_image) {
            $imagePath = $article->featured_image;
            if (strpos($imagePath, 'storage/') === 0) {
                $articleImageUrl = 'https://nuris.or.id/' . $imagePath;
            } elseif (strpos($imagePath, 'http') === 0) {
                $articleImageUrl = $imagePath;
            } else {
                $articleImageUrl = 'https://nuris.or.id/storage/' . $imagePath;
            }
        } else {
            $articleImageUrl = $organizationLogoUrl;
        }
        
        $articleSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $article->title,
            'description' => $article->excerpt ? strip_tags($article->excerpt) : \Illuminate\Support\Str::limit(strip_tags($article->content), 200),
            'image' => [
                '@type' => 'ImageObject',
                'url' => $articleImageUrl,
                'contentUrl' => $articleImageUrl
            ],
            'datePublished' => $article->published_at ? $article->published_at->toIso8601String() : $article->created_at->toIso8601String(),
            'dateModified' => $article->updated_at->toIso8601String(),
            'author' => [
                '@type' => 'Organization',
                'name' => $article->author ?: 'PP Nurul Islam Mojokerto',
                'url' => 'https://nuris.or.id'
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'PP Nurul Islam Mojokerto',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => $organizationLogoUrl
                ]
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => 'https://nuris.or.id/' . $article->slug
            ],
            'url' => 'https://nuris.or.id/' . $article->slug
        ];
        
        if ($article->categoryModel) {
            $articleSchema['articleSection'] = $article->categoryModel->name;
        }
        
        if ($article->tags->count() > 0) {
            $articleSchema['keywords'] = $article->tags->pluck('name')->implode(', ');
        }
    }
@endphp
<script type="application/ld+json">
{!! json_encode($structuredData1, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

<script type="application/ld+json">
{!! json_encode($structuredData2, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

<script type="application/ld+json">
{!! json_encode($structuredData3, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

@if($articleSchema)
<script type="application/ld+json">
{!! json_encode($articleSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif
