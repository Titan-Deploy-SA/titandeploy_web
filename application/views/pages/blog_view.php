<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?=$this->lang->line('blog_from_blog');?></h4>
            <h1 class="display-4 mb-4"><?=$this->lang->line('blog_news');?></h1>
            <p class="mb-0"><?=$this->lang->line('blog_stay');?></p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <!-- Blog 1: AI in Business -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/ai_business.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span><?=$this->lang->line('blog_ai_and_business');?></span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> <?=$this->lang->line('blog_martin');?></div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> <?=$this->lang->line('blog_date');?></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> <?=$this->lang->line('blog_comment');?></div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"><?=$this->lang->line('blog_how_ai');?></a>
                            <p class="mb-3"><?=$this->lang->line('blog_learn_how');?></p>
                            <a href="<?php echo site_url('blog/detail/1') ?>" class="btn p-0"><?=$this->lang->line('blog_read_more');?> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 2: AI in Development -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/ai_development.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span><?=$this->lang->line('blog_ai_and_dev');?></span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> <?=$this->lang->line('blog_martin');?></div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> <?=$this->lang->line('blog_date');?></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> <?=$this->lang->line('blog_comment');?></div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"><?=$this->lang->line('blog_integration_ai');?></a>
                            <p class="mb-3"><?=$this->lang->line('blog_a_guide');?></p>
                            <a href="<?php echo site_url('blog/detail/2') ?>" class="btn p-0"><?=$this->lang->line('blog_read_more');?> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 3: DevFest Guinée -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/tech_events.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span><?=$this->lang->line('blog_tech_events');?></span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> <?=$this->lang->line('blog_martin');?></div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> <?=$this->lang->line('blog_date');?></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> <?=$this->lang->line('blog_comment');?></div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"><?=$this->lang->line('blog_supporting');?>
                                </a>
                            <p class="mb-3"><?=$this->lang->line('blog_this_year');?> </p>
                            <a href="<?php echo site_url('blog/detail/3') ?>" class="btn p-0"><?=$this->lang->line('blog_read_more');?> <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Blog End -->

<?php $this->load->view("include/footer") ?>