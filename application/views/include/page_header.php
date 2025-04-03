<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"><?=$tooltip?></h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?php echo base_url("/") ?>">Home</a></li>
            <li class="breadcrumb-item active text-primary"><?=strtolower($tooltip)?></li>
        </ol>
    </div>
</div>
<!-- Header End -->