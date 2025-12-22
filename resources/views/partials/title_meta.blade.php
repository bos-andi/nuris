<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@php
    $siteName = \App\Models\SiteSetting::get('site_name', 'PP. Nurul Islam');
    $siteDescription = \App\Models\SiteSetting::get('site_description', 'Pondok Pesantren Nurul Islam Mojokerto');
    $favicon = \App\Models\SiteSetting::get('favicon', 'img/logo/nuris-favicon.png');
    $ogTitle = \App\Models\SiteSetting::get('og_title', $siteName . ' - Pondok Pesantren Nurul Islam Mojokerto');
    $ogDescription = \App\Models\SiteSetting::get('og_description', $siteDescription);
    $ogImage = \App\Models\SiteSetting::get('og_image');
    $ogUrl = \App\Models\SiteSetting::get('og_url', config('app.url'));
    $twitterCard = \App\Models\SiteSetting::get('twitter_card', 'summary_large_image');
@endphp
<title>{{ $title ?? $siteName }}</title>

<!--=====FAB ICON=======-->
@if($favicon && strpos($favicon, 'storage/') === 0)
    <link rel="shortcut icon" href="{{ asset($favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset($favicon) }}" type="image/x-icon">
@else
    <link rel="shortcut icon" href="{{ asset($favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset($favicon) }}" type="image/x-icon">
@endif

<!--=====META TAGS=======-->
<meta name="description" content="{{ $siteDescription }}">
<meta name="keywords" content="Pondok Pesantren, Nurul Islam, Mojokerto, Pendidikan Islam, Pesantren">

<!--=====OPEN GRAPH / FACEBOOK=======-->
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:url" content="{{ $ogUrl }}">
@if($ogImage)
    <meta property="og:image" content="{{ asset('storage/' . $ogImage) }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
@endif
<meta property="og:site_name" content="{{ $siteName }}">

<!--=====TWITTER CARD=======-->
<meta name="twitter:card" content="{{ $twitterCard }}">
<meta name="twitter:title" content="{{ $ogTitle }}">
<meta name="twitter:description" content="{{ $ogDescription }}">
@if($ogImage)
    <meta name="twitter:image" content="{{ asset('storage/' . $ogImage) }}">
@endif

