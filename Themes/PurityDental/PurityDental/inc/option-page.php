<?php


/*********###### Admin Theme Option Page ##### ************/

function theme_settings_page(){
	  ?>
	    <div class="wrap">
	    <h1>Bizgrow Theme Options</h1>
	    <form enctype="multipart/form-data" method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	    
	<?php
}

function add_theme_menu_item()
{
	add_menu_page("Bizgrow Theme Options", "Bizgrow Theme Options", "manage_options", "bizgrow-theme-options", "theme_settings_page", null, 99);
	
	//add_submenu_page("ekwa-theme-options", "Page post Options" , "Page post Options", "manage_options", "post-page-options" );
}

add_action("admin_menu", "add_theme_menu_item");



/**** adding form fields ********/
function display_client_name()
{
	?>
    	<input type="text" name="client_name" id="client_name" value="<?php echo get_option('client_name'); ?>" />
    <?php
}

function display_practice_name()
{
	?>
    	<input type="text" name="practice_name" id="practice_name" value="<?php echo get_option('practice_name'); ?>" />
    <?php
}
function display_organization_type()
{
	?>
    	<input type="text" name="organization_type" id="organization_type" value="<?php echo get_option('organization_type'); ?>" />
    <?php
}
function display_phone_1()
{
	?>
    	<input type="text" name="phone_1" id="phone_1" value="<?php echo get_option('phone_1'); ?>" />
    <?php
}

function display_direction_1()
{
	?>
    	<input type="text" name="direction_1" id="direction_1" value="<?php echo get_option('direction_1'); ?>" />
    <?php
}

function display_street_address_1()
{
	?>
    	<input type="text" name="street_address_1" id="street_address_1" value="<?php echo get_option('street_address_1'); ?>" />
    <?php
}

function display_city_1()
{
	?>
    	<input type="text" name="city_1" id="city_1" value="<?php echo get_option('city_1'); ?>" />
    <?php
}
function display_state_1()
{
	?>
    	<input type="text" name="state_1" id="state_1" value="<?php echo get_option('state_1'); ?>" />
    <?php
}
function display_zip_1()
{
	?>
    	<input type="text" name="zip_1" id="zip_1" value="<?php echo get_option('zip_1'); ?>" />
    <?php
}

function display_location_image_1()
{
	?>
        <input type="file" name="location_image_1" />
	
        <?php
	 $location_image_1 =  get_option('location_image_1');
	 
	 if(!empty($location_image_1)){
		echo  "<br><img src='$location_image_1'>";
	 }
	
	?>
   <?php
}
function display_lat_1()
{
	?>
    	<input type="text" name="lat_1" id="lat_1" value="<?php echo get_option('lat_1'); ?>" />
    <?php
}
function display_long_1()
{
	?>
    	<input type="text" name="long_1" id="long_1" value="<?php echo get_option('long_1'); ?>" />
    <?php
}

function display_facebook()
{
	?>
    	<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
    <?php
}
function display_google_plus()
{
	?>
    	<input type="text" name="google_plus" id="google_plus" value="<?php echo get_option('google_plus'); ?>" />
    <?php
}

function display_linkedin()
{
	?>
    	<input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
    <?php
}
function display_twitter()
{
	?>
    	<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
    <?php
}

function display_yelp()
{
	?>
    	<input type="text" name="yelp" id="yelp" value="<?php echo get_option('yelp'); ?>" />
    <?php
}

function display_hrs()
{
	?>
    	
    <?php
}
/*
function display_monday()
{
	?>
    	<input type="text" name="monday" id="monday" value="<?php echo get_option('monday'); ?>" />
    <?php
}


*/

function display_monday_open()
{
	?>
    	 <input type="text" name="monday_open" id="monday_open" value="<?php echo get_option('monday_open'); ?>" />
	
    <?php
}
function display_monday_close()
{
	?>
    	 <input type="text" name="monday_close" id="monday_close" value="<?php echo get_option('monday_close'); ?>" />
	
    <?php
}

function display_tuesday_open()
{
	?>
    	 <input type="text" name="tuesday_open" id="tuesday_open" value="<?php echo get_option('tuesday_open'); ?>" />
	
    <?php
}
function display_tuesday_close()
{
	?>
    	 <input type="text" name="tuesday_close" id="tuesday_close" value="<?php echo get_option('tuesday_close'); ?>" />
	
    <?php
}



