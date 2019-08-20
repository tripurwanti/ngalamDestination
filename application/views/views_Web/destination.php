<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
</head>
<body>
    <div id="page">
        <?php include "header.php"; ?>

        <hr style="display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        /*border-style: inset;*/
        border-width: 4px;">

        <!--resort-overview -->

        <div>
            <h2 style="text-align: center; margin-top: 30px;">Choose Your Destination</h2>
        </div>
        <section class="blog-block">
            <div class="container">
                <div class="row">
                    <?php foreach ($data_wisata as $key) { ?>
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
                                <h3><a><?php echo $key->nama; ?></a></h3>
                                <p><?php echo $key->address; ?></p>
                                <p>Rp. <?php echo $key->htm; ?></p>
                                <div class="links"><a href="<?php echo site_url('c_web/show_description/' .$key->id);?>">Read more</a>
                                <?php if ($this->session->userdata('jenis') == 'user') { ?>
                                    <a href="<?php echo site_url('c_user/add_wishlist/' .$key->id);?>">wishlist</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <?php }?>
                </div>
            </div>
        </section>

        <section id="destination" class="service-block">
            <div class="container">
                <div class="row">
                        <!-- <H1 style="text-align: center;">YOU CAN CHOOSE YOUR DESTINATION</H1>
                        <br>
                        <br>
                        <br>
                        <br> -->
                        <div class="col-md-4 col-sm-4 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img width="55px" height="45px" alt="image" class="img-responsive" src="<?php echo base_url('asset/css_web_user/images/icons/1pegunungan.png');?>">
                                </div>
                                <h4><a href="<?php echo site_url('c_web/show_category/Natural');?>">natural tourism</a></h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img width="55px" height="45px" alt="image" class="img-responsive" src="<?php echo base_url('asset/css_web_user/images/icons/3waterpark.png');?>">
                                </div>
                                <h4><a href="<?php echo site_url('c_web/show_category/Waterpark');?>">water park</a></h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img width="55px" height="45px" alt="image" class="img-responsive" src="<?php echo base_url('asset/css_web_user/images/icons/4tamanrekreasi.png');?>">
                                </div>
                                <h4><a href="<?php echo site_url('c_web/show_category/Recreation');?>">rekreation park</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- footer -->
            <?php include "footer.php"; ?>

        </div>
    </body>
    </html>

