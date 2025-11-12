<?php
/**
 * The template used for displaying page content
 *
 */
?>

<article role="WebPage" itemprop="hasPart" itemscope="" itemtype="http://schema.org/WebPage">
                    	<meta itemscope='itemscope' itemprop='mainEntityOfPage' itemType='https://schema.org/WebPage'/>
			   <h1 itemprop="headline name"><?php the_title(); ?></h1>
                    	<div class="postThumnail">
                        <?php if ( has_post_thumbnail() ) { ?>
    						<span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        						<?php the_post_thumbnail('medium'); ?>
								<?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
                                $thumb_url = $thumb_url_array[0];
                                ?>
        						<meta itemprop="url" content="<?php echo $thumb_url ?>">
        						<meta itemprop='width' content='350'/>
        						<meta itemprop='height' content='300'/>  
    						</span>
    					<?php } ?>
                        </div>
                        <span itemprop="description"><?php the_content(); ?></span>
                        <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                        	<meta itemprop="name" content="<?php echo get_option('practice_name');?>"/>
                        	<div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                        		<meta itemprop="url" content="<?php echo get_option('publisher_logo');?>"/>
								<meta itemprop="width" content="600"/>
								<meta itemprop="height" content="60"/>
							</div>
						</div>
			<meta itemprop="dateModified" content="<?php echo the_time('c'); ?>"/>	
</article>