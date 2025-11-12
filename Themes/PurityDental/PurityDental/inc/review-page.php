<?php

// Register Custom Post Type
function review_post_type() {

	$labels = array(
		'name'                  => _x( 'Reviews', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Reivew Page', 'text_domain' ),
		'name_admin_bar'        => __( 'Reivew', 'text_domain' ),
		'archives'              => __( 'Reivew Archives', 'text_domain' ),
		'attributes'            => __( 'Review Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Review', 'text_domain' ),
		'add_new'               => __( 'Add New Review', 'text_domain' ),
		'new_item'              => __( 'New Review', 'text_domain' ),
		'edit_item'             => __( 'Edit Review', 'text_domain' ),
		'update_item'           => __( 'Update Review', 'text_domain' ),
		'view_item'             => __( 'View Review', 'text_domain' ),
		'view_items'            => __( 'View Review', 'text_domain' ),
		'search_items'          => __( 'Search Review', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Reviewer  Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Reviewer image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Reviewer image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Reviewer image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Review', 'text_domain' ),
		'description'           => __( 'Add BIW Review Page', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'review', $args );

}
add_action( 'init', 'review_post_type', 0 );


add_action( 'admin_menu', 'register_review_page' );

function register_review_page(){
	
add_submenu_page( 'ekwa-theme-options', 'Add Reviews', 'Add Reviews', 
'manage_options', 'edit.php?post_type=review', NULL );
}


/********* remove yoast ********/



?>






<?php

add_shortcode('biw_review_page',function(){
    ob_start();
    ?>
    
  <div class="biw-reviews">
   <div class="text-review-wrap">
    <ul id="cont-new">
        
    <?php
      global $post;
      $args = array(
      'post_type' => 'review',
       'posts_per_page' => -1
         );

        $reviews =  new WP_Query($args);
        if($reviews->have_posts()):
        while($reviews->have_posts()) : $reviews->the_post(); ?>
        
        <li>
          <div class="col-sm-12 review-block">
            <div class="col-sm-2 text-center img-reviwer no-padding center">
              <!--<button type="button" class="btn btn-default btn-circle btn-xl blue">C</button>-->
	      <div class="reviewer-profile-img">
		<?php
		if ( has_post_thumbnail() ){
			$name = get_the_title();;
				$thumb_id = get_post_thumbnail_id();
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
                                $thumb_url = $thumb_url_array[0];
			echo '<img  alt="'.$name.'" src="'.$thumb_url.'">';
			
		}else{
			//Example string.
			$string = get_the_title();;
			 
			$firstCharacter = $string[0];
			$firstCharacter = substr($string, 0, 1);
			echo "<span>".$firstCharacter."</span>"; 
		}
		?>
	      </div>
              <br/>
              <br/>
              <span class='reviewer-name'><?php the_title(); ?></span> </div>
            <div class="col-sm-10 testi"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><br/>
	    <?php the_content(); ?>
            </div>
          </div>
        </li>
        <?php  endwhile; ?>
        <?php wp_reset_postdata(); ?>
         <?php endif;?>
        
      </ul>
     </div>
    <a href="#" id="loadMore" class="load-more">Read More</a>
    
    
    <div class="biw-profiles row">
	<div class="col-sm-12">
		<h2><center>See More Real Patient Reviews</center></h2>
	</div>
	<div class="col-sm-4 part-logo">
	  <div class="inner-wrap"><a href="<?php echo get_option('review_site_1'); ?>" target="_blank"><img src="<?php echo get_option('review_profile_1');?>"></a></div>
	</div>
	<div class="col-sm-4 part-logo">
	  <div class="inner-wrap"><a href="<?php echo get_option('review_site_2'); ?>" target="_blank"><img src="<?php echo get_option('review_profile_2');?>"></a></div>
	</div>
	<div class="col-sm-4 part-logo">
	  <div class="inner-wrap"><a href="<?php echo get_option('review_site_3'); ?>" target="_blank"><img src="<?php echo get_option('review_profile_3');?>"></a></div>
	</div>
   </div>
    
    
<div class="row biw-buttons">
  <div class="col-sm-3">
    <div class="bottom-button"><a gallery="remoteload" data-toggle="lightbox" href="<?php echo site_url();?>/review.html">Submit Your Review</a></div>
  </div>
  <div class="col-sm-6">
    <div class="bottom-button">Call us at <?php echo get_option('phone_1'); ?> or <a href="<?php echo site_url();?>/<?php echo get_option('contact_page');?>">contact us</a> today</div>
  </div>
  <div class="col-sm-3">
    <div class="bottom-button"><a href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=xa-51acbb2234784891" target="_blank" class="addthis addthis_button addthis_btn hvr-bob followus-icons">share with your friends</a></div>
  </div>
</div>

    
   </div>
    
    <?php
     return ob_get_clean();

    
});


/*-************** Option page for review **********/



function review_settings_page(){
	  ?>
	  <style>
		.description-reviewpage{
			display: inline-block;
			line-height: 19px;
			padding: 11px 15px;
			font-size: 14px;
			text-align: left;
			margin: 25px 20px 0 2px;
			background-color: #fff;
			border-left: 4px solid #ffba00;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);	
		}
	  </style>
	    <div class="wrap">
	    <h1>Review Page Options</h1>
	    <div class="description-reviewpage">
		<p>Use <code>[biw_review_page]</code> Short  to show the Review page Inside the content  </p>
		<p>If you Need to  add it into the template use <a href="https://developer.wordpress.org/reference/functions/do_shortcode/">do_shortcode</a> function with that shortcode and make sure  Shortcode anywhere plugin installed and setup correctly </p>
	    </div>
	    <form enctype="multipart/form-data" method="post" action="options.php">
	        <?php
		
	            settings_fields("section-review");
	            do_settings_sections("review-options");    
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	    
	<?php
}




add_action( 'admin_menu', 'register_review_option_page' );

function register_review_option_page(){
	
add_submenu_page( 'ekwa-theme-options', 'Review Page Options', 'Review Page Options', 
'manage_options', 'review_page_settings', 'review_settings_page', NULL );


}


/****** adding fields ********/




function display_review_profile_1()
{
	?>
        <input type="file" name="review_profile_1" />
	
        <?php
	 $review_profile_1 =  get_option('review_profile_1');
	 
	 if(!empty($review_profile_1)){
		echo  "<br><img src='$review_profile_1'>";
	 }
	
	?>
   <?php
}


function handle_review_profile_1_upload($opt) 
{
	if(!empty($_FILES["review_profile_1"]["tmp_name"]))
	{
	$urls = wp_handle_upload($_FILES["review_profile_1"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	else{
	   $review_profile_1 =  get_option('review_profile_1');
	   return $review_profile_1;
	}
	  
}



function display_review_site_1()
{
	?>
    	<input type="text" name="review_site_1" id="review_site_1" value="<?php echo get_option('review_site_1'); ?>" />
    <?php
}




function display_review_profile_2()
{
	?>
        <input type="file" name="review_profile_2" />
	
        <?php
	 $review_profile_2 =  get_option('review_profile_2');
	 
	 if(!empty($review_profile_2)){
		echo  "<br><img src='$review_profile_2'>";
	 }
	
	?>
   <?php
}


function handle_review_profile_2_upload($opt) 
{
	if(!empty($_FILES["review_profile_2"]["tmp_name"]))
	{
	$urls = wp_handle_upload($_FILES["review_profile_2"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	else{
	   $review_profile_2 =  get_option('review_profile_2');
	   return $review_profile_2;
	}
	  
}



function display_review_site_2()
{
	?>
    	<input type="text" name="review_site_2" id="review_site_2" value="<?php echo get_option('review_site_2'); ?>" />
    <?php
}






function display_review_profile_3()
{
	?>
        <input type="file" name="review_profile_3" />
	
        <?php
	 $review_profile_3 =  get_option('review_profile_3');
	 
	 if(!empty($review_profile_3)){
		echo  "<br><img src='$review_profile_3'>";
	 }
	
	?>
   <?php
}


function handle_review_profile_3_upload($opt) 
{
	if(!empty($_FILES["review_profile_3"]["tmp_name"]))
	{
	$urls = wp_handle_upload($_FILES["review_profile_3"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	else{
	   $review_profile_3 =  get_option('review_profile_3');
	   return $review_profile_3;
	}
	  
}



function display_review_site_3()
{
	?>
    	<input type="text" name="review_site_3" id="review_site_3" value="<?php echo get_option('review_site_3'); ?>" />
    <?php
}


function display_contact_page()
{
	?>
    	<input type="text" name="contact_page" id="contact_page" value="<?php echo get_option('contact_page'); ?>" />
    <?php
}











function display_review_panel_fields()
{
	add_settings_section("section-review", "", null, "review-options");
	add_settings_field("review_profile_1", "Review Site Logo ", "display_review_profile_1", "review-options", "section-review");
	add_settings_field("review_site_1", "Review Site link ", "display_review_site_1", "review-options", "section-review");
	add_settings_field("review_profile_2", "Review Site Logo ", "display_review_profile_2", "review-options", "section-review");
	add_settings_field("review_site_2", "Review Site link ", "display_review_site_2", "review-options", "section-review");
	add_settings_field("review_profile_3", "Review Site Logo ", "display_review_profile_3", "review-options", "section-review");
	add_settings_field("review_site_3", "Review Site link ", "display_review_site_3", "review-options", "section-review");
	add_settings_field("contact_page", "Contact Page ", "display_contact_page", "review-options", "section-review");
	
        register_setting("section-review", "review_profile_1", "handle_review_profile_1_upload");
	 register_setting("section-review", "review_site_1");
	 register_setting("section-review", "review_profile_2", "handle_review_profile_2_upload");
	 register_setting("section-review", "review_site_2");
	 register_setting("section-review", "review_profile_3", "handle_review_profile_3_upload");
	 register_setting("section-review", "review_site_3");
	 register_setting("section-review", "contact_page");
}

add_action("admin_init", "display_review_panel_fields");







