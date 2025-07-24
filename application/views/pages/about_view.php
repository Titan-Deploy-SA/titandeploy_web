<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>



<!-- Feature End -->

<!-- About Start -->
<div class="container-fluid bg-light about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary"><?=$this->lang->line('home_aboutstart_titandeploy');?></h4>
                    <h1 class="display-4 mb-4"><?=$this->lang->line('home_aboutstart_innovation');?></h1>
                    <p><?=$this->lang->line('home_aboutstart_attitandeploy');?></p>
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
                        <i class="fas fa-cloud fa-3x"></i>
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
                        <img src="<?php echo base_url('assets/img/innovation_software.png') ?>"
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
                        <img src="<?php echo base_url('assets/img/cloud.png') ?>" class="img-fluid rounded-top w-100"
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
                        <img src="<?php echo base_url('assets/img/fintech_1.png') ?>" class="img-fluid rounded-top w-100"
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
                        <img src="<?php echo base_url('assets/img/ai_and_iot.png') ?>" class="img-fluid rounded-top w-100"
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

<?php $this->load->view("include/footer") ?>
