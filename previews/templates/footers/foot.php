

</div><!-- #page -->

<!-- JS -->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/jquery.kt.sticky.js"></script>
<?php
global $revolution;
if(!empty($revolution)){ ?>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.revolution.min.js"></script>
<?php include_once('templates/scripts/'.$revolution.'.php'); ?>
<?php }

global $googlemap;
if(!empty($googlemap)){ ?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<?php } ?>

<!-- Javascript Main File -->
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>