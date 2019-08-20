<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url('asset/css_web_user/images/icons/ngalamDestination.png');?>"/>
    <title>Adm NgalamDestination</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="assets/scss/style.css"> -->
    <link href="<?php echo base_url('asset/css_admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css_admin/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css_admin/css/style2.css');?>" rel="stylesheet">
    <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('asset/css_admin/css/lightbox.min.css');?>">
    <link href="<?php echo base_url('asset/css_admin/css/responsive.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/css_admin/assets/js/jquery.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/lightbox-plus-jquery.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/instafeed.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/custom.js');?>" type="text/javascript"></script>

    <style type="">

    .login-content {
        max-width: 540px;
        margin: 8vh auto; }
        #notifications {
            cursor: pointer;
            position: fixed;
            right: 0px;
            z-index: 9999;
            bottom: 0px;
            margin-bottom: 22px;
            margin-right: 15px;
            min-width: 300px; 
            max-width: 800px;  
        }

    </style>
</head>
<body>


    <!---header top-->
           <!-- <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="btn-group ">
                                  <a class="btn login-now-btn" href="#"><i class="fa fa-user fa-fw"></i> User</a>
                                  <a class="btn login-now-btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="history.php">History</a></li>
                                    <li><a href="#">Logout</a></li>  
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->




            <!--header-->
            <header class="header-container">
                <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <a href="<?php echo site_url('c_web');?>"><span>Ngalam</span>
                                        <br/><p style="margin: 5px 0px 0px 57px;">Destination</p></a>
                                    </div>                       
                                </div>

                            </div>
                        </div>
                    </div>
                </header>

                <section>
                    <div class="sufee-login d-flex align-content-center flex-wrap">
                        <div class="container">
                            <div class="login-content">
                                <h2 style="margin-bottom: 20px; text-align: center;">Login Admin</h2>
                                <div class="login-form">
                                    <form action="<?php echo site_url('c_admin/login_admin/');?>" method="post">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                        <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div> -->
                        <button type="submit" class="btn btn-danger btn-flat m-b-30 m-t-30">Sign in</button>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<footer style="margin-top: 228px;" id="contact">
    <div class="container">
        <div class="row">
                        <!-- <div class="col-md-6 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4>Get in touch</h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>Ngalam Destination. Jl. Pingpong 111c Malang</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p> +1-202-555-0100</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="https://mail.google.com"> ngalamdestination@info.com</a></p>
                                    </li>
                                </ul>
                                <div class="footer-social-icon">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>                           
                                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <div class="input-group" id="subscribe">
                                    <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6 col-sm-6 col-xs-12 width-50 width-set-50">
                            <div class="footer-details">
                                <h4>explore</h4>
                                <ul class="list-unstyled footer-links">
                                    <li><a href="http://localhost/ngalamDestination/NonAkun/">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li> <a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div> -->

                    </div>

                    <div class="copyright">
                        &copy; 2017 <a href="#" target="_blank">NgalamDestination</a>
                    </div>

                </div>
            </footer>

            <!-- back to top -->
          <!--   <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a> -->
        </body>