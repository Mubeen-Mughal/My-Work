<?php /* Template Name: Service area */ ?>
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
    <section>
        <div class="container">
            <div class="row justify-content-between align-content-center align-items-center my-5">
                <div class="col-lg-6 row-2">
                    <div class="row-2-content"><?php the_field('table_of_content'); ?></div>
                </div>
                <div class="col-lg-6">
                    <div class="nc-img-container"><img src="<?php the_field('main_image'); ?>" alt="Dental Image" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 nc-center-para"><?php the_field('first_full_column_paragaraph'); ?></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-between align-content-center align-items-center">
                <div class="col-lg-6 row-2">
                    <div class="row-2-content"><?php the_field('second_section_paragraph'); ?></div>
                </div>
                <div class="col-lg-5">
                    <div class="nc-img-container"><img src="<?php the_field('second_section__image'); ?>" alt="Dental Image" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 row-2-content nc-center-para"><?php the_field('third_full_paragraph_'); ?></div>
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
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 nc-center-para row-2-content"><?php the_field('third_full_paragraph__1'); ?></div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row justify-content-between align-content-center align-items-center">
                <div class="col-lg-6 row-2 mt-5 mt-lg-0">
                    <div class="row-2-content"><?php the_field('fourth_section_paragraph'); ?>
                    </div>
                </div>
                <div class="col-lg-5 nc-img-container">
                    <img src="<?php the_field('fourth_section_image'); ?>" alt="Dental Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 contactFormarea">
        <div class="container">
            <div class="row justify-content-between align-content-center align-items-center">
                <div class="col-lg-5 contactForm">
                <div class="row-2-content outline"> <h2 class="text-center">Get in Touch</h2><?php echo do_shortcode('[contact-form-7 id="10601" title="Contact form 1"]'); ?>
                </div></div>
                <div class="col-lg-6 row-2 mt-5 mt-lg-0">
                    <div class="row-2-content"><?php the_field('fifth_section_paragraph'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center area-map">
                <div class="col-lg-12 g-0"><?php the_field('area_map'); ?></div>
            </div>
        </div>
    </section>
    <?php include_once('inc/social-media.php'); ?>
<!--End  -->
<style>
   .social-media{
    padding: 0px;
   }
   h3{
    font-size: 1.8rem;
text-transform: capitalize;
   }
   section {
  scroll-margin-top: 4rem;
}
</style>
<?php get_footer(); ?>