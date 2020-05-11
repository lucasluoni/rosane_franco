<?php //while ( have_posts() ) : the_post(); //Open the loop ?>

	<div class="container-fluid d-none d-sm-block d-md-block d-lg-block d-xl-block">

		<div class="row">
			<div class="col px-0">

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		
					<div id="banner_menor" class="carousel-inner">
				    
				    <div class="carousel-item active">
				    	<img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/banner-sobre-rosane-franco.jpg" alt="First slide">
						<div class="carousel-caption bannerMenor">
							<h1 class="text-capitalize"><?php the_title(); ?></h1>
							<div class="has-overlay"></div>
				  		</div>
				  	</div>

				  </div>
				
				</div>

			</div>
		</div>

	</div>

	<?php 
	  $args = array(
	      'post_type' => 'sobre_mim',
	      'post_status' => 'publish',
	      'posts_per_page' => '1',
	      'order' => 'ASC'
	  );
	  $my_post
	?>

	<?php
	  $my_posts = new WP_Query( $args );
	  if ( $my_posts->have_posts() ) : 
	  while ( $my_posts->have_posts() ) : $my_posts->the_post()               
	?>

	<?php $post_meta_data = get_post_custom($post->ID); ?>

	<div class="container-fluid pb-5">
		<div class="container">

			<section id="sobre_mim" class="py-5 text-center">

				<div class="row">
					<div class="col">
						<h1 class="text-capitalize mb-5"><?php the_title(); ?></h1>
						<!-- <hr class="w-25 mb-5"> -->
					</div>
				</div>

				<div class="row">
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">
						<img class="img-fluid mb-3 border" src=<?php the_post_thumbnail(); ?>
					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">

						<?php the_content(); ?>

					</div>

				</div>

			</section>

			<section id="processo_criativo" class="pt-3 pb-5 text-center">

				<div class="row mb-5">
					<div class="col">

							<h1 class="text-capitalize"><?php echo $post_meta_data['custom_titulo'][0]; ?></h1>
							<hr class="w-25">

					</div>
				</div>

				<div class="row">
					
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-left" style="white-space: pre-line;">

						<?php echo $post_meta_data['custom_texto'][0]; ?>

					</div>

				</div>

			</section>


			<section id="timeline_expos">
				
				<div class="row text-center mb-5">
					<div class="col">

							<h1 class="text-capitalize">CV</h1>
							<hr class="w-25">

					</div>
				</div>

				<div class="row">
					<div class="col-12">

	                    <?php $tracks = get_post_meta($post->ID, 'expo_repeatable', true);
                    	foreach($tracks as $track) { ?>

							<div class="timeline my-0">

								<h4 class="periodo my-0"><?php echo $track['nome']; ?></h4>
								<hr class="w-25">
								<span><?php echo $track['link']; ?></span>

							</div>

    		        	<?php } ?>

					</div>
				</div>

			</section>

		</div>
	</div>

	<?php endwhile; ?>            
	<?php endif; wp_reset_query(); ?>

<?php //endwhile; ?>		