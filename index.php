<?php
global $revolution;

$revolution = 'slideshow1';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');
include_once('templates/slideshows/slideshow1.php');
?>

<div id="main">

    <div class="page-section no-padding">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="banner banner-dark style1 no-margin">
                    <img alt="" src="assets/images/banner/1.jpg">
                    <div class="banner-content">
                        <h3 class="white">new men's</h3>
                        <p class="letter-spacing">best fashion for men</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner banner-dark style1 no-margin">
                    <img alt="" src="assets/images/banner/2.jpg">
                    <div class="banner-content">
                        <h3 class="white">new model</h3>
                        <p class="letter-spacing">best fashion for men</p>
                    </div>
                    <a href="#" class="banner-link"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner banner-dark style1 no-margin">
                    <img alt="" src="assets/images/banner/3.jpg">
                    <div class="banner-content">
                        <h3 class="white">new stock</h3>
                        <p class="letter-spacing">best store collection</p>
                    </div>
                    <a href="#" class="banner-link"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">

            <div class="row mar-bottom-20">
                <div class="col-md-5">
                    <div class="kt-heading text-left">
                        <div class="kt-heading-backend">men's</div>
                        <h3 class="kt-heading-title">best collection</h3>
                        <div class="kt-heading-subtitle">top for men</div>
                    </div><!-- .kt-heading-wrapper -->
                </div>

                <div class="col-md-7">
                    <ul class="nav nav-border pull-right mar-top-35" role="tablist">
                        <li><a href="#briefs" data-toggle="tab">Briefs</a></li>
                        <li><a href="#cardigans" data-toggle="tab">Cardigans</a></li>
                        <li><a href="#coats" data-toggle="tab">Coats</a></li>
                        <li class="active"><a href="#denim-shirts" data-toggle="tab">Denim Shirts</a></li>
                        <li><a href="#dresses" data-toggle="tab">Dresses</a></li>
                        <li><a href="#jackets" data-toggle="tab">Jackets</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade" id="briefs">
                    <?php include('templates/product-tab1.php'); ?>
                </div>
                <div class="tab-pane fade" id="cardigans">
                    <?php include('templates/product-tab2.php'); ?>
                </div>
                <div class="tab-pane fade" id="coats">
                    <?php include('templates/product-tab3.php'); ?>
                </div>
                <div class="tab-pane active" id="denim-shirts">
                    <?php include('templates/product-tab1.php'); ?>
                </div>
                <div class="tab-pane fade" id="dresses">
                    <?php include('templates/product-tab2.php'); ?>
                </div>
                <div class="tab-pane fade" id="jackets">
                    <?php include('templates/product-tab3.php'); ?>
                </div>
            </div>
        </div>
    </div>









    <div class="page-section no-padding">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="banner banner-dark style1 no-margin">
                    <img alt="" src="assets/images/banner/4.jpg">
                    <div class="banner-content">

                        <p>best model</p>
                        <h3 class="white">new model</h3>
                        <p>shop now</p>
                    </div>
                    <a href="#" class="banner-link"></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="banner banner-darker style1 no-margin">
                    <img alt="" src="assets/images/banner/5.jpg">
                    <div class="banner-content">
                        <p>best collection</p>
                        <h3 class="white">new collection</h3>
                        <p>shop now</p>
                    </div>
                    <a href="#" class="banner-link"></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="banner banner-dark style1 no-margin">
                    <img alt="" src="assets/images/banner/6.jpg">
                    <div class="banner-content">
                        <p>best store</p>
                        <h3 class="white">new store</h3>
                        <p>shop now</p>
                    </div>
                    <a href="#" class="banner-link"></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="banner banner-darker style1 no-margin">
                    <img alt="" src="assets/images/banner/7.jpg">
                    <div class="banner-content">
                        <p>best new arrvials</p>
                        <h3 class="white">new arrvials</h3>
                        <p>shop now</p>
                    </div>
                    <a href="#" class="banner-link"></a>
                </div>
            </div>
        </div>
    </div>



    <div class="page-section">
        <div class="container">

            <div class="row mar-bottom-20">


                <div class="col-md-7">
                    <ul class="nav nav-border mar-top-35" role="tablist">
                        <li class="active"><a href="#blazers1" data-toggle="tab">Blazers</a></li>
                        <li><a href="#cardigans1" data-toggle="tab">Cardigans</a></li>
                        <li><a href="#coats1" data-toggle="tab">Coats</a></li>
                        <li><a href="#hoodies1" data-toggle="tab">Hoodies</a></li>
                        <li><a href="#jackets1" data-toggle="tab">Jackets</a></li>
                        <li><a href="#jeans1" data-toggle="tab">Jeans</a></li>

                    </ul>
                </div>

                <div class="col-md-5">
                    <div class="kt-heading text-right">
                        <div class="kt-heading-backend">Women</div>
                        <h3 class="kt-heading-title">what's hot</h3>
                        <div class="kt-heading-subtitle">New Arrvial</div>
                    </div><!-- .kt-heading -->
                </div>

            </div>

            <div class="tab-content">
                <div class="tab-pane active" id="blazers1">
                    <?php include('templates/product-tab2.php'); ?>
                </div>
                <div class="tab-pane fade" id="cardigans1">
                    <?php include('templates/product-tab3.php'); ?>
                </div>
                <div class="tab-pane fade" id="coats1">
                    <?php include('templates/product-tab1.php'); ?>
                </div>
                <div class="tab-pane" id="hoodies1">
                    <?php include('templates/product-tab2.php'); ?>
                </div>
                <div class="tab-pane fade" id="jackets1">
                    <?php include('templates/product-tab3.php'); ?>
                </div>
                <div class="tab-pane fade" id="jeans1">
                    <?php include('templates/product-tab1.php'); ?>
                </div>
            </div>



        </div>
    </div>


    <div class="page-section bg-gray">
        <div class="container">
            <div class="kt-heading">
                <div class="kt-heading-backend">testimonials</div>
                <h3 class="kt-heading-title">testimonials</h3>
                <div class="kt-heading-subtitle">what the client say</div>
            </div><!-- .kt-heading-wrapper -->

            <div class="row">
                <div class="col-md-6">

                    <div class="bg-white pad-top-110 pad-bottom-100 box-shadow">
                        <div class="owl-carousel-kt no-gutters no-margin">
                            <div class="owl-carousel kt-owl-carousel" id="testi-carousel-01" data-options='{"pagination": false, "navigation": true, "desktop": 1, "tablet" : 1, "mobile" : 1, "callback" : "kt_products_carousel"}'>

                                <div class="testi-item">
                                    <div class="testi-item-inner">
                                        <div class="testi-item-infos">
                                            <div class="testi-item-author">dan counsell</div>
                                            <div class="testi-item-info">creative director</div>
                                        </div>
                                        <div class="testi-item-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br/>nonummy nibh euismod tincidunt ut laoreet dolore magna<br/>aliquam erat volutpat.</div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="testi-item-inner">
                                        <div class="testi-item-infos">
                                            <div class="testi-item-author">CuongDV</div>
                                            <div class="testi-item-info">creative director</div>
                                        </div>
                                        <div class="testi-item-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br/>nonummy nibh euismod tincidunt ut laoreet dolore magna<br/>aliquam erat volutpat.</div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="testi-item-inner">
                                        <div class="testi-item-infos">
                                            <div class="testi-item-author">TienThang</div>
                                            <div class="testi-item-info">creative director</div>
                                        </div>
                                        <div class="testi-item-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br/>nonummy nibh euismod tincidunt ut laoreet dolore magna<br/>aliquam erat volutpat.</div>
                                    </div>
                                </div>
                                <div class="testi-item">
                                    <div class="testi-item-inner">
                                        <div class="testi-item-infos">
                                            <div class="testi-item-author">HongNguyen</div>
                                            <div class="testi-item-info">creative director</div>
                                        </div>
                                        <div class="testi-item-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br/>nonummy nibh euismod tincidunt ut laoreet dolore magna<br/>aliquam erat volutpat.</div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white box-shadow">
                        <ul class="testi-navigation" data-sync="testi-carousel-01">
                            <li class="active"><img src="assets/images/testi/1.jpg" alt=""></li>
                            <li><img src="assets/images/testi/2.jpg" alt=""></li>
                            <li><img src="assets/images/testi/3.jpg" alt=""></li>
                            <li><img src="assets/images/testi/4.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="page-section">
        <div class="container">
            <div class="row no-gutters row-flex row-content-middle">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img alt="blog5" class="img-responsive " src="assets/images/blog/12.jpg">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="kt-heading no-margin pad-md">
                            <div class="kt-heading-backend">the blog</div>
                            <h3 class="kt-heading-title">the blog</h3>
                            <div class="kt-heading-subtitle">latest news</div>
                        </div><!-- .kt-heading -->
                    </div>
                </div>
            </div>

            <div class="blog-posts blog-posts-full">
                <div class="blog-post">
                    <div class="row no-gutters row-flex row-content-middle">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <div class="col-inner">
                                <div class="blog-post-content">
                                    <h4 class="blog-post-title">
                                        <a href="blog-singlepost-standard.php">Blog demo</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                                    <p class="entry-more"><a href="#" class="btn btn-default"><span>Read More</span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="col-inner">
                                <div class="blog-post-infos">
                                    <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                        <img src="assets/images/blog/13.jpg" alt=""/>
                                    </a>
                                    <div class="blog-post-meta">
                                        <span class="cat-links"><a href="#">the blog</a></span>
                                        <span class="author vcard">By <a href="#">Author</a></span>
                                        <span class="meta-date">20.11.2015</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-section bg-gray">
        <div class="container">

            <div class="row mar-bottom-100">
                <div class="col-md-4">
                    <div class="bg-white box-shadow" style="padding: 40px 30px;">
                        <div class="widget widget_products_carousel no-margin">
                            <h3 class="widget-title">Top items</h3>

                            <div class="owl-carousel-kt  no-margin">
                                <div class="owl-carousel kt-owl-carousel" data-options='{"pagination": false, "navigation": true, "desktop": 1, "tablet" : 1, "mobile" : 1, "callback": "kt_products_carousel"}'>

                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/1.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/2.jpg">
                                                <span class="product-title">Quiksilver T-Shirt </span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>

                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/3.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/4.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>

                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/5.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/6.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white box-shadow" style="padding: 40px 30px;">

                        <div class="widget widget_products_carousel no-margin">
                            <h3 class="widget-title">new collection</h3>

                            <div class="owl-carousel-kt  no-margin">
                                <div class="owl-carousel kt-owl-carousel" data-options='{"pagination": false, "navigation": true, "desktop": 1, "tablet" : 1, "mobile" : 1, "callback": "kt_products_carousel"}'>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/3.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/4.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/1.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/2.jpg">
                                                <span class="product-title">Quiksilver T-Shirt </span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>



                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/5.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/6.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white box-shadow" style="padding: 40px 30px;">

                        <div class="widget widget_products_carousel no-margin">
                            <h3 class="widget-title">best seller</h3>

                            <div class="owl-carousel-kt  no-margin">
                                <div class="owl-carousel kt-owl-carousel" data-options='{"pagination": false, "navigation": true, "desktop": 1, "tablet" : 1, "mobile" : 1, "callback": "kt_products_carousel"}'>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/5.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/6.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/1.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/2.jpg">
                                                <span class="product-title">Quiksilver T-Shirt </span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>

                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/3.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img alt="" class="" src="assets/images/product/widget/4.jpg">
                                                <span class="product-title">Greatest of All Time</span>
                                            </a>
                                            <span class="amount">345,00 $</span>
                                            <div title="Rated 4.50 out of 5" class="star-rating"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php include_once('client-carousel.php'); ?>

        </div>
    </div>


</div><!-- #main -->

<img src="previews/header-style.jpg" class="preview-image" style="top: -1090px;display: none;" />

<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');