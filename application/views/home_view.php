<?php $this->load->view("include/header") ?>


<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    
    <!-- Carousel Item 1 -->
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To TitanDeploy</h4>
                            <h1 class="display-1 text-white mb-4">Innovative Software Solutions</h1>
                            <p class="mb-5 fs-5">
                                At TitanDeploy, we craft tailored software solutions that empower businesses to thrive
                                in the digital era. From custom applications to cutting-edge AI, we've got you covered.
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <!-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                        class="fas fa-play-circle me-2"></i> Discover More</a> -->
                                <a  class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="<?php echo site_url("contact/") ?>">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                            <img src="<?php echo base_url('assets/img/custom_software.png') ?>" class="img-fluid w-100"
                                alt="Custom Software Solutions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Item 2 -->
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                    <div class="col-lg-5 animated fadeInLeft">
                        <div class="calrousel-img">
                            <img src="<?php echo base_url('assets/img/iot.png') ?>" class="img-fluid w-100"
                                alt="AI and IoT Solutions">
                        </div>
                    </div>
                    <div class="col-lg-7 animated fadeInRight">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-white text-uppercase fw-bold mb-4">Empowering Businesses</h4>
                            <h1 class="display-1 text-white mb-4">AI, IoT & Blockchain Solutions</h1>
                            <p class="mb-5 fs-5">
                                Leverage advanced technologies like AI, IoT, and Blockchain to revolutionize your
                                operations.
                                TitanDeploy delivers innovation for a smarter tomorrow.
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="<?php echo site_url("about/") ?>"><i
                                        class="fas fa-play-circle me-2"></i> Explore More</a>
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="<?php echo site_url("contact/") ?>">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Item 3 -->
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-white text-uppercase fw-bold mb-4">Transforming Finance</h4>
                            <h1 class="display-1 text-white mb-4">FinTech Solutions for the Future</h1>
                            <p class="mb-5 fs-5">
                                Drive innovation in finance with TitanDeploy's FinTech solutions. From secure payment
                                gateways
                                to blockchain-enabled platforms, we redefine financial technology.
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="<?php echo site_url("services/fintech") ?>"><i
                                        class="fas fa-play-circle me-2"></i> Learn More</a>
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="<?php echo site_url("contact/") ?>">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                            <img src="<?php echo base_url('assets/img/fintech.png') ?>" class="img-fluid w-100"
                                alt="FinTech Solutions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Carousel End -->

<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Features</h4>
            <h1 class="display-4 mb-4">Empowering Your Business Through Technology</h1>
            <p class="mb-0">At TitanDeploy, we combine innovation and expertise to deliver cutting-edge solutions that
                drive your business forward. Discover how our features ensure efficiency, reliability, and growth.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center">Custom Software Solutions</h4>
                    <p class="mb-4 text-center">Tailored software applications designed to meet your unique business
                        needs and challenges.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/software") ?>">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-laptop-code fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center">Web & Mobile Development</h4>
                    <p class="mb-4 text-center">Building responsive websites and user-friendly mobile apps for an
                        optimal digital experience.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/mobileapp") ?>">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-cloud fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center">Cloud Services</h4>
                    <p class="mb-4 text-center">Scalable cloud solutions to ensure your business stays connected and
                        secure at all times.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/cloud") ?>">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0 d-flex flex-column justify-content-between h-100">
                    <div class="feature-icon p-4 mb-4 text-center">
                        <i class="fas fa-chart-line fa-3x"></i>
                    </div>
                    <h4 class="mb-4 text-center">FinTech Solutions</h4>
                    <p class="mb-4 text-center">Innovative financial technology services, including payment gateways and
                        blockchain integration.</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4 align-self-center" href="<?php echo site_url("services/fintech") ?>">Learn More</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Feature End -->

