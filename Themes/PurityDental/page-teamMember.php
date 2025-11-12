<?php /* Template Name: Team-Member */ ?>
<?php get_header('conditions'); ?>
 <!--start -->
 <section>
        <div class="container-fluid">
            <div class="row nc-banner justify-content-center align-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="header-contrl"><?php the_field('heading_1'); ?></h1>
                    <p><?php the_field('sub_paragraph'); ?></p>
					<a href="/book-online/">
						<div class="nc-btn-green">
							Schedule a visit
						</div>
					</a>
                </div>
            </div>
        </div>
    </section>
 <?php if ( have_posts() ) : ?>
			    <?php while ( have_posts() ) : the_post(); ?>  
                <?php /*get_template_part( 'template-parts/content', 'page' );*/?>		
                <?php the_content(); ?>	
			     <?php endwhile; ?>
			<?php endif; ?>
		<!--End  -->
      <?php include_once('inc/social-media.php'); ?>
<?php get_footer(); ?>
