<?php get_header(); ?>
                 <!--start -->
			<?php if ( have_posts() ) : ?>
			    <?php while ( have_posts() ) : the_post(); ?>  
			       <?php get_template_part( 'template-parts/content', 'page' );?>		
			     <?php endwhile; ?>
			<?php endif; ?>
		<!--End  -->

<section class="lazyload"
 data-link="<?php echo get_template_directory_uri(); ?>/plugins/ba-plus/ba-plus.min.css"
 data-script="<?php echo get_template_directory_uri(); ?>/plugins/ba-plus/ba-plus.min.js"
>

<div id="s201_slides-3-1" class="s201_slides"
     data-s201="{&quot;vertical&quot;:0,&quot;sliding_behavior&quot;:&quot;drag&quot;}">
		<div class="s201_holder s201_slide_active" data-part="holder">
			<img data-src="https://puritydental.com.au/wp-content/uploads/2022/06/may-after.jpg"
                  alt="After" class="s201_img_holder s201_noselect lazyload"   >
            <div class="s201_item_img s201_noselect">
                <div class="s201_overlay_img">
                    <img
                         data-src="https://puritydental.com.au/wp-content/uploads/2022/06/may-after.jpg"
                         alt="After" class="s201_noselect lazyload" style="width: 351px; opacity: 1;">
                </div><div class="s201_label_text s201_noselect" data-part="label">After</div></div><div class="s201_item_img s201_noselect" style="width:50%;"><div class="s201_overlay_img">
                 <img
                      data-src="https://puritydental.com.au/wp-content/uploads/2022/06/may_before1.jpg"
                      alt="Before" class="s201_noselect lazyload" style="width: 351px; opacity: 1;"
                       >
                </div><div class="s201_label_text s201_noselect" data-part="label">Before</div>
							<div class="s201_slider s201_style_1" style="top:50%;"><div class="s201_top_line"></div><div class="s201_handle"><div class="s201_left_arrow"></div><div class="s201_right_arrow"></div></div><div class="s201_bottom_line"></div></div>
						</div>					<iframe class="s201_iframe_width"></iframe></div>
		</div>

</section>
<?php get_footer(); ?>