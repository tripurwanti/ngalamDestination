 <!--Template Name: vacayhome
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
</head>
<body>
    <div id="page">
     <!-- header -->
     <?php include "header.php"; ?>
     <!-- end header -->

     <!--resort-overview -->
     <section class="resort-overview-block">
        <div class="container">
            <div class="row">
                <h2 style="padding-left: 10px; margin-bottom: 30px;">YOUR HISTORY DESTINATION</h2>
                <?php foreach ($data_wisata_history as $key) { ?>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img width="228px" height="231px" src="<?php echo base_url('asset/css_web_user/images/tourism/' .$key->category .'/' .$key->foto_profil);?>" class="img-responsive" alt="image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a href="<?php echo site_url('c_web/show_description/' .$key->id_data_wisata);?>"><?php echo $key->nama; ?></a></h3>
                            <br>
                            <h5>Visited at <?php echo $key->time_visit; ?></h5>
                            <br>

                            <div class="links"><a href="<?php echo site_url('c_user/add_favorite/' .$key->id_data_wisata);?>">Favorit</a> <a href="<?php echo site_url('c_user/delete_history/' .$key->id_history);?>">Delete</a> </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <?php } ?>

                <!-- <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img alt="image" class="img-responsive" src="../images/category2.png"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Beatusish ingl</a></h3>
                            <br>
                            <h5>Waktu Kunjungan</h5>
                            <h5>hari dan tanggal kunjungan</h5>
                            <br>

                            <div class="links"><a href="history.php">Favorit</a> <a href="history.php">Delete</a> </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>luxury room</a></h3>
                            <br>
                            <h5>Waktu Kunjungan</h5>
                            <h5>hari dan tanggal kunjungan</h5>
                            <br>
                            <div class="links"><a href="history.php">Favorit</a> <a href="history.php">Delete</a> </div>
                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb">
                            <div class="image txt-rgt">
                                <a class="arrow-left"><img src="../images/category3.png" class="img-responsive" alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>heaven seanery</a></h3>
                            <br>
                            <h5>Waktu Kunjungan</h5>
                            <h5>hari dan tanggal kunjungan</h5>
                            <br>

                            <div class="links"><a href="history.php">Favorit</a> <a href="history.php">Delete</a> </div>
                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb txt-rgt">
                            <div class="image">
                                <a class="arrow-left"><img src="../images/category4.png" class="img-responsive" alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div> -->


            </div>
        </div>
    </section>
    <?php include "footer.php" ?>


</div>
</body>
</html>