function display_wednesday_open()
{
	?>
    	 <input type="text" name="wednesday_open" id="wednesday_open" value="<?php echo get_option('wednesday_open'); ?>" />
	
    <?php
}
function display_wednesday_close()
{
	?>
    	 <input type="text" name="wednesday_close" id="wednesday_close" value="<?php echo get_option('wednesday_close'); ?>" />
	
    <?php
}



function display_thursday_open()
{
	?>
    	 <input type="text" name="thursday_open" id="thursday_open" value="<?php echo get_option('thursday_open'); ?>" />
	
    <?php
}
function display_thursday_close()
{
	?>
    	 <input type="text" name="thursday_close" id="thursday_close" value="<?php echo get_option('thursday_close'); ?>" />
	
    <?php
}



function display_friday_open()
{
	?>
    	 <input type="text" name="friday_open" id="friday_open" value="<?php echo get_option('friday_open'); ?>" />
	
    <?php
}
function display_friday_close()
{
	?>
    	 <input type="text" name="friday_close" id="friday_close" value="<?php echo get_option('friday_close'); ?>" />
	
    <?php
}

function display_saturday_open()
{
	?>
    	 <input type="text" name="saturday_open" id="saturday_open" value="<?php echo get_option('saturday_open'); ?>" />
	
    <?php
}
function display_saturday_close()
{
	?>
    	 <input type="text" name="saturday_close" id="saturday_close" value="<?php echo get_option('saturday_close'); ?>" />
	
    <?php
}





