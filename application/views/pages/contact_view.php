<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>
<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('contact_us');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('contact_we_did');?></h1>
        </div>
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="contact-img d-flex justify-content-center">
                    <div class="contact-img-inner">
                        <img src="<?php echo base_url('assets/img/contact_1.png') ?>" class="img-fluid w-100"
                            alt="Contact Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div>
                    <h4 class="text-primary"><?=$this->lang->line('contact_send_message');?></h4>
                    <p class="mb-4"><?=$this->lang->line('contact_feel');?></p>
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
                                <label for="name"><?=$this->lang->line('contact_your_name');?></label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control border-0" id="email"
                                    placeholder="Your Email" required>
                                <label for="email"><?=$this->lang->line('contact_your_email');?></label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="tel" name="phone" class="form-control border-0" id="phone"
                                    placeholder="Phone" required>
                                <label for="phone"><?=$this->lang->line('contact_your_phone');?></label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="project" class="form-control border-0" id="project"
                                    placeholder="Project">
                                <label for="project"><?=$this->lang->line('contact_your_project');?></label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <select name="project_type" class="form-control border-0" id="project_type" required>
                                    <option value=""><?=$this->lang->line('contact_select');?></option>
                                    <option value="webDevelopment"><?=$this->lang->line('contact_web_dev');?></option>
                                    <option value="mobileDevelopment"><?=$this->lang->line('contact_mobile_dev');?></option>
                                    <option value="cloud"><?=$this->lang->line('contact_cloud_infra');?></option>
                                    <option value="iaintegration"><?=$this->lang->line('contact_ia_integration');?></option>
                                    <option value="blochain"><?=$this->lang->line('contact_blockchain');?></option>
                                    <option value="customSolution"><?=$this->lang->line('contact_custom_solution');?></option>
                                    <option value="others"><?=$this->lang->line('contact_others');?></option>
                                </select>
                                <label for="project_type"><?=$this->lang->line('contact_type_of_project');?></label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <select name="budget" class="form-control border-0" id="budget" required>
                                    <option value=""><?=$this->lang->line('contact_select_budget');?></option>
                                    <option value="1000-5000"><?=$this->lang->line('contact_1000');?></option>
                                    <option value="5000-10000"><?=$this->lang->line('contact_5000');?></option>
                                    <option value="10000-20000"><?=$this->lang->line('contact_10000');?></option>
                                    <option value="20000-50000"><?=$this->lang->line('contact_20000');?></option>
                                    <option value="50000+"><?=$this->lang->line('contact_more_than');?></option>
                                </select>
                                <label for="budget"><?=$this->lang->line('contact_budget');?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control border-0" id="subject"
                                    placeholder="Subject" required>
                                <label for="subject"><?=$this->lang->line('contact_subject');?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control border-0"
                                    placeholder="Leave a message here" id="message" style="height: 120px"
                                    required></textarea>
                                <label for="message"><?=$this->lang->line('contact_message');?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3"><?=$this->lang->line('contact_button_send_message');?></button>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $this->load->view("include/footer") ?>