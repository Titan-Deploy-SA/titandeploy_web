<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Cloud Services Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Cloud Services</h4>
            <h1 class="display-4 mb-4">Elevate Your Business with Scalable Cloud Solutions</h1>
            <p class="mb-4">Harness the power of cloud computing to streamline operations, reduce costs, and enhance flexibility.</p>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center">
                    <div class="service-img-inner">
                        <img src="<?php echo base_url("assets/img/cloud.png") ?>" class="img-fluid w-100" alt="Cloud Services">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary">Our Cloud Offerings</h4>
                <p class="mb-4">We provide a full suite of cloud services to support your business goals:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Cloud Migration Services</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Infrastructure as a Service (IaaS)</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Platform as a Service (PaaS)</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Software as a Service (SaaS)</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Cloud Backup and Disaster Recovery</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Multi-Cloud and Hybrid Solutions</li>
                </ul>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4">Get Started</a>
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">Our Development Process</h4>
                <p class="mb-4">We follow a comprehensive approach to ensure successful cloud integration:</p>
                <ol class="list-unstyled">
                    <li class="mb-3"><strong>1. Assessment:</strong> Analyzing your current infrastructure and requirements.</li>
                    <li class="mb-3"><strong>2. Strategy:</strong> Developing a tailored cloud roadmap.</li>
                    <li class="mb-3"><strong>3. Migration:</strong> Seamless transition to the cloud with minimal downtime.</li>
                    <li class="mb-3"><strong>4. Optimization:</strong> Fine-tuning cloud performance and scalability.</li>
                    <li class="mb-3"><strong>5. Maintenance:</strong> Providing ongoing support and updates.</li>
                </ol>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url("assets/img/cloud_process.png") ?>" class="img-fluid w-100" alt="Cloud Services Process">
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="<?php echo base_url("assets/img/contact.png") ?>" class="img-fluid w-100" alt="Benefits of Cloud Services">
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary">Why Choose Our Cloud Services?</h4>
                <p class="mb-4">Our cloud solutions empower businesses with numerous benefits:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Enhanced Scalability and Flexibility</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Improved Security and Compliance</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Cost-Effective Solutions</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Access to Cutting-Edge Technologies</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Streamlined Business Operations</li>
                </ul>
                <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4">Discover More</a>
            </div>
        </div>
    </div>
</div>
<!-- Cloud Services End -->

<?php $this->load->view("include/footer") ?>
