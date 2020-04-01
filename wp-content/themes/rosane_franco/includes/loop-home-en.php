<?php while ( have_posts() ) : the_post(); //Open the loop ?>
	
	<div class="container-fluid">

			<div class="row">
				<div class="col px-0">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
			
						<div class="carousel-inner">
					    
						<?php

						$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						$post = $posts[0]; $c=0;
						while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div id="post-<?php the_ID(); ?>" class="<?php $c++; if($c == 1) { echo 'active carousel-item'; } else { echo 'carousel-item'; } ?>">
							

          <!-- criamos a variavel e referenciamos o valor the_post_thumbnail para usar mais abaixo -->
          <?php $imagempost = the_post_thumbnail('full', array('class' => 'd-block w-100 img-fluid')); ?>

								<div class="carousel-caption mt-0 pt-0">
									<h1 class="mt-0 pt-0 d-none d-sm-block d-md-block"><?php the_title(); ?></h1>
									<h1 class="small mt-0 pt-0 d-block d-sm-none d-md-none d-lg-none d-xl-none"><?php the_title(); ?></h1>
									<!-- <h5>Saiba mais</h5> -->
									<div class="has-overlay"></div>								
								</div>
							</div>

						<?php endwhile; ?>
			            <?php wp_reset_query(); ?>

						</div>

					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>

					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>

				</div>

			</div>
		</div>

	</div>

	<div class="container-fluid pb-5">
		<div class="container">

			<div class="row">
				<div class="col">

					<section id="sobre_home" class="mt-5 text-center">
						<h5 class="text-uppercase">about</h5>
						<h1 class="text-uppercase">rosane franco</h1>

						<hr class="w-25">

						<?php the_content(); ?>


						<a class="btn btn-primary" href=<?php echo get_site_url() . '/sobre-mim'; ?>>more</a>
					</section>

				</div>
			</div>

			<div id="obras_home" class="row mt-5 mb-0">
				
				<div class="col">

					<div class="card-columns">

						<?php 
						    $args = array(
						        'post_type' => 'post',
						        'cat' => -38,
						        'post_status' => 'publish',
						        'posts_per_page' => '9',
						        'order' => 'DESC',
						        'paged' => 1,
						    );
						    $my_post
						?>

						<?php
						    $my_posts = new WP_Query( $args );
						    if ( $my_posts->have_posts() ) : 
						    while ( $my_posts->have_posts() ) : $my_posts->the_post()               
						?>

						<div id=post-<?php the_ID(); ?> <?php post_class('content card'); ?>>
							<a 
							href="<?php echo get_the_post_thumbnail_url(); ?>"
							data-toggle="lightbox" 
							data-gallery="example-gallery" 
							data-type="image" 
							data-title="<?php the_title(); ?>" 
							>
						    	<div class="content-overlay"></div>
					        	<img class="content-image card-img-top img-fluid" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src=<?php the_post_thumbnail( array(360) ); ?>
					        	<div class="content-details fadeIn-top">
						        	<ion-icon name="camera" class="text-white ionicons"></ion-icon>
					        		<h3 class="content-title text-uppercase text-white"><?php the_title(); ?></h3>
						    	</div>
							</a>
					    </div>
						 
						<?php endwhile; ?>            
						<?php endif; wp_reset_query(); ?>        

					</div>

				</div>

			</div>

				<div id="loading" class="mx-auto" style="width:60px;display:block;"></div>

				<?php
				// don't display the button if there are not enough posts
				if (  $my_posts->max_num_pages > 1 )
				  echo '<button type="button" class="btn btn-primary mx-auto my-5 d-flex load-more-home">load more</button>'; // you can use <a> as well
				?>

			</div><!-- obras_home -->

			<!-- </div> -->

			<section class="entry-utility">
				<?php //comments_template(); ?>
			</section><!-- .entry-utility -->

			<?php endwhile; ?>

		</div>
	</div>

