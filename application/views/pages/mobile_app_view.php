<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Mobile App Development Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('mobile_app_dev');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('mobile_app_innovative');?></h1>
            <p class="mb-4"><?=$this->lang->line('mobile_app_we_specialize');?></p>
        </div>


        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center">
                    <div class="service-img-inner">
                        <img src="<?php echo base_url("assets/img/mobile_ app.png") ?>" class="img-fluid w-100" alt="Mobile App Development">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?=$this->lang->line('mobile_app_our_services');?></h4>
                <p class="mb-4"><?=$this->lang->line('mobile_app_we_provide');?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_ios');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_android');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_hybrid');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_progressive');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_maintenance');?></li>
                </ul>
                <p class="mb-4"><?=$this->lang->line('mobile_app_our_apps');?></p>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('mobile_app_button_get');?></a>
            </div>
        </div>


        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary"><?=$this->lang->line('mobile_app_our_development');?></h4>
                <p class="mb-4"><?=$this->lang->line('mobile_app_we_follow');?></p>
                <ol class="list-unstyled">
                    <li class="mb-3"><strong><?=$this->lang->line('mobile_app_requirement');?></strong> <?=$this->lang->line('mobile_app_understanding');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('mobile_app_concept');?></strong> <?=$this->lang->line('mobile_app_crafting');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('mobile_app_uiux');?></strong> <?=$this->lang->line('mobile_app_creating');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('mobile_app_development');?></strong> <?=$this->lang->line('mobile_app_building');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('mobile_app_testing');?></strong> <?=$this->lang->line('mobile_app_ensuring_quality');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('mobile_app_deployement');?></strong> <?=$this->lang->line('mobile_app_launching');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('mobile_app_optimization');?></strong> <?=$this->lang->line('mobile_app_offering');?></li>
                </ol>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url("assets/img/mobile_app_process.png") ?>" class="img-fluid w-100" alt="Mobile App Development Process">
            </div>
        </div>


        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="<?php echo base_url("assets/img/why_us.png") ?>" class="img-fluid w-100" alt="Mobile App Benefits">
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?=$this->lang->line('mobile_app_why_choose');?></h4>
                <p class="mb-4"><?=$this->lang->line('mobile_app_our_expertise');?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_custom');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_cross');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_focus');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_secure');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('mobile_app_continuous');?></li>
                </ul>
                <p class="mb-4"><?=$this->lang->line('mobile_app_let_us');?></p>
                <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('mobile_app_button_start');?></a>
            </div>
        </div>
    </div>
</div>
<!-- Mobile App Development End -->

<?php $this->load->view("include/footer") ?>
