<?php

global $shadow;
$shadow = ' ';

include_once('templates/headers/head.php');
include_once('templates/headers/header2.php');

?>


    <div class="page-section page-header-bg small-section">
        <div class="page-header">
            <div class="container">
                <div class="page-header-content text-center">
                    <h1>product grid 3 columns</h1>
                    <div class="page-header-divider"><i class="icon_images"></i></div>
                </div>
            </div>
        </div>
    </div>


    <div id="main">
        <div class="page-section">
            <div class="container">

                <div class="row">
                    <div class="main-content col-md-9 col-sm-9 col-xs-12 pull-right">

                        <div class="products-tools clearfix">
                            <form class="products-sortby" method="get" action="#">
                                <div class="select-icon">
                                    <select name="showby">
                                        <option value="15">Show by : &nbsp; 15</option>
                                        <option value="30">Show by : &nbsp; 30</option>
                                        <option value="45">Show by : &nbsp; 45</option>
                                        <option value="-1">Show by : &nbsp; All</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="shortby">
                                        <option value="selling">Sort by : &nbsp; Best selling</option>
                                        <option value="popularity">Sort by : &nbsp; Popularity</option>
                                        <option value="rating">Sort by : &nbsp; Average rating</option>
                                        <option value="date">Sort by : &nbsp; Newness</option>
                                    </select>
                                </div>
                            </form>
                            <div class="result-count">Items 1 - 15 of 28 total</div>
                            <ul class="grid-list">
                                <li><a class="active" href="#" data-layout="grid" data-remove="lists" title="Grid view"><i class="fa fa-th"></i></a></li>
                                <li><a href="#" data-layout="lists" data-remove="grid" title="List view"><i class="fa fa-bars"></i></a></li>
                            </ul>

                        </div>
                        <div class="row multi-columns-row">
                            <div class="products lists">


                                <div class="product col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-content">
                                        <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                        <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                            <img src="assets/images/product/1.jpg" alt=""/>
                                        </a>
                                        <div class="product-over-tool">
                                            <a href="#" class="add_to_cart_button" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i></a>
                                            <a href="#" class="add_to_wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                            <a href="#" class="quickview" data-toggle="tooltip" data-placement="top" title="Quick view"><i class="icon_search"></i></a>
                                        </div>
                                        <div class="price">$340.00</div>
                                    </div><!-- .product-content -->

                                    <div class="product-attribute">
                                        <h3 class="product-title">
                                            <a href="woocommerce-product-detailed1.php">Waistcoat In Grey</a>
                                        </h3>
                                        <p class="price">
                                            <ins><span class="amount">$145,00 </span></ins>
                                            <del><span class="amount">$175,00 </span></del>
                                        </p>
                                        <div class="review-summary">
                                            <div class="star-rating" title="Rated 4 out of 5">
                                                <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                            </div>
                                            <div class="woocommerce-review-count">3 Reviews</div>
                                            <a class="woocommerce-review-link" href="#">Add your review</a>
                                        </div>

                                        <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                        <div class="produt-tool-list clearfix">
                                            <div class="product-over-tool">
                                                <a href="#" class="btn btn-addtocart-b" data-toggle="tooltip"  data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i>add to cart</a>
                                                <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                                <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="icon_tags_alt"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- .product-attribute -->
                                </div><!-- .product -->

                                <div class="product col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-content">
                                        <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                        <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                            <img src="assets/images/product/2.jpg" alt=""/>
                                        </a>
                                        <div class="product-over-tool">
                                            <a href="#" class="add_to_cart_button" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i></a>
                                            <a href="#" class="add_to_wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                            <a href="#" class="quickview" data-toggle="tooltip" data-placement="top" title="Quick view"><i class="icon_search"></i></a>
                                        </div>
                                        <div class="price">$175,00</div>
                                    </div><!-- .product-content -->

                                    <div class="product-attribute">
                                        <h3 class="product-title">
                                            <a href="woocommerce-product-detailed1.php">Muscle Long Sleeve T-Shirt With Turtle Neck</a>
                                        </h3>
                                        <p class="price">
                                            <ins><span class="amount">$145,00</span></ins>
                                            <del><span class="amount">$175,00</span></del>
                                        </p>
                                        <div class="review-summary">
                                            <div class="star-rating" title="Rated 4 out of 5">
                                                <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                            </div>
                                            <div class="woocommerce-review-count">3 Reviews</div>
                                            <a class="woocommerce-review-link" href="#">Add your review</a>
                                        </div>

                                        <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                        <div class="produt-tool-list clearfix">
                                            <div class="product-over-tool">
                                                <a href="#" class="btn btn-addtocart-b" data-toggle="tooltip"  data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i>add to cart</a>
                                                <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                                <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="icon_tags_alt"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- .product-attribute -->
                                </div><!-- .product -->

                                <div class="product col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-content">
                                        <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                        <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                            <img src="assets/images/product/3.jpg" alt=""/>
                                        </a>
                                        <div class="product-over-tool">
                                            <a href="#" class="add_to_cart_button" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i></a>
                                            <a href="#" class="add_to_wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                            <a href="#" class="quickview" data-toggle="tooltip" data-placement="top" title="Quick view"><i class="icon_search"></i></a>
                                        </div>
                                        <div class="price">$105.00</div>
                                    </div><!-- .product-content -->

                                    <div class="product-attribute">
                                        <h3 class="product-title">
                                            <a href="woocommerce-product-detailed1.php">T-Shirt With Aztec Yoke In Grey</a>
                                        </h3>
                                        <p class="price">
                                            <ins><span class="amount">$145,00 </span></ins>
                                            <del><span class="amount">$175,00</span></del>
                                        </p>
                                        <div class="review-summary">
                                            <div class="star-rating" title="Rated 4 out of 5">
                                                <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                            </div>
                                            <div class="woocommerce-review-count">3 Reviews</div>
                                            <a class="woocommerce-review-link" href="#">Add your review</a>
                                        </div>

                                        <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                        <div class="produt-tool-list clearfix">
                                            <div class="product-over-tool">
                                                <a href="#" class="btn btn-addtocart-b" data-toggle="tooltip"  data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i>add to cart</a>
                                                <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                                <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="icon_tags_alt"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- .product-attribute -->
                                </div><!-- .product -->

                                <div class="product col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-content">
                                        <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                        <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                            <img src="assets/images/product/4.jpg" alt=""/>
                                        </a>
                                        <div class="product-over-tool">
                                            <a href="#" class="add_to_cart_button" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i></a>
                                            <a href="#" class="add_to_wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                            <a href="#" class="quickview" data-toggle="tooltip" data-placement="top" title="Quick view"><i class="icon_search"></i></a>
                                        </div>
                                        <div class="price">$445,00</div>
                                    </div><!-- .product-content -->

                                    <div class="product-attribute">
                                        <h3 class="product-title">
                                            <a href="woocommerce-product-detailed1.php">Skinny Smart Suit Trousers</a>
                                        </h3>
                                        <p class="price">
                                            <ins><span class="amount">$145,00 </span></ins>
                                            <del><span class="amount">$175,00 </span></del>
                                        </p>
                                        <div class="review-summary">
                                            <div class="star-rating" title="Rated 4 out of 5">
                                                <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                            </div>
                                            <div class="woocommerce-review-count">3 Reviews</div>
                                            <a class="woocommerce-review-link" href="#">Add your review</a>
                                        </div>

                                        <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                        <div class="produt-tool-list clearfix">
                                            <div class="product-over-tool">
                                                <a href="#" class="btn btn-addtocart-b" data-toggle="tooltip"  data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i>add to cart</a>
                                                <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                                <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="icon_tags_alt"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- .product-attribute -->
                                </div><!-- .product -->

                                <div class="product col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-content">
                                        <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                        <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                            <img src="assets/images/product/5.jpg" alt=""/>
                                        </a>
                                        <div class="product-over-tool">
                                            <a href="#" class="add_to_cart_button" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i></a>
                                            <a href="#" class="add_to_wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                            <a href="#" class="quickview" data-toggle="tooltip" data-placement="top" title="Quick view"><i class="icon_search"></i></a>
                                        </div>
                                        <div class="price">$340.00</div>
                                    </div><!-- .product-content -->

                                    <div class="product-attribute">
                                        <h3 class="product-title">
                                            <a href="woocommerce-product-detailed1.php">River Island Overshirt In Cotton In Charcoal</a>
                                        </h3>
                                        <p class="price">
                                            <ins><span class="amount">$145,00</span></ins>
                                            <del><span class="amount">$175,00 </span></del>
                                        </p>
                                        <div class="review-summary">
                                            <div class="star-rating" title="Rated 4 out of 5">
                                                <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                            </div>
                                            <div class="woocommerce-review-count">3 Reviews</div>
                                            <a class="woocommerce-review-link" href="#">Add your review</a>
                                        </div>

                                        <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                        <div class="produt-tool-list clearfix">
                                            <div class="product-over-tool">
                                                <a href="#" class="btn btn-addtocart-b" data-toggle="tooltip"  data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i>add to cart</a>
                                                <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                                <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="icon_tags_alt"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- .product-attribute -->
                                </div><!-- .product -->

                                <div class="product col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-content">
                                        <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                        <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                            <img src="assets/images/product/6.jpg" alt=""/>
                                        </a>
                                        <div class="product-over-tool">
                                            <a href="#" class="add_to_cart_button" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i></a>
                                            <a href="#" class="add_to_wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                            <a href="#" class="quickview" data-toggle="tooltip" data-placement="top" title="Quick view"><i class="icon_search"></i></a>
                                        </div>
                                        <div class="price">$325.00</div>
                                    </div><!-- .product-content -->

                                    <div class="product-attribute">
                                        <h3 class="product-title">
                                            <a href="woocommerce-product-detailed1.php">Waistcoat In Grey</a>
                                        </h3>
                                        <p class="price">
                                            <ins><span class="amount">145,00 $</span></ins>
                                            <del><span class="amount">175,00 $</span></del>
                                        </p>
                                        <div class="review-summary">
                                            <div class="star-rating" title="Rated 4 out of 5">
                                                <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                            </div>
                                            <div class="woocommerce-review-count">3 Reviews</div>
                                            <a class="woocommerce-review-link" href="#">Add your review</a>
                                        </div>

                                        <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                        <div class="produt-tool-list clearfix">
                                            <div class="product-over-tool">
                                                <a href="#" class="btn btn-addtocart-b" data-toggle="tooltip"  data-placement="top" title="Add to cart"><i class="icon_bag_alt"></i>add to cart</a>
                                                <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                                <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="icon_tags_alt"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- .product-attribute -->
                                </div><!-- .product -->

                            </div>
                        </div>


                        <nav class="navigation pagination">
                            <div class="nav-links">
                                <a href="#" class="prev page-numbers">
                                    <span class="screen-reader-text">Prev</span>
                                    <i class="icon-Left-3"></i>
                                </a>
                                <span class="page-numbers current">1</span>
                                <a href="#" class="page-numbers">2</a>
                                <span class="page-numbers dots">…</span>
                                <a href="#" class="page-numbers">4</a>
                                <a href="#" class="next page-numbers">
                                    <span class="screen-reader-text">Next</span>
                                    <i class="icon-Right-3"></i>
                                </a>
                            </div>
                        </nav>
                    </div><!-- .main-content -->
                    <?php include_once('templates/sidebar-shop.php'); ?>
                </div><!-- .row -->
            </div><!-- .container -->

        </div><!-- .page-section -->


    </div><!-- #main -->



<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


