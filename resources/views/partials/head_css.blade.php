<!--===== CSS LINK =======-->
@php
    // Pastikan baseUrl tersedia, gunakan fallback jika tidak ada
    $baseUrl = $baseUrl ?? request()->getSchemeAndHttpHost();
    $baseUrl = rtrim($baseUrl, '/');
@endphp
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/bootstrap.min.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/aos.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/fontawesome.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/magnific-popup.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/mobile.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/owlcarousel.min.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/sidebar.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/slick-slider.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/nice-select.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/plugins/lightbox.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/main.css">
<link rel="stylesheet" href="{{ $baseUrl }}/css/custom-navbar.css">

