<?php
   error_reporting(E_ERROR);
   
   require_once 'crush/CssCrush.php';
   // Detecting device
   ?>
<?php get_header('conditions'); ?>
 <!--start -->
<section>
    <div class="container-fluid">
        <div class="row nc-banner justify-content-center align-content-center">
            <div class="col-lg-6 text-center">
                <h1 class="header-contrl">LATEST DENTAL NEWS & TIPS</h1>
				<a href="/book-online/">
					<div class="nc-btn-green">
						Schedule a visit
					</div>
				</a>
            </div>
        </div>
    </div>
</section>
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