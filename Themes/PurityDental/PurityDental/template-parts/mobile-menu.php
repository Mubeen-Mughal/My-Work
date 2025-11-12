<!--Mobile Menu -->

<nav id="menu">
<div>
 <div class="client-info">
      <div class="client-pic"><img src="<?php echo get_option('mobile_pic');?>" alt="<?php echo get_option('client_name');?>"/></div>

    </div>
<div>
 <form role="search" method="get" id="searchform" class="search_mobile" action="<?php echo get_option( 'siteurl' );?>">
	<input type="text"  name="s" id="s" onfocus='clearText(this)' onblur='replaceText(this)' value="Search" />
        <input type="submit" name="sa" value="" />

      </form>
</div>
<?php
      wp_nav_menu( array( 
      'theme_location' => 'mobile-menu', 
      'container' => false,
      'depth' => 0
      
      ) ); 
?>
    </div>
</nav>



