<?php include('header.php'); ?>

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
<?php
foreach($this->models->getabout() as $about);

?>
<section class="page-title overlay" style="background-image: url(<?=base_url();?>images/about/<?=$about->about_banner?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold"><?=$about->about_title?></h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><?=$about->about_title?></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- philosophy -->
<section class="section  pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                
                <h2 class="section-title section-title-border-half"><?=$about->about_title?></h2>
                <p><?=$about->about_taxt?></p>
               
            </div>
            <!-- philosophy image -->
            <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                <img class="img-fluid w-100" src="<?=base_url();?>images/about/<?=$about->about_img?>" alt="philosophy-image">
            </div>
        </div>
    </div>
</section>
<!-- /philosophy -->
<?php include('contact.php') ?>
    
<?php include('review.php');  ?>

<!-- client logo slider -->
<section class="bg-gray py-4">
    <div class="container">
        <div class="client-logo-slider align-self-center">
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-1.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-2.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-3.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-4.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-5.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-1.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-2.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-3.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-4.png" alt="client-logo"></a>
            <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="<?=base_url();?>innovative/images/client-logo/client-logo-5.png" alt="client-logo"></a>
        </div>
    </div>
</section>
<!-- /client logo slider -->

<?php include('footer.php');?>