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
foreach($this->models->get_privacy_policy() as $privacy_policy);

?>
<section class="page-title overlay" style="background-image: url(<?=base_url();?>images/privacy/<?=$privacy_policy->policy_banner?>);"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold"><?=$privacy_policy->policy_title?></h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?=site_url('welcome/index');?>">Home</a>
                    </li>
                    <li><?=$privacy_policy->policy_title?></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- philosophy -->
<section class="section  pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                
                <h2 class="section-title section-title-border-half"><?=$privacy_policy->policy_title?></h2>
                <p><?=$privacy_policy->policy_text?></p>
               
            </div>
            <!-- philosophy image -->
            <!-- <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                <img class="img-fluid w-100" src="<?=base_url();?>images/privacy/<?=$privacy_policy->policy_title?>" alt="philosophy-image">
            </div> -->
        </div>
    </div>
</section>


<?php include('footer.php');?>