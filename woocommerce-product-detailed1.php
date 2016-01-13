<?php

include_once('templates/headers/head.php');
include_once('templates/headers/header2.php');

?>
    <div id="main">
        <div class="page-section">
            <div class="product-main style1" itemtype="http://schema.org/Product" itemscope="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="product-detail-thumbarea">
                                <div class="single-product-main-images owl-carousel1" id="sync1">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product/product-21.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                            <img src="assets/images/product/product-21.jpg" class="img-responsive" alt="Product 1" title="Product 1" />
                                        </a>
                                    </div>
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product/product-8.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                            <img src="assets/images/product/product-8.jpg" class="img-responsive" alt="Product 2" title="Product 2" />
                                        </a>
                                    </div>
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product/product-12.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                            <img src="assets/images/product/product-12.jpg" class="img-responsive" alt="Product 3" title="Product 3" />
                                        </a>
                                    </div>
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product/product-18.jpg" itemprop="image" class="woocommerce-main-image" title="">
                                            <img src="assets/images/product/product-18.jpg" class="img-responsive" alt="Product 4" title="Product 4" />
                                        </a>
                                    </div>
                                </div><!-- #sync1.single-product-main-images.owl-carousel -->
                                <div class="single-product-main-thumbnails owl-carousel2" id="sync2" data-items="3">
                                    <a href="assets/images/product/product-21.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/product-21.jpg" class="img-responsive" alt="Product 1" title="Product 1" /></a>
                                    <a href="assets/images/product/product-8.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/product-8.jpg" class="img-responsive" alt="Product 2" title="Product 2" /></a>
                                    <a href="assets/images/product/product-12.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/product-12.jpg" class="img-responsive" alt="Product 3" title="Product 3" /></a>
                                    <a href="assets/images/product/product-18.jpg" itemprop="image" class="woocommerce-main-image" title=""><img src="assets/images/product/product-18.jpg" class="img-responsive" alt="Product 4" title="Product 4" /></a>
                                </div><!-- #sync2.single-product-main-thumbnails.owl-carousel -->
                            </div><!-- .product-detail-thumbarea -->

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Products</a></li>
                                <li class="active">Afteroom Chair</li>
                            </ol>
                            <h1 class="product-title">Super Skinny Suit Trousers In Brown</h1>
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

                            <form enctype="multipart/form-data" method="post" class="cart clearfix">

                                <div class="quantity">
                                    <input type="text" size="4" class="input-text qty text" title="Qty" value="1" name="qty" />
                                </div>

                                <button class="btn btn-addtocart-b" type="submit">Add to cart</button>

                                <div class="cart-tool clearfix">
                                    <a class="add_to_wishlist" href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="add_to_compare" href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                        <i class="fa fa-exchange"></i>
                                    </a>
                                </div>

                            </form>

                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
                            </div>

                            <div class="product_meta">
                                <span class="sku_wrapper">SKU: <span itemprop="sku" class="sku">675684</span></span>
                                <span class="posted_in">Category: <a rel="tag" href="#">Accessories</a>, <a rel="tag" href="#">Chair</a></span>
                            </div>

                            <div class="product-shareit">
                                <span class="screen-reader-text">Share this</span>
                                <ul class="social_icons clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i> <span>Facebook</span></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> <span>Twitter</span></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i> <span>Pinterest</span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section bg-gray" itemtype="http://schema.org/Review" itemscope="">
            <div class="container">
                <div class="woocommerce-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav clearfix" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-description_tab" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#tab-additional_information" role="tab" data-toggle="tab">Additional INFO</a></li>
                        <li role="presentation"><a href="#tab-reviews" role="tab" data-toggle="tab">Review</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="tab-description_tab" role="tabpanel" class="tab-pane active">
                            <div class="product-description">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.<br/>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
                                <blockquote>6.1 oz. 100% preshrunk heavyweight cotton<br/>Shoulder-to-shoulder taping<br/>Double-needle sleeves and bottom hem</blockquote>
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
                            <div class="row">
                                <div class="col-md-6">



                                    <div class="comments-area" id="comments">
                                        <h3 class="comments-title">3 reviews</h3>


                                        <ol class="comment-list">
                                            <li class="comment" itemtype="http://schema.org/Review" itemscope="" itemprop="review">
                                                <div class="comment-item clearfix">
                                                    <div class="comment-avatar">
                                                        <img width="100" height="100" class="avatar avatar-100 photo" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=200&amp;d=mm&amp;r=g 2x" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=100&amp;d=mm&amp;r=g" alt="">
                                                    </div>
                                                    <div class="comment-content">
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
                                                    <div class="comment-content">
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
                                                    <div class="comment-content">
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

                                </div>
                                <div class="col-md-5 col-md-offset-1">

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
                                                    <input name="submit" type="submit" id="submit" class="btn btn-addtocart-b" value="Add Review" />
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
        </div>




        <div class="page-section">
            <div class="container">

                <div class="kt-heading-wrapper">
                    <h3 class="kt-heading-title">Recently viewed</h3>
                </div>

                <div class="products">

                    <div class="owl-carousel-kt remove-mar-bottom navigation-center">
                        <div class="owl-carousel kt-owl-carousel" data-options='{"pagination": false, "navigation": true, "desktop": 4, "desktopsmall" : 3, "tablet" : 2, "mobile" : 1}'>
                            <div class="product">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                        <img class="first-img" src="assets/images/product/product-1.jpg" alt=""/>
                                        <img class="second-img" src="assets/images/product/product-2.jpg" alt=""/>
                                    </a>

                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.php">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                            <div class="product">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                        <img class="first-img" src="assets/images/product/product-2.jpg" alt=""/>
                                        <img class="second-img" src="assets/images/product/product-3.jpg" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.php">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>

                            <div class="product">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                        <img class="first-img" src="assets/images/product/product-3.jpg" alt=""/>
                                        <img class="second-img" src="assets/images/product/product-4.jpg" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.php">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                            <div class="product">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                        <img class="first-img" src="assets/images/product/product-21.jpg" alt=""/>
                                        <img class="second-img" src="assets/images/product/product-1.jpg" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.php">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>

                            <div class="product">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                        <img class="first-img" src="assets/images/product/product-1.jpg" alt=""/>
                                        <img class="second-img" src="assets/images/product/product-2.jpg" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.php">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                            <div class="product">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.php" class="product-thumbnail">
                                        <img class="first-img" src="assets/images/product/product-2.jpg" alt=""/>
                                        <img class="second-img" src="assets/images/product/product-3.jpg" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.php">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div><!-- #main -->
<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


