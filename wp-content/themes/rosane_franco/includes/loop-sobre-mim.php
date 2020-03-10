		<div class="container-fluid">

			<div class="row">
				<div class="col px-0">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			
						<div class="carousel-inner">
					    
					    <div class="carousel-item active">
					    	<img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/images/banner-sobre-rosane-franco.jpg" alt="First slide">
					    	<div class="carousel-caption d-none d-md-block">
								<h1 class="display-3"><?php the_title();  ?></h1>
					  		</div>
					  	</div>

					  </div>
					
					</div>

				</div>
			</div>

		</div>

		<?php 
		  $args = array(
		      'post_type' => 'infos_sobre_mim',
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
							<h1 class="text-capitalize">rosane franco</h1>
							<hr class="w-25 mb-5">
						</div>
					</div>

					<div class="row">
						
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">
							<img src="images/retrato-rosane-franco.jpg" class="img-fluid mb-3">
						</div>

						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">

							<?php the_content(); ?>

						</div>

					</div>

				</section>

				<section id="processo_criativo" class="pt-3 pb-5 text-center">

					<div class="row mb-5">
						<div class="col">

								<h1 class="text-capitalize">processo criativo</h1>
								<hr class="w-25">

						</div>
					</div>

					<div class="row">
						
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							venenatis erat leo, nec aliquam arcu tempus ut. Nulla nec lacus est.
							Vivamus posuere nunc ultricies tellus lacinia dignissim.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							venenatis erat leo, nec aliquam arcu tempus ut. Nulla nec lacus est.
							Vivamus posuere nunc ultricies tellus lacinia dignissim.</p>

							<p>Nullam et augue nec enim venenatis bibendum interdum quis purus. In
							hac habitasse platea dictumst. Phasellus bibendum lorem vitae gravida
							convallis. Aenean ullamcorper sem tellus, ut auctor turpis tempus sedid
							sodales.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							venenatis erat leo, nec aliquam arcu tempus ut. Nulla nec lacus est.
							Vivamus posuere nunc ultricies tellus lacinia dignissimconsectetur
							adipiscing elit.</p>

						</div>

						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left">

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							venenatis erat leo, nec aliquam arcu tempus ut. Nulla nec lacus est.
							Vivamus posuere nunc ultricies tellus lacinia dignissim.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							venenatis erat leo, nec aliquam arcu tempus ut. Nulla nec lacus est.
							Vivamus posuere nunc ultricies tellus lacinia dignissim.</p>

							<p>Nullam et augue nec enim venenatis bibendum interdum quis purus. In
							hac habitasse platea dictumst. Phasellus bibendum lorem vitae gravida
							convallis. Aenean ullamcorper sem tellus, ut auctor turpis tempus sedid
							sodales.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							venenatis erat leo, nec aliquam arcu tempus ut. Nulla nec lacus est.
							Vivamus posuere nunc ultricies tellus lacinia dignissimconsectetur
							adipiscing elit.</p>

						</div>

					</div>

				</section>


				<section id="timeline_expos">
					
					<div class="row text-center mb-5">
						<div class="col">

								<h1 class="text-capitalize">exposições</h1>
								<hr class="w-25">

						</div>
					</div>

					<div class="row">
						<div class="col-12">

							<div class="timeline">

								<h4 class="periodo">2009 - 2011</h4>
								<hr class="w-25">
						

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim veniam, quis nostrud exercitation.</p>

							</div>

					
						</div>
					</div>

				</section>

			</div>
		</div>


		<?php endwhile; ?>            
		<?php endif; wp_reset_query(); ?>