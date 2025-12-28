<!--===== PRELOADER STARTS =======-->
@php
    $baseUrl = request()->getSchemeAndHttpHost();
@endphp
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon">
            <img src="{{ $baseUrl }}/img/logo/logo-nuris.png" alt="Logo PP. Nurul Islam">
        </div>
    </div>
</div>
<!--=====PRELOADER END=======-->

