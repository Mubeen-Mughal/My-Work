<?php /* Template Name: service demo */ ?>
<?php get_header(); ?>
<!--start -->
<section class="intro-service">
   <div class="container">
      <div class="row d-flex align-items-center">

      <?php if( have_rows('first_row') ): ?>
        <?php while( have_rows('first_row') ): the_row(); ?>
         <div class="col-md-6 box-space">
            <img src="<?php the_sub_field('first_image_left'); ?>" alt="<?php the_sub_field('image_alt'); ?>">
         </div>
         <div class="col-md-6 box-space">
         <?php the_sub_field('first_right_para'); ?>
         </div>
         
         <?php endwhile; ?>
					</div>
				<?php endif; ?>

      </div>
   </div>
</section>
<!-- <section class="grey-service">
   <div class="container">
      <div class="row">
         <div class="col-md-6 padding-contrl">
            <div class="text-cntainer">
               <?php the_field('second_left_para'); ?>
               <h3>Do you need root canal treatment?</h3>
               <br/>
               <p>If you have severe decay or any other dental issue that might require root canal treatment, here are some symptoms you can look out for:</p>
               <ul>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Pain when biting down</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Sensitivity to changes in temperature</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Swollen / darkened gums</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Pus around the tooth</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Pimples forming against the gumlines</li>
               </ul>
               <p>These symptoms can worsen if left untreated and may eventually deteriorate the underlying bone and lead to loss of teeth. If the infection spreads to neighboring teeth, this can also lead to swelling of the face or fever. </p>
               <br/>
               <h3>What causes an infected tooth?</h3>
               <br/>
               <p>The below instances put you at higher risk of needing root canal treatment:</p>
               <ul>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Gum disease</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Severe decay / an abscessed tooth</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> An old filling / crown</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Dental trauma, including a cracked / chipped tooth</li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Bruxism</li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 img-container">
            <img src="https://puritydemo.biz-grow.com.au/wp-content/uploads/2022/05/dental-xray.jpg" alt="services-img">
            <img src="https://puritydemo.biz-grow.com.au/wp-content/uploads/2022/05/woman-having-toothache.jpg" alt="Service image 2">
         </div>
      </div>
   </div>
</section> -->
<!-- <section class="cta-services">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <h3>Quality dental care is just one call away! </h3>
            <br/>
            <a href="" class="btn-primary">Call Us</a>
         </div>
      </div>
   </div>
</section> -->
<!-- <section class="intro-service">
   <div class="container">
      <div class="row d-flex align-items-center">
         <div class="col-md-6 img-container">
            <img src="https://puritydemo.biz-grow.com.au/wp-content/uploads/2022/05/dental-xray.jpg" alt="services-img">
            <img src="https://puritydemo.biz-grow.com.au/wp-content/uploads/2022/05/process-of-root-canal-01.jpg" alt="services-img" class="img-fluid">
         </div>
         <div class="col-md-6 box-space" style="padding:3rem;">
            <?php the_field('third_right_para'); ?>
            <h3>The Process</h3>
            <br/>
            <p>What exactly happens during a root canal? This is a relatively simple process that spans just 1 to 3 appointments. Duration often depends on the severity of your infection, however.</p>
            <ul>
               <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Local anaesthetic will be administered to minimize any discomfort</li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> The infected tooth is isolated </li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Decay is removed, including the infected pulp</li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> The root canal is flushed out and dried</li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Antibiotic medication is placed in the canal, and the root is sealed with a temporary filling</li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/images/purity-dental-logo.svg" alt="list icon" class="list-icon"> Your tooth will undergo restoration, with a crown placed on top if necessary.</li>
            </ul>
         </div>
      </div>
   </div>
