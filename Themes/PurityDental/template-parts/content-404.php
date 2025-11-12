<h1>Page Not Found</h1>
 The page you requested cannot be found. The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
 <br><br>
  Please try the following:
  <br><br>
  <ul>
			<li>Make sure the page address in the Address bar is spelled correctly.</li>
			<li>Navigate to the desired page from the below navigation.</li>
		     </ul>
  <br><br>
<div class="sitemap">
  <div id="sidetreecontrol"><a href="javascript:;"  >Collapse All</a>  |  <a href="javascript:;"  >Expand All</a></div>
<?php
      wp_nav_menu( array( 
      'theme_location' => 'site-map', 
      'container' => false,
      'menu_id' => 'tree'
      ) ); 
?>
</div>
