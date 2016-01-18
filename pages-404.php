<?php
global $disableloading, $page404;
$disableloading = true;
$page404 = true;

include_once('templates/headers/head.php');

?>

<div class="wrapper-404" style="background-image:url(assets/images/bg-404.jpg)">
    <div id="error404">
		<h4>the page you are looking for does not exist</h4>
        <h1>404 error</h1>
        <p class="no-margin"><a class="btn btn-default" href="index.php">please return to homepage</a></p>

    </div><!-- #main -->
</div>
<img src="previews/29-404-page.jpg" class="preview-image" style="top: 0;display: none1;max-width:none;" />

<?php
include_once('templates/footers/foot.php');