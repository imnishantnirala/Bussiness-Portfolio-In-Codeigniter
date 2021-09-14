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
<?=form_open_multipart('welcome/innovative_service'.$c->cart_id)?>
<?=print_r($c->cover_img);?>
<section class="page-title overlay" style="background-image: url(http://localhost/project/images/service_cover_img/<?=$c->cover_img ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold"><?=$c->card_name?></h2>
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
       
                <h2 class="section-title section-title-border-half"><?=$c->card_name?></h2>
                

                <p><?=$c->description?></p>
               
               
            </div>
            <!-- philosophy image -->
            <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                <img class="img-fluid w-100" src="<?=base_url();?>images/service_card_img/<?=$c->card_img?>" alt="philosophy-image">
            </div>
        </div>
    </div>
</section>
<!-- /philosophy -->
</form>



<section class="section py-3 ">
    <div class="container">
        <div class="row">
             <div class="container">
                         <div class="bg-gray p-5 rounded mb-60">
                            <h4 class="section-title section-title-border-half">Why should you choose us?</h4>
                           
                            <div>
                                <ul class="d-inline-block pl-0 float-sm-left mr-sm-5">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>100% customer satisfaction</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>Affordable pricing</li>
                                    
                                </ul>
                                <ul class="d-inline-block pl-0">
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>Fast data processing</li>
                                    <li class="font-secondary mb-10">
                                        <i class="text-primary mr-2 ti-arrow-circle-right"></i>Use of Model View controller</li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
            
        </div>
    </div>
</section>
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