<?php $this->load->view("include/header") ?>


<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    
    <!-- Carousel Item 1 -->
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-white text-uppercase fw-bold mb-4"><?=$this->lang->line('home_carousel_welcome');?></h4>
                            <h1 class="display-1 text-white mb-4"><?=$this->lang->line('home_carousel_innovation');?></h1>
                            <p class="mb-5 fs-5">
                            <?=$this->lang->line('home_carousel_attitandeploy');?>
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <!-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                        class="fas fa-play-circle me-2"></i> Discover More</a> -->
                                <a  class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="<?php echo site_url("contact/") ?>"><?=$this->lang->line('home_button_getstarted');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                            <img src="<?php echo base_url('assets/img/innovation_software.png') ?>" class="img-fluid w-100"
                                alt="Custom Software Solutions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Item 2 -->
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                    <div class="col-lg-5 animated fadeInLeft">
                        <div class="calrousel-img">
                            <img src="<?php echo base_url('assets/img/ai_and_iot.png') ?>" class="img-fluid w-100"
                                alt="AI and IoT Solutions">
                        </div>
                    </div>
                    <div class="col-lg-7 animated fadeInRight">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-white text-uppercase fw-bold mb-4"><?=$this->lang->line('home_carousel_empower');?></h4>
                            <h1 class="display-1 text-white mb-4"><?=$this->lang->line('home_carousel_ai');?></h1>
                            <p class="mb-5 fs-5">
                            <?=$this->lang->line('home_carousel_leverage');?>
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="<?php echo site_url("about/") ?>"><i
                                        class="fas fa-play-circle me-2"></i> <?=$this->lang->line('home_button_explore');?></a>
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="<?php echo site_url("contact/") ?>"><?=$this->lang->line('home_button_contactus');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Item 3 -->
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-white text-uppercase fw-bold mb-4"><?=$this->lang->line('home_carousel_transforming');?></h4>
                            <h1 class="display-1 text-white mb-4"><?=$this->lang->line('home_carousel_fintech');?></h1>
                            <p class="mb-5 fs-5">
                            <?=$this->lang->line('home_carousel_drive');?>
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="<?php echo site_url("services/fintech") ?>"><i
                                        class="fas fa-play-circle me-2"></i> <?=$this->lang->line('home_button_learnmore');?></a>
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="<?php echo site_url("contact/") ?>"><?=$this->lang->line('home_button_contactus');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                            <img src="<?php echo base_url('assets/img/fintech_1.png') ?>" class="img-fluid w-100"
                                alt="FinTech Solutions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Carousel End -->

<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('home_feature_ourfeature');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('home_feature_empowering');?></h1>
            <p class="mb-0"><?=$this->lang->line('home_feature_wecombine');?></p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center"><?=$this->lang->line('home_feature_customsof');?></h4>
                    <p class="mb-4 text-center"><?=$this->lang->line('home_feature_tailored');?></p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/software") ?>"><?=$this->lang->line('home_button_learnmore');?></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-laptop-code fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center"><?=$this->lang->line('home_feature_webmobile');?></h4>
                    <p class="mb-4 text-center"><?=$this->lang->line('home_feature_building');?></p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/mobileapp") ?>"><?=$this->lang->line('home_button_learnmore');?></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-database fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center"><?=$this->lang->line('home_feature_services');?></h4>
                    <p class="mb-4 text-center"><?=$this->lang->line('home_feature_scalable');?></p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/cloud") ?>"><?=$this->lang->line('home_button_learnmore');?></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-chart-line fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center"><?=$this->lang->line('home_feature_fintech');?></h4>
                    <p class="mb-4 text-center"><?=$this->lang->line('home_feature_innovation');?></p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/fintech") ?>"><?=$this->lang->line('home_button_learnmore');?></a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Feature End -->

<!-- About Start -->
<div class="container-fluid bg-light about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary"><?=$this->lang->line('home_aboutstart_titandeploy');?></h4>
                    <h1 class="display-4 mb-4"><?=$this->lang->line('home_aboutstart_innovation');?></h1>
                    <p><?=$this->lang->line('home_aboutstart_attitandeploy');?>.</p>
                    <p><?=$this->lang->line('home_aboutstart_ourteam');?></p>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i><?=$this->lang->line('home_aboutstart_tailored');?></p>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i><?=$this->lang->line('home_aboutstart_expertise');?></p>
                    <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i><?=$this->lang->line('home_aboutstart_atrusted');?></p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo site_url("about/") ?>"><?=$this->lang->line('home_button_moreinfo');?></a>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="rounded bg-light">
                                <img src="<?php echo base_url('assets/img/about.png') ?>"
                                    class="img-fluid rounded w-100" alt="About TitanDeploy">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">200</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark"><?=$this->lang->line('home_aboutstart_projects');?></h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">50</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark"><?=$this->lang->line('home_aboutstart_global');?></h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">150</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark"><?=$this->lang->line('home_aboutstart_skilled');?></h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">300</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark"><?=$this->lang->line('home_aboutstart_successful');?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

