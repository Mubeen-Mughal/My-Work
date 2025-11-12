<?php
/**
 * The template part for displaying single posts
 *
 */
?>
			<div class="single-post-wrapper">
				<div class="blog-para">
					
                	<article id="post-<?php the_ID(); ?>" role="article" itemprop="hasPart" itemscope="" itemtype="http://schema.org/BlogPosting">
                    	<meta itemscope='itemscope' itemprop='mainEntityOfPage' itemType='https://schema.org/WebPage'/>
						<h1 itemprop="headline name headings"><?php the_title(); ?></h1>
		

                    	<div class="postmeta">Posted By: <span class="post-author vcard" itemprop="author" itemscope itemtype="https://schema.org/Person">
			<span itemprop="name"><a href="<?php echo get_option('author_page');?>"><?php the_author(); ?></a></span></span> | Published On: <span datetime="<?php echo the_time('c'); ?>" itemprop="datePublished" content="<?php echo the_time('c'); ?>"> <?php the_time('M j, Y'); ?></span> | <?php the_category(', '); ?></div>
                    	<div class="postThumnail">
                        <?php if ( has_post_thumbnail() ) { ?>
    						<span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        						<?php the_post_thumbnail('full'); ?>
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
				<div class="blog-text"><span itemprop="description"><?php the_content(); ?></span></div>
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
				</div>
				<section id="news-blog" class="py-5">
        <div class="container">
            <div class="row">
                <div class="our-service-title">
                    <h2>Read More</h2>
    <br/>
                </div>
            </div>
            <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()): while ($query->have_posts()): $query->the_post();
                ?>

                <div class="col-12 col-sm-4 mb-4 mb-md-0">
                    <a href="<?php the_permalink(); ?>">
                        <div class="news-container">
                            <div>
                                <?php the_post_thumbnail('full'); ?>
                                <div class="more-button">
                                    <img src="<?php bloginfo('template_directory');?>/images/view-more-btn.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="news-text p-4">
                                <span class="news-container-heading"><?php the_title(); ?></span>
                            </div>
                            <div class="news-container-date">
                                <?php the_time('M j, Y'); ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
			</div>