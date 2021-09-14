<?php 
/*

    Template Name: MyTemplateLabbKategori

 */

?>

<?php get_header(); ?> 

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<h1>
							<?php the_category(', '); ?>
						</h1>

							<?php if (have_posts() ) : ?>
            						<?php while (have_posts() ) : the_post(); ?>
										<article>  
											<img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
												<h2 class="title">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h2>
												<ul class="meta">
													<li><i class="fa fa-calendar"></i><?php echo the_time('j'), " ", the_time('F'), " ", the_time('Y'); ?></li>
													<li>
														<i class="fa fa-user"></i>
														<?php the_author_posts_link(); ?>
													</li>
													<li>
														<i class="fa fa-tag"></i>
														<?php echo get_the_category_list(", "); ?>
													</li>
												</ul>
												<p><?php the_excerpt(); ?></p>
										</article>
 
                    				<?php endwhile; ?>
        						
    					
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<?php echo paginate_links(); ?>
							</nav>
						<?php endif; ?> 
						</div>
							<?php get_sidebar('side-bar'); ?>		
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?> 