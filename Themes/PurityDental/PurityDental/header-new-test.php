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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P3FXR485');</script>
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
      <?php echo csscrush_inline('wp-content/themes/bizgrow/css/styles.css', array('boilerplate' => false, 'rewrite_import_urls' => absolute, 'minify' => true, 'vendor_target' => 'none'));?>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
      <?php  get_template_part('template-parts/schema');?>
	   <!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-859692765"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-859692765');
		</script>
   </head>
   <body>
	  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4HFFT3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3FXR485"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

      <header class="showcase">
		  <div class="sticky-menu">
			 <div class="smenu">
				<div class="header-content">
				   <nav class="left-menu" id="header-sroll">
					  <?php 
						 wp_nav_menu( array( 
							 'theme_location' => 'left-menu', 
							 'container' => false,
							 'depth' => 0

							 ) ); 
						 ?>
				   </nav>
				   <div class="header-logo" id="header-sroll">
					  <a href="/"> <img src="/wp-content/themes/bizgrow/images/purity-dental-logo.png"  alt="image of the Purity Dental logo"></a> 
				   </div>
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
         <div class="page-wrapper">
         <?php get_template_part( 'template-parts/mobile-icons');?>
         <div class="showcase-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="container text-center">
               <div class="headerMobile-logo">
                  <a href="https://puritydental.com.au/"> <img src="https://puritydental.com.au/wp-content/themes/bizgrow/images/purity-dental-logo.png" alt="image of the Purity Dental logo"></a> 
               </div>
               <h1 class="header-contrl">Te Dentist <span>Mulgrave Trusts</span></h1>
               <br/>
               <p class="my-1">
                  Denticare and National Dental Payment Plans are <br>now available at Purity Dental!
               </p>
               <br/>
               <a href="#" class="btn-green">Book Online</a>
            </div>
         </div>

      </header>