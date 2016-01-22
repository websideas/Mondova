<?php

global $revolution;
$revolution = 'slideshow1';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');
include_once('templates/slideshows/slideshow1.php');

?>
    <div id="main">
        <div class="page-section no-padding-top pad-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="banner banner-dark no-margin style2">
                            <img src="assets/images/banner/8.jpg" alt="">
                            <div class="banner-content">
                                <h3>new COLLECTION</h3>
                            </div>
                            <a href="#" class="banner-link"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="banner banner-dark no-margin style2">
                            <img src="assets/images/banner/9.jpg" alt="">
                            <div class="banner-content">
                                <h3>new stock</h3>
                            </div>
                            <a href="#" class="banner-link"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="banner banner-dark no-margin style2">
                            <img src="assets/images/banner/10.jpg" alt="">
                            <div class="banner-content">
                                <h3>new Models</h3>
                            </div>
                            <a href="#" class="banner-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section pad-bottom-55">
            <div class="container">
                <div class="kt-heading-2 style1 mar-bottom-55">
                    <h3 class="kt-heading-title"><span>best collection</span></h3>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-style2 text-center mar-bottom-80" role="tablist">
                    <li><a href="#denim-shirts" data-toggle="tab">Briefs</a></li>
                    <li><a href="#briefs" data-toggle="tab">Cardigans</a></li>
                    <li class="active"><a href="#cardigans" data-toggle="tab">Coats</a></li>
                    <li><a href="#coats" data-toggle="tab">Denim Shirts</a></li>
                    <li><a href="#dresses" data-toggle="tab">Dresses</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="denim-shirts">
                        <?php include_once('templates/product-tab2.php'); ?>
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
                        <div class="text-center pad-top-100 pad-bottom-30">
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
                <div class="bg-gray pad-bottom-100 clearfix">
                    <div class="blog-carousel owl-carousel-kt no-gutters no-mar-bottom">
                        <h3 class="blog-carousel-title">The Blog</h3>
                        <div class="owl-carousel kt-owl-carousel" id="blog-carousel-01" data-options='{"pagination": false, "navigation": true, "desktop": 1, "tablet" : 1, "mobile" : 1}'>

                            <div class="blog-carousel-item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5">
                                        <a class="blog-post-thumbnail" href="blog-singlepost-standard.php">
                                            <img alt="" src="assets/images/blog/carousel/1.jpg">
                                        </a>
                                    </div>
                                    <div class="col-md-7 col-sm-7">
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
                                                <div><a href="#" class="btn btn-default">Read more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-carousel-item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5">
                                        <a class="blog-post-thumbnail" href="blog-singlepost-standard.php">
                                            <img alt="" src="assets/images/blog/carousel/1.jpg">
                                        </a>
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <div class="blog-post-content">
                                            <div class="blog-post-inner">
                                                <div class="blog-post-meta">
                                                    <span class="cat-links"><a href="#">the blog</a></span>
                                                    <span class="author vcard">By <a href="#">Author</a></span>
                                                    <span class="post-date">20.11.2015</span>
                                                </div>
                                                <h4 class="blog-post-title">
                                                    <a href="blog-singlepost-standard.php">Consectetuer adipiscing elit</a>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </p>
                                                <div><a href="#" class="btn btn-default">Read more</a></div>
                                            </div>
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

                <?php include_once('client-carousel.php'); ?>
            </div>
        </div>

    </div><!-- #main -->

    <img src="previews/02-homepage-V2.jpg" class="preview-image" style="top: -2130px;display: none;" />
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');