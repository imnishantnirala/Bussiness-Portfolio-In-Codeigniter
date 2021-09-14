<?php  include('header.php');?>
<!-- Search Form -->
<div class="search-form">
    <a href="#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /navigation --> 

<section>
    <div class="hero-slider position-relative">
        <?php foreach($this->models->getbanner() as $banner ){?>

        <div class="hero-slider-item py-160" style="  background-image: url(<?=base_url();?>images/banner_image/<?=$banner->banner_img?>);" data-icon="ti-comments" data-text="<?=$banner->banner_tag?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1"><?=$banner->banner_tag?></h4>
                            <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5"><?=$banner->banner_title?></h1>
                            <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9"><?=$banner->description?>
                                <br> incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="<?=site_url('welcome/contact');?>" class="btn btn-outline text-uppercase">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
       
    </div>
</section>

<!-- service -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Best Service</h5>
                <h2 class="section-title section-title-border">Service We Provide</h2>
            </div>
        
            <!-- service item -->
            <?php foreach($this->models->getservice() as $sev){ ?>
            
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0" >
                <div class="card text-center">
                    <h4 class="card-title pt-3"><?=$sev->service_name?></h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="<?=base_url();?>images/<?=$sev->service_img?>" alt="service-image">
                    </div>
                    <div class="card-body p-0" style=" height: 200px">
                        <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
                        <p class="card-text mx-2 mb-0" style=" overflow:hidden; height: 30px" ><?=$sev->service_d?></p>
                        <a href="<?=site_url('welcome/web_development/'.$sev->sub_menu_id);?>" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <?php }?>
           
        </div>
    </div>
</section>

<section class="about section-sm overlay" style="background-image: url(<?=base_url();?>innovative/images/background/about-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto">
                <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                    <h3 class="section-title section-title-border-half text-white">Our Company</h3>
                    <p class="text-white mb-40">innovative IT Solutions is a much sought after name in the IT industry, with a host of achievements in offering effective Web Development and Designing solutions since xyz.

It is managed by a team of astute professionals who incorporated the company after gaining a vast experience in their respective domains rendering superior services. Our range of services includes application development, consulting and support services across the globe in both onshore and offshore models. Our portfolio comprises ...</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- work -->
<section class="section bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Our Works</h5>
                <h2 class="section-title section-title-border-gray">Latest Projects</h2>
            </div>
        </div>
        <!-- work slider -->
       
        <div class="row work-slider">
            <?php foreach($this->models->getproject() as $project ){
           
            ?>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" style="width: auto;" src="<?=base_url();?>images/project_image/<?=$project->project_img?>" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="<?=base_url();?>images/project_image/<?=$project->project_img?>" alt="work-image">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html"><?=$project->project_name?></a>
                        <p><?=$project->admin_name?></p>
                    </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
            
        </div>
    </div>
</section>
<!-- /work -->

<?php include('review.php'); ?>

<!-- client logo slider -->
<section class="bg-white py-4">
    <div class="container">
        <h2 class="section-title section-title-border-half">Our Global Community of Partners</h2>
        <div class="client-logo-slider align-self-center">
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-1.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-2.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-3.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-4.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-5.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-1.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-2.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-3.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-4.png"
                    alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-5.png"
                    alt="client-logo"></a>
        </div>
    </div>
</section>
<!-- /client logo slider -->
<?php  include('footer.php');?>