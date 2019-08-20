

        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="<?php echo site_url('c_web') ?>">
                    <h3 style="">Ngalam</h3>
                    <p style="color: #ff4157;">Destination</p>
                </a> 
                <a class="navbar-brand hidden" href="./"><!-- <img src="images/logo3.png" alt="Logo"> --></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo site_url('c_admin/show_dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- /.menu-title -->
                    <!-- <h3 class="menu-title">UI elements</h3> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i> Data User</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa "></i><a href="<?php echo site_url('c_admin/show_all_user') ?>">Tampil Data User</a></li>
                            <li><i class="fa "></i><a href="<?php echo site_url('c_admin/show_add_user') ?>">Tambah Data User</a></li>
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Data Wisata</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa "></i><a href="<?php echo site_url('c_admin/show_all_wisata') ?>">Tampil Tempat Wisata</a></li>
                            <li><i class="fa "></i><a href="<?php echo site_url('c_admin/show_add_wisata') ?>">Tambah Tempat Wisata</a></li>
                            <li><i class="fa "></i><a href="<?php echo site_url('c_admin/show_grafik_wisata') ?>">Grafik Tempat Wisata</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Data Admin</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa "></i><a href="<?php echo site_url('c_admin/show_all_admin') ?>">Tampil Data Admin</a></li>
                            <li><i class="fa "></i><a href="<?php echo site_url('c_admin/show_add_admin') ?>">Tambah Data Admin</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div>
                            <h4>Welcome Admin <a href="<?php echo site_url('c_admin/show_dashboard') ?>"><?php echo $data_admin->fullname; ?></a></h4>
                        </div>
                        <!-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> -->

                        <!-- <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div> -->

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url('asset/css_admin/images_admin/' .$data_admin->foto_profil);?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?php echo site_url('c_admin/show_dashboard') ?>"><i class="fa fa- user"></i>My Profile</a>

                                <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
 -->
                                <a class="nav-link" href="<?php echo site_url('c_admin/show_edit_admin') ?>"><i class="fa fa -cog"></i>Edit Profile</a>

                                <a class="nav-link" href="<?php echo site_url('c_admin/logout') ?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
