<?php
/*
Template Name: MyTemplateLabbSök
*/

?>
<?php get_header(); ?> 

<main>
     <section>
          <div class="container">
               <div class="row">
                    <div id="primary" class="col-xs-12 col-md-9">

                    <?php while(have_posts()){ 
                the_post()
              ?> 
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
            <?php } ?>

			<nav class="navigation pagination">
              <?php echo paginate_links(); ?>
          </nav>
						</div>

						<?php get_sidebar('side-bar'); ?> 

					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?> 