<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Fintech Solutions Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Fintech Solutions</h4>
            <h1 class="display-4 mb-4">Innovative Financial Technology for the Modern World</h1>
            <p class="mb-4">Empowering businesses and individuals with secure, efficient, and user-friendly financial solutions.</p>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center">
                    <div class="service-img-inner">
                        <img src="<?php echo base_url("assets/img/fintech.png") ?>" class="img-fluid w-100" alt="Fintech Solutions">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary">Our Fintech Services</h4>
                <p class="mb-4">We provide a wide range of fintech solutions tailored to meet the needs of businesses and individuals:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Payment Gateway Integration</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Mobile Wallet Development</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Blockchain-Based Solutions</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Peer-to-Peer Lending Platforms</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Financial Analytics Tools</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>RegTech and Compliance Solutions</li>
                </ul>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4">Get Started</a>
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">Our Development Process</h4>
                <p class="mb-4">We follow a proven approach to deliver robust fintech solutions:</p>
                <ol class="list-unstyled">
                    <li class="mb-3"><strong>1. Understanding Your Requirements:</strong> Collaborating with clients to define goals and expectations.</li>
                    <li class="mb-3"><strong>2. Designing Secure Systems:</strong> Prioritizing security and compliance in every solution.</li>
                    <li class="mb-3"><strong>3. Development:</strong> Building scalable and reliable platforms with cutting-edge technology.</li>
                    <li class="mb-3"><strong>4. Testing:</strong> Ensuring flawless performance through rigorous testing.</li>
                    <li class="mb-3"><strong>5. Deployment:</strong> Seamless integration into existing infrastructure.</li>
                    <li class="mb-3"><strong>6. Continuous Support:</strong> Ongoing optimization and maintenance.</li>
                </ol>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url("assets/img/fintech_process.png") ?>" class="img-fluid w-100" alt="Fintech Development Process">
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="<?php echo base_url("assets/img/contact.png") ?>" class="img-fluid w-100" alt="Benefits of Fintech Solutions">
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary">Why Choose Our Fintech Solutions?</h4>
                <p class="mb-4">Our expertise in fintech ensures top-notch services that meet your specific needs:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Enhanced Security and Compliance</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Scalable and Reliable Platforms</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Personalized Solutions for Every Business</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Integration with Latest Technologies</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Real-Time Data and Insights</li>
                </ul>
                <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4">Discover More</a>
            </div>
        </div>
    </div>
</div>
<!-- Fintech Solutions End -->

<?php $this->load->view("include/footer") ?>
