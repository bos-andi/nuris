<!--===== Scroll Top =======-->
<div class="paginacontainer">
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
</div>

<!--===== JS SCRIPT LINK =======-->
@php
    // Pastikan baseUrl tersedia, gunakan fallback jika tidak ada
    $baseUrl = $baseUrl ?? request()->getSchemeAndHttpHost();
    $baseUrl = rtrim($baseUrl, '/');
@endphp
<script src="{{ $baseUrl }}/js/plugins/jquery-3.7.1.min.js"></script>
<script src="{{ $baseUrl }}/js/plugins/bootstrap.min.js"></script>
<script src="{{ $baseUrl }}/js/plugins/fontawesome.js"></script>
<script src="{{ $baseUrl }}/js/plugins/aos.js"></script>
<script src="{{ $baseUrl }}/js/plugins/counter.js"></script>
<script src="{{ $baseUrl }}/js/plugins/sidebar.js"></script>
<script src="{{ $baseUrl }}/js/plugins/magnific-popup.js"></script>
<script src="{{ $baseUrl }}/js/plugins/mobilemenu.js"></script>
<script src="{{ $baseUrl }}/js/plugins/owlcarousel.min.js"></script>
<script src="{{ $baseUrl }}/js/plugins/swiper-bundle.min.js"></script>
<script src="{{ $baseUrl }}/js/plugins/nice-select.js"></script>
<script src="{{ $baseUrl }}/js/plugins/jquery.counterup.min.js"></script>
<script src="{{ $baseUrl }}/js/plugins/waypoints.js"></script>
<script src="{{ $baseUrl }}/js/plugins/slick-slider.js"></script>
<script src="{{ $baseUrl }}/js/plugins/circle-progress.js"></script>
<script src="{{ $baseUrl }}/js/plugins/gsap.min.js"></script>
<script src="{{ $baseUrl }}/js/plugins/ScrollTrigger.min.js"></script>
<script src="{{ $baseUrl }}/js/plugins/Splitetext.js"></script>
<script src="{{ $baseUrl }}/js/plugins/lightbox.js"></script>
<script src="{{ $baseUrl }}/js/main.js"></script>

@stack('scripts')

