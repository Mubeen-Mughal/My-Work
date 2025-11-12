<?php get_header(); ?>
                 <!--start -->
			<?php if ( have_posts() ) : ?>
			    <?php while ( have_posts() ) : the_post(); ?>  
			       <?php get_template_part( 'template-parts/content', 'page' );?>		
			     <?php endwhile; ?>
			<?php endif; ?>
		<!--End  -->


<?php get_footer(); ?>