<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', array('title' => 'Blog Right')) ?>

    <?= $this->element('head_css') ?>
</head>

<body class="homepage1-body">

    <?= $this->element('loader') ?>

    <?= $this->element('header/navbar') ?>

    <?= $this->element('header/mobile_nav') ?>

    <!--===== BREADCRUMB AREA STARTS =======-->
    <section class="vl-breadcrumb" style="background-image: url(/img/breadcrumb/vl-blog-left-bg.png);">
        <div class="shape1"><img src="/img/breadcrumb/breadcrumb-shape-1.1.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.2.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.3.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vl-breadcrumb-title">
                        <h2 class="heading">Our Blog Details</h2>
                        <div class="vl-breadcrumb-list">
                            <span><a href="index">Home</a></span>
                            <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
                            <span><a class="active" href="#">Our Blog Details</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== BREADCRUMB AREA ENDS =======-->

    <!-- sidebar area start -->
    <div class="vl-sidebar-area sp2">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="vl-event-content-area mr-50">
                        <div class="vl-large-thumb">
                            <img class="w-100" src="/img/blog/vl-blog-large-thumb-1.1.png" alt="">
                        </div>

                        <div class="vl-blog-meta-box mt-32">
                            <ul>
                                <li><a href="#"> <span><img src="/img/blog/vl-blog-auth-thumb-1.1.png" alt=""></span>Adil Rashid</a></li>
                                <li><a href="#"> <span class="icon"><img class="mt-4-" src="/img/icons/vl-calender-1.1.svg" alt=""></span> 8/10/2025</a></li>
                                <li><a href="#"> <span class="icon"><img class="mt-4-" src="/img/icons/vl-tags.svg" alt=""></span> Business And Finance</a></li>
                                <li><a href="#"> <span class="icon"><img class="mt-4-" src="/img/icons/vl-chatting-icon.svg" alt=""></span>2 comments</a></li>
                            </ul>
                        </div>
                        <div class="vl-event-content vl-blg-content">
                            <h2 class="title">Tips for Disaster Preparedness: How <br> to Stay Safe and Ready</h2>
                            <p class="para pb-16">Our blog is a space where we share the heart of our mission, offering an inside look at the incredible work being done and the lives being transformed through your support. Each post features real stories from the field, updates on our current projects. </p>
                            <p class="para pb-32">Whether you're learning about a new initiative, discovering how your donations are making an impact, or finding inspiration to get involved, our blog is here to connect.</p>
                        </div>
                        <div class="vl-blg-icon-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-box1 mb-30">
                                        <a href="blog-single" class="title">Mission and Vision</a>
                                        <p class="para">Join us on this journey & let continue making the world a better place.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-box1 mb-30">
                                        <a href="blog-single" class="title">A Journey of Impact</a>
                                        <p class="para">Our blog is more than just collection of updates it’s a platform for sharing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-content-area">
                            <h2 class="title">Join Us in Making a Difference</h2>
                            <p class="para">We invite you to join us, meet like-minded individuals, and become part of a movement that makes real, lasting change. Whether you attend, volunteer, or help spread the word, your involvement is invaluable. Explore our upcoming events.</p>

                            <h2 class="title">Event Highlights & Details</h2>
                            <p class="para">Our events are designed to unite passionate individuals, raise critical funds, & increase awareness for the causes we serve. Each event offers a unique opportunity to connect, contribute, and witness the power of community in action.</p>
                            <p class="para">Our events are opportunities to bring people together for meaningful causes, creating moments of connection and impact that extend far beyond the day itself.</p>


                            <h2 class="title">Upcoming Fundraisers and Community Events</h2>
                            <p class="para">From heartwarming charity dinners to hands-on volunteer days, these gatherings allow us to celebrate milestones, share stories of impact, and inspire further action. By joining us at our upcoming events, you’re not just attending you’re becoming part movement.</p>
                            <p class="para">Each event, whether a fundraiser, awareness campaign, volunteer drive, or community gathering, plays a vital role in supporting our mission and raising essential resources.</p>

                            <h2 class="title">Event Details and How to Participate</h2>
                            <p class="para">Whether you attend, volunteer, or help spread the word, your involvement is invaluable. Explore our upcoming events, find ways to get involved, and help us create brighter futures for those in need. Together, we can make an extraordinary impact!</p>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="vl-widget-area">
                        <!-- single widget -->
                        <div class="vl-search-widget mb-30">
                            <h3 class="title">Search</h3>
                            <div class="search p-relative">
                                <input type="text" placeholder="Search...">
                                <span>
                                    <img src="/img/icons/vl-search-icon.svg" alt="">
                                </span>
                            </div>
                        </div>

                        <!-- single widget -->
                        <div class="vl-search-widget mb-30">
                            <h3 class="title">Recent Blogs</h3>

                            <!-- rec blog -->
                            <div class="vl-rec-blog-flex">
                                <div class="vl-rec-blog-thumb">
                                    <img src="/img/blog/vl-blog-sm-thumb1.1.png" alt="">
                                </div>
                                <div class="vl-rec-blog-content">
                                    <div class="vl-rec-blog-date">
                                        <span><img src="/img/icons/vl-calender-1.1.svg" alt=""></span>
                                        <p class="dta-blg">10/10/2025</p>
                                    </div>
                                    <div class="vl-rec-blog-content-heading">
                                        <h3 class="tittle"><a href="blog-single">Stories from the Field:<br> Firsthand Accounts ....</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="vl-rec-blog-flex">
                                <div class="vl-rec-blog-thumb">
                                    <img src="/img/blog/vl-blog-sm-thumb1.2.png" alt="">
                                </div>
                                <div class="vl-rec-blog-content">
                                    <div class="vl-rec-blog-date">
                                        <span><img src="/img/icons/vl-calender-1.1.svg" alt=""></span>
                                        <p class="dta-blg">16/10/2025</p>
                                    </div>
                                    <div class="vl-rec-blog-content-heading">
                                        <h3 class="tittle"><a href="blog-single">Partnering for Good: <br> The Role of Collabor</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="vl-rec-blog-flex">
                                <div class="vl-rec-blog-thumb">
                                    <img src="/img/blog/vl-blog-sm-thumb1.3.png" alt="">
                                </div>
                                <div class="vl-rec-blog-content">
                                    <div class="vl-rec-blog-date">
                                        <span><img src="/img/icons/vl-calender-1.1.svg" alt=""></span>
                                        <p class="dta-blg">08/10/2025</p>
                                    </div>
                                    <div class="vl-rec-blog-content-heading">
                                        <h3 class="tittle"><a href="blog-single">Empowering Lives: <br> Our Blog on Impact ...</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="vl-rec-blog-flex">
                                <div class="vl-rec-blog-thumb">
                                    <img src="/img/blog/vl-blog-sm-thumb1.4.png" alt="">
                                </div>
                                <div class="vl-rec-blog-content">
                                    <div class="vl-rec-blog-date">
                                        <span><img src="/img/icons/vl-calender-1.1.svg" alt=""></span>
                                        <p class="dta-blg">07/10/2025</p>
                                    </div>
                                    <div class="vl-rec-blog-content-heading">
                                        <h3 class="tittle"><a href="blog-single">Building a Better <br> Future: The Power...</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single widget -->
                        <div class="vl-social-widget social-tags mb-30">
                            <h3 class="title">Popular Tags</h3>
                            <div class="vl-tags">
                                <ul>
                                    <li><a href="#">Financial Success</a></li>
                                    <li><a href="#">Business Growth</a></li>
                                    <li><a href="#">Strategic Planning</a></li>
                                    <li><a href="#">Management</a></li>
                                    <li><a href="#">Flow Solutions</a></li>
                                    <li><a href="#">Tax Optimization</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- single widget -->
                        <div class="vl-phone-widget mb-30">
                            <h3 class="title">If You Need Any Help <br> Contact With Us</h3>
                            <a href="#" class="phone"> <span><img src="/img/icons/vl-phone-event.svg" alt=""></span>+123 456 7890</a>
                        </div>

                        <!-- single widget -->
                        <div class="vl-social-widget mb-30">
                            <h3 class="title">Our Author</h3>

                            <div class="vl-blog-grid">
                                <a href="#"><img src="/img/blog/vl-auth-1.1.png" alt=""></a>
                                <a href="#"><img src="/img/blog/vl-auth-1.2.png" alt=""></a>
                                <a href="#"><img src="/img/blog/vl-auth-1.3.png" alt=""></a>
                                <a href="#"><img src="/img/blog/vl-auth-1.4.png" alt=""></a>




                            </div>
                        </div>

                        <!-- single widget -->
                        <div class="vl-social-widget mb-30">
                            <h3 class="title">Follow Us</h3>
                            <div class="social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar area end -->

    <section class="vl-singlevent-iner pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="more-title text-center mb-60">
                        <h2 class="title">More Blog</h2>
                    </div>
                </div>
            </div>
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
            </div>
        </div>
    </section>

    <?= $this->element('cta') ?>

    <?= $this->element('footer') ?>

    <?= $this->element('footer_scripts') ?>

</body>

</html>
