
<!-- footer -->
<footer class="bg-secondary">
    <div class="py-100 border-bottom" style="border-color: #454547 !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mb-5 mb-md-0 text-center text-md-left">
                        <!-- logo -->
                        <img class="mb-30" src="<?=base_url();?>innovative/images/innovative-footer.png" alt="logo">
                        
                        <!-- social icon -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-vimeo-alt"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                <h4 class="text-white mb-4">Quick Link</h4>
                <ul class="footer-links">
                    
                    <li>
                        <a href="<?=site_url('welcome/about');?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?=site_url('welcome/contact');?>">Contact Us</a>
                    </li>
                    
                    <li>
                        <a href="<?=site_url('welcome/privacy_policy');?>">Privacy Policy</a>
                    </li>
                </ul>
                </div>
                <!-- footer links -->
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                <h4 class="text-white mb-4">Services</h4>
                <ul class="footer-links">
                    <?php
                        foreach ($this->models->getservice() as $service ) {
                        
                    ?>
                    <li>
                        <a href="<?=site_url('welcome/web_development/'.$submenu->sub_menu_id);?>"><?=$service->service_name?></a>
                    </li>
                    <?php } ?>
                </ul>
                </div>
                <!-- footer links -->
                
                <!-- subscribe form -->
                <div class="col-lg-3 col-md-12 offset-lg-1">
                    <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-sm" href="<?=site_url('welcome/contact');?>">get a quote</a>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="pt-4 pb-3 position-relative">
        
        <!-- back to top -->
        <button class="back-to-top">
            <i class="ti-angle-up"></i>
        </button>
    </div>
</footer>
<!-- /footer --> 

<!-- jQuery -->
<script src="<?=base_url();?>innovative/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?=base_url();?>innovative/plugins/bootstrap/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="<?=base_url();?>innovative/plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
<!-- slick slider -->
<script src="<?=base_url();?>innovative/plugins/slick/slick.min.js"></script>
<!-- mixitup filter -->
<script src="<?=base_url();?>innovative/plugins/mixitup/mixitup.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<script  src="<?=base_url();?>innovative/plugins/google-map/gmap.js"></script>
<!-- Syo Timer -->
<script src="<?=base_url();?>innovative/plugins/syotimer/jquery.syotimer.js"></script>
<!-- aos -->
<script src="<?=base_url();?>innovative/plugins/aos/aos.js"></script>
<!-- Main Script -->
<script src="<?=base_url();?>innovative/js/script.js"></script>

</body>

<!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 10:35:26 GMT -->
</html>