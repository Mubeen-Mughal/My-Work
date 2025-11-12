<?php /* Template Name: Conditions forms */ ?>
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
    <section class="implantFormarea">
        <div class="container my-5">
            <div class="row justify-content-between align-content-center align-items-center">
                <div class="col-lg-8 py-md-3"><?php the_field('first_full_column_paragaraph'); ?></div>
                <div class="col-lg-4 py-md-3 contactForm">
                <h3>Get In Touch</h3>    
                <?php echo do_shortcode('[contact-form-7 id="10601" title="Contact form 1"]'); ?></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-between align-content-center align-items-center">
                
                <div class="col-lg-5 py-md-3">
                    <div class="nc-img-container"><img src="<?php the_field('second_section__image'); ?>" alt="Dental Image" class="img-fluid"></div>
                </div>
                <div class="col-lg-6 row-2 py-md-3">
                    <div class="row-2-content"><?php the_field('second_section_paragraph'); ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container-fluid">
            <div class="row nc-cta nc-cta-1 justify-content-center align-content-center">
                <div class="col-lg-8 text-center">
                    <h2><?php the_field('first_cta_section'); ?></h2>
                </div>
                <div class="w-100 my-2"></div>
                <div class="col-lg-4 text-center">
                    <a href="tel:0395408900">
                        <div class="nc-btn nc-btn-light">
                            9540 8900
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 nc-center-para"><?php the_field('third_full_paragraph_'); ?></div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row justify-content-between align-content-center align-items-center">
                <div class="col-lg-5 nc-img-container">
                    <img src="<?php the_field('fourth_section_image'); ?>" alt="Dental Image" class="img-fluid">
                </div>
                <div class="col-lg-6 row-2 mt-5 mt-lg-0">
                    <div class="row-2-content"><?php the_field('fourth_section_paragraph'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('inc/sedation-cta.php'); ?>
    <?php if( get_field('sedation-faq') ): ?>
<section class="faq services-faq">
   <div class="container">
            <?php the_field('sedation-faq'); ?>     
</section>
<?php endif; ?>
    <?php get_template_part('template-parts/content', 'services'); ?>
    <section class="my-5">
        <div class="container-fluid">
            <div class="row nc-cta nc-cta-2 justify-content-center align-content-center">
                <div class="col-lg-8 text-center">
                    <h2><?php the_field('second_cta'); ?></h2>
                </div>
                <div class="w-100 my-2"></div>
                <div class="col-lg-4 text-center">
                    <a href="/book-online/">
                        <div class="nc-btn nc-btn-dark">
                            Book Now
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('inc/social-media.php'); ?>
<!--End  -->
<style>
    h3{
        font-size: 2rem;
text-transform: uppercase;
font-weight: 300;
letter-spacing: 1px;
margin-bottom: 20px;
    }
</style>
<?php get_footer(); ?>