</section> -->
<!-- <section class="grey-service">
   <div class="container">
      <div class="row">
         <div class="col-md-6" style="padding:0;">
            <div class="text-cntainer">
               <br/><br/>
               <?php the_field('fouth_para_left'); ?>
               <h3>Root Canal Treatment Aftercare</h3>
               <br/>
               <p>Recovery time often varies from individual to individual but with the right aftercare, most patients tend to bounce back after a couple of days. Following the procedure, we may prescribe or recommend some pain relievers to take after every meal to reduce any discomfort, but this may cause drowsiness so avoid driving or operating machinery.</p>
               <p>To avoid irritating your tooth or causing further pain, stick to soft foods that are easy to chew and keep away from anything spicy. Make sure to avoid using your treated tooth to bite into anything in the first few days following your procedure. </p>
               <p>Remember, consistently practicing good oral hygiene is the best way to make sure your root canal is a success! Gently brush your teeth at least twice a day using fluoride toothpaste, and refrain from touching your treated tooth with your finger or tongue as it’s highly sensitive during this time. We may recommend avoiding flossing for a short period if a temporary filling was applied in the space between your teeth.</p>
               <p>Our dentists at Purity Dental will make sure to walk you through all the steps so you have a successful root canal treatment. Working with years of expertise and the latest technology in hand, just call us to schedule your appointment and we’ll make sure all your dental needs are seen to.</p>
            </div>
            <br/><br/>
         </div>
         <div class="col-md-6 img-container">
            <img src="https://puritydemo.biz-grow.com.au/wp-content/uploads/2022/05/dental-xray.jpg" alt="services-img">
            <img src="https://puritydemo.biz-grow.com.au/wp-content/uploads/2022/05/Depositphotos_200459362_L.jpg" alt="services-img">
         </div>
      </div>
   </div>
</section> -->
<!-- <section class="services" data-aos="fade-up" data-aos-duration="2000">
   <div class="container-fluid">
      <h3>TREATMENTS</h3>
      <br />
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
         <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
               data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
               aria-selected="true">General Dentistry</button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
               data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
               aria-selected="false">Cosmetic Dentistry</button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
               data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
               aria-selected="false">Straighter Teeth</button>
         </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
         <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="services-box">
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Your First Visit</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/regular_checkups_600.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Regular Check-ups</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Dental Fillings</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Tooth-Coloured-Fillings-Treatment-at-Purity-Dental-Mulgrave-Victoria.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Wisdom Teeth</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Wisdom-Teeth-Purity-Dental.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Extraction & Socket Preservation</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/kids_dental_600.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Kids Dental</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Oral-Cancer-Check-at-Purity-Dental-Mulgrave-Victoria.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Oral Cancer Check</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Mouthguards-Treatment-at-Purity-Dental-Mulgrave-Victoria.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Mouthguards</a>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="services-box">
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Dental-Implants-Treatment-at-Purity-Dental-Mulgrave-Victoria.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Dental Implants</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Veneers-Treatment-at-Purity-Dental-Mulgrave-Victoria.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Veneers</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Teeth-Whitening-Treatment-at-Purity-Dental-Mulgrave-Victoria.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Teeth Whitening</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/denture_600.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Dentures</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Dental-Crowns-Purity-Dental-Mulgrave-Victoria.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Dental Crowns</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Crowns-and-Bridges-at-Purity-Dental-Mulgrave-Victoria (1).jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Bridges</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Gum-Lift-Purity-Dental-Mulgrave.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Gum lifts</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Gum-Lift-Purity-Dental-Mulgrave.jpg" alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Smile Makeover</a>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="services-box">
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">ffff</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Service 1</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Service 1</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Service 1</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Service 1</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Service 1</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Service 1</a>
               </div>
               <div class="service-box">
                  <div class="service-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/Sleep-apnoea-and-Snoring-Treatment-at-Purity-Dental-Mulgrave-Vic.jpg"
                        alt="Dental Image">
                     <div class="overlay">
                     </div>
                  </div>
                  <a href="">Service 1</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->
<!-- <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2>
               Do you need help with your teeth?
            </h2>
            <br/>
            <a href="" class="btn btn-primary">Book Now</a>
         </div>
      </div>
   </div>
</section> -->
<!-- <section class="social-media">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 col-lg-3 social-imgbox">
            <img src="<?php echo get_template_directory_uri(); ?>/images/dentists-img.jpg" alt="Dental Image" alt="Dental Image">
         </div>
         <div class="col-md-6 col-lg-3 social-imgbox" data-aos="fade-up" data-aos-duration="1000">
            <img src="<?php echo get_template_directory_uri(); ?>/images/fb.jpg" alt="Dental Image" alt="Dental Image">
         </div>
         <div class="col-md-6 col-lg-3 social-imgbox"  data-aos="fade-up" data-aos-duration="2000">
            <img src="<?php echo get_template_directory_uri(); ?>/images/insta.jpg" alt="Dental Image" alt="Dental Image">
         </div>
         <div class="col-md-6 col-lg-3 social-imgbox"  data-aos="fade-up" data-aos-duration="3000">
            <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" alt="Dental Image" alt="Dental Image">
         </div>
      </div>
   </div>
</section> -->
<!--End  -->
<?php get_footer(); ?>