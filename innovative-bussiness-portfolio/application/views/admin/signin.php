<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SignUp</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.html">
    <link rel="stylesheet" href="../../use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="<?=base_url();?>admin/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="<?=site_url('admin/index');?>"> <h4>Signin</h4></a>
                                <?=form_open_multipart('admin/insertuser');?>
                                <div class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username"  placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </div>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="<?=site_url('admin/login');?>" class="text-primary">LOGIN </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url();?>admin/plugins/common/common.min.js"></script>
    <script src="<?=base_url();?>admin/js/custom.min.js"></script>
    <script src="<?=base_url();?>admin/js/settings.js"></script>
    <script src="<?=base_url();?>admin/js/gleek.js"></script>
    <script src="<?=base_url();?>admin/js/styleSwitcher.js"></script>
</body>
</html>





