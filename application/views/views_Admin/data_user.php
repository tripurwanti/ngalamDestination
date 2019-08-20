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
                        <li><a href="<?php echo site_url('c_admin/show_dashboard') ?>">Dashboard</a></li>
                        <li><a href="<?php echo site_url('c_admin/show_all_user') ?>">Data User</a></li>
                        <li class="active">Tampil Data User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data User</strong>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Fullname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_user as $key) { ?>
                            <tr>
                                <td><a href="#"><?php echo $key->fullname; ?></a></td>
                                <td><?php echo $key->username; ?></td>
                                <td><?php echo $key->email; ?></td>
                                <td style="text-align: center;">
                                    <a href="<?php echo site_url('c_admin/show_edit_user/' .$key->id) ?>">Edit</a> | <a href="<?php echo site_url('c_admin/delete_user/' .$key->id) ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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


<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/datatables.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/buttons.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/jszip.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/buttons.colVis.min.js');?>"></script>
<script src="<?php echo base_url('asset/css_admin/assets/js/lib/data-table/datatables-init.js');?>"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
  } );
</script>


</body>
</html>
