<?php

global $revolution;
$revolution = 'slideshow2';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');
include_once('templates/slideshows/slideshow2.php');

?>

    <div id="main">

        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="assets/images/home6-mondova.png" alt="" />
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <?php include('templates/product-tab1.php'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="row no-gutters row-flex row-content-middle">
                <div class="col-md-3 col-sm-3 bg-dark">
                    <div class="col-inner">
                        <div class="kt-heading style-3 text-center light no-margin pad-top-130 pad-bottom-130">
                            <div class="kt-heading-backend">men's fashion</div>
                            <h3 class="kt-heading-title">m&nbsp;&nbsp;&nbsp;e&nbsp;&nbsp;&nbsp;n&nbsp;&nbsp;'s</h3>
                        </div><!-- .kt-heading-wrapper -->
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 text-center kt-column-bg" style="background-image:url(assets/images/background/page-header.jpg);">
                    <div class="col-inner">
                        <div><a href="#" class="btn btn-default btn-light">view all shop</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <?php include('templates/product-tab1.php'); ?>
                    </div>
                    <div class="col-md-4 col-sm-4 text-right">
                        <img src="assets/images/home6-mondova.png" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="row no-gutters row-flex row-content-middle">
                <div class="col-md-9 col-sm-9 text-center kt-column-bg" style="background-image:url(assets/images/background/home6-bg2.jpg);">
                    <div class="col-inner">
                        <div><a href="#" class="btn btn-default btn-light">view all shop</a></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 bg-dark">
                    <div class="col-inner">
                        <div class="kt-heading style-3 text-center light no-margin pad-top-130 pad-bottom-130">
                            <div class="kt-heading-backend">women's fashion</div>
                            <h3 class="kt-heading-title">w&nbsp;&nbsp;&nbsp;o&nbsp;&nbsp;&nbsp;m&nbsp;&nbsp;&nbsp;e&nbsp;&nbsp;&nbsp;n</h3>
                        </div><!-- .kt-heading-wrapper -->
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="assets/images/home6-mondova.png" alt="" />
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <?php include('templates/product-tab1.php'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section no-pad-bottom">
            <div class="row no-gutters row-flex row-content-middle">
                <div class="col-md-3 col-sm-3 bg-dark">
                    <div class="col-inner">
                        <div class="kt-heading style-3 text-center light no-margin pad-top-130 pad-bottom-130">
                            <div class="kt-heading-backend">Accessories</div>
                            <h3 class="kt-heading-title">a&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;&nbsp;e&nbsp;&nbsp;&nbsp;s&nbsp;&nbsp;&nbsp;s</h3>
                        </div><!-- .kt-heading-wrapper -->
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 text-center kt-column-bg" style="background-image:url(assets/images/background/home6-bg3.jpg);">
                    <div class="col-inner">
                        <div><a href="#" class="btn btn-default btn-light">view all shop</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section bg-gray">
            <div class="container">
                <?php include_once('client-carousel.php'); ?>
            </div>
        </div>

    </div><!-- #main -->
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');


