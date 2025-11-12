<?php /* Template Name: Service*/ ?>
<?php get_header('conditions'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Dentist",
  "name": "Purity Dental Mulgrave",
  "description": "The dentist Mulgrave Trusts. Visit Purity Dental clinic in Mulgrave for affordable, quality dental care for your whole family. Call us today!",
  "logo": "https://puritydental.com.au/wp-content/themes/bizgrow/images/purity-dental-logo.png",
  "url": "https://puritydental.com.au/",
  "telephone": "(03) 9540 8900",
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
<?php include_once('inc/treatment-section.php'); ?>
<section class="cta">
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h2>
				Do you need help with your teeth?
			</h2>
           <br/>
           <a href="/book-online/" class="btn btn-primary">Book Now</a>
			
        </div>
      </div>
   </div>
</section>
<?php include_once('inc/social-media.php'); ?>
<!--End  -->
<?php get_footer(); ?>