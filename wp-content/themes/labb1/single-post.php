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
								
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/01/washington.jpg" />

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

						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<?php wp_nav_menu( array (
												'theme_location' => 'side-bar',
												'container' => 'ul'
											)); 
											?> 
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a href="http://localhost/wptheme/arkiv/">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
												<li class="cat-item">
													<a href="">Natur</a> (1)
												</li>
												<li class="cat-item">
													<a href="">Okategoriserade</a> (3)
												</li> 
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>




<?php get_footer(); ?> 
