<?php //while ( have_posts() ) : the_post(); //Open the loop ?>

	<div class="container-fluid d-none d-sm-block d-md-block d-lg-block d-xl-block">

			<div class="row">
				<div class="col px-0">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									
						<div id="banner_menor" class="carousel-inner">
					    
							<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo( get_template_directory_uri() . '/images/banner-obras-rosane-franco.jpg'); ?>" alt="First slide">
								<div class="carousel-caption bannerMenor">
									<h1><?php echo get_category_parents( $cat, false, ' &raquo; ' ); ?></h1>								
									<div class="has-overlay"></div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

	</div>

	<div class="container-fluid py-5">
		<div class="container">

			<!-- <h1 class="mt-5">Lista de Obras por ano:</h1> -->

				<div class="col">

					<div class="card-deck">

						    <div class="row">

							<?php
								$cat = get_category( get_query_var( 'cat' ) );
								$cat_id = $cat->cat_ID;
							    // $cat_slug = $cat->slug;
								$child_categories=get_categories(
								    array( 
								    	'parent' => $cat_id,
								    	'order'	 => 'DESC' 
								    )
								);

								foreach ( $child_categories as $child ) {

						    ?>

						    <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2">


							<div <?php post_class('m-0 p-3'); ?>>
								<a class="btn btn-primary rounded-0" href="<?php echo get_site_url() . '/category/' . $child ->cat_name . '-' . $cat->slug;  ?>"><?php echo $child ->cat_name; ?></a>
						    </div>

							</div>

						    <?php

								}

							?>      

							</div>
					</div>
				</div>

			<section class="entry-utility">
				<?php //comments_template(); ?>
			</section><!-- .entry-utility -->

			<?php //endwhile; ?>

		</div>
	</div>