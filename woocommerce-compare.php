<?php
global $shadow;
$shadow = ' ';

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>
    <div class="page-section page-header-bg small-section">
        <div class="page-header">
            <div class="container">
                <div class="page-header-content text-center">
                    <h1>Compare</h1>
                    <div class="page-header-divider"><span class="icon_documents_alt"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <div class="page-section">
            <div class="container">
                <div class="table-responsive">
                    <table class="compare">
                        <tr>
                            <td class="compare-title">Product Image</td>
                            <td class="product-thumbnail">
                                <a href="#" class="attachment-shop_thumbnail wp-post-image"><img src="assets/images/product/1.jpg" alt="">Sample Product 01</a>
                            </td>
                            <td class="product-thumbnail">
                                <a href="#" class="attachment-shop_thumbnail wp-post-image"><img src="assets/images/product/2.jpg" alt="">Sample Product 02</a>
                            </td>
                            <td class="product-thumbnail">
                                <a href="#" class="attachment-shop_thumbnail wp-post-image"><img src="assets/images/product/3.jpg" alt="">Sample Product 03</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="compare-title">Rating</td>
                            <td>
                                <div class="star-rating" title="Rated 4.50 out of 5">
                                    <span style="width:90%"><strong class="rating">4.50</strong> out of 5</span>
                                </div>
                            </td>
                            <td>
                                <div class="star-rating" title="Rated 4.50 out of 5">
                                    <span style="width:90%"><strong class="rating">4.50</strong> out of 5</span>
                                </div>
                            </td>
                            <td>
                                <div class="star-rating" title="Rated 4.50 out of 5">
                                    <span style="width:90%"><strong class="rating">4.50</strong> out of 5</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="compare-title">Unit Price</td>
                            <td>
                                <span class="amount">$1000.00</span>
                            </td>
                            <td>
                                <span class="amount">$1000.00</span>
                            </td>
                            <td>
                                <span class="amount">$1000.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="compare-title">Description</td>
                            <td>
                                <div>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</div>
                            </td>
                            <td>
                                <div>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</div>
                            </td>
                            <td>
                                <div>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="compare-title">Manufacturer</td>
                            <td>American Seating</td>
                            <td>Arflex</td>
                            <td>Biggs Furniture</td>
                        </tr>
                        <tr>
                            <td class="compare-title">Availability</td>
                            <td>
                                <label class="instock">In Stock</label>
                            </td>
                            <td>
                                <label class="instock">In Stock</label>
                            </td>
                            <td>
                                <label class="outstock">Out Stock</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="compare-title">Size</td>
                            <td>Compact</td>
                            <td>Large</td>
                            <td>Medium</td>
                        </tr>
                        <tr>
                            <td class="compare-title">Color</td>
                            <td>Blue</td>
                            <td>Brown</td>
                            <td>Beige</td>
                        </tr>
                        <tr>
                            <td class="compare-title">Quantity</td>
                            <td>
                                <div class="quantity-group">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    <button class="quantity-plus" type="button"><i class="fa fa-angle-up"></i></button>
                                    <button class="quantity-minus" type="button"><i class="fa fa-angle-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="quantity-group">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    <button class="quantity-plus" type="button"><i class="fa fa-angle-up"></i></button>
                                    <button class="quantity-minus" type="button"><i class="fa fa-angle-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="quantity-group">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    <button class="quantity-plus" type="button"><i class="fa fa-angle-up"></i></button>
                                    <button class="quantity-minus" type="button"><i class="fa fa-angle-down"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="compare-title">Action</td>
                            <td class="actions">
                                <button class="btn btn-accent">Add To Cart</button>
                                <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></a>
                            </td>
                            <td class="actions">
                                <button class="btn btn-accent">Add To Cart</button>
                                <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></a>
                            </td>
                            <td class="actions">
                                <button class="btn btn-accent">Add To Cart</button>
                                <a title="" data-placement="top" data-toggle="tooltip" class="add_to_wishlist" href="#" data-original-title="Add to wishlist"><i class="fa fa-heart"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- #main -->
<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


