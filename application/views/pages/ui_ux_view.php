<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- UI/UX Design Start -->
<!-- Section 1 -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?= $this->lang->line('uiux_uxui_design'); ?></h4>
            <h1 class="display-4 mb-4"><?= $this->lang->line('uiux_crafting'); ?></h1>
            <p class="mb-4"><?= $this->lang->line('uiux_delivering'); ?></p>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="d-flex justify-content-center">
                <div class="service-img-inner">
                    <img src="<?php echo base_url("assets/img/ui_ux_services.png") ?>" class="img-fluid w-100"
                        alt="UI/UX Design">
                </div>
            </div>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <h4 class="text-primary"><?= $this->lang->line('uiux_our_uiux_services'); ?></h4>
            <p class="mb-4"><?= $this->lang->line('uiux_we_provide'); ?></p>
            <ul class="list-unstyled">
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_user_research'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_wireframing'); ?></li>
                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_visual'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_interaction'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_usability'); ?>
                </li>
            </ul>
            <a href="<?php echo site_url('contact/') ?>"
                class="btn btn-primary py-3 px-4"><?= $this->lang->line('uiux_button_lets'); ?></a>
        </div>
    </div>





</div>

<!-- Section 2 -->
<div class="container-fluid py-5">
    <div class="row g-5 pt-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <h4 class="text-primary"><?= $this->lang->line('uiux_our_design'); ?></h4>
            <p class="mb-4"><?= $this->lang->line('uiux_we_follow'); ?></p>
            <ol class="list-unstyled">
                <li class="mb-3"><strong><?= $this->lang->line('uiux_discovery'); ?></strong>
                    <?= $this->lang->line('uiux_understanding'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('uiux_research'); ?></strong>
                    <?= $this->lang->line('uiux_conducting'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('uiux_design'); ?></strong>
                    <?= $this->lang->line('uiux_creating'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('uiux_validation'); ?></strong>
                    <?= $this->lang->line('uiux_testing'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('uiux_delivery'); ?></strong>
                    <?= $this->lang->line('uiux_implement'); ?></li>
            </ol>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <img src="<?php echo base_url("assets/img/uiux-process.png") ?>" class="img-fluid w-100"
                alt="UI/UX Design Process">
        </div>
    </div>




</div>

<!-- Section 3 -->
<div class="container-fluid bg-light py-5">
            <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="<?php echo base_url("assets/img/why_us.png") ?>" class="img-fluid w-100"
                    alt="Benefits of UI/UX Design">
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary"><?= $this->lang->line('uiux_why_choose_us'); ?></h4>
                <p class="mb-4"><?= $this->lang->line('uiux_our_designs'); ?></p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i
                            class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_user_centric'); ?>
                    </li>
                    <li class="mb-3"><i
                            class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_innovation'); ?></li>
                    <li class="mb-3"><i
                            class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_focus'); ?>
                    </li>
                    <li class="mb-3"><i
                            class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_streamlined'); ?></li>
                    <li class="mb-3"><i
                            class="fa fa-check text-primary me-2"></i><?= $this->lang->line('uiux_enhanced'); ?></li>
                </ul>
                <a href="<?php echo site_url("contact/") ?>"
                    class="btn btn-primary py-3 px-4"><?= $this->lang->line('uiux_button_get_in'); ?></a>
            </div>
        </div>




</div>



<!-- UI/UX Design End -->

<?php $this->load->view("include/footer") ?>