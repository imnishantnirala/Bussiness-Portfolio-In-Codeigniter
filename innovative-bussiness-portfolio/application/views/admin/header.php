<?php
if($this->session->userdata("checksesn")!="asdf8s7df8dsf"){
redirect("admin/login");
}

?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="<?=base_url();?>admin/image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="<?=base_url();?>admin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="<?=base_url();?>admin/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?=base_url();?>admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url();?>admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url();?>admin/css/style.css" rel="stylesheet">
    <script src="<?=base_url();?>admin/ckeditor/ckeditor.js"></script>

</head>

<body>

   
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    
    <div id="main-wrapper">

       
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?=site_url('admin/index');?>">
                    <b class="logo-abbr">Admin </b>
                    <span class="logo-compact">Admin</span>
                    <span class="brand-title">
                        Innovative Admin 
                    </span>
                </a>
            </div>
        </div>
        
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        
                        
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>Visit Site</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="<?=site_url('welcome/index');?>">Open</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="<?=base_url();?>admin/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        <li><a href="<?=site_url('admin/logout');?>"><i class="icon-key"></i> <span  onclick="return confirm('Are you sure for Logout');">Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="nk-sidebar ">           
            <div class="nk-nav-scroll ">
                <ul class="metismenu" id="menu">
                 
                    <li>
                        <a class="has-arrow" href="<?=site_url('admin/index');?>" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        
                    </li>
                    
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-wpforms"></i></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <!-- <li><a href="<?=site_url('admin/contact');?>">ADD Contact Forms</a></li> -->
                             <li><a href="<?=site_url('admin/showcontact');?>"> <i class="fa fa-eye"> Show Contact Forms </i> </a></li>
                            <!-- <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-step.html">Step Form</a></li>
                            <li><a href="form-editor.html">Editor</a></li>
                            <li><a href="form-picker.html">Picker</a></li> -->
                        </ul>
                    </li>

                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-bars"></i><span class="nav-text">Header</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?=site_url('admin/menu');?>"> <i class="fa fa-plus">  Add Menu </i> </a></li>
                             <li><a href="<?=site_url('admin/showmenu');?>"> <i class="fa fa-eye"> Show-menu </i> </a></li>
                            
                            <li><a href="<?=site_url('admin/submenu');?>"> <i class="fa fa-plus">  Add Sub Menu </i> </a></li>
                            <li><a href="<?=site_url('admin/showsubmenu');?>"> <i class="fa fa-eye">  Show Sub Menu </i> </a></li>
                            <!--
                            <li><a href="form-editor.html">Editor</a></li>
                            <li><a href="form-picker.html">Picker</a></li> -->
                        </ul>
                    </li>

                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-cogs"></i><span class="nav-text">Service</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?=site_url('admin/service');?>"> <i class="fa fa-plus"> Add Basic Service Info </i> </a></li>
                             <li><a href="<?=site_url('admin/show_service');?>"><i class="fa fa-eye"> Show Basic Service Info </i> </a></li>
                            
                            <li><a href="<?=site_url('admin/latest_project');?>"> <i class="fa fa-plus"> Latest Project </i> </a></li>
                            <li><a href="<?=site_url('admin/show_latest_project');?>"> <i class="fa fa-eye"> Show Latest Project </i> </a></li>
                            
                            <li><a href="<?=site_url('admin/service_card'); ?>"> <i class="fa fa-plus"> Service Card </i> </a></li>
                            <li><a href="<?=site_url('admin/show_service_card'); ?>"> <i class="fa fa-eye"> Show Service Card </i> </a></li> 
                        </ul>
                    </li>




                   
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                           <i class="fa fa-image"></i><span class="nav-text">Banner</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?=site_url('admin/banner');?>"> <i class="fa fa-plus"> Add Banner </i> </a></li>
                             <li><a href="<?=site_url('admin/show_banner');?>"> <i class="fa fa-eye"> Show Banner </i> </a></li>
                        </ul>
                    </li>

                   
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-info-circle"></i><span class="nav-text">Details</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li><a href="<?=site_url('admin/company_details');?>"> <i class="fa fa-eye"> Show Details </i> </a></li>
                             
                        </ul>
                    </li>


                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-image"></i><span class="nav-text">LOGO</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li><a href="<?=site_url('admin/show_logo');?>"> <i class="fa fa-eye"> Show LOGO </i> </a></li>
                             
                        </ul>
                    </li>

                   
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-user-secret"></i><span class="nav-text">PRIVACY POLICY</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li><a href="<?=site_url('admin/show_privacy_policy');?>"> <i class="fa fa-eye"> Show PRIVACY POLICY </i> </a></li>
                             
                        </ul>
                    </li>

                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card"></i><span class="nav-text">About Us</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li><a href="<?=site_url('admin/show_about');?>"> <i class="fa fa-eye"> Show About </i> </a></li>
                             
                        </ul>
                    </li>

                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-star"></i><span class="nav-text">Review</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?=site_url('admin/review');?>"> <i class="fa fa-plus"> Add Review </i> </a></li> 
                            <li><a href="<?=site_url('admin/show_review');?>"> <i class="fa fa-eye"> Show Review </i> </a></li>
                             
                        </ul>
                    </li>

                </ul>
            </div>
        </div>