function handle_location_image_1_upload($opt) 
{
	if(!empty($_FILES["location_image_1"]["tmp_name"]))
	{
	$urls = wp_handle_upload($_FILES["location_image_1"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	else{
	   $location_image_1 =  get_option('location_image_1');
	   return $location_image_1;
	}
	  
}

function display_country()
{
	?>
	  <select name="country" id="country">
		    <option value="United States" <?php selected( get_option('country'), 'United States' ); ?>>United States</option>
		    <option value="Canada" <?php selected( get_option('country'), 'Canada' ); ?>>Canada</option>
		    <option value="Hong Kong" <?php selected( get_option('country'), 'Hong Kong' ); ?>>Hong Kong</option>
		    <option value="Australia" <?php selected( get_option('country'), 'Australia' ); ?>>Australia</option>
		    <option value="England" <?php selected( get_option('country'), 'England' ); ?>>England</option>
	  </select>
    <?php
}


if(get_option('location_two') == 1){
	  
function display_phone_2()
{
	?>
    	<input type="text" name="phone_2" id="phone_2" value="<?php echo get_option('phone_2'); ?>" />
    <?php
}

function display_direction_2()
	  {
		    ?>
			    <input type="text" name="direction_2" id="direction_2" value="<?php echo get_option('direction_2'); ?>" />
		     <?php
	  }
	  
function display_street_address_2()
{
	?>
    	<input type="text" name="street_address_2" id="street_address_2" value="<?php echo get_option('street_address_2'); ?>" />
    <?php
}

function display_city_2()
{
	?>
    	<input type="text" name="city_2" id="city_2" value="<?php echo get_option('city_2'); ?>" />
    <?php
}
function display_state_2()
{
	?>
    	<input type="text" name="state_2" id="state_2" value="<?php echo get_option('state_2'); ?>" />
    <?php
}
function display_zip_2()
{
	?>
    	<input type="text" name="zip_2" id="zip_2" value="<?php echo get_option('zip_2'); ?>" />
    <?php
}

function display_location_image_2()
{
	?>
        <input type="file" name="location_image_2" />
	
        <?php
	 $location_image_2 =  get_option('location_image_2');
	 
	 if(!empty($location_image_2)){
		echo  "<br><img src='$location_image_2'>";
	 }
	
	?>
   <?php
}

function handle_location_image_2_upload($opt) 
{
	if(!empty($_FILES["location_image_2"]["tmp_name"]))
	{
	$urls = wp_handle_upload($_FILES["location_image_2"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	else{
	   $location_image_2 =  get_option('location_image_2');
	   return $location_image_2;
	}
	  
}

function display_lat_2()
{
	?>
    	<input type="text" name="lat_2" id="lat_2" value="<?php echo get_option('lat_2'); ?>" />
    <?php
}
function display_long_2()
{
	?>
    	<input type="text" name="long_2" id="long_2" value="<?php echo get_option('long_2'); ?>" />
    <?php
}




	  function display_location_three()
	  {
		  ?>
		  
			  <input type="checkbox" name="location_three" value="1" <?php checked(1, get_option('location_three'), true); ?> /> <span>Add Third Location</span>
		  <?php
	  }
	  
	  
	if(get_option('location_three') == 1){
function display_phone_3()
{
	?>
    	<input type="text" name="phone_3" id="phone_3" value="<?php echo get_option('phone_3'); ?>" />
    <?php
}
function display_direction_3()
	  {
		    ?>
			    <input type="text" name="direction_3" id="direction_3" value="<?php echo get_option('direction_3'); ?>" />
		     <?php
	  }
	  
function display_street_address_3()
{
	?>
    	<input type="text" name="street_address_3" id="street_address_3" value="<?php echo get_option('street_address_3'); ?>" />
    <?php
}

function display_city_3()
{
	?>
    	<input type="text" name="city_3" id="city_3" value="<?php echo get_option('city_3'); ?>" />
    <?php
}
function display_state_3()
{
	?>
    	<input type="text" name="state_3" id="state_3" value="<?php echo get_option('state_3'); ?>" />
    <?php
}
function display_zip_3()
{
	?>
    	<input type="text" name="zip_3" id="zip_3" value="<?php echo get_option('zip_3'); ?>" />
    <?php
}

function display_location_image_3()
{
	?>
        <input type="file" name="location_image_3" />
	
        <?php
	 $location_image_3 =  get_option('location_image_3');
	 
	 if(!empty($location_image_3)){
		echo  "<br><img src='$location_image_3'>";
	 }
	
	?>
   <?php
}

function handle_location_image_3_upload($opt) 
{
	if(!empty($_FILES["location_image_3"]["tmp_name"]))
	{
	$urls = wp_handle_upload($_FILES["location_image_3"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	else{
	   $location_image_3 =  get_option('location_image_3');
	   return $location_image_3;
	}
	  
}


function display_lat_3()
{
	?>
    	<input type="text" name="lat_3" id="lat_3" value="<?php echo get_option('lat_3'); ?>" />
    <?php
}
function display_long_3()
{
	?>
    	<input type="text" name="long_3" id="long_3" value="<?php echo get_option('long_3'); ?>" />
    <?php
}




}  

}


function display_email()
{
	?>
    	<input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
    <?php
}
function display_author_page()
{
	?>
    	<input type="text" name="author_page" id="author_page" value="<?php echo get_option('author_page'); ?>" />
    <?php
}
function display_appointment_page()
{
	?>
    	<input type="text" name="appointment_page" id="appointment_page" value="<?php echo get_option('appointment_page'); ?>" />
    <?php
}




function logo_display()
{
	?>
        <input type="file" name="publisher_logo" />
	
        <?php
	 $publisher_image =  get_option('publisher_logo');
	 
	 if(!empty($publisher_image)){
		echo  "<br><img src='$publisher_image'>";
	 }
	
	?>
   <?php
}




function mobile_pic_display()
{
	?>
        <input type="file" name="mobile_pic" />
	
        <?php
	 $mobile_image =  get_option('mobile_pic');
	 
	 if(!empty($mobile_image)){
		echo  "<br><img src='$mobile_image'>";
	 }
	
	?>
   <?php
}




function handle_logo_upload($option)

	  
{
	if(!empty($_FILES["publisher_logo"]["tmp_name"]))
	{
	  
	$urls = wp_handle_upload($_FILES["publisher_logo"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}else{
	   $publisher_image =  get_option('publisher_logo');
	   return $publisher_image;
	}
}


function handle_mobile_pic_upload($opt) 
{
	if(!empty($_FILES["mobile_pic"]["tmp_name"]))
	{
	$urls = wp_handle_upload($_FILES["mobile_pic"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	else{
	   $mobile_image =  get_option('mobile_pic');
	   return $mobile_image;
	}
	  
}

function display_location_two()
{
	?>
	
		<input type="checkbox" name="location_two" value="1" <?php checked(1, get_option('location_two'), true); ?> /> <span>Add Second Location</span>
	<?php
}



function display_theme_panel_fields()
{
	add_settings_section("section", "Common", null, "theme-options");
	
	add_settings_field("client_name", "Client Name", "display_client_name", "theme-options", "section");
	add_settings_field("practice_name", "Practise Name", "display_practice_name", "theme-options", "section");
	add_settings_field("organization_type", "Organization Type", "display_organization_type", "theme-options", "section");
	add_settings_field("country", "Country", "display_country", "theme-options", "section");
	add_settings_field("email", "Email Address", "display_email", "theme-options", "section");
	add_settings_field("author_page", "Author Page", "display_author_page", "theme-options", "section");
	add_settings_field("appointment_page", "Appointment Page", "display_appointment_page", "theme-options", "section");
	add_settings_field("publisher_logo", "Plublisher Logo", "logo_display", "theme-options", "section");
	add_settings_field("mobile_pic", "Client Photo for Mobile", "mobile_pic_display", "theme-options", "section");
	add_settings_field("facebook", "Facebook", "display_facebook", "theme-options", "section");
	add_settings_field("google_plus", "Google Plus", "display_google_plus", "theme-options", "section");
	add_settings_field("linkedin", "Linkedin", "display_linkedin", "theme-options", "section");
	add_settings_field("twitter", "Twitter", "display_twitter", "theme-options", "section");
	add_settings_field("yelp", "Yelp", "display_yelp", "theme-options", "section");
	add_settings_field("hrs", "Working Hours", "display_hrs", "theme-options", "section");

	
	  add_settings_field("monday_open", "Monday: Open", "display_monday_open", "theme-options", "section");
	  add_settings_field("monday_close", "Monday: Close", "display_monday_close", "theme-options", "section");
	  add_settings_field("tuesday_open", "Tuesday: Open", "display_tuesday_open", "theme-options", "section");
	  add_settings_field("tuesday_close", "Tuesday: Close", "display_tuesday_close", "theme-options", "section");
	  add_settings_field("wednesday_open", "Wednesday: Open", "display_wednesday_open", "theme-options", "section");
	  add_settings_field("wednesday_close", "Wednesday: Close", "display_wednesday_close", "theme-options", "section");
	  add_settings_field("thursday_open", "Thursday: Open", "display_thursday_open", "theme-options", "section");
	  add_settings_field("thursday_close", "Thursday: Close", "display_thursday_close", "theme-options", "section");
	  add_settings_field("friday_open", "Friday: Open", "display_friday_open", "theme-options", "section");
	  add_settings_field("friday_close", "Friday: Close", "display_friday_close", "theme-options", "section");
	  add_settings_field("saturday_open", "saturday: Open", "display_saturday_open", "theme-options", "section");
	  add_settings_field("saturday_close", "saturday: Close", "display_saturday_close", "theme-options", "section");
	
	//add_settings_field("saturday", "Saturday", "display_saturday", "theme-options", "section");
	
	add_settings_section("section-two", "Location One", null, "theme-options");
	
	add_settings_field("phone_1", "Phone Number", "display_phone_1", "theme-options", "section-two");
	add_settings_field("direction_1", "Direction", "display_direction_1", "theme-options", "section-two");
	add_settings_field("street_address_1", "Street Address", "display_street_address_1", "theme-options", "section-two");
	add_settings_field("city_1", "City", "display_city_1", "theme-options", "section-two");
	add_settings_field("state_1", "State", "display_state_1", "theme-options", "section-two");
	add_settings_field("zip_1", "Zip", "display_zip_1", "theme-options", "section-two");
	add_settings_field("location_image_1", "Location Image", "display_location_image_1", "theme-options", "section-two");
	add_settings_field("lat_1", "Latitude", "display_lat_1", "theme-options", "section-two");
	add_settings_field("long_1", "Longitude", "display_long_1", "theme-options", "section-two");
	add_settings_field("location_two", "Add Location Two", "display_location_two", "theme-options", "section-two");
	
	//Location Two 
	if(get_option('location_two') == 1){
	  add_settings_section("section-three", "Location Two", null, "theme-options");
	  add_settings_field("phone_2", "Phone Number", "display_phone_2", "theme-options", "section-three");
	  add_settings_field("direction_2", "Direction", "display_direction_2", "theme-options", "section-three");
	  add_settings_field("street_address_2", "Street Address", "display_street_address_2", "theme-options", "section-three");
	  add_settings_field("city_2", "City", "display_city_2", "theme-options", "section-three");
	  add_settings_field("state_2", "State", "display_state_2", "theme-options", "section-three");
	  add_settings_field("zip_2", "Zip", "display_zip_2", "theme-options", "section-three");
	  add_settings_field("location_image_2", "Location Image", "display_location_image_2", "theme-options", "section-three");
	  add_settings_field("lat_2", "Latitude", "display_lat_2", "theme-options", "section-three");
	  add_settings_field("long_2", "Longitude", "display_long_2", "theme-options", "section-three");
	  add_settings_field("location_three", "Add Location Three", "display_location_three", "theme-options", "section-three");
	  
	  	  //Location Three 
	  if(get_option('location_three') == 1){
	    add_settings_section("section-four", "Location Three", null, "theme-options");
	     add_settings_field("phone_3", "Phone Number", "display_phone_3", "theme-options", "section-four");
	    add_settings_field("direction_3", "Direction", "display_direction_3", "theme-options", "section-four");
	    add_settings_field("street_address_3", "Street Address", "display_street_address_3", "theme-options", "section-four");
	    add_settings_field("city_3", "City", "display_city_3", "theme-options", "section-four");
	    add_settings_field("state_3", "State", "display_state_3", "theme-options", "section-four");
	    add_settings_field("zip_3", "Zip", "display_zip_3", "theme-options", "section-four");
	    add_settings_field("location_image_3", "Location Image", "display_location_image_3", "theme-options", "section-four");
	    add_settings_field("lat_3", "Latitude", "display_lat_3", "theme-options", "section-four");
	    add_settings_field("long_3", "Longitude", "display_long_3", "theme-options", "section-four");
	    }
	  
	  }
	  

	

	register_setting("section", "phone_1");
	register_setting("section", "direction_1");
	register_setting("section", "client_name");
	register_setting("section", "practice_name");
	register_setting("section", "organization_type");
	register_setting("section", "email");
	register_setting("section", "author_page");
	register_setting("section", "appointment_page");
	register_setting("section", "street_address_1");
	register_setting("section", "city_1");
	register_setting("section", "state_1");
	register_setting("section", "zip_1");
	register_setting("section", "location_image_1", "handle_location_image_1_upload");
	register_setting("section", "country");
	register_setting("section", "publisher_logo", "handle_logo_upload");
	register_setting("section", "mobile_pic", "handle_mobile_pic_upload");
	register_setting("section", "lat_1");
	register_setting("section", "long_1");
	register_setting("section", "facebook");
	register_setting("section", "google_plus");
	register_setting("section", "linkedin");
	register_setting("section", "twitter");
	register_setting("section", "yelp");
	register_setting("section", "monday_open");
	register_setting("section", "monday_close");
	register_setting("section", "tuesday_open");
	register_setting("section", "tuesday_close");
	register_setting("section", "wednesday_open");
	register_setting("section", "wednesday_close");
	register_setting("section", "thursday_open");
	register_setting("section", "thursday_close");
	register_setting("section", "friday_open");
	register_setting("section", "friday_close");
	register_setting("section", "saturday_open");
	register_setting("section", "saturday_close");
	/*
	register_setting("section", "saturday");*/
	
	
	
	register_setting("section", "location_two");
	
	
	
	//Location Two
	if(get_option('location_two') == 1){
	      register_setting("section", "phone_2");
	      register_setting("section", "direction_2");
	      register_setting("section", "street_address_2");
	      register_setting("section", "city_2");
	      register_setting("section", "state_2");
	      register_setting("section", "zip_2");
	      register_setting("section", "location_image_2", "handle_location_image_2_upload");
	      register_setting("section", "lat_2");
	      register_setting("section", "long_2");
	      register_setting("section", "location_three");
	      
	      	  //Location Three
	if(get_option('location_two') == 1){
	    register_setting("section", "phone_3");
	      register_setting("section", "direction_3");
	      register_setting("section", "street_address_3");
	      register_setting("section", "city_3");
	      register_setting("section", "state_3");
	      register_setting("section", "zip_3");
	      register_setting("section", "location_image_3", "handle_location_image_3_upload");
	      register_setting("section", "lat_3");
	      register_setting("section", "long_3");
	     }
	  }
	  

}

add_action("admin_init", "display_theme_panel_fields");












