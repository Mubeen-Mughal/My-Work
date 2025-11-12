<?php /* Template Name: location pages */ ?>
<?php get_header(); ?>
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
<section class="location-dentalImplant">
   <div class="container">
      <div class="row d-flex justify-content-center">
<div class="col-lg-10">
      <?php the_field('dental-implant'); ?>
      </div>
      </div>
   </div>
</section>
<section class="why-chooseUs">
   <div class="container">
      <div class="row">

         <div class="col-md-12 white-bg">
            <h3>Why Choose Purity Dental Mulgrave</h3>
            <br/>

            <h4><img src="<?php echo get_template_directory_uri(); ?>/images/quality.png" alt="Dental Image"> Highly Qualified Team of Dentists</h4>
            <p><span>Our team of professional dentists in <?php the_field('location_name'); ?> are ready to offer you the best service!</span></p>
            <h4><img src="<?php echo get_template_directory_uri(); ?>/images/dental.png" alt="Dental Image"> Latest Techniques and Dental Technology</h4>
            <p>Our high-tech equipment is effective and provides optimal care for our patients.</p> <h4> <img src="<?php echo get_template_directory_uri(); ?>/images/ipad.png" alt="Dental Image"> Wide Array of Dental Services</h4>
            <p>We offer an array of dental services from cosmetic to general dentistry to meet your every need.</p>
         </div>
      </div>
   </div>
   </div>
</section>

<section class="cta" style="padding: 50px 0px;">
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
           <h2>Have a dental problem? </h2>
           <h2>Our experienced dentists can help. </h2>
           <br/>
           <a href="tel:0395408900" class="btn btn-primary">95408900</a>
        </div>
      </div>
   </div>
</section>

<div class="section my-5">
        <div class="container-fluid">
	 		<div class="row justify-content-center">
				<div class="col-md-6 col-sm-10">
					<h2 class="text-center my-5">
						Book Appointment
					</h2>
					<!--
					<div class= "bookA"> 
						 <?php echo do_shortcode('[contact-form-7 id="12863" title="Booking form"]')?> -->
					<div>
						<div id="centaurIframe" style="height: 900px;">&nbsp;</div>
						
					</div>
					<!--<div id="centaurIframe" style="height: 900px;">&nbsp;</div>-->
					
				</div>
				<!--
                <div class="col-12 col-lg-6">
				<div  class="col-6 border border-primary ">
					<div  class="text-center">
				  <h2 class="title-booking">Book Appointment</h2>
				</div>
                  <?php echo do_shortcode('[contact-form-7 id="12863" title="Booking form"]')?>
				</div>
			 </div> -->
            </div>
            </div>
        </div>


<section class="map">
<div class="col-md-12 map">
<?php the_field('map'); ?>
    
   </div>
</section>
<!--End  -->
<?php get_footer(); ?>