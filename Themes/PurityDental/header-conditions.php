<?php
   error_reporting(E_ERROR);
   
   require_once 'crush/CssCrush.php';
   // Detecting device
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
	   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N4HFFT3');</script>
<!-- End Google Tag Manager -->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '142166388689208');
fbq('track', 'PageView');
</script>

<!-- End Meta Pixel Code -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <?php endif; ?>
      <style>
        @font-face {
            font-family: 'alataregular';
            src: url('https://puritydental.com.au/wp-content/themes/bizgrow/fonts/alata-regular-webfont.woff2') format('woff2'),
                url('https://puritydental.com.au/wp-content/themes/bizgrow/fonts/alata-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
      </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <?php echo csscrush_inline('wp-content/themes/bizgrow/css/styles.css', array('boilerplate' => false, 'rewrite_import_urls' => 'absolute', 'minify' => true, 'vendor_target' => 'none'));?> 
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script type='text/javascript'>
		var divSelector = 'centaurIframe';// You can your selector name here instead
		var orgId = 265;
		var centOrigin = 'https://www.centaurportal.com';
		var practiceId;
		var doctorId;
		practiceId = 286;
		var sourceId;
		var centUserParams = ''; // You can place utm code or anything else you want to be in iframe URL
		(function() {
  		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.charset = 'utf-8';
  		po.src = 'https://www.centaurportal.com/d4w/resources/js/iframe.min.js?_=1588890780347';
 		var s = document.getElementsByTagName('script')[0];
  		if (s) { s.parentNode.insertBefore(po, s); }
  		else { s = document.getElementsByTagName('head')[0]; s.appendChild(po); }
		})();
	</script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
     <!--   --> 
     <!-- <script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Dentist",
	"name": "Purity Dental Clinic",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "89, Police Road",
		"addressLocality": "Mulgrave",
		"addressRegion": "Vic",
		"postalCode": "3170"
	},
	"image": "https://puritydental.com.au/wp-content/themes/bizgrow/images/purity-dental-logo.png",
	"logo": "https://puritydental.com.au/wp-content/uploads/2019/05/purity-dental-logo-1-e1559122600889.png",
	"email": "info@puritydental.com.au",
	"telePhone": "(03) 9540 8900",
	"url": "https://puritydental.com.au/",
	"openingHours": ["Mon: 9am-6pm", "Tues: 9am-7pm", "Wed: 9am-6pm", "Thu: 9am-7pm", "Fri: 9am-6pm", "Sat: 9am-2pm"],
	
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "-37.934276338880075",
		"longitude": "145.16807187859325"
	}
}</script>-->
	   
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Dentist",
  "name": "Purity Dental Mulgrave",
  "description": "The dental care experts Mulgrave trusts. Visit Purity Dental for affordable, high-quality dental care for the whole family. Call us today!",
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
	   
	   	   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-859692765"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-859692765');
</script>
   </head>
   <body <?php body_class(); ?>>
	   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4HFFT3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <header class="showcase newsc ">
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
         </div>
      </header>