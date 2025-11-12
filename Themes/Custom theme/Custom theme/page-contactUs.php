<?php /* Template Name: Contact Us */ ?>
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
<section class="contactUs">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-lg-4">
            <div class="contact-box">
               <div class="contact-icon">
                  <img src=" <?php echo get_template_directory_uri(); ?>/images/location.png" alt="Purity dental Location">
               </div>
               <div class="contact-Desc">
                  <h5>ADDRESS</h5>
                  <p>89 Police Rd, Mulgrave VIC 3170</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="contact-box">
               <div class="contact-icon">
                  <img src=" <?php echo get_template_directory_uri(); ?>/images/phone.png" alt="Purity dental phone
                  ">
               </div>
               <div class="contact-Desc">
                  <h5>PHONE CONTACT</h5>
                  <p>9540 8900</p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="contact-box">
               <div class="contact-icon">
                  <img src=" <?php echo get_template_directory_uri(); ?>/images/email.png" alt="Purity dental email">
               </div>
               <div class="contact-Desc">
                  <h5>EMAIL</h5>
                  <p>info@puritydental.com.au</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="contactFormarea">
<div class="container">
   <h3>Contact Us Now</h3>
   <br/>
<div class="row rowspace d-flex align-items-center">
         <div class="col-lg-6 contactForm">
            <br/>
            <iframe
              src="https://api.leadconnectorhq.com/widget/form/b5oKqw15S0cGgw6On8Oz"
              style="width:100%;height:100%;border:none;border-radius:3px"
              id="inline-b5oKqw15S0cGgw6On8Oz" 
              data-layout="{'id':'INLINE'}"
              data-trigger-type="alwaysShow"
              data-trigger-value=""
              data-activation-type="alwaysActivated"
              data-activation-value=""
              data-deactivation-type="neverDeactivate"
              data-deactivation-value=""
              data-form-name="Contact us form"
              data-height="541"
              data-layout-iframe-id="inline-b5oKqw15S0cGgw6On8Oz"
              data-form-id="b5oKqw15S0cGgw6On8Oz"
              title="Contact us form"
                  >
            </iframe>
            <script src="https://link.msgsndr.com/js/form_embed.js"></script>
         </div>
         <div class="col-lg-6">
         <div class="timetable"><h4>WORKING HOURS</h4><p>Visit us at our office for a mean cup of coffee and a free consulting hour.</p> <table class="table">
                        <tr>
                            <td>Monday, Wednesday & Friday:</td><td>9:00 a.m. - 6:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Tuesday & Thursday:</td>
                            <td>9:00 a.m. - 7:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Saturday:</td>
                            <td>9:00 a.m. - 2:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Sunday:</td>
                            <td>Closed</td>
                        </tr>
                    </table></div>
                    <table class="table grey-table">
                       <tbody>
                          <tr><td>After Hours:</td><td>By Appointment Only</td></tr>
                    <tr><td>Emergency AH:</td><td>0490 476 990</td></tr></tbody></table>
         </div>
      </div>
</div>
</section>
<section class="contactMap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21169.785421613364!2d145.16120160833825!3d-37.93259296474766!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x155b0243749c70ca!2sPurity+Dental!5e0!3m2!1sen!2sau!4v1554709868906!5m2!1sen!2sau" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-4">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1554711781699!6m8!1m7!1sLG-zzYc6Rl45McVleeyRPQ!2m2!1d-37.93456004183669!2d145.1679948074763!3f8.23!4f-9.549999999999997!5f0.8582340372039907" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
        </div>
    </div>
</section>
<section class="payment">
   <div class="container">
	   <div class="row">
		   <h3>PAYMENT OPTIONS</h3><br/>
	   </div>
       <div class="row justify-content-center">
		   <div class="col-lg-8">
			   <p>We offer you options to help make paying for your treatment as easy as possible and to fit within your budget.<br><br>

After your initial examination, the dentist will customise a treatment plan for you and then you have the choice as to how you would like to spread out your appointments to fit within your budget and schedule.<br> <br>

We can do immediate on-the-spot insurance claims via HICAPS. We require payment on the day of treatment and accept payments for dental services by cash, EFTPOS, Mastercard or Visa.

We also accept payments made by internet banking if prior arrangements have been made with one of our front office co-ordinators.
		   </div>
	   </div>     

        </div>
            </section>
            <?php include_once('inc/social-media.php'); ?>
<!--End  -->
<?php get_footer(); ?>