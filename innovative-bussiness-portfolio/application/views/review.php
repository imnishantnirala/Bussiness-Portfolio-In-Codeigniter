
<!-- testimonial -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Review</h5>
                <h2 class="section-title section-title-border"> Reviews & Recommendations </h2>
            </div>
            <div class="col-lg-5 col-md-5 pr-0 align-self-center">
                <img style="padding: 30px;" class="img-fluid w-100" src="<?=base_url();?>images/review/reviews-mobile-people.png" alt="clients-image">
            </div>
            <div class="col-lg-7 col-md-7 align-self-center pl-0">
                <div class="testimonial-slider p-5">
                    <!-- slider item -->
                    <?php 
                        foreach($this->models->getreview() as $review ){
                            
                    ?>
                    <div class="outline-0">
                        <i class="testimonial-icon "><img class="testimonial-icon "  src="<?=base_url();?>images/review/<?=$review->user_img?>"></i>
                        <p class="text-dark"><?=$review->user_text?>...</p>
                        <h4 class="font-weight-normal"><?=$review->user_name?></h4>
                        <h6 class="font-secondary text-color"><?=$review->user_details?></h6>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /testimonial -->