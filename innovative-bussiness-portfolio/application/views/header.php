<?php error_reporting(E_ALL & ~ E_NOTICE) ?>
<!DOCTYPE html>
<html lang="zxx">



<head>
  <meta charset="utf-8">
  <title>innovative IT</title>

  
  <!-- mobile responsive meta -->
<!--   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?=base_url();?>innovative/plugins/bootstrap/bootstrap.min.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="<?=base_url();?>innovative/plugins/magnific-popup/magnific-popup.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?=base_url();?>innovative/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?=base_url();?>plugins/slick/slick-theme.css">
  <!-- themify icon -->
  <link rel="stylesheet" href="<?=base_url();?>innovative/plugins/themify-icons/themify-icons.css">
  <!-- animate -->
  <link rel="stylesheet" href="<?=base_url();?>innovative/plugins/animate/animate.css">
  <!-- Aos -->
  <link rel="stylesheet" href="<?=base_url();?>innovative/plugins/aos/aos.css">
  <!-- Stylesheets -->
  <link href="<?=base_url();?>innovative/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?=base_url();?>innovative/images/logo_icon.png" type="image/x-icon">
  <link rel="icon" href="<?=base_url();?>innovative/images/logo_icon.png" type="image/x-icon">

</head>

<body>
   

<!-- preloader start -->
<div class="preloader">
    <img src="<?=base_url();?>innovative/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end --> 
<?php 
foreach ($this->models->getdetails() as $del) { }

?>
<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:info@companyname.com"><?=$del->company_email?></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:1234565523">Call Us Now:
                                <span class="ml-2"> <?=$del->company_no ?></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <!-- <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?=site_url('welcome/index'); ?>">
                    <img src="<?=base_url();?>innovative/images/logo-innovative.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <?php foreach($this->models->getmenu() as $menu){ ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?=site_url($menu->menu_url);?>" role="button"  aria-haspopup="true"
                                aria-expanded="false">
                                <?=$menu->menu_name;?>
                            </a>
                          
                            <?php foreach($this->models->getsubmenu() as $submenu){} ?>
                            <?php 
                            
                              if($menu->m_id==$submenu->menu){
                            
                            ?>
                            <div class="dropdown-menu">
                              <?php foreach($this->models->getservice() as $sev){ ?>
                                <a class="dropdown-item" href="<?=site_url('welcome/web_development/'.$sev->sub_menu_id);?>"> <?=$sev->service_name?> </a>
                              <?php  }?>
                                
                            </div>
                          <?php }?>
                        </li>
                      <?php }?>
                       
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-sm" href="#">get a quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div> -->

    <?php 
    foreach($this->models->getlogo() as $logo)
    ?>
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?=site_url('welcome/index');?>">
                    <img style="height: auto; width: 220px;" src="<?=base_url();?>images/logo/<?=$logo->logo_img?>" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <?php foreach($this->models->getmenu() as $menu){ 
                          if($menu->menu_url==1){?>



                             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <?=$menu->menu_name?>
                            </a>
                            
                            
                            <div class="dropdown-menu" >
                              <?php foreach($this->models->getsubmenu() as $submenu){
                            
                              if($menu->m_id==$submenu->menu){
                            
                            ?>
                            
                                <a class="dropdown-item" href="<?=site_url('welcome/web_development/'.$submenu->sub_menu_id);?>"><?=$submenu->sub_menu_name?></a>
                              <?php }}?>
                            </div>
                          

                            </li>
                            

                        
                      <?php  } else{?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?=site_url($menu->menu_url);?>"><?=$menu->menu_name?></a>
                        </li>

                      <?php } }?>
                        
                       
                        
                        
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-sm" href="<?=site_url('welcome/contact');?>">get a quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
