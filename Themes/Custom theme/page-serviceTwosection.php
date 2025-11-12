<?php /* Template Name: Services-twosection */ ?>
<?php get_header('conditions'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Dentist",
  "name": "Purity Dental Mulgrave",
  "description": "The dentist Mulgrave Trusts. Visit Purity Dental clinic in Mulgrave for affordable, quality dental care for your whole family. Call us today!",
  "logo": "https://puritydental.com.au/wp-content/themes/bizgrow/images/purity-dental-logo.png",
  "url": "https://puritydental.com.au/",
  "telephone": "9540 8900",
  "email": "info@puritydental.com.au",
  "hasMap": "https://goo.gl/maps/p3mVy7b1Ta3Pa1tN7?coh=178572&entry=tt",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "89 Police Rd",
    "addressLocality": "Mulgrave",
    "addressRegion": "VIC",
    "postalCode": "3170",
    "addressCountry": "AU"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -37.934278,
    "longitude": 145.1680883
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Wednesday",
      "Friday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Tuesday",
      "Thursday"
    ],
    "opens": "09:00",
    "closes": "19:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "09:00",
    "closes": "14:00"
  }],
  "sameAs": [
    "https://www.facebook.com/puritydental/",
    "https://www.instagram.com/puritydental/",
    "https://au.linkedin.com/company/purity-dental"
  ] 
}
</script>
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
<section class="cta-services">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
         <?php the_field('cta_section1'); ?>
            
         </div>
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
<section class="form-section-cdbs grey-service">
<div class="cdbs-sec">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-md-5"><p>Please enter the following details or upload a photo of your Medicare Card and press submit. The staff at Purity Dental will be able to check your child’s eligibility for the CDBS and the remaining amount prior to your child’s dental appointment.</p>
<img class="alignnone size-medium wp-image-10460" style="width: 70%; height: auto; margin:auto;" src="https://puritydental.com.au/wp-content/uploads/2022/06/healthsite-medicare-explanation.jpg" alt="medicare-dental-payment-plan-explained" />
<div class="cdbs"><?php echo do_shortcode( '[wpcode id="17103"]');?>
</div>
</div>
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