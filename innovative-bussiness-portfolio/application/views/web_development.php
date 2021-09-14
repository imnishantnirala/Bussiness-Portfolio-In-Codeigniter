<?php include('header.php');?>

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
<?=form_open_multipart('welcome/web_development'.$s->sub_menu_id) ?>
<section class="page-title overlay" style="background-image: url(http://localhost/project/images/service_cover_img/<?=$s->cover_img ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold"><?=$s->service_name?></h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
</section>








<section class="section py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
       
                <h2 class="section-title section-title-border-half"><?=$s->service_name?></h2>
                

                <p><?=$s->service_d?></p>
               
               
            </div>
            <!-- philosophy image -->
            <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                <img class="img-fluid w-100" src="<?=base_url();?>images/<?=$s->service_img?>" alt="philosophy-image">
            </div>
        </div>
    </div>
</section>
<!-- /philosophy -->

<!-- service -->
<section class="section">
    <div class="container">
        <div class="row">

            <?php foreach($this->models->getcard() as $card){ 
                    if($s->sub_menu_id==$card->sub_menu_id){
            ?>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card text-center">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top rounded-0" src="<?=base_url();?>images/service_card_img/<?=$card->card_img?>" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title pt-3"><?=$card->card_name?></h4>
                        <p class="card-text mx-2 mb-0"><?=$card->card_d?></p>

                        <a href="<?=site_url('welcome/innovative_service/'.$card->cart_id);?>" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>
            <?php } } ?>
            
            
        </div>
    </div>
</section>
<!-- /service -->


</form>
<!-- work -->
<section class="section bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Our Works</h5>
                <h2 class="section-title section-title-border-gray">Latest Projects</h2>
            </div>
        </div>
        <!-- getproject -->
        
        <!-- work slider -->
        <div class="row work-slider">
            <?php foreach($this->models->getproject() as $project ){
            if($s->sub_menu_id==$project->sub_menu_id){
            ?>
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" style="width: auto;" src="<?=base_url();?>images/project_image/<?=$project->project_img?>" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="images/works/work-1.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html"><?=$project->project_name?></a>
                        <p><?=$project->admin_name?></p>
                    </div>
                </div>
            </div>
        <?php } }?>
        </div>
    </div>
</section>
<!-- /work <--></-->
<?php include('contact.php') ?>
<!-- testimonial -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                
                <h2 class="section-title section-title-border"> How Do We Deliver? </h2>
            </div>
            <div class="col-lg-12 align-self-center" style=" margin:10px;">
                <img class="img-fluid w-100" src="<?=base_url();?>innovative/images/how_we_work.png" alt="clients-image">
            </div>
            <div class="col-lg-12 text-center">
                
                <h6 class="section-title section-title-border">We Analysis and researching your requirements and using testing methodologies to ensure consistent project delivery which are part of the actual project work effort. </h6>
            </div>
            
        </div>
    </div>
</section>
<!-- /testimonial --> 

<?php include('footer.php'); ?>