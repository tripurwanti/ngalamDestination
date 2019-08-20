<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
</head>
<body>
    <div id="page">
        <?php include "header.php"; ?>

        <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
        <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->

            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active"> <img src="<?php echo base_url('asset/css_web_user/images/tourism/banner/banner6.png');?>" style="width:100%; height: 500px" alt="First slide">
                    <div class="carousel-caption">
                        <h1>Welcome to<br>Ngalam Destination</h1>
                    </div>
                </div>
                <div class="item"> <img src="<?php echo base_url('asset/css_web_user/images/tourism/banner/banner7.png');?>" style="width:100%; height: 500px" alt="Second slide">
                    <div class="carousel-caption">
                        <h1>Welcome to<br>Ngalam Destination</h1>
                    </div>
                </div>
                <div class="item"> <img src="<?php echo base_url('asset/css_web_user/images/tourism/banner/banner8.png');?>" style="width:100%; height: 500px" alt="Third slide">
                    <div class="carousel-caption">
                        <h1>Welcome to<br>Ngalam Destination</h1>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="<?php echo base_url('asset/css_web_user/images/icons/left-arrow.png');?>" onmouseover="this.src = '<?php echo base_url('asset/css_web_user/images/icons/left-arrow-hover.png');?>'" onmouseout="this.src = '<?php echo base_url('asset/css_web_user/images/icons/left-arrow.png');?>'" alt="left"></a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="<?php echo base_url('asset/css_web_user/images/icons/right-arrow.png');?>" onmouseover="this.src = '<?php echo base_url('asset/css_web_user/images/icons/right-arrow-hover.png');?>'" onmouseout="this.src = '<?php echo base_url('asset/css_web_user/images/icons/right-arrow.png');?>'" alt="left"></a>

        </div>
        <div class="clearfix"></div>

        <!-- service block -->
        <section id="destination" class="service-block">
            <div class="container">
                <div class="row">
                    <H1 style="text-align: center;">YOU CAN CHOOSE YOUR DESTINATION</H1>
                    <br>
                    <br>
                    <br>
                    <br>
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
        <script>   
            $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
        </script>
    </div>
</body>
</html>

