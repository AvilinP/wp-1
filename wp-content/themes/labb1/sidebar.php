<?php

?>
					<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<!-- <?php get_search_form(); ?> -->
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
										
										<?php wp_get_archives();?>
										
												<li class="categories">
												<h2>Kategorier</h2>
												<ul>
												<?php
												$categories = get_categories( array(
													'orderby' => 'name',
													'order'   => 'ASC'
												) );
												foreach( $categories as $category ) {
												echo '<li class="cat-item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span class="text-white"> (' . $category->category_count . ')' . '</span></li>';   
												} ?>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>


						