<!-- <div class="mobile-menu"> -->
  <header id="navbar">
  <div class="container-fluid mobile-buttons-container d-lg-none">
            <div class="row d-flex align-items-center py-2">
               <div class="col-4 d-flex justify-content-start mobile-logo">
                  <a href="/"><img src="/wp-content/themes/bizgrow/images/purity-dental-logo-white.png" alt="purity-dental-logo" class="img-fluid"></a>
               </div>
               <div class="col-8 d-flex justify-content-end align-items-center">
               <div class="mob-call-btn d-flex align-items-center">
                     <a href="tel:0395408900">
                        <img src="/wp-content/uploads/2024/08/call-now-top.webp" alt="call now">
                     </a>
                  </div>
                  <div class="d-flex">
                     <a href="/book-online/" class="mobile-open-booknow-main my-auto">Book Now</a>
                  </div>
                  <div class="mobile-toggle-btn hamburger-icon icon">
                     <img src="<?php bloginfo('template_directory');?>/images/purity-toggle.png" alt="purity toggle">
                  </div>
                  <div class="mobile-menu-open">
                     <div class="mobile-menu-wrapper" id="open-menu">
                        <div class="mobile-menu-wrapper-inner">
                           <div class="mobile-close-wrapper d-flex">
                              <div class="mobile-toggle-btn ms-auto me-1 close">
                                 <img src="<?php bloginfo('template_directory');?>/images/cancel.png" alt="cancel">
                              </div>
                           </div>
                           <div class="my-3 text-center">
                              <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.png" alt="Purity Dental logo" class="img-fluid "></a>
                           </div>
                           <div class="mobile-menu-container-main">
                              <?php
                                 wp_nav_menu(
                                     array(
                                         'mobile-menu' => 'mobile-menu',
                                         'container' => '',
                                         'theme_location' => 'mobile-menu'
                                     )
                                 );
                                 ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <!-- </div>  -->
    </header>
    <style>
        /* Style the navbar */
#navbar {
  overflow: visible;
  z-index:9999;
}

/* Navbar links */
#navbar a {
  display: block;
  text-align: center;
  text-decoration: none;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  background: #ffffff42;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}

.sticky .mobile-logo img{
   filter: brightness(0);
}
        /* --mobile menu styles */
.mobile-buttons-container {
	width: 100vw;
	z-index: 999;
	top: 0px;
}
.mobile-buttons-container .sdg-mobile-logo {
	width: 300px;
}

.mobile-close-wrapper {
	width: 100%;
	position: relative;
	z-index: 999;
}

.hamburger-icon img {
	cursor: pointer;
	/* box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.15), 0 8px 16px 0 rgba(0, 0, 0, 0.05);
    background: #ffffff; */
    padding: 1px;
    width: 40px;
    filter: grayscale(200%) brightness(10);
}

.sticky .hamburger-icon img{
   filter: brightness(0);
}

.mobile-menu-open {
	width: 100vw;
	height: 100vh;
	position: absolute;
	z-index: 9999;
	display: none;
}

.mobile-menu-wrapper {
	width: 75vw;
	height: auto;
	background-color: #ffffff;
	padding: 1.5rem 1rem 2rem;
	position: fixed;
	top: 20px;
	z-index: 9999;
	flex-direction: column;
	box-shadow: -5px 10px 32px -15px rgba(0, 0, 0, 0.5);
}
.mobile-menu-wrapper ul{
	background:none;
}

.mobile-menu-wrapper .close img {
	width: 15px;
}

.mobile-menu-wrapper-inner {
	position: relative;
}

.mobile-menu-logo img {
	width: 60%;
}

.mobile-buttons-container .mobile-book-now {
	display: inline-flex;
	list-style: none;
}

.mobile-buttons-container .mobile-book-now li {
	border-radius: 50%;
	padding: 2px;
	margin-right: 1rem;
}

.mobile-buttons-container-scroller{
   position: fixed;
   top:0;
   z-index: 999999;
   background-color: #ffffffdb;
}
.mobile-open-booknow {
	background-color: #152B45;
	color: white;
	width: fit-content;
	padding: .8rem 2rem;
	margin: 0 auto;
	border-radius: 14px;
	margin-bottom: 1rem;
}

.mobile-open-call {
	background-color: #17acac;
	color: white;
	width: fit-content;
	padding: .8rem 2rem;
	margin: 0 auto;
	border-radius: 14px;
}
.mobile-buttons-container .mobile-open-booknow-main {
    background-color: #002633;
    color: white;
    width: fit-content;
    padding: 0.2rem 1rem;
    margin-right: 1rem;
    border-radius: 14px;
    border:1px solid white;
}
.mobile-buttons-container .mob-call-btn {
    width: 35px;
    height: 35px;
    margin-right: 1rem;
}
.mobile-buttons-container .mob-call-btn>a>img {
    width: 32px;
}
#mega-menu-item-13488 a{
    background-color: #152B45;
    color: white;
    width: fit-content;
    padding: 0.8rem 2rem;
    margin: 0 auto;
    border-radius: 14px;
    margin-bottom: 1rem;
}
#mega-menu-item-9328 a{
    background-color: #17acac;
    color: white;
    width: fit-content;
    padding: 0.8rem 2rem;
    margin: 0 auto;
    border-radius: 14px;
}
@media (max-width: 768px){
.header-content {
   display:none;
}
}

    </style>
</div>