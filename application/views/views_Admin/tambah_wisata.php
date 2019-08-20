<!doctype html>
<html class="no-js" lang="">
<head>
   <?php include "head.php"; ?>

   <link rel="stylesheet" href="<?php echo base_url('asset/css_admin/assets/css/lib/datatable/dataTables.bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('asset/css_admin/assets/css/lib/chosen/chosen.min.css');?>">


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
                        <li><a href="<?php echo site_url('c_admin/show_all_wisata') ?>">Data Wisata</a></li>
                        <li class="active">Tambah Data Wisata</li>
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
                            <strong>Tambah Data Wisata</strong>
                        </div>
                        <div class="card-body card-block">
                            <form method="post" action="<?php echo site_url('c_admin/add_wisata/') ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Tempat Wisata</label>
                                    <p>*ket : ID kategory Natural (NTR), Waterpark (WTP), Recreation (RCT) diikuti "-" nomor id, ex : NTR-1</p>
                                    <input type="text" class="form-control" name="id" placeholder="ID Tempat WIsata ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Tempat Wisata</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Tempat WIsata ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Lokasi</label>
                                    <input type="text" class="form-control" name="address" placeholder="Lokasi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">HTM (Harga Tiket Masuk)</label>
                                    <input type="text" class="form-control" name="htm" placeholder="50000">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jam Operasional</label>
                                    <input type="text" class="form-control" name="jam_operasional" placeholder="09.00 AM - 21.00 PM">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nomor Telp.</label>
                                    <input type="text" class="form-control" name="nomor_telp" placeholder="081234567xxx">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Location (Embedded Maps Adrress)</label>
                                    <input type="text" class="form-control" name="location" placeholder="https://www.google.com/maps/embed?pb=xxx">
                                </div>
                                <div class="form-group">

                                    <select data-placeholder="Choose Category" class="standardSelect" tabindex="1" name="category">
                                        <option value=""></option>
                                        <option value="Natural">Natural</option>
                                        <option value="Waterpark">Waterpark</option>
                                        <option value="Recreation Park">Recreation</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>

                        </div>
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
