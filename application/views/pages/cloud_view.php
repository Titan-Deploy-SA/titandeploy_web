<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Cloud Services Start -->
<!-- Section 1 -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?= $this->lang->line('cloud_services'); ?></h4>
            <h1 class="display-4 mb-4"><?= $this->lang->line('cloud_elevate'); ?></h1>
            <p class="mb-4"><?= $this->lang->line('cloud_harness'); ?></p>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="d-flex justify-content-center">
                <div class="service-img-inner">
                    <img src="<?php echo base_url("assets/img/cloud_1.png") ?>" class="img-fluid w-100"
                        alt="Cloud Services">
                </div>
            </div>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <h4 class="text-primary"><?= $this->lang->line('cloud_our_cloud'); ?></h4>
            <p class="mb-4"><?= $this->lang->line('cloud_we_provide'); ?></p>
            <ul class="list-unstyled">
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_cloud_migration'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_infrastructure'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_platform'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_software'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_cloud_backup'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_multicloud'); ?></li>
            </ul>
            <a href="<?php echo site_url('contact/') ?>"
                class="btn btn-primary py-3 px-4"><?= $this->lang->line('cloud_button_get_started'); ?></a>
        </div>
    </div>





</div>

<!-- Section 2 -->
<div class="container-fluid py-5">
    <div class="row g-5 pt-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <h4 class="text-primary"><?= $this->lang->line('cloud_our_development'); ?></h4>
            <p class="mb-4"><?= $this->lang->line('cloud_we_follow'); ?></p>
            <ol class="list-unstyled">
                <li class="mb-3"><strong><?= $this->lang->line('cloud_assessment'); ?></strong>
                    <?= $this->lang->line('cloud_analyzing'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('cloud_strategy'); ?></strong>
                    <?= $this->lang->line('cloud_developing'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('cloud_migration'); ?></strong>
                    <?= $this->lang->line('cloud_seamless'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('cloud_optimization'); ?></strong>
                    <?= $this->lang->line('cloud_fine'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('cloud_maintenance'); ?></strong>
                    <?= $this->lang->line('cloud_providing'); ?></li>
            </ol>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <img src="<?php echo base_url("assets/img/cloud_process.png") ?>" class="img-fluid w-100"
                alt="Cloud Services Process">
        </div>
    </div>




</div>

<!-- Section 3 -->
<div class="container-fluid bg-light py-5">
    <div class="row g-5 pt-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <img src="<?php echo base_url("assets/img/why_us.png") ?>" class="img-fluid w-100"
                alt="Benefits of Cloud Services">
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <h4 class="text-primary"><?= $this->lang->line('cloud_why_choose'); ?>?</h4>
            <p class="mb-4"><?= $this->lang->line('cloud_our_cloud'); ?></p>
            <ul class="list-unstyled">
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_enhanced'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_improved'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_cost_effective'); ?>
                </li>
                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_access'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('cloud_streamlined'); ?>
                </li>
            </ul>
            <a href="<?php echo site_url("contact/") ?>"
                class="btn btn-primary py-3 px-4"><?= $this->lang->line('cloud_button_discover_more'); ?></a>
        </div>
    </div>




</div>


<!-- Cloud Services End -->

<?php $this->load->view("include/footer") ?>