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
                    <h1>Shopping Cart</h1>
                    <div class="page-header-divider"><span class="icon_currency"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <div class="page-section">
            <div class="container">
                <div class="woocommerce">
                    <div class="row">
                        <div class="col-md-8">
                            <form class="table-cart-form">
                                <div class="table-responsive">
                                    <table class="shop_table cart">
                                        <thead>
                                        <tr>
                                            <th class="product-remove">Remove</th>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a class="remove" href="#"><i class="icon_close"></i></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Lorem ipsum dolor sit ametelit, sed diam nonummy</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">120$</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="quantity-group">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                                    <button class="quantity-plus" type="button"><i class="fa fa-angle-up"></i></button>
                                                    <button class="quantity-minus" type="button"><i class="fa fa-angle-down"></i></button>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">120$</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a class="remove" href="#"><i class="icon_close"></i></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Wisi enim ad minim veniam exerci</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">220$</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="quantity-group">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                                    <button class="quantity-plus" type="button"><i class="fa fa-angle-up"></i></button>
                                                    <button class="quantity-minus" type="button"><i class="fa fa-angle-down"></i></button>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">440$</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a class="remove" href="#"><i class="icon_close"></i></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Option congue nihil imperdiet doming</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">320$</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="quantity-group">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                                    <button class="quantity-plus" type="button"><i class="fa fa-angle-up"></i></button>
                                                    <button class="quantity-minus" type="button"><i class="fa fa-angle-down"></i></button>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">960$</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <button class="btn btn-default btn-lg">Continue shopping</button>
                                                <button class="btn btn-dark btn-lg">update shopping cart</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="cart-collaterals">
                                <form class="coupon-form">
                                    <h5>Discount code</h5>
                                    <div class="cart-collaterals-inner">
                                        <div class="coupon">
                                            <input placeholder="Enter your coupon if you have one" type="text" name="coupon_code" />
                                            <button name="apply_coupon" class="btn btn-default">apply Coupon</button>
                                        </div>
                                    </div>
                                </form>
                                <form class="shipping_calculator">
                                    <h5>estimate shipping and tax</h5>
                                    <div class="cart-collaterals-inner">
                                        <p>Enter your destination to get shipping & tax</p>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="selector full-width">
                                                <option value="">Select a Country</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>State / Province</label>
                                            <input type="text" class="input-bg" placeholder="State / Province">
                                        </div>
                                        <div class="form-group">
                                            <label>ZIP / Postal Code</label>
                                            <input type="text" class="input-bg" placeholder="Post Code / Zip">
                                        </div>
                                        <div class="form-button">
                                            <button type="submit" class="btn btn-default">get a quote</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="cart_totals">
                                    <div class="cart-collaterals-inner">
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td class="text-right"><span class="amount">$1520.00</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Grand Total</th>
                                                    <td class="text-right"><span class="amount">$1520.00</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>Checkout with multiple address</p>
                                    <div class="button-checkout">
                                        <a class="btn btn-accent btn-fullwidth btn-lg btn-animation" href="woocommerce-checkout.php">
                                            <span>proceed to checkout <i class="fa fa-long-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #main -->
    <img src="previews/23-shopping-cart.jpg" class="preview-image" style="top: 0;display: none;max-width:none;" />
<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


