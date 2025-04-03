<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- HR Recruitment Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">HR Recruitment</h4>
            <h1 class="display-4 mb-4">Hire Top Talent for Your Team</h1>
            <p class="mb-4">We connect you with experienced professionals across various development domains to meet your business needs.</p>
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
                <h4 class="text-primary">Types of Developer Profiles We Provide</h4>
                <p class="mb-4">Our network of skilled developers spans various technologies and expertise levels:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Frontend Developers (React, Angular, Vue.js)</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Backend Developers (Node.js, Python, PHP, Java)</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Mobile App Developers (iOS, Android, Flutter, React Native)</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Full-Stack Developers</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>DevOps Engineers</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Data Scientists and AI/ML Engineers</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Cloud Engineers (AWS, Azure, GCP)</li>
                </ul>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4">Start Recruiting</a>
            </div>
        </div>
        
        <div class="row g-5 pt-5">
            <div class="col-xl-12">
                <h4 class="text-primary text-center mb-4">Our Hiring Process</h4>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="process-step bg-white text-center border p-4">
                            <div class="process-icon mb-3">
                                <i class="fa fa-search text-primary display-4"></i>
                            </div>
                            <h5 class="mb-3">Step 1: Requirement Analysis</h5>
                            <p>We work closely with you to understand your specific requirements, including the technical skills, experience level, and project goals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="process-step bg-white text-center border p-4">
                            <div class="process-icon mb-3">
                                <i class="fa fa-user-check text-primary display-4"></i>
                            </div>
                            <h5 class="mb-3">Step 2: Talent Shortlisting</h5>
                            <p>Our experts identify and shortlist candidates who match your requirements from our extensive talent pool.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="process-step bg-white text-center border p-4">
                            <div class="process-icon mb-3">
                                <i class="fa fa-handshake text-primary display-4"></i>
                            </div>
                            <h5 class="mb-3">Step 3: Interviews and Onboarding</h5>
                            <p>We arrange interviews and assist in onboarding the selected candidates to ensure a smooth start to your project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 pt-5">
            <div class="col-xl-12">
                <h4 class="text-primary text-center mb-4">Pricing Plans</h4>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="pricing-item bg-white text-center border p-4">
                            <h5 class="mb-3">Junior Developer</h5>
                            <h1 class="display-5 mb-4">$1,000/month</h1>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>1-2 Years Experience</li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Frontend/Backend Skills</li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Basic Project Support</li>
                            </ul>
                            <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-item bg-white text-center border p-4">
                            <h5 class="mb-3">Mid-Level Developer</h5>
                            <h1 class="display-5 mb-4">$2,500/month</h1>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>3-5 Years Experience</li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Full-Stack Development</li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Advanced Troubleshooting</li>
                            </ul>
                            <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pricing-item bg-white text-center border p-4">
                            <h5 class="mb-3">Senior Developer</h5>
                            <h1 class="display-5 mb-4">$4,900/month</h1>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>6+ Years Experience</li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Expert in Multiple Technologies</li>
                                <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Leadership and Mentorship</li>
                            </ul>
                            <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HR Recruitment End -->

<?php $this->load->view("include/footer") ?>
