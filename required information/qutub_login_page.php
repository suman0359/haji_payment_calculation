<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <!-- start: HEAD -->
    <head>
        <title>Hajj Application Login</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- end: GOOGLE FONTS -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/fontawesome/css/font-awesome.min.css">
<!--         <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/themify-icons/themify-icons.min.css">
        <link href="<?php echo base_url(); ?>vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>vendor/switchery/switchery.min.css" rel="stylesheet" media="screen"> -->
        <!-- end: MAIN CSS -->
        <!-- start: CLIP-TWO CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/theme-1.css" id="skin_color" /> -->
        <!-- end: CLIP-TWO CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class="login">
        <!-- start: LOGIN -->
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="logo margin-top-30">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Clip-Two"/>
                </div>
                <!-- start: LOGIN BOX -->
                <div class="box-login">
                    <form class="form-login" method="POST" action="<?php echo base_url() . "auth/check_login"; ?>">
                        <fieldset>
                            <legend>
                                Sign in to your account
                            </legend>
                            <p>
                                Please enter your name and password to log in.
                                <?php $this->load->view('common/error_show'); ?>
                            </p>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <i class="fa fa-user"></i> </span>
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <input type="password" class="form-control password" name="password" placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                    <a class="forgot" href="login_forgot.html">
                                        I forgot my password
                                    </a> </span>
                            </div>
                            <div class="form-actions">
                                <div class="checkbox clip-check check-primary">
                                    <input type="checkbox" id="remember" value="1">
                                    <label for="remember">
                                        Keep me signed in
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                            <div class="new-account">
                                Don't have an account yet?
                                <a href="<?php echo base_url(); ?>">
                                    Create an account
                                </a>
                            </div>
                        </fieldset>
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        &copy; <span class="current-year"></span><span class="text-bold text-uppercase">2016 Micron Techno</span>. <span>All rights reserved</span>
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: LOGIN BOX -->
            </div>
        </div>

        <!-- end: LOGIN -->
        <!-- start: MAIN JAVASCRIPTS -->
        <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
        
        <!-- end: MAIN JAVASCRIPTS -->
     
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: CLIP-TWO JAVASCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <!-- start: JavaScript Event Handlers for this page -->
        <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
        <script>
            jQuery(document).ready(function () {
                Main.init();
                Login.init();
            });
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
    <!-- end: BODY -->
</html>