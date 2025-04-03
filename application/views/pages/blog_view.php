<?php $this->load->view("include/header") ?>
<?php $this->load->view("include/page_header") ?>

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">From Blog</h4>
            <h1 class="display-4 mb-4">News And Updates</h1>
            <p class="mb-0">Stay updated with the latest in technology, from AI advancements to our contributions to
                local tech events like DevFest Guinée. Explore insightful articles on the modern tech landscape and our
                role in shaping the future.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <!-- Blog 1: AI in Business -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/ai_revolution.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>AI & Business</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">How AI is Revolutionizing Business Operations</a>
                            <p class="mb-3">Learn how Artificial Intelligence is transforming business strategies,
                                driving
                                innovation, and streamlining operations across various industries.</p>
                            <a href="<?php echo site_url('blog/detail/1') ?>" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 2: AI in Development -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/ai.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>AI & Development</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Integrating AI into Your Development Workflow</a>
                            <p class="mb-3">A guide to incorporating AI tools and techniques into your development
                                process to
                                boost productivity and create smarter applications.</p>
                            <a href="<?php echo site_url('blog/detail/2') ?>" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 3: DevFest Guinée -->
            <div class="col">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/devfest.png') ?>"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Tech Events</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Supporting DevFest Guinée: Empowering Local Tech
                                </a>
                            <p class="mb-3">This year, we proudly supported the organization of DevFest Guinée, an event
                                focused
                                on innovation, AI, and software development. </p>
                            <a href="<?php echo site_url('blog/detail/3') ?>" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Blog End -->

<?php $this->load->view("include/footer") ?>