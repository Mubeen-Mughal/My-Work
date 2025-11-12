<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 */
?>	
<section class="blog-box">
  <div class="container">
 <div class="blog-box">
    <div class="blog-image">
      <?php the_post_thumbnail( $size, $attr ); ?>
    </div>
    <div class="blog-details">
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <br/>
  <div class="blog-detail">
  <p> <?php the_excerpt(); ?></p>
  </div>

     
	</div>
	<div class="date">
			<h2><span datetime="<?php echo the_time('c'); ?>" itemprop="datePublished" content="<?php echo the_time('c'); ?>"> <?php the_time('M j, Y'); ?></span></h2> </div>
  </div>
  </div>	
  </section>	

