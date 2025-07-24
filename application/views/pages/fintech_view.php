<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Fintech Solutions Start -->
<!-- Section 1 -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?= $this->lang->line('fintech_sol'); ?></h4>
            <h1 class="display-4 mb-4"><?= $this->lang->line('fintech_innovation'); ?></h1>
            <p class="mb-4"><?= $this->lang->line('fintech_empowering'); ?></p>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="d-flex justify-content-center">
                <div class="service-img-inner">
                    <img src="<?php echo base_url("assets/img/fintech.png") ?>" class="img-fluid w-100"
                        alt="Fintech Solutions">
                </div>
            </div>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <h4 class="text-primary"><?= $this->lang->line('fintech_our_fintech'); ?></h4>
            <p class="mb-4"><?= $this->lang->line('fintech_we_provide'); ?></p>
            <ul class="list-unstyled">
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_payment'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_mobile'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_blockchain'); ?></li>
                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_peer'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_financial'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_regtech'); ?>
                </li>
            </ul>
            <a href="<?php echo site_url('contact/') ?>"
                class="btn btn-primary py-3 px-4"><?= $this->lang->line('fintech_button_start'); ?></a>
        </div>
    </div>





</div>

<!-- Section 2 -->
<div class="container-fluid py-5">
    <div class="row g-5 pt-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <h4 class="text-primary"><?= $this->lang->line('fintech_our_development'); ?></h4>
            <p class="mb-4"><?= $this->lang->line('fintech_we_follow'); ?></p>
            <ol class="list-unstyled">
                <li class="mb-3"><strong><?= $this->lang->line('fintech_understanding'); ?></strong>
                    <?= $this->lang->line('fintech_collaboration'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('fintech_designing'); ?></strong>
                    <?= $this->lang->line('fintech_prioritizing'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('fintech_development'); ?></strong>
                    <?= $this->lang->line('fintech_building'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('fintech_testing'); ?></strong>
                    <?= $this->lang->line('fintech_Ensuring'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('fintech_deployment'); ?></strong>
                    <?= $this->lang->line('fintech_seamless'); ?></li>
                <li class="mb-3"><strong><?= $this->lang->line('fintech_continuous'); ?></strong>
                    <?= $this->lang->line('fintech_ongoing'); ?></li>
            </ol>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <img src="<?php echo base_url("assets/img/fintech_process.png") ?>" class="img-fluid w-100"
                alt="Fintech Development Process">
        </div>
    </div>




</div>

<!-- Section 3 -->
<div class="container-fluid bg-light py-5">
    <div class="row g-5 pt-5">
        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <img src="<?php echo base_url("assets/img/why_us.png") ?>" class="img-fluid w-100"
                alt="Benefits of Fintech Solutions">
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
            <h4 class="text-primary"><?= $this->lang->line('fintech_why_choose'); ?></h4>
            <p class="mb-4"><?= $this->lang->line('fintech_our_expertise'); ?></p>
            <ul class="list-unstyled">
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_enhanced'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_scalable'); ?></li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_personalized'); ?>
                </li>
                <li class="mb-3"><i
                        class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_integration'); ?>
                </li>
                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i><?= $this->lang->line('fintech_real'); ?>
                </li>
            </ul>
            <a href="<?php echo site_url("contact/") ?>"
                class="btn btn-primary py-3 px-4"><?= $this->lang->line('fintech_button_discover'); ?>e</a>
        </div>
    </div>




</div>



<!-- Fintech Solutions End -->

<?php $this->load->view("include/footer") ?>