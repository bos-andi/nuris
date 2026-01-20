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
    
    // OG Values
    $ogUrl = 'https://nuris.or.id';
    $ogTitle = $officialWebsiteText;
    $ogDescription = $officialWebsiteText . ' – sumber informasi resmi Pondok Pesantren Nurul Islam Mojokerto.';
    
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
    $pageTitle = isset($title) ? $title . ' | Nuris' : null;
    $finalTitle = $pageTitle ? $officialWebsiteText . ' | ' . $pageTitle : ($officialWebsiteText . ' | Nuris');
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
<meta name="description" content="{{ $siteDescription }}">
<meta name="keywords" content="Website Resmi PP Nurul Islam Mojokerto, Pondok Pesantren Nurul Islam, Nuris Mojokerto, Pendidikan Islam, Pesantren Mojokerto">
<meta name="theme-color" content="#1a472a">
<meta name="author" content="PP Nurul Islam Mojokerto">
<meta name="robots" content="index, follow">

<!--=====OPEN GRAPH / FACEBOOK=======-->
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:url" content="{{ $ogUrl }}{{ request()->getPathInfo() }}">
<meta property="og:site_name" content="{{ $officialWebsiteText }}">
<meta property="og:locale" content="id_ID">
@if($logoUrl)
    <meta property="og:image" content="{{ $logoUrl }}">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
@endif
@if($ogImage)
    <meta property="og:image" content="{{ $baseUrl }}/storage/{{ $ogImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
@endif

<!--=====TWITTER CARD=======-->
<meta name="twitter:card" content="{{ $twitterCard }}">
<meta name="twitter:title" content="{{ $ogTitle }}">
<meta name="twitter:description" content="{{ $ogDescription }}">
@if($logoUrl)
    <meta name="twitter:image" content="{{ $logoUrl }}">
@endif
@if($ogImage)
    <meta name="twitter:image" content="{{ $baseUrl }}/storage/{{ $ogImage }}">
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
