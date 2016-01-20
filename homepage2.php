<?php

global $revolution;
$revolution = 'slideshow1';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');
include_once('templates/slideshows/slideshow1.php');

?>
    <div id="main">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="banner banner-dark no-margin style2">
                        <img src="assets/images/banner/8.jpg" alt="">
                        <div class="banner-content">
                            <h3 class="white">new COLLECTION</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="banner banner-dark no-margin style2">
                        <img src="assets/images/banner/9.jpg" alt="">
                        <div class="banner-content">
                            <h3 class="white">new stock</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="banner banner-dark no-margin style2">
                        <img src="assets/images/banner/10.jpg" alt="">
                        <div class="banner-content">
                            <h3 class="white">new Models</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section pad-bottom-55">
            <div class="container">
                <div class="kt-heading style4 mar-bottom-55">
                    <h3 class="kt-heading-title">best collection</h3>
                    <div class="divider"><div class="divider-inner"></div></div>
                </div>

                <!-- nav-pills, nav-tabs -->                                                            
                <!-- Nav tabs -->
                <ul class="nav nav-style2" role="tablist">
                    <li class="active"><a href="#denim-shirts" data-toggle="tab">Briefs</a></li>
                    <li><a href="#briefs" data-toggle="tab">Cardigans</a></li>
                    <li><a href="#cardigans" data-toggle="tab">Coats</a></li>
                    <li><a href="#coats" data-toggle="tab">Denim Shirts</a></li>
                    <li><a href="#dresses" data-toggle="tab">Dresses</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="denim-shirts">
                        <?php include_once('templates/product-tab1.php'); ?>
                    </div>
                    <div class="tab-pane fade" id="briefs">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>In iaculis tellus in dignissim faucibus. Curabitur sagittis egestas orci non sollicitudin. Ut et dictum nunc. Aenean non lorem in leo pellentesque eleifend. Donec commodo, lectus eget sodales ornare, sem risus sollicitudin nibh, a venenatis metus mauris porta nibh. Sed eget molestie ex. Praesent sit amet arcu sit amet sem venenatis rhoncus. Duis in lorem a turpis consequat iaculis. Vivamus vel dolor egestas, sagittis erat in, congue nibh. Aliquam ex nisi, ornare in dolor at, maximus pulvinar sapien. </p>
                    </div>
                    <div class="tab-pane fade" id="cardigans">
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                    </div>
                    <div class="tab-pane fade" id="coats">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                    </div>
                    <div class="tab-pane fade" id="dresses">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gray2">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <div class="text-center pad-top-100 pad-bottom-110">
                            <div class="coming-soon clearfix mar-bottom-50" data-date="2016/5/19">
                                <div class="value-time">266</div>
                                <div class="value-time">09</div>
                                <div class="value-time">53</div>
                                <div class="value-time">59</div>
                            </div>
                            <h1 class="text-bold mar-bottom-40">NEW IN CLOTHING</h1>
                            <p class="box-special mar-bottom-50">Pull & Bear Parka Jacket With Faux Fur Lined Hood</p>
                            <div><a href="#" class="btn btn-default btn-lg">view details</a></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <img src="assets/images/coming-soon.png" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container">
                <div class="owl-carousel-kt no-gutters no-margin">
                    <div class="owl-carousel kt-owl-carousel" id="blog-carousel-01" data-options='{"pagination": false, "navigation": true, "desktop": 1, "tablet" : 1, "mobile" : 1}'>

                        <div class="blog-carousel-item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <a class="blog-post-thumbnail" href="blog-singlepost-standard.php">
                                        <img alt="" src="assets/images/blog/1.jpg">
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-post-content">
                                        <div class="blog-post-inner">
                                            <div class="blog-post-meta">
                                                <span class="cat-links"><a href="#">the blog</a></span>
                                                <span class="author vcard">By <a href="#">Author</a></span>
                                                <span class="post-date">20.11.2015</span>
                                            </div>
                                            <h4 class="blog-post-title">
                                                <a href="blog-singlepost-standard.php">Lorem ipsum dolor sit amet consectetuer</a>
                                            </h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </p>
                                            <div><a href="#" class="btn btn-default">view all blog</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div><!-- #main -->

    <img src="previews/02-homepage-V2.jpg" class="preview-image" style="top: -52px;display: none;max-width:none;" />
<?php

include_once('templates/footers/footer2.php');
include_once('templates/footers/foot.php');