<!--Template Name: vacayhome
File Name: gallery.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include "head.php"; ?>
    <script src="<?php echo base_url('asset/css_web_user/js/jquery.imagesloaded.js');?>" type="text/javascript">
    </script>
    <script src="<?php echo base_url('asset/css_web_user/js/masonry.pkgd.min.js');?>" type="text/javascript">
    </script>
       
   <style>
   .grid {
    background: rgba(0,0,0,0);
}
/* clear fix */
.grid:after {
    content: '';
    display: block;
    clear: both;
}
/* ---- .grid-item ---- */
.grid-sizer,
.grid-item {
    width: 33.34%;
}
.grid-item {
    float: left;
}
.grid-item img {
    display: block;
    max-width: 100%;
}
</style>
</head>
<body>
    <div id="page">
       <!-- header -->
       <?php include "header.php"; ?>
       <!-- end header -->

       <!--end-->
       <!-- <section class="image-head-wrapper">
        <div class="inner-wrapper">
            <h1>Gallery</h1>
        </div>
    </section> -->
    <!-- <div class="clearfix"></div>
 -->

    <hr style="display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                /*border-style: inset;*/
                border-width: 4px;">
    
    <div>
        <h1 style="text-align: center; margin-top: 40px; ">GALLERY</h1>
    </div>
    <section class="gallery-block">
        <div class="container">
            <div class="row">
                <div class="grid hover-effect">
                    <div class="grid-sizer"></div>
                    <?php foreach ($data_wisata_detail_foto as $key) { ?>
                    <div class="grid-item percent37 gallery-image">
                        <a class="example-image-link img-responsive" href="<?php echo base_url('asset/css_web_user/images/tourism/' .$data_wisata_detail->category .'/' .$key->foto);?>" data-lightbox="example-1"><img src="<?php echo base_url('asset/css_web_user/images/tourism/' .$data_wisata_detail->category .'/' .$key->foto);?>" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <!-- <!-back to top-> -->
    <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
        <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
        <span>Top</span>
    </a>

</div>
<script>
    var grid = document.querySelector('.grid');

    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });

    imagesLoaded(grid).on('progress', function () {
                // layout Masonry after each image loads
                msnry.layout();
            });
        </script>
    </body>
    </html>
