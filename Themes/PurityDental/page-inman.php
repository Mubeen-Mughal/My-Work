<?php /* Template Name: inman page */ ?>
<?php get_header(); ?>
<script type='application/ld+json'>
{
	"@context": "http://schema.org",
	"@type": "Dentist",
	"name": "Purity Dental Clinic",
	"aggregateRating": {
		"@type": "service",
		"ratingValue": "5",
		"ratingCount": "50",
		"reviewCount": "50"
	}
}
</script>
<!--start -->
<section class="intro-service">
   <div class="container">
      <div class="row d-flex align-items-center" data-aos="fade-up">
      <?php if( have_rows('first_row') ): ?>
        <?php while( have_rows('first_row') ): the_row(); ?>
         <div class="col-md-6 box-space img-container">
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
         <div class="col-md-6 padding-contrl d-flex align-items-center">
			 <div class="text-cntainer">
          <?php the_sub_field('second_para_left'); ?>
			 </div>
         </div>
         <div class="col-md-6 img-container">
         <img src="<?php the_sub_field('second_image_right'); ?>" alt="<?php the_sub_field('image_alt'); ?>">
         </div>
         <?php endwhile; ?>		
     <?php endif; ?>
      </div>
   </div>
</section>

<section class="cta-services">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
         <?php the_field('cta_section1'); ?>
            
         </div>
      </div>
   </div>
</section>
<section class="intro-service last-decs">
   <div class="container">
      <div class="row d-flex align-items-center" data-aos="fade-up">
      <?php if( have_rows('third_row') ): ?>
        <?php while( have_rows('third_row') ): the_row(); ?>
         <div class="col-md-6 img-container">
         <img src="<?php the_sub_field('third_image_left'); ?>" alt="<?php the_sub_field('image_alt'); ?>" class="img-fluid">
         </div>
         <div class="col-md-6 box-space text-bx">
         <?php the_sub_field('third_para_right'); ?>
            
         </div>
         <?php endwhile; ?>		
     <?php endif; ?>
      </div>
   </div>
</section>
<section class="grey-service">
   <div class="container">
      <div class="row" data-aos="fade-up">
      <?php if( have_rows('fourth_row') ): ?>
        <?php while( have_rows('fourth_row') ): the_row(); ?>
         <div class="col-md-6 d-flex align-items-center" style="padding:0;">
			 <div class="text-cntainer">
          <br/><br/>
          <?php the_sub_field('fourth_para_left'); ?>
			 </div>
          <br/><br/>
         </div>
         <div class="col-md-6 img-container">
         <img src="<?php the_sub_field('fourth_image_right'); ?>" alt="<?php the_sub_field('image_alt'); ?>">
         </div>
         <?php endwhile; ?>		
     <?php endif; ?>
      </div>
   </div>
</section>
<section class="intro-service">
   <div class="container">
      <div class="row d-flex align-items-center" data-aos="fade-up">

         <div class="col-md-12 box-space">
         <?php the_field('last_desc'); ?>
         </div>
   
      </div>
   </div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<?php if( function_exists('s201_bai_slider') ) s201_bai_slider(22); ?>
			</div>
			<div class="col-lg-4">
				<?php if( function_exists('s201_bai_slider') ) s201_bai_slider(23); ?>
			</div>
			<div class="col-lg-4">
				<?php if( function_exists('s201_bai_slider') ) s201_bai_slider(24); ?>
			</div>
		</div>
		<!-- <div class="row mt-3">
			<div class="col-lg-4">
				<?php if( function_exists('s201_bai_slider') ) s201_bai_slider(25); ?>
			</div>
			<div class="col-lg-4">
				<?php if( function_exists('s201_bai_slider') ) s201_bai_slider(26); ?>
			</div>
			<div class="col-lg-4">
				<?php if( function_exists('s201_bai_slider') ) s201_bai_slider(27); ?>
			</div>
		</div> -->
	</div>
</section>
<?php include_once('inc/sedation-cta.php'); ?>
<?php include_once('inc/treatment-section.php'); ?>
<section class="cta">
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
           <!--<h2>Need expert root canal treatment? </h2>
           <h2>Schedule your appointment with Purity Dental</h2> -->
           <?php the_field('cta_section_2'); ?>
			
        </div>
      </div>
   </div>
</section>
<?php include_once('inc/social-media.php'); ?>
<!--End  -->
<?php get_footer(); ?>