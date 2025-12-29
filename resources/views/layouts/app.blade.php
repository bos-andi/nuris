<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $siteName = \App\Models\SiteSetting::get('site_name', 'PP. Nurul Islam');
        $pageTitle = isset($title) ? $title : $siteName;
    @endphp
    @include('partials.title_meta', ['title' => $pageTitle])
    @include('partials.head_css')
</head>

<body class="homepage1-body">
    @include('partials.loader')
    @include('partials.header.navbar')
    @include('partials.header.mobile_nav')

    @yield('content')

    @include('partials.footer')
    @include('partials.footer_scripts')
</body>

</html>

