<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('title_meta', array('title' => 'Faq')) ?>

    <?= $this->element('head_css') ?>
</head>

<body class="homepage1-body">

    <?= $this->element('loader') ?>

    <?= $this->element('header/navbar') ?>

    <?= $this->element('header/mobile_nav') ?>


    <!--===== BREADCRUMB AREA STARTS =======-->
    <section class="vl-breadcrumb" style="background-image: url(/img/breadcrumb/vl-faq-bg.png);">
        <div class="shape1"><img src="/img/breadcrumb/breadcrumb-shape-1.1.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.2.png" alt=""></div>
        <div class="shape2"><img src="/img/breadcrumb/breadcrumb-shape-1.3.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vl-breadcrumb-title">
                        <h2 class="heading">FAQ’s</h2>
                        <div class="vl-breadcrumb-list">
                            <span><a href="index">Home</a></span>
                            <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
                            <span><a class="active" href="#">FAQ’s</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== BREADCRUMB AREA ENDS =======-->

    <!--===== FAQ AREA STARTS =======-->
    <section class="vl-faq-inner sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h2 class="title mb-60 text-center">Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="vl-tab-item">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active mrf-16" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link mrf-16" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Business</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Finance</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="vl-faq-accordion">
                        <div class="row">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordion" id="accordionExample">
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            How can I volunteer with your organization?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Is my donation tax-deductible?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            How are donations used?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading4">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                            Can I make a recurring monthly donation?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading5">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                            You offer corporate partnership opportunities?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading6">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                            Do you offer services for small businesses?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading7">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                            Can I donate items instead of money?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordion" id="accordionExample1">
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading8">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                                            Is it possible to volunteer remotely?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading9">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                                            Can I spread awareness about your mission?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading10">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                                            You collaborate other charities or nonprofits?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading11">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                            Are there options for legacy or planned giving?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading12">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                            What types of events does the organization host?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading13">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                            Are there options for legacy or planned giving?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading14">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                                            How do I sponsor a specific project or campaign?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample1">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordion" id="accordionExample2">
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading15">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                                            How can I volunteer with your organization?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse15" class="accordion-collapse collapse show" aria-labelledby="heading15" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading16">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                                            Is my donation tax-deductible?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading17">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                                            How are donations used?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading18">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                                            Can I make a recurring monthly donation?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading19">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                                            You offer corporate partnership opportunities?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading20">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                                            Do you offer services for small businesses?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading21">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                                            Can I donate items instead of money?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordion" id="accordionExample3">
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading22">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                                            Is it possible to volunteer remotely?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading23">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                                            Can I spread awareness about your mission?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23" data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading24">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                                            You collaborate other charities or nonprofits?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24" data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading25">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                                            Are there options for legacy or planned giving?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25" data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading26">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                                            What types of events does the organization host?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26" data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading27">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                                            Are there options for legacy or planned giving?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27" data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading28">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                                            How do I sponsor a specific project or campaign?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28" data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordion" id="accordionExample4">
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading29">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="true" aria-controls="collapse29">
                                                            How can I volunteer with your organization?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse29" class="accordion-collapse collapse show" aria-labelledby="heading29" data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading30">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                                            Is my donation tax-deductible?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="heading30" data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading31">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                                            How are donations used?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="heading31" data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading32">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                                            Can I make a recurring monthly donation?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32" data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading33">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                                            You offer corporate partnership opportunities?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33" data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading34">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                                            Do you offer services for small businesses?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34" data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading35">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                                            Can I donate items instead of money?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35" data-bs-parent="#accordionExample4">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="accordion" id="accordionExample5">
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading36">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                                            Is it possible to volunteer remotely?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse36" class="accordion-collapse collapse" aria-labelledby="heading36" data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading37">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                                            Can I spread awareness about your mission?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse37" class="accordion-collapse collapse" aria-labelledby="heading37" data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading38">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                                            You collaborate other charities or nonprofits?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse38" class="accordion-collapse collapse" aria-labelledby="heading38" data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading39">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                                            Are there options for legacy or planned giving?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse39" class="accordion-collapse collapse" aria-labelledby="heading39" data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading40">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                                            What types of events does the organization host?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse40" class="accordion-collapse collapse" aria-labelledby="heading40" data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading41">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                                            Are there options for legacy or planned giving?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse41" class="accordion-collapse collapse" aria-labelledby="heading41" data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vl-accordion-item">
                                                    <h2 class="accordion-header" id="heading42">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                                            How do I sponsor a specific project or campaign?
                                                        </button>
                                                    </h2>
                                                    <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42" data-bs-parent="#accordionExample5">
                                                        <div class="accordion-body">
                                                            <p>We understand that you may have questions about our <br> mission, how donations are used, & ways you can get.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== FAQ AREA ENDS =======-->

    <?= $this->element('cta') ?>

    <?= $this->element('footer') ?>

    <?= $this->element('footer_scripts') ?>

</body>

</html>
