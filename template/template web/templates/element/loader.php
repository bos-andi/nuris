<!--===== PRELOADER STARTS =======-->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon">
            <?php if (isset($logo2)): ?>
                <img src="/img/preloader/vl-preloader-1.2.png" alt="">
            <?php elseif (isset($logo3)): ?>
                <img src="/img/preloader/vl-preloader-1.3.png" alt="">
            <?php elseif (isset($logo4)): ?>
                <img src="/img/preloader/vl-preloader-1.4.png" alt="">
            <?php elseif (isset($logo5)): ?>
                <img src="/img/preloader/vl-preloader-1.5.png" alt="">
            <?php else: ?>
                <img src="/img/preloader/vl-preloader-1.1.png" alt="">
            <?php endif; ?>

        </div>
    </div>
</div>
<!--=====PRELOADER END=======-->
