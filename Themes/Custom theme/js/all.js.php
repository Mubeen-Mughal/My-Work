<?php



$javascript = ($_GET['r']) ? explode(',', $_GET['r']) : array('../layouts/js/jquery.js', '../layouts/js/bootstrap.min.js', '../plugins/datepicker/datepicker.js', '../plugins/mm-menu/mm-menu.js', '../plugins/ekko-lightbox/ekko-lightbox.js', '../plugins/treeview/treeview.js', '../plugins/wow/wow.js', '../plugins/owl-carousel/owl.carousel.min.js',  '../js/custom.js');

foreach($javascript as $file)

{

	echo file_get_contents($file);

}

?>