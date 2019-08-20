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
                        <li><a href="<?php echo site_url('c_admin/show_all_wisata') ?>">Tampil Data Wisata</a></li>
                        <li class="active">Edit Data Wisata</li>
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
                            <strong>Tambah Data User</strong>
                        </div>
                        <div class="card-body card-block">
                            <form method="post" action="<?php echo site_url('c_admin/edit_wisata/' .$data_wisata->id) ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Tempat Wisata</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Tempat WIsata " value="<?php echo $data_wisata->nama ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Description" value="<?php echo $data_wisata->description ?>"><?php echo $data_wisata->description ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Lokasi</label>
                                    <input type="text" class="form-control" name="address" placeholder="Lokasi" value="<?php echo $data_wisata->address ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">HTM (Harga Tiket Masuk)</label>
                                    <input type="text" class="form-control" name="htm" placeholder="50000" value="<?php echo $data_wisata->htm ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jam Operasional</label>
                                    <input type="text" class="form-control" name="jam_operasional" placeholder="09.00 AM - 21.00 PM" value="<?php echo $data_wisata->jam_operasional ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nomor Telp.</label>
                                    <input type="text" class="form-control" name="nomor_telp" placeholder="081234567xxx" value="<?php echo $data_wisata->nomor_telp ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Location (Embedded Maps Adrress)</label>
                                    <input type="text" class="form-control" name="location" placeholder="https://www.google.com/maps/embed?pb=xxx" value="<?php echo $data_wisata->location ?>">
                                </div>
                                <div class="form-group">

                                    <select data-placeholder="Choose Category" class="standardSelect" tabindex="1" name="category">
                                        <option value="Natural" <?php if ($data_wisata->category == 'Natural') {
                                            echo "Selected";
                                        } ?>>Natural</option>
                                        <option value="Waterpark" <?php if ($data_wisata->category == 'Waterpark') {
                                            echo "Selected";
                                        } ?>>Waterpark</option>
                                        <option value="Recreation Park" <?php if ($data_wisata->category == 'Recreation') {
                                            echo "Selected";
                                        } ?>>Recreation</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Foto</strong>
                            <p>*ket : foto ini merupakan thumbnail dari tempat wisata</p>
                        </div>
                        <div class="card-body card-block">
                            <form action="<?php echo site_url('c_admin/upload_foto_profil_wisata/' .$data_wisata->id .'/'  .$data_wisata->category);?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Foto</label>
                                    <input type="file" class="form-control" name="upload_file">
                                </div>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Foto Deskripsi</strong>
                            <p>Minimal 3 foto deskripsi</p>
                        </div>
                        <div class="card-body card-block">
                            <form action="<?php echo site_url('c_admin/upload_foto_wisata/' .$data_wisata->id .'/'  .$data_wisata->category);?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Foto</label>
                                <input type="file" class="form-control" name="upload_file">
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
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
