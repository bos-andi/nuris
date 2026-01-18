<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@php
    // Gunakan URL dari request saat ini untuk asset
    $baseUrl = request()->getSchemeAndHttpHost();
    $siteName = \App\Models\SiteSetting::get('site_name', 'PP. Nurul Islam');
    $siteDescription = \App\Models\SiteSetting::get('site_description', 'Pondok Pesantren Nurul Islam Mojokerto');
    $favicon = \App\Models\SiteSetting::get('favicon', 'img/logo/nuris-favicon.png');
    $heroLogo = \App\Models\SiteSetting::get('hero_logo');
    $ogTitle = \App\Models\SiteSetting::get('og_title', $siteName . ' - Pondok Pesantren Nurul Islam Mojokerto');
    $ogDescription = \App\Models\SiteSetting::get('og_description', $siteDescription);
    $ogImage = \App\Models\SiteSetting::get('og_image');
    $ogUrl = \App\Models\SiteSetting::get('og_url', $baseUrl);
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
@endphp
<title>{{ $title ?? $siteName }}</title>

<!--=====FAB ICON & APPLE TOUCH ICON=======-->
<link rel="shortcut icon" href="{{ $faviconUrl }}" type="image/x-icon">
<link rel="icon" href="{{ $faviconUrl }}" type="image/x-icon">
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
<meta name="keywords" content="Pondok Pesantren, Nurul Islam, Mojokerto, Pendidikan Islam, Pesantren">
<meta name="theme-color" content="#1a472a">

<!--=====OPEN GRAPH / FACEBOOK=======-->
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:url" content="{{ $ogUrl }}">
<meta property="og:site_name" content="{{ $siteName }}">
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
    $structuredData1 = [
        '@context' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => $siteName,
        'alternateName' => 'PP. Nurul Islam',
        'description' => $siteDescription,
        'url' => $ogUrl,
        'logo' => $logoUrl,
        'image' => $logoUrl,
        'sameAs' => [],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Mojokerto',
            'addressRegion' => 'Jawa Timur',
            'addressCountry' => 'ID'
        ],
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => $ogUrl . '/search?q={search_term_string}',
            'query-input' => 'required name=search_term_string'
        ]
    ];
    
    $structuredData2 = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $siteName,
        'url' => $ogUrl,
        'logo' => $logoUrl,
        'image' => $logoUrl,
        'description' => $siteDescription
    ];
@endphp
<script type="application/ld+json">
{!! json_encode($structuredData1, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

<script type="application/ld+json">
{!! json_encode($structuredData2, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
