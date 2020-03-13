<?php //while ( have_posts() ) : the_post(); //Open the loop ?>

	<div class="container-fluid">

			<div class="row">
				<div class="col px-0">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									
						<div class="carousel-inner">
					    
							<div class="carousel-item active">
							<img class="d-block w-100" src=<?php echo( get_template_directory_uri() . '/images/banner-home-rosane-franco-01.jpg'); ?> alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h1><?php single_cat_title(''); ?></h1>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

	</div>

	<div class="container-fluid pb-5">
		<div class="container">

			<div id="obras_home" class="row mt-5 mb-0">
				
				<div class="col">

					<div class="card-deck">

						<?php
							$cat = get_category( get_query_var( 'cat' ) );
							$cat_id = $cat->cat_ID;
							$child_categories=get_categories(
							    array( 'parent' => $cat_id )
							);

							foreach ( $child_categories as $child ) {
							    // Here I'm showing as a list...
							    echo '<li>'.$child ->cat_name.'</li>';

					    ?>


						<div id="" <?php post_class('content card'); ?>>
							<a href="#">
						    	<div class="content-overlay"></div>
					        	<img class="content-image card-img-top img-fluid" src=<?php the_post_thumbnail( array(360) ); ?>
					        	<div class="content-details fadeIn-top">
						        	<ion-icon name="camera" class="text-white ionicons"></ion-icon>
					        		<h3 class="content-title text-uppercase text-white"><?php echo $child ->cat_name; ?></h3>
						    	</div>
							</a>
					    </div>

					    <?php

							}

						?>

						<?php 
						    // $args = array(
						    //     'post_type' => 'post',
						    //     'post_status' => 'publish',
						    //     'posts_per_page' => '9',
						    //     'order' => 'DESC',
						    //     'paged' => 1,
						    // );
						    // $my_post
						?>

						<?php
						    // $my_posts = new WP_Query( $args );
						    // if ( $my_posts->have_posts() ) : 
						    // while ( $my_posts->have_posts() ) : $my_posts->the_post()               
						?>

						<!-- <div id=post-<?php the_ID(); ?> <?php post_class('content card'); ?>>
							<a href=<?php the_permalink(); ?>>
						    	<div class="content-overlay"></div>
					        	<img class="content-image card-img-top img-fluid" src=<?php the_post_thumbnail( array(360) ); ?>
					        	<div class="content-details fadeIn-top">
						        	<ion-icon name="camera" class="text-white ionicons"></ion-icon>
					        		<h3 class="content-title text-uppercase text-white"><?php the_title(); ?></h3>
						    	</div>
							</a>
					    </div> -->
						 
						<?php //endwhile; ?>            
						<?php//endif; wp_reset_query(); ?>        

					</div>

				</div>

			</div>

				<!-- <div id="loading" class="mx-auto" style="width:60px;display:block;"></div> -->

				<?php
				// don't display the button if there are not enough posts
				// if (  $my_posts->max_num_pages > 1 )
				//   echo '<button type="button" class="btn btn-primary mx-auto my-5 d-flex load-more-home">+ novidades</button>'; // you can use <a> as well
				?>

			</div><!-- obras_home -->

			<!-- </div> -->

			<section class="entry-utility">
				<?php //comments_template(); ?>
			</section><!-- .entry-utility -->

			<?php //endwhile; ?>

		</div>
	</div>