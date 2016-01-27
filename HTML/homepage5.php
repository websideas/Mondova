<?php

global $revolution;
$revolution = 'slideshow1';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');
include_once('templates/slideshows/slideshow1.php');

?>

    <div id="main">
        
        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-image featured no-margin">
                            <div class="single-image-inner">
                                <a href="#"><img src="assets/images/featured/9.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-1">
                        <div class="kt-heading style3 text-center">
                            <div class="kt-heading-backend">men's fashion</div>
                            <h3 class="kt-heading-title">m&nbsp;&nbsp;&nbsp;e&nbsp;&nbsp;&nbsp;n&nbsp;&nbsp;'s</h3>
                        </div>
                        <?php include('templates/carousel/carousel5.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="kt-heading style3 text-center">
                            <div class="kt-heading-backend">women fashion</div>
                            <h3 class="kt-heading-title">w &nbsp; o &nbsp; m &nbsp; e &nbsp; n</h3>
                        </div>
                        <?php include('templates/carousel/carousel6.php') ?>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-1">
                        <div class="single-image featured no-margin">
                            <div class="single-image-inner">
                                <a href="#"><img src="assets/images/featured/10.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-image featured no-margin">
                            <div class="single-image-inner">
                                <a href="#"><img src="assets/images/featured/11.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-1">
                        <div class="kt-heading style3 text-center">
                            <div class="kt-heading-backend">men's fashion</div>
                            <h3 class="kt-heading-title">a &nbsp; c &nbsp; c&nbsp; e &nbsp; s &nbsp; s</h3>
                        </div>
                        <?php include('templates/carousel/carousel5.php') ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-section bg-gray">
            <div class="container">
                <?php include_once('templates/client-carousel.php'); ?>
            </div>
        </div>

    </div><!-- #main -->

    <img src="previews/05-homepage-V5.jpg" class="preview-image" style="top: -2559px;display: none;" />
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');