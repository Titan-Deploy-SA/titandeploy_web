<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Contact Us</h4>
            <h1 class="display-4 mb-4">We'd love to hear from you!</h1>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="contact-img d-flex justify-content-center">
                    <div class="contact-img-inner">
                        <img src="<?php echo base_url('assets/img/contact.png') ?>" class="img-fluid w-100"
                            alt="Contact Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div>
                    <h4 class="text-primary">Send Your Message</h4>
                    <p class="mb-4">Feel free to send us your inquiries, feedback, or comments. We'll get back to you as
                        soon as possible.</p>
                    <div class="text text-center">
                        <?php if ($msg = $this->session->flashdata('msg')): ?>
                            <h5 class="alert alert-success">
                                <?php echo $msg; ?>
                            </h5>
                        <?php endif; ?>
                    </div>
                    <?php echo form_open('contact/sendMail', ['class' => 'contact-form']); ?>
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control border-0" id="name"
                                    placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control border-0" id="email"
                                    placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="tel" name="phone" class="form-control border-0" id="phone"
                                    placeholder="Phone" required>
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="project" class="form-control border-0" id="project"
                                    placeholder="Project">
                                <label for="project">Your Project</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <select name="project_type" class="form-control border-0" id="project_type" required>
                                    <option value="">Select Project Type</option>
                                    <option value="webDevelopment">Web Development</option>
                                    <option value="mobileDevelopment">Mobile Development</option>
                                    <option value="cloud">Cloud Infrastructures</option>
                                    <option value="iaintegration">IA integration</option>
                                    <option value="blochain">BlockChain</option>
                                    <option value="customSolution">Custom Solution</option>
                                    <option value="others">Others</option>
                                </select>
                                <label for="project_type">Type of Project</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <select name="budget" class="form-control border-0" id="budget" required>
                                    <option value="">Select Budget</option>
                                    <option value="1000-5000">$1,000 - $5,000</option>
                                    <option value="5000-10000">$5,000 - $10,000</option>
                                    <option value="10000-20000">$10,000 - $20,000</option>
                                    <option value="20000-50000">$20,000 - $50,000</option>
                                    <option value="50000+">More than $50,000</option>
                                </select>
                                <label for="budget">Budget</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control border-0" id="subject"
                                    placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control border-0"
                                    placeholder="Leave a message here" id="message" style="height: 120px"
                                    required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $this->load->view("include/footer") ?>