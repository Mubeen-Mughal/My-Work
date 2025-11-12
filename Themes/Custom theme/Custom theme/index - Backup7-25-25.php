<?php
   error_reporting(E_ERROR);
   
   require_once 'crush/CssCrush.php';
   // Detecting device
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <?php endif; ?>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <?php echo csscrush_inline('wp-content/themes/bizgrow/css/styles.css', array('boilerplate' => false, 'rewrite_import_urls' => 'absolute', 'minify' => true, 'vendor_target' => 'none'));?>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
      <?php  get_template_part('template-parts/schema');?>
	   
   </head>
   <body>
       <header class="showcase ">
		  <div class="sticky-menu">
			 <div class="smenu">
				<div class="header-content">
                  </div>
				   <div class="header-logo" id="header-sroll">
					  <a href="/"> <img src="https://puritydental.com.au/wp-content/themes/bizgrow/images/purity-dental-logo.png"></a> 
				   </div>
				   <div class="menu-cover">
               <nav class="left-menu" id="header-sroll">
                     <?php
                        wp_nav_menu( array(
                           'theme_location' => 'left-menu',
                           'container' => false,
                           'depth' => 0
                           ) );
                        ?>
                     </nav>
                  <nav class="right-menu" id="header-sroll">
                     <?php 
                        wp_nav_menu( array( 
                           'theme_location' => 'right-menu', 
                           'container' => false,
                           'depth' => 0
   
                           ) ); 
                        ?>
                  </nav>
               </div>
				</div>
			 </div>
		  </div>
         <div class="page-wrapper">
         <?php get_template_part( 'template-parts/mobile-icons');?>
         <div class="showcase-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="container text-center">
               <div class="headerMobile-logo">
                  <a href="https://puritydental.com.au/"> <img src="https://puritydental.com.au/wp-content/themes/bizgrow/images/purity-dental-logo.png" alt="image of the Purity Dental logo"></a> 
               </div>
               <?php the_field('main_header_title'); ?>
              
               <h1 class="header-contrl" style="font-size: 45px;
    position: relative;
    padding-bottom: 20px;
    font-weight: 500;
    letter-spacing: 1px;">LATEST DENTAL NEWS & TIPS</h1></br>
               <a href="/book-online/" class="btn-green">Book Online</a>
            </div>
         </div>

      </header>
<div class="container">
<?php if ( have_posts() ) : ?>
			    <?php while ( have_posts() ) : the_post(); ?>  
			       <?php get_template_part( 'template-parts/content', 'none' );?>		
			     <?php endwhile; ?>
			<?php endif; ?>
		<br>
		</div>
	 <!-- <div class="row justify-content-center my-4">
			<div class="col-lg-6">
				<?php //the_posts_pagination(); 
            //  the_posts_pagination( array(
            //     'mid_size' => 4,  // Show 1 page link before and after the current page
            //     'end_size' => 4,  // Show 1 page link at the beginning and end
            // ) );
            // ?>
			</div> -->
		</div>  
<?php get_footer(); ?>