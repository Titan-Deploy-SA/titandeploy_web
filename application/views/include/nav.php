<!-- Topbar Start -->
<div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
    <div class="container">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <!-- <div class="border-end border-primary pe-3">
                        <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find
                            A Location</a>
                    </div> -->
                    <div class="ps-3">
                        <a href="mailto:contact@titandeploy.com" class="text-muted small"><i
                                class="fas fa-envelope text-primary me-2"></i>contact@titandeploy.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end">
                    <div class="d-flex border-end border-primary pe-3">
                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="dropdown ms-3">
                        <?php
                        $current_lang = $this->session->userdata('site_lang') ?? 'french';
                        $lang_label = $current_lang === 'french' ? 'Français' : 'English';
                        $lang_flag = $current_lang === 'french' ? 'fa-globe-europe' : 'fa-globe-europe';
                        ?>
                        <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                    class="fas <?php echo $lang_flag; ?> text-primary me-2"></i> <?php echo $lang_label; ?></small></a>
                        <div class="dropdown-menu rounded">
                            <a href="<?php echo site_url('welcome/changeLanguage/english'); ?>" class="dropdown-item">English</a>
                            <a href="<?php echo site_url('welcome/changeLanguage/french'); ?>" class="dropdown-item">French</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand">
                <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="<?php echo site_url('/') ?>" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo site_url('/about') ?>" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Services</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="<?php echo site_url('services/software') ?>" class="dropdown-item">Custom Software
                                Development</a>
                            <a href="<?php echo site_url('services/web') ?>" class="dropdown-item">Web Development</a>
                            <a href="<?php echo site_url('services/mobileapp') ?>" class="dropdown-item">Mobile App
                                Development</a>
                            <a href="<?php echo site_url('services/fintech') ?>" class="dropdown-item">FinTech
                                Solutions</a>
                            <a href="<?php echo site_url('services/cloud') ?>" class="dropdown-item">Cloud Services</a>
                            <a href="<?php echo site_url('services/uiux') ?>" class="dropdown-item">UI/UX Design</a>
                            <a href="<?php echo site_url('services/hiring') ?>" class="dropdown-item">Hire an
                                experts</a>
                        </div>
                    </div>
                    <a href="<?php echo site_url('blog') ?>" class="nav-item nav-link">Blog</a>
                    <a href="<?php echo site_url('contact') ?>" class="nav-item nav-link">Contact</a>
                    <div class="nav-btn px-3">
                        <a href="<?php echo site_url("contact/") ?>"
                            class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0">Get Quotation</a>
                    </div>
                </div>
            </div>

            <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                    data-wow-delay=".9s">
                    <i class="fa fa-phone-alt fa-2x"></i>
                    <div class="position-absolute" style="top: 7px; right: 12px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                    </div>
                </a>
                <div class="d-flex flex-column ms-3">
                    <span>Call to Our Experts</span>
                    <a href="tel:+91 90353 25481"><span class="text-dark">Free: +91 90353 25481</span></a>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Navbar & Hero End -->