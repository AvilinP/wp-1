<?php 
/*
 * Template Name: Inlägg
 * Template Post Type: post
 */

?>
<?php get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>
								
                            <img src="<?php echo get_the_post_thumbnail_url();  ?>"  />

                                <!-- Loop för att hämta blogginlägg   -->
                                <?php 
                                    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                                    <?php if ( $wpb_all_query->have_posts() ) : ?>
                                <ul>
                                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                    <?php endwhile; ?>
                                </ul>

                                    <?php wp_reset_postdata(); ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Tyvärr, inga poster hittades.' ); ?></p>
                                        <?php endif; ?>


								<h1 class="title"> <?php the_title(); ?></h1>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user">   
												<a href="<?php the_permalink(); ?>">
													<?php the_author(); ?>
												</a>
										</i> 
									</li>

									<li>
											<i class="fa fa-tag">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_category_list(", "); ?>
												</a>
											</i> 		
									</li>
								</ul><p>
								
								<?php the_content(); ?>
								
								</p>
							</article>
						</div>

						<?php get_sidebar('side-bar'); ?> 

					</div>
				</div>
			</section>
		</main>


<?php get_footer(); ?> 
