<div id="topheader">
    <div class="container">

        <div class="topheader-left">
            <ul class="top-navigation">
                <li>
                    <a href="#"><i class="icon_lock_alt"></i>My Account</a>
                </li>
                <li class="language-switcher">
                    <a href="#"><i class="icon_ribbon_alt"></i>language</a>
                    <ul class="list-lang">
                        <li><span class="current"><img alt="en" src="assets/images/lang/en.jpg"><span>English</span></span></li>
                        <li><a href="#" title="Russian"><img alt="ru" src="assets/images/lang/ru.jpg"><span>Russian</span></a></li>
                        <li><a href="#" title="Brazil"><img alt="bra" src="assets/images/lang/bra.jpg"><span>Brazil</span></a></li>
                        <li><a href="#" title="France"><img alt="fr" src="assets/images/lang/fr.jpg"><span>France</span></a></li>
                    </ul>
                </li>
                <li class="currency-switcher">
                    <a href="#"><i class="icon_currency"></i>Currency</a>
                    <ul>
                        <li><a href="#">USD</a></li>
                        <li><a href="#">EUR</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <div class="topheader-right">
            <ul class="top-navigation">
                <li>
                    <a href="#"><i class="icon_check"></i>Checkout</a>
                </li>
                <li>
                    <a href="#"><i class="icon_check"></i>Compare</a>
                </li>
            </ul>
        </div>

    </div>
</div>
<header id="header" class="header2">
    <div id="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="branding">
                        <h1 class="logo">
                            <a href="index.php"><img src="assets/images/logo.png" title="Mondova" alt="Mondova"/></a>
                        </h1>
                    </div><!-- .branding -->
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="header-right">

                        <?php include_once('templates/shopping-cart.php'); ?>
                        <?php include_once('templates/shopping-wishlist.php'); ?>


                        <form action="#" class="woocommerce-product-search searchform" method="get">
                            <div class="wrap_product_cat">
                                <select class="postform" name="cat">
                                    <option selected="selected" value="0">All Categories</option>
                                    <option value="16">Hats</option>
                                    <option value="18">Jackets</option>
                                    <option value="19">Accesories</option>
                                    <option value="53">&nbsp;&nbsp;&nbsp;Sunglasses</option>
                                    <option value="20">Bags</option>
                                    <option value="22">Watches</option>
                                </select>
                            </div>
                            <input type="text" name="s" value="" placeholder="Search">
                            <button class="submit"><i class="icon_search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- #header-content -->

    <div class="navbar-container sticky-header">
        <div class="apply-sticky">
            <div class="header-sticky-background bg-white"></div>
            <nav class="main-nav" id="nav">
                <div class="container">
                    <?php include_once('templates/menu.php'); ?>
                </div>
            </nav><!-- #nav -->
        </div>
    </div>
</header><!-- #header -->