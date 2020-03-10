<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<!-- <section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'twentynineteen' ); ?></h1>
	</header> --><!-- .page-header -->

	<!-- <div class="page-content"> -->
	<div class="container-fluid">
		<div class="container text-center pb-2">
	    
			<div class="row">
				<div class="col">

					<h1 class="page-title"><?php _e( 'Não achei nada :(', 'twentynineteen' ); ?></h1>

					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) :

						printf(
							'<p>' . wp_kses(
								/* translators: 1: link to WP admin new post page. */
								__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentynineteen' ),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url( admin_url( 'post-new.php' ) )
						);
					?>

				</div>
			</div>

			<!-- <div class="form-row"> -->

						<?php
						elseif ( is_search() ) :
							?>

							<p><?php _e( 'Nos desculpe, não achei nada com as palavras buscadas.' .'<br />'. 'Tente novamente com outros termos, por favor.', 'twentynineteen' ); ?></p>
							<?php
							//get_search_form();
							?>
				 			
				 			<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
								<div class="form-row d-inline-flex">
					 				<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-2">
								    	<input type="search" class="form-control search" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>" autocomplete="off" name="s" title="Search" id="SearchFieldContent">
									</div>
									<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
									    <input type="submit" class="form-control btn btn-outline-primary text-uppercaserounded-0" value="buscar" id="botao_busca_content">
									</div>
								</div>
							</form>

							<?php
						else :
							?>

							<p><?php _e( 'Nos desculpe, não achamos nada com as palavras buscadas.' .'<br />'. 'Tente novamente com outros termos, por favor.', 'twentynineteen' ); ?></p>
							<?php
							get_search_form();

						endif;
						?>

			<!-- </div> -->

	<!-- </div>.page-content -->
<!-- </section>.no-results -->

				</div>
			</div>

		</div>
	</div>

