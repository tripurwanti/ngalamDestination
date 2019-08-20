<!doctype html>
<html class="no-js" lang="">
<head>
   <?php include "head.php"; ?>
   
    <link rel="stylesheet" href="<?php echo base_url('asset/css_admin/assets/css/lib/datatable/dataTables.bootstrap.min.css');?>">


</head>
<body>
    <?php include "headernmenu.php"; ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Dashboard</li>
                            <li>Data Admin</li>
                            <li>Tambah Data Admin</li>
                            <li class="active">Edit Data Admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Photo Profile</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?php echo site_url('c_admin/upload_foto_admin/');?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pilih Photo</label>
                                        <input type="file" class="form-control" name="upload_file" placeholder="Fullname">
                                    </div>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Tambah Data Admin</strong>
                            </div>
                            <div class="card-body card-block">
                                <form method="post" action="<?php echo site_url('c_admin/edit_admin/') ?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fullname</label>
                                        <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo $data_admin->fullname; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $data_admin->username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $data_admin->password; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url('asset/css_admin/assets/js/vendor/jquery-2.1.4.min.js');?>"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('asset/css_admin/assets/js/lib/chosen/chosen.jquery.min.js');?>"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

</body>
</html>
