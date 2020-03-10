<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Janaina Matida
 * @since 1.0.0
 */

get_header();
?>

  <div id="resultados_busca">




<div class="container-fluid mb-5">
	<div class="container">

          <div class="row">
            <div class="col">
              <a href="<?php echo wp_get_referer(); ?>" class="mt-3 mb-0 d-inline-block float-right link darkBlue text-uppercase text-bold">< voltar</a>
            </div>
          </div>

		<?php if ( have_posts() ) : ?>

		<div class="row mb-2">
			<div class="col">
				<h3 class="text-center"><?php _e( 'Veja abaixo os resultados da busca', 'maradentro' ); ?></h3>
				<hr class="my-5">
				<div class="page-description"><h5 class="d-lg-inline-flex">Termo pesquisado:</h5> <?php echo get_search_query(); ?></div>
			</div>
		</div>

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				?>

		<div class="row">
			<div class="col">

				<ul>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				</ul>

			</div>
		</div>



				<?php

			// End the loop.
			endwhile;

		// Previous/next page navigation.
		//twentynineteen_the_posts_navigation();

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>
	</div>

<?php
get_footer();
