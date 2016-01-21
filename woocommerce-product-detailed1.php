<?php

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>
    <div id="main">
        <div class="page-section">
            <div class="product-main style1" itemtype="http://schema.org/Product" itemscope="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="product-detail-thumbarea">
                                <div class="single-product-main-images owl-carousel1" id="sync1">
                                    <a href="assets/images/product/1.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                        <img src="assets/images/product/1.jpg" class="img-responsive" alt="Product 1" title="Product 1" />
                                    </a>
                                    <a href="assets/images/product/2.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                        <img src="assets/images/product/2.jpg" class="img-responsive" alt="Product 2" title="Product 2" />
                                    </a>
                                    <a href="assets/images/product/3.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                        <img src="assets/images/product/3.jpg" class="img-responsive" alt="Product 3" title="Product 3" />
                                    </a>
                                    <a href="assets/images/product/4.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                        <img src="assets/images/product/4.jpg" class="img-responsive" alt="Product 4" title="Product 4" />
                                    </a>
                                </div><!-- #sync1.single-product-main-images.owl-carousel -->
                                <div class="single-product-main-thumbnails owl-carousel2" id="sync2" data-items="4">
                                    <a href="assets/images/product/1.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/1.jpg" class="img-responsive" alt="Product 1" title="Product 1" /></a>
                                    <a href="assets/images/product/2.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/2.jpg" class="img-responsive" alt="Product 2" title="Product 2" /></a>
                                    <a href="assets/images/product/3.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/3.jpg" class="img-responsive" alt="Product 3" title="Product 3" /></a>
                                    <a href="assets/images/product/4.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/4.jpg" class="img-responsive" alt="Product 4" title="Product 4" /></a>
                                </div><!-- #sync2.single-product-main-thumbnails.owl-carousel -->
                            </div><!-- .product-detail-thumbarea -->

                        </div>
                        <div class="col-sm-6">
                            <h1 class="product-title">Super Skinny Suit Trousers In Brown</h1>
                            <p class="price">
                                <ins><span class="amount">$145,00 </span></ins>
                                <del><span class="amount">$175,00 </span></del>
                            </p>
                            <div class="review-summary">
                                <div class="star-rating" title="Rated 4 out of 5">
                                    <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                </div>
                                <div class="woocommerce-review-count">34 Reviews</div>
                                <a class="woocommerce-review-link" href="#">Add your review</a>
                            </div>

                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
                            </div>

                            <form enctype="multipart/form-data" method="post" class="cart clearfix">

                                <div class="quantity">
                                    <label>Quantity:</label>
                                    <input type="text" size="4" class="input-text qty text" title="Qty" value="1" name="qty" />
                                </div>

                                <div class="product_meta">
                                    <span class="sku_wrapper"><label>SKU:</label><span itemprop="sku" class="sku">10011</span></span>
                                </div>
                                
                                <div class="cart-button-wrap clearfix">
                                    <button class="button-addtocart" type="submit"><i class="icon_bag_alt"></i> Add to cart</button>

                                    <div class="cart-tool clearfix">
                                        <a class="add_to_wishlist" href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                                            <i class="icon_heart_alt"></i> Add to Wishlist
                                        </a>
                                        <a class="add_to_compare" href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                            <i class="icon_tags_alt"></i> Compare
                                        </a>
                                    </div>
                                </div>
                            </form>

                            <div class="product-shareit">
                                <span class="screen-reader-text">Share this</span>
                                <ul class="social_icons clearfix">
                                    <li><a href="#"><i class="social_facebook"></i> <span>Share on Facebook</span></a></li>
                                    <li><a href="#"><i class="social_twitter"></i> <span>Share on Twitter</span></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i> <span>Share on Google+</span></a></li>
                                    <li><a href="#"><i class="social_youtube"></i> <span>Share on Youtube</span></a></li>
                                    <li><a href="#"><i class="social_instagram"></i> <span>Share on Instagram</span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section no-pad-top no-pad-bottom" itemtype="http://schema.org/Review" itemscope="">
            
                <div class="woocommerce-tabs">
                    <div class="container">
                        <!-- Nav tabs -->
                        <ul class="nav clearfix" role="tablist">
                            <li role="presentation" class="active"><a href="#tab-description_tab" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#tab-additional_information" role="tab" data-toggle="tab">Additional INFO</a></li>
                            <li role="presentation"><a href="#tab-reviews" role="tab" data-toggle="tab">Review</a></li>
                        </ul>
                    </div>
                    <div class="page-section bg-gray pad-bottom-80 pad-top-80">
                        <div class="container">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="tab-description_tab" role="tabpanel" class="tab-pane active">
                                    <div class="product-description">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.<br/>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
                                                <blockquote>6.1 oz. 100% preshrunk heavyweight cotton<br/>Shoulder-to-shoulder taping<br/>Double-needle sleeves and bottom hem</blockquote>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="content-left">
                                                    <h5>ABOUT ME</h5>
                                                    <p>Shell: 100% Real leather, 
                                                    Body Lining: 100% Polyester.</p>
                                                    <h5>SIZE & FIT</h5>
                                                    <p>Model's height: 5'11.5”/181 cm
                                                    Model is wearing: Size Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-additional_information" role="tabpanel" class="tab-pane">
                                    <table class="shop_attributes">
                                        <tbody>
                                        <tr>
                                            <th>Weight</th>
                                            <td class="text-right">5 kg</td>
                                        </tr>
                                        <tr class="">
                                            <th>Size</th>
                                            <td class="text-right">Medium</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td class="text-right">Black</td>
                                        </tr>
                                        <tr>
                                            <th>Materials</th>
                                            <td class="text-right">Wood</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab-reviews" role="tabpanel" class="tab-pane">

                                    <div class="comments-area" id="comments">
                                        <h3 class="comments-title">3 reviews</h3>

                                        <ol class="comment-list">
                                            <li class="comment" itemtype="http://schema.org/Review" itemscope="" itemprop="review">
                                                <div class="comment-item clearfix">
                                                    <div class="comment-avatar">
                                                        <img width="100" height="100" class="avatar avatar-100 photo" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=200&amp;d=mm&amp;r=g 2x" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=100&amp;d=mm&amp;r=g" alt="">
                                                    </div>
                                                    <div class="comment-body">
                                                        <div class="comment-meta">
                                                            <h5 itemprop="author" class="author_name">Kenny Minh</h5>
                                                            <span class="comment-date"><time datetime="2013-06-07T11:54:32+00:00" itemprop="datePublished">January 06, 2015</time></span>
                                                            <div title="Rated 5 out of 5" class="star-rating" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                                                <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                        <div class="description" itemprop="description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante turpis, aliquet et vestibulum dictum, commodo vel tortor.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                            <li class="comment" itemtype="http://schema.org/Review" itemscope="" itemprop="review">
                                                <div class="comment-item clearfix">
                                                    <div class="comment-avatar">
                                                        <img width="100" height="100" class="avatar avatar-100 photo" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=200&amp;d=mm&amp;r=g 2x" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=100&amp;d=mm&amp;r=g" alt="">
                                                    </div>
                                                    <div class="comment-body">
                                                        <div class="comment-meta">
                                                            <h5 itemprop="author" class="author_name">Kenny Minh</h5>
                                                            <span class="comment-date"><time datetime="2013-06-07T11:54:32+00:00" itemprop="datePublished">January 06, 2015</time></span>
                                                            <div title="Rated 5 out of 5" class="star-rating" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                                                <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                        <div class="description" itemprop="description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante turpis, aliquet et vestibulum dictum, commodo vel tortor.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                            <li class="comment" itemtype="http://schema.org/Review" itemscope="" itemprop="review">
                                                <div class="comment-item clearfix">
                                                    <div class="comment-avatar">
                                                        <img width="100" height="100" class="avatar avatar-100 photo" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=200&amp;d=mm&amp;r=g 2x" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=100&amp;d=mm&amp;r=g" alt="">
                                                    </div>
                                                    <div class="comment-body">
                                                        <div class="comment-meta">
                                                            <h5 itemprop="author" class="author_name">Kenny Minh</h5>
                                                            <span class="comment-date"><time datetime="2013-06-07T11:54:32+00:00" itemprop="datePublished">January 06, 2015</time></span>
                                                            <div title="Rated 5 out of 5" class="star-rating" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                                                <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                        <div class="description" itemprop="description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante turpis, aliquet et vestibulum dictum, commodo vel tortor.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->

                                        </ol>


                                    </div>

                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <h3 class="comment-reply-title">Here you can review this item.</h3>
                                            <form action="#" method="post" id="commentform" class="comment-form">

                                                <p class="comment-form-author"><input type="text" aria-required="true" size="30" value="" placeholder="Your Name" name="author" id="author"></p>
                                                <p class="comment-form-email"><input type="text" aria-required="true" size="30" value="" placeholder="Your email" name="email" id="email"></p>
                                                <p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Your review"></textarea></p>

                                                <p class="comment-form-rating">
                                                    <select name="rating" id="rating">
                                                        <option value="">Rate&hellip;</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very Poor</option>
                                                    </select>
                                                </p>
                                                <p class="form-submit">
                                                    <button name="submit" type="submit" id="submit" class="btn btn-default btn-lg" />Add Review</button>
                                                </p>
                                            </form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
        </div>




        <div class="page-section pad-bottom-5">
            <div class="container">

                <div class="kt-heading style4 mar-bottom-80">
                    <h3 class="kt-heading-title">our team</h3>
                    <div class="divider"><div class="divider-inner"></div></div>
                </div>

                <div class="products products-effect-2">

                    <div class="owl-carousel-kt gutters">
                        <div class="owl-carousel kt-owl-carousel" data-options='{"pagination": false, "navigation": true, "desktop": 4, "desktopsmall" : 3, "tablet" : 2, "mobile" : 1}'>
                            <div class="product">
                                <div class="product-content">
                                    <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                    <a class="product-thumbnail" href="woocommerce-product-detailed1.php">
                                        <img alt="" src="assets/images/product/4.jpg">
                                    </a>
                                    <div class="product-over-tool">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_cart_button" href="#" data-original-title="Add to cart"><i class="icon_bag_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="quickview" href="#" data-original-title="Quick view"><i class="icon_search"></i></a>
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
                                        <div title="Rated 4 out of 5" class="star-rating">
                                            <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                        </div>
                                        <div class="woocommerce-review-count">3 Reviews</div>
                                        <a href="#" class="woocommerce-review-link">Add your review</a>
                                    </div>
                                    <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                    <div class="product-tool-list">
                                        <a class="add_to_cart_button" href="#"><i class="icon_bag_alt"></i>Add to cart</a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_compare" href="#" data-original-title="Quick view"><i class="icon_tags_alt"></i></a>
                                    </div>
                                </div><!-- .product-attribute -->
                            </div>
                            <div class="product">
                                <div class="product-content">
                                    <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                    <a class="product-thumbnail" href="woocommerce-product-detailed1.php">
                                        <img alt="" src="assets/images/product/5.jpg">
                                    </a>
                                    <div class="product-over-tool">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_cart_button" href="#" data-original-title="Add to cart"><i class="icon_bag_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="quickview" href="#" data-original-title="Quick view"><i class="icon_search"></i></a>
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
                                        <div title="Rated 4 out of 5" class="star-rating">
                                            <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                        </div>
                                        <div class="woocommerce-review-count">3 Reviews</div>
                                        <a href="#" class="woocommerce-review-link">Add your review</a>
                                    </div>
                                    <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                    <div class="product-tool-list">
                                        <a class="add_to_cart_button" href="#"><i class="icon_bag_alt"></i>Add to cart</a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_compare" href="#" data-original-title="Quick view"><i class="icon_tags_alt"></i></a>
                                    </div>
                                </div><!-- .product-attribute -->
                            </div>
                            <div class="product">
                                <div class="product-content">
                                    <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                    <a class="product-thumbnail" href="woocommerce-product-detailed1.php">
                                        <img alt="" src="assets/images/product/6.jpg">
                                    </a>
                                    <div class="product-over-tool">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_cart_button" href="#" data-original-title="Add to cart"><i class="icon_bag_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="quickview" href="#" data-original-title="Quick view"><i class="icon_search"></i></a>
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
                                        <div title="Rated 4 out of 5" class="star-rating">
                                            <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                        </div>
                                        <div class="woocommerce-review-count">3 Reviews</div>
                                        <a href="#" class="woocommerce-review-link">Add your review</a>
                                    </div>
                                    <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                    <div class="product-tool-list">
                                        <a class="add_to_cart_button" href="#"><i class="icon_bag_alt"></i>Add to cart</a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_compare" href="#" data-original-title="Quick view"><i class="icon_tags_alt"></i></a>
                                    </div>
                                </div><!-- .product-attribute -->
                            </div>
                            <div class="product">
                                <div class="product-content">
                                    <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                    <a class="product-thumbnail" href="woocommerce-product-detailed1.php">
                                        <img alt="" src="assets/images/product/7.jpg">
                                    </a>
                                    <div class="product-over-tool">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_cart_button" href="#" data-original-title="Add to cart"><i class="icon_bag_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="quickview" href="#" data-original-title="Quick view"><i class="icon_search"></i></a>
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
                                        <div title="Rated 4 out of 5" class="star-rating">
                                            <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                        </div>
                                        <div class="woocommerce-review-count">3 Reviews</div>
                                        <a href="#" class="woocommerce-review-link">Add your review</a>
                                    </div>
                                    <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                    <div class="product-tool-list">
                                        <a class="add_to_cart_button" href="#"><i class="icon_bag_alt"></i>Add to cart</a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_compare" href="#" data-original-title="Quick view"><i class="icon_tags_alt"></i></a>
                                    </div>
                                </div><!-- .product-attribute -->
                            </div>
                            <div class="product">
                                <div class="product-content">
                                    <span class="posted_in"><a href="#">Dress</a> / <a href="#">T-Shirt</a></span>
                                    <a class="product-thumbnail" href="woocommerce-product-detailed1.php">
                                        <img alt="" src="assets/images/product/8.jpg">
                                    </a>
                                    <div class="product-over-tool">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_cart_button" href="#" data-original-title="Add to cart"><i class="icon_bag_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="quickview" href="#" data-original-title="Quick view"><i class="icon_search"></i></a>
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
                                        <div title="Rated 4 out of 5" class="star-rating">
                                            <span style="width:80%"><span class="rating">4</span> out of 5</span>
                                        </div>
                                        <div class="woocommerce-review-count">3 Reviews</div>
                                        <a href="#" class="woocommerce-review-link">Add your review</a>
                                    </div>
                                    <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus mi luctus fringilla pretium. Duis est justo, pellentesque vitae imperdiet pharetra, varius ut mauris. Cras mauris magna, </div>
                                    <div class="product-tool-list">
                                        <a class="add_to_cart_button" href="#"><i class="icon_bag_alt"></i>Add to cart</a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="icon_heart_alt"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="add_to_compare" href="#" data-original-title="Quick view"><i class="icon_tags_alt"></i></a>
                                    </div>
                                </div><!-- .product-attribute -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div><!-- #main -->

    <img src="previews/12-product-details.jpg" class="preview-image" style="top: 18px;display: none;max-width:none;" />
<?php

include_once('templates/footers/footer1.php');
include_once('templates/footers/foot.php');


