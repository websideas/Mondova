<?php

include_once('templates/headers/head.php');
include_once('templates/headers/header3.php');

?>

    <div id="main">

        <div class="page-section no-padding">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="featured-box">
                        <div class="row no-gutters row-flex row-content-middle">
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/images/featured/1.jpg" alt="" />
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="col-inner">
                                    <div class="featured-content">
                                        <h4>Delaware Plimsolls</h4>
                                        <h3>Circle</h3>
                                        <div class="featured-button"><a href="#">SHOP NOW</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-box">
                        <div class="row no-gutters row-flex row-content-middle">
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/images/featured/2.jpg" alt="" />
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="col-inner">
                                    <div class="featured-content">
                                        <h4>Animal Skull Head</h4>
                                        <h3>Burnish</h3>
                                        <div class="featured-button"><a href="#">SHOP NOW</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="featured-box align-right">
                        <div class="row no-gutters row-flex row-content-middle">
                            <div class="col-md-6 col-sm-6">
                                <div class="col-inner">
                                    <div class="featured-content">
                                        <h4>Pocket Square In Ditsy Print</h4>
                                        <h3>fabric</h3>
                                        <div class="featured-button"><a href="#">SHOP NOW</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/images/featured/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-box align-right">
                        <div class="row no-gutters row-flex row-content-middle">
                            <div class="col-md-6 col-sm-6">
                                <div class="col-inner">
                                    <div class="featured-content">
                                        <h4>Esprit Alec Holdall</h4>
                                        <h3>Podium</h3>
                                        <div class="featured-button"><a href="#">SHOP NOW</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="assets/images/featured/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 col-sm-6">
                    <div class="single-image border2 no-margin">
                        <a href="#"><img src="assets/images/featured/5.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="single-image border2 no-margin">
                        <a href="#"><img src="assets/images/featured/6.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-image featured">
                            <div class="single-image-inner">
                                <a href="#"><img src="assets/images/banner/11.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 pull-right">
                        <div class="kt-heading-2 style3 mar-bottom-45">
                            <h3 class="kt-heading-title"><span>new men</span></h3>
                            <div class="divider"><div class="divider-inner"></div></div>
                        </div>
                        <!-- nav-pills, nav-tabs -->                                                            
                        <!-- Nav tabs -->
                        <ul class="nav nav-style4 text-center" role="tablist">
                            <li class="active"><a href="#men" data-toggle="tab">Men's</a></li>
                            <li><a href="#women" data-toggle="tab">Women</a></li>
                            <li><a href="#collection" data-toggle="tab">collection</a></li>
                            <li><a href="#accessories" data-toggle="tab">accessories</a></li>
                            <li><a href="#store" data-toggle="tab">store</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" style="max-width: 865px;margin: 0 auto;">
                            <div class="tab-pane active fade in" id="men">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel1.php') ?>
                            </div>
                            <div class="tab-pane fade" id="women">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel2.php') ?>
                            </div>
                            <div class="tab-pane fade" id="collection">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel1.php') ?>
                            </div>
                            <div class="tab-pane fade" id="accessories">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel2.php') ?>
                            </div>
                            <div class="tab-pane fade" id="store">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel1.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section bg-gray pad-top-90 pad-bottom-90">
            <div class="container-fluid">
                <div class="col-md-4 col-sm-4 text-center">
                    <a href="#" class="btn btn-default btn-lg mar-top-10 mar-bottom-10">view all shop</a>
                </div>
                <div class="col-md-8 col-sm-8 text-center">
                    <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut<br /> laoreet dolore magna aliquam erat volutpat. </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="kt-heading-2 style3 mar-bottom-45">
                            <h3 class="kt-heading-title"><span>new women</span></h3>
                        </div>
                        <!-- nav-pills, nav-tabs -->                                                            
                        <!-- Nav tabs -->
                        <ul class="nav nav-style4 text-center" role="tablist">
                            <li><a href="#bags" data-toggle="tab">Bags</a></li>
                            <li class="active"><a href="#dresses" data-toggle="tab">Dresses</a></li>
                            <li><a href="#shoes" data-toggle="tab">Shoes</a></li>
                            <li><a href="#accessories2" data-toggle="tab">accessories</a></li>
                            <li><a href="#petite" data-toggle="tab">Petite</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="bags">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel3.php') ?>
                            </div>
                            <div class="tab-pane active fade in" id="dresses">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel4.php') ?>
                            </div>
                            <div class="tab-pane fade" id="shoes">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel3.php') ?>
                            </div>
                            <div class="tab-pane fade" id="accessories2">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel4.php') ?>
                            </div>
                            <div class="tab-pane fade" id="petite">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel3.php') ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 pull-right">
                        <div class="single-image featured">
                            <div class="single-image-inner">
                                <a href="#"><img src="assets/images/banner/12.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section bg-gray pad-top-90 pad-bottom-90">
            <div class="container-fluid">
                <div class="col-md-8 col-sm-8 text-center">
                    <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut<br /> laoreet dolore magna aliquam erat volutpat. </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <a href="#" class="btn btn-default mar-top-10 mar-bottom-10">view all shop</a>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-image featured">
                            <div class="single-image-inner">
                                <a href="#"><img src="assets/images/banner/11.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 pull-right">
                        <div class="kt-heading-2 style3 mar-bottom-45">
                            <h3 class="kt-heading-title"><span>new accessories</span></h3>
                            <div class="divider"><div class="divider-inner"></div></div>
                        </div>
                        <!-- nav-pills, nav-tabs -->                                                            
                        <!-- Nav tabs -->
                        <ul class="nav nav-style4 text-center" role="tablist">
                            <li class="active"><a href="#wallets" data-toggle="tab">Wallets</a></li>
                            <li><a href="#gifting" data-toggle="tab">Gifting</a></li>
                            <li><a href="#sunglasses" data-toggle="tab">Sunglasses</a></li>
                            <li><a href="#jewellery" data-toggle="tab">Jewellery</a></li>
                            <li><a href="#watches" data-toggle="tab">Watches</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" style="max-width: 865px;margin: 0 auto;">
                            <div class="tab-pane active fade in" id="wallets">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel2.php') ?>
                            </div>
                            <div class="tab-pane fade" id="gifting">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel1.php') ?>
                            </div>
                            <div class="tab-pane fade" id="sunglasses">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel2.php') ?>
                            </div>
                            <div class="tab-pane fade" id="jewellery">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel1.php') ?>
                            </div>
                            <div class="tab-pane fade" id="watches">
                                <p class="text-center pad-top-15 mar-bottom-80"><img src="assets/images/tab-divider.png" alt=""/> </p>
                                <?php include('templates/carousel/carousel2.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section bg-gray">
            <div class="container">
                <div class="pad-top-60 pad-bottom-60 bg-white box-shadow mar-bottom-100">
                    <div class="newletter-wrapper text-center">
                        <h3 class="newletter-title">newsletter</h3>
                        <div class="kt_mailchimp-before">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</div>
                        <div class="kt-mailchimp-wrapper ">
                            <form method="post" action="#" class="mailchimp-form clearfix mailchimp-layout-1"> 
                                <div class="mailchimp-input-email">
                                    <input type="text" placeholder="Type your email..." class="mailchimp-email" name="email">
                                </div> 
                                <div class="mailchimp-input-button">
                                    <button type="submit" class="btn btn-default btn-lg mailchimp-submit"><span>Subscribe</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php include_once('templates/client-carousel.php'); ?>
            </div>
        </div>

    </div><!-- #main -->

    <img src="previews/04-homepage-V4.jpg" class="preview-image" style="top: 11px;display: none;" />
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');