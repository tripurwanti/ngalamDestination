 <!---header top-->
 <div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="social-grid">
                    <?php if ($this->session->userdata('jenis') == 'user') { ?>
                    <ul class="list-unstyled text-right">
                        <li><a href="<?php echo site_url('c_user');?>"><button class="login-now-btn"><?php echo $this->session->userdata('username'); ?></button></a></li>
                        <li><a href="<?php echo site_url('c_user/logout/');?>"><button class="login-now-btn">Logout</button></a></li>    
                    </ul>
                    <?php } else if ($this->session->userdata('jenis') == 'admin') { ?>
                    <ul class="list-unstyled text-right">
                        <li><a href="<?php echo site_url('c_admin/show_dashboard');?>"><button class="login-now-btn"><?php echo $this->session->userdata('username'); ?> (admin)</button></a></li>
                        <li><a href="<?php echo site_url('c_admin/logout/');?>"><button class="login-now-btn">Logout</button></a></li>    
                    </ul>
                    <?php } else { ?>
                    <ul class="list-unstyled text-right">
                        <li data-toggle="modal" data-target="#mydaftar" ><a href="#"><button class="login-now-btn">Registration</button></a></li>
                        <li data-toggle="modal" data-target="#mylogin" ><a href="#"><button class="login-now-btn">Login</button></a></li>    
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--header-->
<header class="header-container">
    <div class="container">
        <div class="top-row">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div id="logo">
                        <a href="<?php echo base_url(); ?>"><span>Ngalam</span>
                            <br/><p style="margin: 5px 0px 0px 57px;">Destination</p></a>
                        </div>                       
                    </div>
                    <div class="col-sm-6 visible-sm" style="border: 1px solid black;">
                       <div class="text-right col-md-8">
                        <input type="text" class="form-control" name="search" placeholder="Search"></input>
                    </div>
                    <div class="text-right col-md-4">
                     <a><button type="button" class="book-now-btn">Search</button></a>
                 </div>
             </div>
             <div class="col-md-6 col-sm-12 col-xs-12 remove-padd">
                <nav class="navbar navbar-default">
                    <div class="navbar-header page-scroll">
                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space text-center">
                        <ul class="list-unstyled nav1 cl-effect-10">
                            <li><a data-hover="Home" href="<?php echo base_url(); ?>"><span>Home</span></a></li>
                            <li><a data-hover="Destination" href="<?php echo site_url('c_web/show_destination/');?>"><span>Destination</span></a></li>
                            <li><a data-hover="About"  href="<?php echo site_url('c_web/show_about/');?>"><span>About</span></a></li>
                            <li><a data-hover="Contact Us" href="#contact"><span>contact Us</span></a></li>

                        </ul>

                    </div>
                </nav>
            </div>
            <div class="col-md-4  col-sm-4 col-xs-12 hidden-sm">
                <div class="text-right col-md-8">
                    <form action="<?php echo site_url('c_web/show_search/');?>" method="post" style="border: 1px solid black;">
                    <input type="text" class="form-control" name="search" placeholder="Search"></input>
                </div>
                <div class="text-right col-md-4">
                 <a ><button type="submit" class="book-now-btn">Search</button></a>
                 </form>

             </div>
         </div>
     </div>
 </div>
</div>
</header>
<!--end header-->


<!-- Register -->
<div id="mydaftar" class="modal fade" role="dialog">
    <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content transparan2" style=" color: black">
        <div class="modal-header transparan3" style="background-color:#ff4157;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color: white;">Registration</h4>
        </div>
        <div class="modal-body" style="background-color: #f0f0f0;">
            <form action="<?php echo site_url('c_user/registrasi/');?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Fullname</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
        </div>
        <div class="modal-footer transparan3" >
            <button type="submit" class="book-now-btn" >Submit</button>
            <button type="button" class="book-now-btn" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>
</div>
</div>
<!-- end register -->


<!-- Modal login -->
<div id="mylogin" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form action="<?php echo site_url('c_user/login_user/');?>" method="post" >
            <div class="modal-content transparan2" style="color: black">
                <div class="modal-header transparan3" style="background-color:#ff4157;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: white;">Login</h4>
                </div>
                <div class="modal-body" style="background-color: #f0f0f0">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer transparan3">
                    <a style="margin-right: 30px;" href="<?php echo site_url('c_web/show_username_verif/');?>">Lupa Password ?</a>
                    <button type="submit" class="book-now-btn" >Login</button>
                    <button type="button" class="book-now-btn" data-dismiss="modal">Close</button>

                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Modal Login -->
