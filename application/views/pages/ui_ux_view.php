<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- UI/UX Design Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">UI/UX Design</h4>
            <h1 class="display-4 mb-4">Crafting Intuitive and Engaging Experiences</h1>
            <p class="mb-4">Delivering user-centric designs that enhance usability, engagement, and satisfaction.</p>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="d-flex justify-content-center">
                    <div class="service-img-inner">
                        <img src="<?php echo base_url("assets/img/cloud.png") ?>" class="img-fluid w-100" alt="UI/UX Design">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary">Our UI/UX Services</h4>
                <p class="mb-4">We provide end-to-end UI/UX solutions to ensure seamless user experiences:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>User Research and Analysis</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Wireframing and Prototyping</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Visual Design and Branding</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Interaction Design</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Usability Testing</li>
                </ul>
                <a href="<?php echo site_url('contact/') ?>" class="btn btn-primary py-3 px-4">Let’s Design</a>
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">Our Design Process</h4>
                <p class="mb-4">We follow a structured design process to deliver exceptional results:</p>
                <ol class="list-unstyled">
                    <li class="mb-3"><strong>1. Discovery:</strong> Understanding user needs and business goals.</li>
                    <li class="mb-3"><strong>2. Research:</strong> Conducting user interviews and market analysis.</li>
                    <li class="mb-3"><strong>3. Design:</strong> Creating wireframes, prototypes, and final designs.</li>
                    <li class="mb-3"><strong>4. Validation:</strong> Testing designs with real users to refine the experience.</li>
                    <li class="mb-3"><strong>5. Delivery:</strong> Implementing and ensuring design consistency across platforms.</li>
                </ol>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="img/uiux-process.png" class="img-fluid w-100" alt="UI/UX Design Process">
            </div>
        </div>
        <div class="row g-5 pt-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="img/uiux-benefits.png" class="img-fluid w-100" alt="Benefits of UI/UX Design">
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="text-primary">Why Choose Us for UI/UX Design?</h4>
                <p class="mb-4">Our designs prioritize functionality and aesthetics to deliver outstanding user experiences:</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>User-Centric Approach</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Innovative and Creative Solutions</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Focus on Accessibility and Inclusivity</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Streamlined Navigation and Usability</li>
                    <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Enhanced Brand Identity</li>
                </ul>
                <a href="<?php echo site_url("contact/") ?>" class="btn btn-primary py-3 px-4">Get in Touch</a>
            </div>
        </div>
    </div>
</div>
<!-- UI/UX Design End -->

<?php $this->load->view("include/footer") ?>