<!-- About Start -->
<div class="container-fluid bg-light about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary">About TitanDeploy</h4>
                    <h1 class="display-4 mb-4">Innovating for a Smarter Future</h1>
                    <p>At TitanDeploy, we specialize in creating transformative solutions that empower businesses to
                        reach new heights. With our expertise in cutting-edge technologies, we deliver unmatched value
                        to our clients worldwide.</p>
                    <p>Our team is committed to fostering innovation, driving efficiency, and building a smarter future
                        for businesses across diverse industries.</p>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Tailored technology solutions for
                        your business needs</p>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Expertise in software, cloud, and
                        FinTech</p>
                    <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>A trusted partner for
                        long-term success</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo site_url("about/") ?>">More Information</a>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="rounded bg-light">
                                <img src="<?php echo base_url('assets/img/about.png') ?>"
                                    class="img-fluid rounded w-100" alt="About TitanDeploy">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">200</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Projects Delivered</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">50</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Global Partners</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">150</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Skilled Developers</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">300</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Successful Deployments</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

<!-- Service Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-4 mb-4">Delivering Excellence, One Solution at a Time</h1>
            <p class="mb-0">TitanDeploy provides tailored technology solutions that address the unique challenges of
                businesses across industries. Our services are designed to accelerate growth, optimize efficiency, and
                ensure long-term success.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/custom_software.png') ?>"
                            class="img-fluid rounded-top w-100" alt="Custom Software Development">
                        <div class="service-icon p-3">
                            <i class="fa fa-code fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Custom Software Development</a>
                            <p class="mb-4">We design and develop scalable software tailored to your business needs,
                                ensuring robust performance and security.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/cloud.png') ?>" class="img-fluid rounded-top w-100"
                            alt="Cloud Solutions">
                        <div class="service-icon p-3">
                            <i class="fa fa-cloud fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Cloud Solutions</a>
                            <p class="mb-4">Empower your business with cloud computing solutions that enhance
                                accessibility, scalability, and efficiency.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/fintech.png') ?>" class="img-fluid rounded-top w-100"
                            alt="FinTech Solutions">
                        <div class="service-icon p-3">
                            <i class="fa fa-university fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">FinTech Solutions</a>
                            <p class="mb-4">Revolutionize your financial processes with cutting-edge FinTech
                                applications that deliver seamless experiences.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item d-flex flex-column h-100">
                    <div class="service-img">
                        <img src="<?php echo base_url('assets/img/iot.png') ?>" class="img-fluid rounded-top w-100"
                            alt="IoT Integration">
                        <div class="service-icon p-3">
                            <i class="fa fa-cogs fa-2x"></i>
                        </div>
                    </div>
                    <div class="service-content p-4 mt-auto">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">IoT Integration</a>
                            <p class="mb-4">Unlock new possibilities with IoT solutions that connect devices, optimize
                                processes, and improve decision-making.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo site_url("about/") ?>">Explore More Services</a>
            </div>
        </div>

    </div>
</div>

<!-- Service End -->

<!-- FAQs Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <h4 class="text-primary">Some Important FAQ's</h4>
                        <h1 class="display-4 mb-0">FAQ About Titandeploy</h1>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Q: What services does Titandeploy offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body rounded">
                                    A: Titandeploy specializes in custom software development, IT consulting, and
                                    digital transformation services. We help businesses modernize their operations
                                    through tailored software solutions, cloud integrations, and technology consulting.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: How can Titandeploy assist my business with digital transformation?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We offer end-to-end digital transformation solutions, from strategy and
                                    consulting to the development and implementation of modern software applications. We
                                    can guide your business through the adoption of cloud technologies, automation
                                    tools, and other digital solutions that will drive growth and efficiency.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: What industries does Titandeploy work with?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We work with a diverse range of industries including finance, healthcare, retail,
                                    education, logistics, and manufacturing. Our team has experience in delivering
                                    solutions that cater to the specific needs of each sector, ensuring a tailored
                                    approach for maximum impact.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: How does Titandeploy ensure the quality of its software solutions?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: At Titandeploy, we follow industry-standard practices for quality assurance and
                                    software testing. Our team conducts thorough testing throughout the development
                                    lifecycle, ensuring that our solutions meet the highest standards for performance,
                                    security, and usability.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: Can Titandeploy help with IT consulting and strategy development?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we offer IT consulting services to help businesses develop effective
                                    technology strategies. We analyze your current IT infrastructure, identify
                                    opportunities for improvement, and provide strategic advice on how to leverage the
                                    latest technologies to meet your business goals.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url('assets/img/faq.png') ?>" class="img-fluid w-100"
                    alt="Titandeploy Services">
            </div>
        </div>
    </div>
</div>

<!-- FAQs End -->

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