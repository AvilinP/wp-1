 <!-- Malltagggar 
    get_header() ger tillbaka värdet, om man vill bearbeta datan eller spara in någon annanstans. 
    Kan användas utanför "loopen".  -->
 
    <?php get_header(); ?> 

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/09/city.jpg" />
								<div class="text">
									<h1>Hej och välkommen!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

    <?php get_footer(); ?> 		