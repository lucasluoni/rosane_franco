<?php //while ( have_posts() ) : the_post(); //Open the loop ?>

	<div class="container-fluid d-none d-sm-block d-md-block d-lg-block d-xl-block">

			<div class="row">
				<div class="col px-0">

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									
						<div class="carousel-inner">
					    
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

	<div class="container-fluid pb-5">
		<div class="container">

			<h1 class="mt-5">Lista de Obras por ano:</h1>

				<div class="col">

					<div class="card-deck">

						    <div class="row">

							<?php
								$cat = get_category( get_query_var( 'cat' ) );
								$cat_id = $cat->cat_ID;
							    // $cat_slug = $cat->slug;
								$child_categories=get_categories(
								    array( 'parent' => $cat_id )
								);

								foreach ( $child_categories as $child ) {

						    ?>

						    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mt-2 mx-0 px-1">


							<div id="ano_categoria" <?php post_class('card border-0 m-0 rounded-0 p-3'); ?>>
								<a class="linkAnos" href="<?php echo get_site_url() . '/category/' . $child ->cat_name . '-' . $cat->slug;  ?>">
						        	<ion-icon name="camera" class="text-white ionicons"></ion-icon>
					        		<h3 class="content-title text-uppercase text-white"><?php echo $child ->cat_name; ?></h3>
								</a>
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