<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Custom Software Development Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('services_custom');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('services_custom_tailored');?></h1>
            <p class="mb-4"><?=$this->lang->line('services_custom_our_exp');?></p>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center">
                    <div class="service-img-inner">
                        <img src="<?php echo base_url("assets/img/custom_software.png") ?>" class="img-fluid w-100" alt="Custom Software Development">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?=$this->lang->line('services_custom_our_services');?></h4>
                <p class="mb-4"><?=$this->lang->line('services_custom_we_provide');?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_application');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_enterprise');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_cloud');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_api');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_software');?></li>
                </ul>
                <p class="mb-4"><?=$this->lang->line('services_custom_partner');?></p>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4"><?=$this->lang->line('services_custom_button_get');?></a>
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary"><?=$this->lang->line('services_custom_our_dev');?></h4>
                <p class="mb-4"><?=$this->lang->line('services_custom_we_follow');?></p>
                <ol class="list-unstyled">
                    <li class="mb-3"><strong><?=$this->lang->line('services_custom_requirement');?></strong> <?=$this->lang->line('services_custom_understanding');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_custom_planning');?></strong> <?=$this->lang->line('services_custom_creating');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_custom_design');?></strong> <?=$this->lang->line('services_custom_crafting');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_custom_development');?></strong> <?=$this->lang->line('services_custom_building');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_custom_testing');?></strong> <?=$this->lang->line('services_custom_ensuring');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_custom_deploy');?></strong> <?=$this->lang->line('services_custom_launch');?></li>
                    <li class="mb-3"><strong><?=$this->lang->line('services_custom_maintenance');?></strong> <?=$this->lang->line('services_custom_providing');?></li>
                </ol>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url("assets/img/custom_software_process.png") ?>" class="img-fluid w-100" alt="Development Process">
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="<?php echo base_url('assets/img/contact.png') ?>" class="img-fluid w-100" alt="Software Benefits">
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?=$this->lang->line('services_custom_why_choose');?></h4>
                <p class="mb-4"><?=$this->lang->line('services_custom_we_are');?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_enhanced');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_scalability');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_cost');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_improved');?></li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?=$this->lang->line('services_custom_data');?></li>
                </ul>
                <p class="mb-4"><?=$this->lang->line('services_custom_let_us');?></p>
                <a href="contact" class="btn btn-primary py-3 px-4"><?=$this->lang->line('services_custom_button_start');?></a>
            </div>
        </div>
    </div>
</div>
<!-- Custom Software Development End -->

<?php $this->load->view("include/footer") ?>
