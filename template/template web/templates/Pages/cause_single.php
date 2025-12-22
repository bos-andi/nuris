<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', array('title' => 'Cause Single')) ?>

    <?= $this->element('head_css') ?>
</head>

<body class="homepage1-body">

    <?= $this->element('loader') ?>

    <?= $this->element('header/navbar') ?>

    <?= $this->element('header/mobile_nav') ?>

    <!--===== BREADCRUMB AREA STARTS =======-->
    <section class="vl-breadcrumb" style="background-image: url(/img/breadcrumb/vl-cause-left-bg.png);">
        <div class="shape1"><img src="/img/breadcrumb/breadcrumb-shape-1.1.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.2.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.3.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vl-breadcrumb-title">
                        <h2 class="heading">Causes Details</h2>
                        <div class="vl-breadcrumb-list">
                            <span><a href="index">Home</a></span>
                            <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
                            <span><a class="active" href="#">Causes Details</a></span>
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
                <div class="col-lg-8 mx-auto">
                    <div class="vl-event-content-area">
                        <div class="vl-large-thumb">
                            <img class="w-100" src="/img/cause/vl-cause-learge-thumb.png" alt="">
                        </div>

                        <div class="vl-event-box-bg cause-box-bg">
                            <div class="row">
                                <div class="skill-progress">
                                    <div class="skill-box">
                                        <div class="skill-bar">
                                            <span class="skill-per html">
                                                <span class="tooltipp">16%</span>
                                            </span>
                                        </div>
                                        <div class="skill-vlue">
                                            <div class="num1"><span>Goal: </span>$90,000</div>
                                            <div class="num1"><span>Raised: </span>$26,000</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="display-amount" id="displayAmount">$10</div>

                                <div class="amount-selector">
                                    <button class="button" onclick="selectAmount(this, 10)"><span><img src="/img/icons/dollar.svg" alt=""></span>10</button>
                                    <button class="button" onclick="selectAmount(this, 20)"><span><img src="/img/icons/dollar.svg" alt=""></span>20</button>
                                    <button class="button" onclick="selectAmount(this, 30)"><span><img src="/img/icons/dollar.svg" alt=""></span>30</button>
                                    <button class="button" onclick="selectAmount(this, 40)"><span><img src="/img/icons/dollar.svg" alt=""></span>40</button>
                                    <button class="button" onclick="selectAmount(this, 50)"><span><img src="/img/icons/dollar.svg" alt=""></span>50</button>
                                    <div class="custom-button" onclick="customAmount()">
                                        Custom Amount <span><img src="/img/icons/custom-amou.svg" alt=""></span>
                                    </div>
                                </div>

                                <!-- select method -->
                                <div class="space-div">
                                    <div class="select-method">
                                        <h4 class="title pb-32">Select Payment Method</h4>

                                        <!-- btn -->
                                        <div class="select-meth">
                                            <div class="online">
                                                <input type="radio" id="Online" name="fav_language" value="Online">
                                                <label for="Online">Online Donation</label><br>
                                            </div>

                                            <div class="ofline">
                                                <input type="radio" id="Offline" name="fav_language" value="Offline">
                                                <label for="Offline">Offline Donation</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- input field -->
                                <div class="donate-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 mb-20">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-20">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-20">
                                                <input type="email" placeholder="Email Address">
                                            </div>
                                        </div>


                                    </form>
                                    <div class="total-anoumt">
                                        <div class="toal">
                                            <div class="btn-area">
                                                <button class="header-btn1">Donate <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Donation Total: $10</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-content-area">
                            <h2 class="title">Hunger Relief and Food</h2>
                            <p class="para">Our causes reflect the diverse and pressing needs of communities worldwide. From supporting education and healthcare to providing disaster relief and environmental protection, each cause we champion is a step a more just & compassionate world.</p>

                            <p class="para">
                                We work closely with local partners to identify areas where our support can make the greatest impact, ensuring that every donation and effort goes directly toward creating.
                            </p>

                            <h2 class="title">Creating Lasting Impact Together</h2>
                            <p class="para">Our causes represent the heart of our mission, each one addressing critical need within our communities. From providing access to clean water & nutritious food to supporting education, healthcare, and disaster relief, we work tirelessly to uplift and empower.</p>


                            <h2 class="title">Transforming Lives and Communities</h2>
                            <p class="para">Every cause we champion is chosen for its potential to create meaningful, sustainable change and to build a foundation for a brighter, more equitable future. By focusing our efforts on these key areas, we’re able to drive long-term impact and support.</p>
                            <p class="para">Each cause we support reflects our commitment to addressing urgent needs & creating sustainable change. Our focus include providing access to clean water, supporting.</p>

                            <h2 class="title">Causes That Matter</h2>
                            <p class="para">By focusing our efforts on these key areas, we’re able to drive long-term impact and support the resilience of individuals and families worldwide. Join us as we continue to make a difference where it’s needed most, turning hope into action, one cause at a time.</p>

                            <p class="para">We’re able to drive long-term impact and support the resilience of individuals families worldwide. Join us as we continue to make a difference where it’s needed most, turning.</p>

                            <h2 class="title">Challenge</h2>
                            <p class="para">Vestibulum bandit libero at mauri's condiment scelerisque. In scelerisque in mauri's ut malassada. Nam so dales scelerisque ipsum sed vestibulum. Aliquam euismod mi vitae nibh placerat, nec auctor neque lacinia. Curabitur gravida orci purus.</p>
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
                        <h2 class="title">More Cause</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single cause box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-cause-box gray-bg mb-30">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="/img/cause/vl-cause-1.1.png" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="cause-single" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>

                        <div class="vl-cause-content">
                            <div class="vl-progress">
                                <div class="skill-progress">
                                    <div class="skill-box">
                                        <div class="skill-bar">
                                            <span class="skill-per html">
                                                <span class="tooltipp">16%</span>
                                            </span>
                                        </div>
                                        <div class="skill-vlue">
                                            <div class="num1"><span>Raised: </span>$13,000</div>
                                            <div class="num1"><span>Goal: </span>$85,000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="badge mt-32">Disasters</a>
                            <h3 class="title"><a href="cause-single">Medical And Assistance</a></h3>
                            <p>Access healthcare becomes a lifeline in times of crisis we offer medical.</p>
                        </div>
                    </div>
                </div>

                <!-- single cause box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-cause-box gray-bg mb-30">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="/img/cause/vl-cause-1.2.png" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="cause-single" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>

                        <div class="vl-cause-content">
                            <div class="vl-progress">
                                <div class="skill-progress">
                                    <div class="skill-box">
                                        <div class="skill-bar">
                                            <span class="skill-per html">
                                                <span class="tooltipp">16%</span>
                                            </span>
                                        </div>
                                        <div class="skill-vlue">
                                            <div class="num1"><span>Raised: </span>$26,000</div>
                                            <div class="num1"><span>Goal: </span>$90,000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="badge mt-32">Disasters</a>
                            <h3 class="title"><a href="cause-single">Hunger Relief and Food</a></h3>
                            <p>In the aftermath of a disaster access to nutritious food is often disrupted.</p>
                        </div>
                    </div>
                </div>

                <!-- single cause box -->
                <div class="col-lg-4 col-md-6">
                    <div class="vl-single-cause-box gray-bg mb-30">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="/img/cause/vl-cause-1.3.png" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="cause-single" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>

                        <div class="vl-cause-content">
                            <div class="vl-progress">
                                <div class="skill-progress">
                                    <div class="skill-box">
                                        <div class="skill-bar">
                                            <span class="skill-per html">
                                                <span class="tooltipp">24%</span>
                                            </span>
                                        </div>
                                        <div class="skill-vlue">
                                            <div class="num1"><span>Raised: </span>$13,701</div>
                                            <div class="num1"><span>Goal: </span>$60,000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="badge mt-32">Disasters</a>
                            <h3 class="title"><a href="cause-single">Shelter and Housing</a></h3>
                            <p>Rebuilding home & shelter essential for recovery we help restore safe.</p>
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
