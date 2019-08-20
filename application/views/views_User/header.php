            <!---header top-->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6 text-right">
                            <div class="btn-group ">
                              <a class="btn login-now-btn" href="<?php echo site_url('c_user/');?>"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('username'); ?></a>
                              <a class="btn login-now-btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('c_user/show_profile_user/');?>">Profile</a></li>
                                <li><a href="<?php echo site_url('c_user/show_wishlist/');?>">Wishlist</a></li>
                                <li><a href="<?php echo site_url('c_user/show_history/');?>">History</a></li>
                                <li><a href="<?php echo site_url('c_user/logout/');?>">Logout</a></li>  
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
                                <div class="col-sm-6 visible-sm">
                                    <div class="text-right col-md-8">
                                        <input type="text" class="form-control" name="search" placeholder="Search"></input>
                                    </div>
                                    <div class="text-right col-md-4">
                                        <a href="<?php echo site_url('c_web/show_search/');?>"><button type="button" class="book-now-btn">Search</button></a>
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
                                                <li><a  data-hover="Home" href="<?php echo base_url(); ?>"><span>Home</span></a></li>
                                                <li><a data-hover="Destination" href="<?php echo site_url('c_web/show_destination/');?>"><span>Destination</span></a></li>
                                                <li><a data-hover="About"  href="<?php echo site_url('c_web/show_about/');?>"><span>About</span></a></li>
                                                <li><a data-hover="Contact Us" href="contact.php"><span>contact Us</span></a></li>
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
                                        <a><button type="button" class="book-now-btn">Search</button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <hr style="display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                /*border-style: inset;*/
                border-width: 4px;">

                <!-- Register -->
                <div id="mydaftar" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                       <!-- Modal content-->
                       <div class="modal-content transparan2" style=" color: black">
                        <div class="modal-header transparan3" style="background-color:#ff4157;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 style="color: white;" class="modal-title">Edit Profile</h4>
                        </div>
                        <div class="modal-body" style="background-color: #f0f0f0;">

                            <form action="<?php echo site_url('c_user/edit_user/');?>" method="post" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fullname</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo $data_akun->fullname; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $data_akun->username; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $data_akun->email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $data_akun->password; ?>">
                                </div>
                            </div>
                            <div class="modal-footer transparan3" >
                                <button type="submit" class="book-now-btn">Submit</button>
                                <button type="button" class="book-now-btn" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end register -->

            <!-- photo profile -->
            <div id="mychangeprofil" class="modal fade" role="dialog">
                <div class="modal-dialog">
                   <!-- Modal content-->
                   <div class="modal-content transparan2" style=" color: black">
                    <div class="modal-header transparan3" style="background-color:#ff4157;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 style="color: white;" class="modal-title">Edit Profile Picture</h4>
                    </div>
                    <div class="modal-body" style="background-color: #f0f0f0;">
                        <form action="<?php echo site_url('c_user/aksi_upload/');?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Select Picture Profile</label>
                                <input type="file" name="berkas">     
                            </div>
                        </div>
                        <div class="modal-footer transparan3" >
                            <button type="submit" class="book-now-btn">Submit</button>
                            <button type="button" class="book-now-btn" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- change photo profile -->


        <section style="margin-top: 20px;">
            <div class="container">
                <div class="item active">
                    <div class="media blog-view-box">
                        <div class="media-left">
                            <ul class="list-unstyled">
                                <li data-toggle="modal" data-target="#mychangeprofil" ><a href="#"><img src="<?php echo base_url('asset/css_web_user/images/profil/' .$foto_profil);?>" class="media-object"></a></li>   
                            </ul>

                        </div>
                        <div class="media-body">                                    
                            <h2 class="media-heading blog-title"><?php echo $data_akun->fullname; ?></h2>
                            <h5 class="blog-rev"><?php echo $this->session->userdata('jenis'); ?></h5>
                            <ul class="list-unstyled">
                                <li data-toggle="modal" data-target="#mydaftar" ><a href="#"><button style="margin-top: 10px;" class="login-now-btn">edit profile</button></a></li>   
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
