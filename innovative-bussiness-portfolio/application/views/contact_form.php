<?php include('header.php');?>


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


<section class="page-title overlay" style="background-image: url(<?=base_url();?>images/contact/contact-us-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold">Contact Us</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?=site_url('welcome/index');?>">Home</a>
                    </li>
                    <li>Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<?php include('contact.php');?>

<section class="map">
    
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19792.00048432225!2d77.06103397886525!3d28.726593636174073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d06f3ac8756a5%3A0xda765a31b7c5a927!2sMain%20Begumpur%20Market!5e0!3m2!1sen!2sin!4v1583922197719!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<?php include('footer.php');?>