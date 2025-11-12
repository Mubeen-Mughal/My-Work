<?php /* Template Name: our clinic */ ?>
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
<section class="intro-service">
   <div class="container">
      <div class="row d-flex align-items-center" data-aos="fade-up">
      <?php if( have_rows('first_row') ): ?>
        <?php while( have_rows('first_row') ): the_row(); ?>
         <div class="col-md-6 box-space">
         <img src="<?php the_sub_field('first_image_left'); ?>" alt="<?php the_sub_field('image_alt'); ?>">
         </div>
         <div class="col-md-6 box-space text-bx">
         <?php the_sub_field('first_right_para'); ?>
         </div>
         <?php endwhile; ?>		
     <?php endif; ?>
      </div>
   </div>
</section>
<section class="grey-service">
   <div class="container">
      <div class="row" data-aos="fade-up">
      <?php if( have_rows('second_row') ): ?>
        <?php while( have_rows('second_row') ): the_row(); ?>
         <div class="col-md-12 padding-contrl">
			 <div class="text-cntainer">
          <?php the_sub_field('second_para_left'); ?>
			 </div>
         </div>
         <?php endwhile; ?>		
     <?php endif; ?>
      </div>
   </div>
</section>

<section class="cta-services">
   <div class="container">
      <div class="row" data-aos="fade-up">
         <div class="col-md-12 ">
         <?php the_field('cta_section1'); ?>
            
         </div>
      </div>
   </div>
</section>
<?php include_once('inc/treatment-section.php'); ?>
<section class="cta">
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
           <!--<h2>Need expert root canal treatment? </h2>
           <h2>Schedule your appointment with Purity Dental</h2> -->
           <?php the_field('cta_section_2'); ?>
			<a href="tel:0395408900" class="btn-cta">
				Call Us!
			</a>
        </div>
      </div>
   </div>
</section>
<?php include_once('inc/social-media.php'); ?>
<!--End  -->
<?php get_footer(); ?>