<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', array('title' => 'Blog')) ?>

    <?= $this->element('head_css') ?>
</head>

<body class="homepage1-body">

    <?= $this->element('loader') ?>

    <?= $this->element('header/navbar') ?>

    <?= $this->element('header/mobile_nav') ?>

    <!--===== BREADCRUMB AREA STARTS =======-->
    <section class="vl-breadcrumb" style="background-image: url(/img/breadcrumb/vl-blog-bg.png);">
        <div class="shape1"><img src="/img/breadcrumb/breadcrumb-shape-1.1.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.2.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.3.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vl-breadcrumb-title">
                        <h2 class="heading">Our Blog</h2>
                        <div class="vl-breadcrumb-list">
                            <span><a href="index">Home</a></span>
                            <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
                            <span><a class="active" href="#">Our Blog</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== BREADCRUMB AREA ENDS =======-->

    <!--===== BLOG AREA STARTS =======-->
    <section class="vl-blog-inner sp2">
        <div class="container">
            <div class="row">
                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blg-1.1.png" alt=""></a>
                        </div>

                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span>Kyle Miller</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Stories from the Field: Firsthand <br> Accounts of Disaster Relief</a></h3>
                            <p>Get inside look at the real-life experiences of <br> our teams ground from emergency response.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blog-inner-1.2.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Leg Colleen</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Tips for Disaster Preparedness: How <br> to Stay Safe and Ready</a></h3>
                            <p>Disasters strike unexpectedly you prepared? Explore practical tips and guides to protect.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blg-1.3.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Leg Colleen</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Partnering for Good: The Role of Collaboration in Crisis Relief</a></h3>
                            <p>Relief effort most effective we organization governments, & communities work together.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blog-inner-1.3.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Andrew Ncer</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Stories of Change: Inspiring Journeys <br> and Community Impact</a></h3>
                            <p>Our blog is a place to celebrate the stories, achievements, and impact that make our.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>



                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blog-inner-1.5.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Kay O'Reilly</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">"Making a Difference: Insights, News,<br> and Success Stories</a></h3>
                            <p>You’ll also find updates on ongoing projects, insights into our approach to charity work.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blog-inner-1.6.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Janice Russel</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Empowering Lives: Our Blog on Impact and Inspiration</a></h3>
                            <p>Whether you’re looking inspiration, staying informed, or eager to help make a difference.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blog-inner1.7.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Belinda Skiles</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Inspiring Change: Stories of Hope, <br> Impact, and Compassion</a></h3>
                            <p>At the core of our work lies the incredible stories of individuals, families, communities.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blog-inner1.8.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Emmerich V</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Building a Better Future: The Power <br> of Giving and Community Support</a></h3>
                            <p>At the core of every successful community is <br> the power of giving, whether through time.</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- single blog box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-blg-item mb-30">
                        <div class="vl-blg-thumb">
                            <a href="blog-single"><img class="w-100" src="/img/blog/vl-blog-inner1.9.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2025</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="/img/icons/vl-user-1.1.svg" alt=""></span> Juan Beahan</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single">Empowering Change: Stories, Insights, <br> and Updates from Our Mission</a></h3>
                            <p>Welcome to our blog, where every story and update is a testament to the difference .</p>
                            <a href="blog-single" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- pagination -->
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="theme-pagination thme-pagination-mt text-center mt-18">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li><a class="active" href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li>...</li>
                            <li><a href="#">12</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== BLOG AREA ENDS =======-->

    <?= $this->element('cta') ?>

    <?= $this->element('footer') ?>

    <?= $this->element('footer_scripts') ?>

</body>

</html>
