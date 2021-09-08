<?php
/*
Template Name: MyTemplateLabbBlogg
*/

?>

<?php get_header(); ?> 

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
							<article>
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/09/washington.jpg" />
								<h2 class="title">
									<a href="http://localhost/wptheme/det-tredje-inlagget/">Det tredje inlägget</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="http://localhost/wptheme/forfattare/">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
							</article>
							<article>
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/09/paris.jpg" />
								<h2 class="title">
									<a href="inlagg.html">Mitt andra inlägg</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="http://localhost/wptheme/forfattare/">John Doe</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 3</a>
									</li>
								</ul>
								<p>Integer quis eros at urna pulvinar mollis eget quis ex. Nam fringilla tellus at ligula consequat, sed sagittis ipsum ultricies. Nunc pretium bibendum enim id iaculis. Nam sed leo non sem aliquam imperdiet dictum vitae magna. Phasellus ac accumsan dolor, quis congue mauris. Maecenas vehicula, arcu sed congue euismod, mi urna rhoncus nunc, et feugiat arcu tellus vitae odio. Sed luctus vel lorem vel dictum. Suspendisse potenti. Proin vel efficitur ex. Suspendisse scelerisque rutrum mattis. In sed laoreet augue, non maximus ante. Nam a rhoncus ligula. Aliquam at aliquet lorem. Suspendisse non risus tincidunt, gravida augue non, fringilla libero.</p>
							</article>
							<article>
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/09/london.jpg" />
								<h2 class="title">
									<a href="inlagg.html">Hej världen!</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="http://localhost/wptheme/forfattare/">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>, <a href="kategori.html">Kategori 3</a>
									</li>
								</ul>
								<p>Sed pretium metus in urna vehicula imperdiet. Fusce at odio vitae felis maximus tincidunt. Nunc porttitor ex a elementum dictum. Maecenas eget arcu nulla. Cras auctor dui aliquet, condimentum orci vel, venenatis nisl. Ut semper magna urna, ac congue dui cursus vitae. Nam sed pharetra leo, vel tincidunt est. Phasellus volutpat tortor nec nulla feugiat congue. Donec quis ligula varius, euismod nisl eu, aliquet metus. Aliquam tempus iaculis odio, sed volutpat mi aliquam aliquet.</p>
							</article>
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
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
												'items_wrap' => '<ul role="navigation"> %3$s</ul>',
												// 'container_class' => 'navigation',
												// 'container' => 'div',  
												'menu_class' => 'pagenav'
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