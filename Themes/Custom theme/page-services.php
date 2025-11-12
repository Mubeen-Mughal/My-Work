<?php /* Template Name: Services */ ?>
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
			 <div>
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
<?php if( get_field('last_desc') ): ?>
<section class="intro-service">
   <div class="container">
      <div class="row d-flex align-items-center" data-aos="fade-up">
         <div class="col-md-12 box-space">
         <?php the_field('last_desc'); ?>
         </div>
   
      </div>
   </div>
</section>
<?php endif; ?>
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
<?php if( get_field('faq_section') ): ?>
<section class="faq services-faq">
   <div class="container">
            <?php the_field('faq_section'); ?>     
</section>
<?php endif; ?>
<?php include_once('inc/social-media.php'); ?>
<!--End  -->
<?php get_footer(); ?>