<!--Template Name: vacayhome
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php" ?>
</head>
<body>
    <div id="page">
        <!-- header -->
        <?php include "header.php"; ?>
        <!-- end header -->

        <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->

            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active"> <img src="<?php echo base_url('asset/css_web_user/images/tourism/' .$data_wisata_detail->category .'/' .$data_wisata_detail->foto_profil);?>" style="width:100%; height: 500px" alt="First slide">
                    <div class="carousel-caption">
                        <h1><?php echo $data_wisata_detail->nama ?></h1>
                    </div>
                </div>
                <?php foreach ($data_wisata_detail_foto as $key) { 
                    if ($counter++ >= 2) {
                        break;
                    }
                    ?>
                    <div class="item"> <img src="<?php echo base_url('asset/css_web_user/images/tourism/' .$data_wisata_detail->category .'/' .$key->foto);?>" style="width:100%; height: 500px" alt="Second slide">
                        <div class="carousel-caption">
                            <h1><?php $data_wisata_detail->nama ?></h1>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="<?php echo base_url('asset/css_web_user/images/icons/left-arrow.png');?>" onmouseover="this.src = '<?php echo base_url('asset/css_web_user/images/icons/left-arrow-hover.png');?>'" onmouseout="this.src = '<?php echo base_url('asset/css_web_user/images/icons/left-arrow.png');?>'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="<?php echo base_url('asset/css_web_user/images/icons/right-arrow.png');?>" onmouseover="this.src = '<?php echo base_url('asset/css_web_user/images/icons/right-arrow-hover.png');?>'" onmouseout="this.src = '<?php echo base_url('asset/css_web_user/images/icons/right-arrow.png');?>'" alt="left"></a>

            </div>
            <div class="clearfix"></div>


            <!--gallery block-->
            <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
                        <?php $counter = 0; foreach ($data_wisata_detail_foto as $key) { 
                            if ($counter++ >= 4) {
                                break;
                            }
                            ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="gallery-image">
                                    <img class="img-responsive" src="<?php echo base_url('asset/css_web_user/images/tourism/' .$data_wisata_detail->category .'/' .$key->foto);?>">
                                    <div class="overlay">
                                        <a class="info pop example-image-link img-responsive" href="<?php echo base_url('asset/css_web_user/images/tourism/' .$data_wisata_detail->category .'/' .$key->foto);?>" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        <p><a><?php echo $data_wisata_detail->nama ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="event-blog-details text-center">
                        <br>
                        <br>
                        <br>
                        <a class="btn btn-default" href="<?php echo site_url('c_web/show_gallery/' .$data_wisata_detail->id);?>">SEE MORE PICTURE</a>
                    </div>
                </section>

                <!--dinning-->
                <section class="blog">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-9 col-sm-8 col-xs-12 event-blog-details">
                                <h2 class="blog-title-head"><?php echo $data_wisata_detail->nama ?></h2>
                                <h5 style="margin-bottom: 10px;">Updated by Admin on <?php echo $data_wisata_detail->last_update; ?></h5>
                                <div style="border: 2px solid #eaece5; border-radius : 10px; padding: 10px; margin-bottom: 20px;" >
                                    <h3>Description</h5>
                                        <p class="blog-desc"><?php echo $data_wisata_detail->description ?></p>
                                    </div>


                                    <div style="text-align: center;">
                                        <?php if ($this->session->userdata('jenis') == 'user') { ?>
                                        <div class="col-md-4 links">
                                           <a href="<?php echo site_url('c_user/add_wishlist/' .$data_wisata_detail->id);?>">Wishlist</a>
                                       </div>

                                       <div class="col-md-4  links">
                                        <a href="<?php echo site_url('c_user/add_history/' .$data_wisata_detail->id);?>">ADD TO MY HISTORY</a>
                                    </div>
                                    <?php } ?>
                                </div>


                                <div class="offspace-70" >
                                    <h2 class="fa fa-map-marker fa-2x" style="margin-top: 20px;">LOCATION</h2>
                                    <div style="margin-top: 10px;" class="map">

                                        <iframe src="<?php echo $data_wisata_detail->location ?>"  frameborder="0" style="border:0; width: 100%; height: 400px" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div id="review" class="single-bottom comment-form" style="margin-top: 30px;">
                                    <h3>Leave your Review</h3>
                                    <form action="<?php echo site_url('c_comment/add_comment/' .$data_wisata_detail->id);?>" method="post">
                                        <textarea class="form-control" name="message" placeholder="Review Here...." required="" <?php if (($this->session->userdata('jenis')) != 'user') {
                                            echo "disabled";
                                        } ?> ></textarea>
                                        <?php if (($this->session->userdata('jenis')) == 'user') { ?>
                                        <input type="submit" class="submit-btn" value="Send">
                                        <?php } else { ?>
                                        <input type="submit" class="submit-btn" value="Please login first" disabled>
                                        <?php }
                                        ?> 
                                    </form>
                                </div>


                                <div style="margin-top: 30px;">
                                    <h3>Review</h3>
                                    <br>
                                    <?php foreach ($data_comment as $key) { ?>
                                    <div  style="border: 2px solid #eaece5; border-radius : 10px; padding: 10px;">
                                        <h5><?php echo $key->username; ?></h5>
                                        <br>
                                        <p><?php echo $key->comment; ?>
                                        </p>
                                    </div>
                                    <?php } ?>
                                </div>



                            </div>

                            <aside class="col-md-3 col-sm-4 col-xs-12">
                                <div class="blog-list">
                                    <h4>Info</h4>
                                    <ul >
                                        <li style="margin: 10px;" ><i class="fa fa-sign-in fa-lg"> </i><?php echo $data_wisata_detail->jam_operasional ?></li>
                                        <li style="margin: 10px;"><i class="fa fa-money fa-lg"> </i>Rp. <?php echo $data_wisata_detail->htm ?></li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>


                                <div class="blog-list">
                                    <h4>Categories</h4>
                                    <ul>
                                        <li><a href="<?php echo site_url('c_web/show_category/Natural');?>"><i class="fa fa-caret-right"> </i>Natural Tourism</a></li>
                                        <li><a href="<?php echo site_url('c_web/show_category/Waterpark');?>"><i class="fa fa-caret-right"> </i>Waterpark</a></li>
                                        <li><a href="<?php echo site_url('c_web/show_category/Recreation');?>"><i class="fa fa-caret-right"> </i>Recreation Park</a></li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </section>

                <?php include "footer.php" ?>

            </div>
        </body>
        </html>
