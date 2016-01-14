<?php

include_once('templates/headers/head.php');
include_once('templates/headers/header1.php');

?>

    <div class="page-section page-header-bg small-section">
        <div class="page-header">
            <div class="container">
                <div class="page-header-content text-center">
                    <h1>blog grid 2 columns with sidebar</h1>
                    <div class="page-header-divider"><i class="icon_pens"></i></div>
                </div>
            </div>
        </div>
    </div>


    <div id="main">
        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="main-content col-md-9 col-sm-12 col-xs-12">
                        <div class="blog-posts blog-posts-list">
                            <div class="blog-post ">
                                <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                    <img src="assets/images/blog/list/1.jpg" alt=""/>
                                </a>
                                <div class="post-date">
                                    <span class="post-date-number">17</span>
                                    <span class="post-date-text">thursday</span>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-inner">
                                        <h4 class="blog-post-title">
                                            <a href="blog-singlepost-standard.php"> Blog demo 1</a>
                                        </h4>
                                        <p>Typi non habent claritatem insitamest usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius processus.</p>
                                        <div class="blog-post-meta">
                                            <span class="cat-links"><a href="#">the blog</a></span>
                                            <span class="author vcard">By <a href="#">Author</a></span>
                                        </div>
                                        <p class="entry-more"><a href="#" class="more-link"><span>Read More</span></a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-post">
                                <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                    <img src="assets/images/blog/list/2.jpg" alt=""/>
                                </a>
                                <div class="post-date">
                                    <span class="post-date-number">17</span>
                                    <span class="post-date-text">thursday</span>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-inner">
                                        <h4 class="blog-post-title">
                                            <a href="blog-singlepost-standard.php">Blog demo 2</a>
                                        </h4>
                                        <p>Typi non habent claritatem insitamest usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius processus.</p>
                                        <div class="blog-post-meta">
                                            <span class="cat-links"><a href="#">the blog</a></span>
                                            <span class="author vcard">By <a href="#">Author</a></span>
                                        </div>
                                        <p class="entry-more"><a href="#" class="more-link"><span>Read More</span></a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-post">
                                <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                    <img src="assets/images/blog/list/3.jpg" alt=""/>
                                </a>
                                <div class="post-date">
                                    <span class="post-date-number">17</span>
                                    <span class="post-date-text">thursday</span>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-inner">
                                        <h4 class="blog-post-title">
                                            <a href="blog-singlepost-standard.php">Blog demo 3</a>
                                        </h4>
                                        <p>Typi non habent claritatem insitamest usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius processus.</p>
                                        <div class="blog-post-meta">
                                            <span class="cat-links"><a href="#">the blog</a></span>
                                            <span class="author vcard">By <a href="#">Author</a></span>
                                        </div>
                                        <p class="entry-more"><a href="#" class="more-link"><span>Read More</span></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post">
                                <a href="blog-singlepost-standard.php" class="blog-post-thumbnail">
                                    <img src="assets/images/blog/list/4.jpg" alt=""/>
                                </a>
                                <div class="post-date">
                                    <span class="post-date-number">17</span>
                                    <span class="post-date-text">thursday</span>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-inner">
                                        <h4 class="blog-post-title">
                                            <a href="blog-singlepost-standard.php">Blog demo 4</a>
                                        </h4>
                                        <p>Typi non habent claritatem insitamest usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius processus.</p>
                                        <div class="blog-post-meta">
                                            <span class="cat-links"><a href="#">the blog</a></span>
                                            <span class="author vcard">By <a href="#">Author</a></span>
                                        </div>
                                        <p class="entry-more"><a href="#" class="more-link"><span>Read More</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .blog-posts -->

                        <nav class="navigation pagination">
                            <div class="nav-links">
                                <a href="#" class="prev page-numbers">Previous</a>
                                <a href="#" class="page-numbers">1</a>
                                <a href="#" class="page-numbers">2</a>
                                <span class="page-numbers current">3</span>
                                <a href="#" class="page-numbers">4</a>
                                <a href="#" class="page-numbers">5</a>
                                <a href="#" class="next page-numbers">Next</a>
                            </div>
                        </nav><!-- .pagination -->

                    </div><!-- .main-content -->
                    <?php include_once('templates/sidebar.php'); ?>

                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-section -->

    </div><!-- #main -->

<?php

include_once('templates/footers/footer3.php');
include_once('templates/footers/foot.php');


