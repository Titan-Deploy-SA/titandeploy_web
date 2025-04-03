<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Web Development Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Web Development</h4>
            <h1 class="display-4 mb-4">Crafting Engaging and Functional Websites</h1>
            <p class="mb-4">Our web development services focus on creating responsive, user-friendly websites that drive engagement and deliver exceptional user experiences.</p>
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
                <h4 class="text-primary">Our Services</h4>
                <p class="mb-4">We offer a comprehensive range of web development services to cater to businesses of all sizes.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Responsive Web Design</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>E-Commerce Development</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Content Management Systems</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Custom Web Applications</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Website Maintenance and Support</li>
                </ul>
                <p class="mb-4">We strive to deliver websites that are not only visually appealing but also optimized for performance and conversions.</p>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4">Get a Free Consultation</a>
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">Our Development Process</h4>
                <p class="mb-4">Our web development process ensures a seamless journey from concept to completion:</p>
                <ol class="list-unstyled">
                    <li class="mb-3"><strong>1. Discovery:</strong> Understanding your business goals and target audience.</li>
                    <li class="mb-3"><strong>2. Planning:</strong> Defining the site architecture, features, and technologies.</li>
                    <li class="mb-3"><strong>3. Design:</strong> Creating intuitive and attractive user interfaces.</li>
                    <li class="mb-3"><strong>4. Development:</strong> Building robust websites using modern technologies.</li>
                    <li class="mb-3"><strong>5. Testing:</strong> Conducting thorough testing to ensure functionality and performance.</li>
                    <li class="mb-3"><strong>6. Launch:</strong> Deploying the website and ensuring a smooth go-live process.</li>
                    <li class="mb-3"><strong>7. Optimization:</strong> Providing ongoing optimization and updates.</li>
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
                <h4 class="text-primary">Why Choose Us?</h4>
                <p class="mb-4">Here are some reasons why clients trust us with their web development projects:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Creative and Modern Designs</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Mobile-First Approach</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>SEO and Performance Optimization</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Secure and Scalable Solutions</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Dedicated Support and Maintenance</li>
                </ul>
                <p class="mb-4">Let us help you create a website that not only meets but exceeds your expectations.</p>
                <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4">Start Your Project</a>
            </div>
        </div>
    </div>
</div>
<!-- Web Development End -->

<?php $this->load->view("include/footer") ?>
