<?php

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>

    <div id="main">

        <div class="page-section no-padding">
            <div class="row no-gutters">
                <div class="col-md-3 col-sm-6">
                    <div class="category-banner">
                        <img src="assets/images/product/category/1.jpg" alt="" />
                        <div class="category-banner-content">
                            OUTLET: Up to 70% Off
                        </div>
                        <div class="category-banner-button">
                            <a href="#">New In Accessories</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-banner">
                        <img src="assets/images/product/category/2.jpg" alt="" />
                        <div class="category-banner-content">
                            OUTLET: Up to 70% Off
                        </div>
                        <div class="category-banner-button">
                            <a href="#">New In shoes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-banner">
                        <img src="assets/images/product/category/3.jpg" alt="" />
                        <div class="category-banner-content">
                            OUTLET: Up to 70% Off
                        </div>
                        <div class="category-banner-button">
                            <a href="#">New In Bag</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-banner">
                        <img src="assets/images/product/category/4.jpg" alt="" />
                        <div class="category-banner-content">
                            OUTLET: Up to 70% Off
                        </div>
                        <div class="category-banner-button">
                            <a href="#">New In watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section pad-bottom-45">
            <div class="container">
                <div class="kt-heading-2 style2 mar-bottom-60">
                    <h3 class="kt-heading-title"><span>Shop For Men</span></h3>
                </div>

                <!-- nav-pills, nav-tabs -->                                                            
                <!-- Nav tabs -->
                <ul class="nav nav-style3" role="tablist">
                    <li class="active"><a href="#denim-shirts" data-toggle="tab">Briefs</a></li>
                    <li><a href="#briefs" data-toggle="tab">Cardigans</a></li>
                    <li><a href="#cardigans" data-toggle="tab">Coats</a></li>
                    <li><a href="#coats" data-toggle="tab">Denim Shirts</a></li>
                    <li><a href="#dresses" data-toggle="tab">Dresses</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="denim-shirts">
                        <?php include('templates/product-tab1.php'); ?>
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
                    <div class="col-md-5 col-sm-5">
                        <img src="assets/images/coming-soon-2.png" alt="" />
                    </div>
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
                </div>
            </div>
        </div>


        <div class="page-section pad-bottom-45">
            <div class="container">
                <div class="kt-heading-2 style2 mar-bottom-60">
                    <h3 class="kt-heading-title"><span>Shop For Women</span></h3>
                </div>

                <!-- nav-pills, nav-tabs -->                                                            
                <!-- Nav tabs -->
                <ul class="nav nav-style3" role="tablist">
                    <li class="active"><a href="#denim-shirts2" data-toggle="tab">Briefs</a></li>
                    <li><a href="#briefs2" data-toggle="tab">Cardigans</a></li>
                    <li><a href="#cardigans2" data-toggle="tab">Coats</a></li>
                    <li><a href="#coats2" data-toggle="tab">Denim Shirts</a></li>
                    <li><a href="#dresses2" data-toggle="tab">Dresses</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="denim-shirts2">
                        <?php include('templates/product-tab1.php'); ?>
                    </div>
                    <div class="tab-pane fade" id="briefs2">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>In iaculis tellus in dignissim faucibus. Curabitur sagittis egestas orci non sollicitudin. Ut et dictum nunc. Aenean non lorem in leo pellentesque eleifend. Donec commodo, lectus eget sodales ornare, sem risus sollicitudin nibh, a venenatis metus mauris porta nibh. Sed eget molestie ex. Praesent sit amet arcu sit amet sem venenatis rhoncus. Duis in lorem a turpis consequat iaculis. Vivamus vel dolor egestas, sagittis erat in, congue nibh. Aliquam ex nisi, ornare in dolor at, maximus pulvinar sapien. </p>
                    </div>
                    <div class="tab-pane fade" id="cardigans2">
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                    </div>
                    <div class="tab-pane fade" id="coats2">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                    </div>
                    <div class="tab-pane fade" id="dresses2">
                        <p>Ut ornare porttitor varius. Nam dapibus venenatis ultrices. In nec lectus ac tellus laoreet suscipit. Morbi facilisis enim a mollis tincidunt. Praesent pretium sollicitudin lacus eget tincidunt. Integer elementum eros id feugiat faucibus. In aliquet magna vitae suscipit pretium. Pellentesque dignissim massa eu mollis ultricies. Pellentesque eu ornare tortor, nec sollicitudin nunc. Aenean nec feugiat quam, eu hendrerit erat. Nulla facilisi. </p>
                        <p>Donec tempor arcu ex, nec scelerisque massa hendrerit sit amet. Aenean porttitor id lacus eget scelerisque. Quisque placerat nunc ac egestas finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non lacus fringilla, luctus eros eget, euismod ipsum. In elit mi, porttitor sit amet velit et, aliquam imperdiet orci. Aliquam at diam accumsan, vehicula quam at, scelerisque ipsum. Ut dui odio, cursus sed mattis in, rutrum nec justo. Sed efficitur justo velit, at tristique erat tincidunt eget. Aenean aliquam mollis mauris sed finibus. Donec ullamcorper lorem id ligula interdum, et ultrices libero ultrices. In vitae sapien eget urna lacinia tempor.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section bg-gray pad-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="category-banner style2">
                            <div class="category-banner-content">
                                Clean Tipped Detail Waist
                                <div class="category-name"><a href="#">Accessories</a></div>
                            </div>
                            <div class="category-banner-image">
                                <img src="assets/images/product/category/5.jpg" alt="" />
                                <div class="category-banner-button">
                                    <a href="#">New In Accessories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-banner style2">
                            <div class="category-banner-image">
                                <img src="assets/images/product/category/6.jpg" alt="" />
                                <div class="category-banner-button">
                                    <a href="#">New In Accessories</a>
                                </div>
                            </div>
                            <div class="category-banner-content">
                                Morgan Black Metal
                                <div class="category-name"><a href="#">Accessories</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-banner style2">
                            <div class="category-banner-content">
                                Kors Lexington Tan Leather
                                <div class="category-name"><a href="#">Accessories</a></div>
                            </div>
                            <div class="category-banner-image">
                                <img src="assets/images/product/category/7.jpg" alt="" />
                                <div class="category-banner-button">
                                    <a href="#">New In Accessories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="category-banner style2">
                            <div class="category-banner-image">
                                <img src="assets/images/product/category/5.jpg" alt="" />
                                <div class="category-banner-button">
                                    <a href="#">New In Accessories</a>
                                </div>
                            </div>
                            <div class="category-banner-content">
                                Clutch with Ring Closure
                                <div class="category-name"><a href="#">Accessories</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container">
                <div class="kt-heading-2 style2 mar-bottom-80">
                    <div class="kt-heading-title"><span>our blogs</span></div>
                </div>
                <div class="blog-posts blog-posts-grid mar-bottom-20">
                    <div class="row">
                        <div class="blog-post col-lg-4 col-md-4 col-sm-6">
                            <div class="blog-post-content">
                                <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                    <img src="assets/images/blog/14.jpg" alt=""/>
                                </a>
                                <div class="post-date">
                                    <span class="post-date-number">17</span>
                                    <span class="post-date-text">thursday</span>
                                </div>
                                <div class="blog-post-inner">
                                    <h4 class="blog-post-title">
                                        <a href="blog-singlepost-standard.php"> Blog demo 1</a>
                                    </h4>
                                    <div class="blog-post-meta">
                                        <span class="cat-links"><a href="#">the blog</a></span>
                                        <span class="author vcard">By <a href="#">Author</a></span>
                                    </div>
                                    <p>Typi non habent claritatem insitamest usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post col-lg-4 col-md-4 col-sm-6">
                            <div class="blog-post-content">
                                <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                    <img src="assets/images/blog/15.jpg" alt=""/>
                                </a>
                                <div class="post-date">
                                    <span class="post-date-number">17</span>
                                    <span class="post-date-text">thursday</span>
                                </div>
                                <div class="blog-post-inner">
                                    <h4 class="blog-post-title">
                                        <a href="blog-singlepost-standard.php"> Blog demo 2</a>
                                    </h4>
                                    <div class="blog-post-meta">
                                        <span class="cat-links"><a href="#">the blog</a></span>
                                        <span class="author vcard">By <a href="#">Author</a></span>
                                    </div>
                                    <p>Typi non habent claritatem insitamest usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post col-lg-4 col-md-4 col-sm-6">
                            <div class="blog-post-content">
                                <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                    <img src="assets/images/blog/16.jpg" alt=""/>
                                </a>
                                <div class="post-date">
                                    <span class="post-date-number">17</span>
                                    <span class="post-date-text">thursday</span>
                                </div>
                                <div class="blog-post-inner">
                                    <h4 class="blog-post-title">
                                        <a href="blog-singlepost-standard.php"> Blog demo 3</a>
                                    </h4>
                                    <div class="blog-post-meta">
                                        <span class="cat-links"><a href="#">the blog</a></span>
                                        <span class="author vcard">By <a href="#">Author</a></span>
                                    </div>
                                    <p>Typi non habent claritatem insitamest usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-default btn-lg" href="#">view all blog</a>
                </div>
            </div>
        </div>

        <div class="page-section bg-gray">
            <div class="container">
                <?php include_once('client-carousel.php'); ?>
            </div>
        </div>

    </div><!-- #main -->

    <img src="previews/03-homepage-V3.jpg" class="preview-image" style="top: -914px;display: none;max-width:none;" />
<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


