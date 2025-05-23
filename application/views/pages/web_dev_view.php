<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Web Development Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('services_web_develop');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('services_web_craft');?></h1>
            <p class="mb-4"><?=$this->lang->line('services_web_our_web');?></p>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center">
                    <div class="service-img-inner">
                        <img src="<?php echo base_url("assets/img/web.png") ?>" class="img-fluid w-100" alt="Web Development">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?=$this->lang->line('services_web_our_service');?></h4>
                <p class="mb-4"><?=$this->lang->line('services_web_we_offer');?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_responsive');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_ecomm');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_content');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_custom');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_website_main');?></li>
                </ul>
                <p class="mb-4"><?=$this->lang->line('services_custom_we_strive');?></p>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('services_custom_button_get_free');?></a>
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary"><?=$this->lang->line('services_custom_our_development');?></h4>
                <p class="mb-4"><?=$this->lang->line('services_custom_our_web');?></p>
                <ol class="list-unstyled">
                    <li class="mb-3"><strong><?=$this->lang->line('services_web_discovery');?></strong> <?=$this->lang->line('services_web_understanding');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_web_planning');?></strong> <?=$this->lang->line('services_web_defining');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_web_design');?></strong> <?=$this->lang->line('services_web_creating');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_web_development');?></strong> <?=$this->lang->line('services_web_building');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_web_testing');?></strong> <?=$this->lang->line('services_web_conducting');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_web_launch');?></strong> <?=$this->lang->line('services_web_deploying');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_web_optimization');?></strong> <?=$this->lang->line('services_web_providing');?></li>
                </ol>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url("assets/img/web_process.png") ?>" class="img-fluid w-100" alt="Web Development Process">
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="<?php echo base_url("assets/img/about.png") ?>" class="img-fluid w-100" alt="Web Development Benefits">
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?=$this->lang->line('services_web_why_choose');?></h4>
                <p class="mb-4"><?=$this->lang->line('services_web_here');?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_creative');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_mobile');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_seo');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_secure');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_web_dedicated');?></li>
                </ul>
                <p class="mb-4"><?=$this->lang->line('services_web_let_us');?> </p>
                <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('services_web_button_start');?></a>
            </div>
        </div>
    </div>
</div>
<!-- Web Development End -->

<?php $this->load->view("include/footer") ?>
