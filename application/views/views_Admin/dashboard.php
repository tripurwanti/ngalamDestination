<!doctype html>
<html class="no-js" lang="">
<head>
    <?php include "head.php"; ?>

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
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">


            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">Profile Card</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="<?php echo base_url('asset/css_admin/images_admin/' .$data_admin->foto_profil);?>" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $data_admin->fullname; ?></h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> California, United States</div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                            <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div> <!-- .content -->
</div><!-- /#right-panel -->



<!-- Right Panel -->
<?php include "script.php" ?>

</body>
</html>