<!-- Service Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('home_ourservices');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('home_ourservices_delivering');?></h1>
            <p class="mb-0"><?=$this->lang->line('home_ourservices_titandeploy');?></p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/custom_software_1.png') ?>"
                            class="img-fluid rounded-top w-100" alt="Custom Software Development">
                        <div class="service-icon p-3">
                            <i class="fa fa-code fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4"><?=$this->lang->line('home_ourservices_custom');?></a>
                            <p class="mb-4"><?=$this->lang->line('home_ourservices_wedesign');?></p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#"><?=$this->lang->line('home_button_learnmore');?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/cloud_1.png') ?>" class="img-fluid rounded-top w-100"
                            alt="Cloud Solutions">
                        <div class="service-icon p-3">
                            <i class="fa fa-database fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4"><?=$this->lang->line('home_feature_services');?></a>
                            <p class="mb-4"><?=$this->lang->line('home_feature_scalable');?></p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#"><?=$this->lang->line('home_button_learnmore');?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/fintech_sol_1.png') ?>" class="img-fluid rounded-top w-100"
                            alt="FinTech Solutions">
                        <div class="service-icon p-3">
                            <i class="fa fa-university fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4"><?=$this->lang->line('home_ourservices_fintech');?></a>
                            <p class="mb-4"><?=$this->lang->line('home_ourservices_revolutionize');?></p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#"><?=$this->lang->line('home_button_learnmore');?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/iot_1.png') ?>" class="img-fluid rounded-top w-100"
                            alt="IoT Integration">
                        <div class="service-icon p-3">
                            <i class="fa fa-cogs fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4"><?=$this->lang->line('home_ourservices_iot');?></a>
                            <p class="mb-4"><?=$this->lang->line('home_ourservices_unlock');?></p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#"><?=$this->lang->line('home_button_learnmore');?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo site_url("about/") ?>"><?=$this->lang->line('home_button_exploremore');?></a>
            </div>
        </div>

    </div>
</div>

<!-- Service End -->

<!-- FAQs Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <h4 class="text-primary"><?=$this->lang->line('home_faqs_some');?></h4>
                        <h1 class="display-4 mb-0"><?=$this->lang->line('home_faqs_about_titandeploy');?></h1>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <?=$this->lang->line('home_faqs_what_services');?>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body rounded">
                                <?=$this->lang->line('home_faqs_titandeploy_spec');?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?=$this->lang->line('home_faqs_how_can');?>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?=$this->lang->line('home_faqs_we_offer');?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?=$this->lang->line('home_faqs_what_industries');?>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?=$this->lang->line('home_faqs_we_work');?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <?=$this->lang->line('home_faqs_how_does');?>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?=$this->lang->line('home_faqs_at_titandeploy');?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <?=$this->lang->line('home_faqs_can_titandeploy');?>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <?=$this->lang->line('home_faqs_yes_we');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url('assets/img/faq.png') ?>" class="img-fluid w-100"
                    alt="Titandeploy Services">
            </div>
        </div>
    </div>
</div>

<!-- FAQs End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('home_from_blog');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('home_blog_news');?></h1>
            <p class="mb-0"><?=$this->lang->line('home_blog_stay');?></p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <!-- Blog 1: AI in Business -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/ai_business.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span><?=$this->lang->line('home_blog_ai');?></span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> <?=$this->lang->line('home_blog_30_dec');?></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> <?=$this->lang->line('home_blog_6_comm');?></div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"><?=$this->lang->line('home_blog_howai');?></a>
                            <p class="mb-3"><?=$this->lang->line('home_blog_learn');?></p>
                            <a href="<?php echo site_url('blog/detail/1') ?>" class="btn p-0"><?=$this->lang->line('home_blog_read');?> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 2: AI in Development -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/ai_development.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span><?=$this->lang->line('home_blog2_ai');?></span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> <?=$this->lang->line('home_blog_30_dec');?></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> <?=$this->lang->line('home_blog_6_comm');?></div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"><?=$this->lang->line('home_blog2_integrating');?></a>
                            <p class="mb-3"><?=$this->lang->line('home_blog2_a_guide');?></p>
                            <a href="<?php echo site_url('blog/detail/2') ?>" class="btn p-0"><?=$this->lang->line('home_blog_read');?> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 3: DevFest Guinée -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/tech_events.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span><?=$this->lang->line('home_blog3_tech');?></span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> <?=$this->lang->line('home_blog_30_dec');?></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> <?=$this->lang->line('home_blog_6_comm');?></div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"></span> <?=$this->lang->line('home_blog_supporting');?>
                                </a>
                            <p class="mb-3"><?=$this->lang->line('home_blog_this_year');?> </p>
                            <a href="<?php echo site_url('blog/detail/3') ?>" class="btn p-0"><?=$this->lang->line('home_blog_read');?> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Blog End -->



<?php $this->load->view("include/footer") ?>