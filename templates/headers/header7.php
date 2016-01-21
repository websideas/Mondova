<header id="header" class="header7">
    <div id="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 header-left">
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
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="branding">
                        <h1 class="logo">
                            <a href="index.php"><img src="assets/images/logo.png" title="Mondova" alt="Mondova"/></a>
                        </h1>
                    </div><!-- .branding -->
                </div>

                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 header-right">
                    <?php include_once('templates/shopping-cart.php'); ?>
                    <?php include_once('templates/shopping-wishlist.php'); ?>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- #header-content -->

    <div class="container">
        <div class="navbar-container sticky-header">
            <div class="apply-sticky">
                <div class="header-sticky-background bg-text"></div>
                <nav class="main-nav" id="nav">
                    <div class="main-nav-inner">
                        <?php include_once('templates/menu.php'); ?>
                        <ul id="main-nav-tool">
                            <li class="mini-search">
                                <a href="#"><i class="icon_search"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav><!-- #nav -->
            </div>
        </div>
    </div>
</header><!-- #header -->