<?php //while ( have_posts() ) : the_post(); //Open the loop ?>

	<div class="container-fluid">

			<div class="row">
				<div class="col px-0">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									
						<div class="carousel-inner">
					    
							<div class="carousel-item active">
							<img class="d-block w-100" src=<?php echo( get_template_directory_uri() . '/images/banner-home-rosane-franco-01.jpg'); ?> alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<!-- <h1><?php //single_cat_title(''); ?></h1> -->
									<h1><?php echo get_category_parents( $cat, false, ' &raquo; ' ); ?></h1>								
									<div class="has-overlay"></div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

	</div>

	<div class="container-fluid pb-5">
		<div class="container">

			<h1 class="mt-5">Lista de Obras por ano:</h1>

			<div id="" class="row mt-5 mb-0 d-flex mx-auto">
					<!-- <div class="card-deck row"> -->


						<?php
							$cat = get_category( get_query_var( 'cat' ) );
							$cat_id = $cat->cat_ID;
						    // $cat_slug = $cat->slug;
							$child_categories=get_categories(
							    array( 'parent' => $cat_id )
							);

							foreach ( $child_categories as $child ) {

					    ?>

						<div <?php post_class('col-12 col-sm-4 col-md-2 col-lg-1 col-xl-1 d-flex text-center'); ?>>
							<a href="<?php echo get_site_url() . '/category/' . $child ->cat_name . '-' . $cat->slug;  ?>">
				        		<h3 class="content-title text-uppercase text-dark"><?php echo $child ->cat_name; ?></h3>
							</a>
					    </div>

<!-- 					    <div class="px-0 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<div <?php //post_class('content card mx-0 px-0 mb-4'); ?>>
							<a href="<?php //echo get_site_url() . '/category/' . $child ->cat_name . '-' . $cat->slug;  ?>">
						    	<div class="content-overlay"></div>
					        	<img class="content-image card-img-top img-fluid" src=<?php //the_post_thumbnail( array(360) ); ?>
					        	<div class="content-details fadeIn-top">
						        	<ion-icon name="camera" class="text-white ionicons"></ion-icon>
					        		<h3 class="content-title text-uppercase text-white"><?php //echo $child ->cat_name; ?></h3>
						    	</div>
							</a>
					    </div>
						</div>

 -->					    <?php

							}

						?>      

				<!-- </div> -->
			</div>


			</div><!-- obras_home -->

			<section class="entry-utility">
				<?php //comments_template(); ?>
			</section><!-- .entry-utility -->

			<?php //endwhile; ?>

		</div>
	</div>