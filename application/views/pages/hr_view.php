<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- HR Recruitment Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('hire_hr_recruitement');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('hire_hire_top');?></h1>
            <p class="mb-4"><?=$this->lang->line('hire_we_connect');?></p>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center">
                    <div class="service-img-inner">
                        <img src="<?php echo base_url("assets/img/hr.png") ?>" class="img-fluid w-100" alt="HR Recruitment">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?=$this->lang->line('hire_types');?></h4>
                <p class="mb-4"><?=$this->lang->line('hire_our_network');?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_frontend');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_backend');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_mobile');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_full');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_devops');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_data');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_cloud');?></li>
                </ul>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('hire_button_start');?></a>
            </div>
        </div>
        
        <div class="row g-5 pt-5">
            <div class="col-xl-12">
                <h4 class="text-primary text-center mb-4"><?=$this->lang->line('hire_our_hiring');?></h4>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="process-step bg-white text-center border p-4">
                            <div class="process-icon mb-3">
                                <i class="fa fa-search text-primary display-4"></i>
                            </div>
                            <h5 class="mb-3"><?=$this->lang->line('hire_step1');?></h5>
                            <p><?=$this->lang->line('hire_we_work');?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="process-step bg-white text-center border p-4">
                            <div class="process-icon mb-3">
                                <i class="fa fa-user-check text-primary display-4"></i>
                            </div>
                            <h5 class="mb-3"><?=$this->lang->line('hire_step2');?></h5>
                            <p><?=$this->lang->line('hire_our_experts');?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="process-step bg-white text-center border p-4">
                            <div class="process-icon mb-3">
                                <i class="fa fa-handshake text-primary display-4"></i>
                            </div>
                            <h5 class="mb-3"><?=$this->lang->line('hire_step3');?></h5>
                            <p><?=$this->lang->line('hire_we_arrange');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 pt-5">
            <div class="col-xl-12">
                <h4 class="text-primary text-center mb-4"><?=$this->lang->line('hire_pricing_plan');?></h4>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="pricing-item bg-white text-center border p-4">
                            <h5 class="mb-3"><?=$this->lang->line('hire_junior_dev');?></h5>
                            <h1 class="display-5 mb-4"><?=$this->lang->line('hire_1000_month');?></h1>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_1_to_2_years');?></li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_front_back');?></li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_basic_project');?></li>
                            </ul>
                            <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('hire_button_get_started');?></a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-item bg-white text-center border p-4">
                            <h5 class="mb-3"><?=$this->lang->line('hire_middle_lev_dev');?></h5>
                            <h1 class="display-5 mb-4"><?=$this->lang->line('hire_2500_month');?></h1>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_3_to_5_years');?></li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_full_stack');?></li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_advanced_troble');?></li>
                            </ul>
                            <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('hire_button_get_started');?></a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pricing-item bg-white text-center border p-4">
                            <h5 class="mb-3"><?=$this->lang->line('hire_senior_dev');?></h5>
                            <h1 class="display-5 mb-4"><?=$this->lang->line('hire_4900_month');?></h1>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_6_years');?></li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_expert');?></li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('hire_leadership');?></li>
                            </ul>
                            <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('hire_button_get_started');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HR Recruitment End -->

<?php $this->load->view("include/footer") ?>
