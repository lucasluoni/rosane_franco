<!DOCTYPE html>
<html lang="pt-br" class="no-js">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><!--<![endif]-->
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="content-language" content="pt-br" />
	<meta name="copyright" content="Copyright (c)2020 - Rosane Franco. Todos os direitos reservados." />
	<meta name="author" content="Rosane Franco">
	<!-- If this is a single post view, show the post title; if this is a multi-post view, show the blog name and description -->
	<meta name="description" content="<?php if ( is_single() ) {
	        single_post_title('', true); 
	    } else {
	        bloginfo('name'); echo " - "; bloginfo('description');
	    }
	    ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

  <body <?php body_class( ''. "" ); ?> >

	<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<a class="navbar-brand" href=<?php echo get_home_url(); ?>><img src=<?php echo( get_template_directory_uri() . '/images/logo_header.png'); ?>></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
					<span class="navbar-toggler-icon"></span>
				</button>         

				<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

				<?php
				wp_nav_menu( array(
				    'theme_location' => 'primary', // Defined when registering the menu
				    'menu_id'        => 'main-menu',
				    'container'      => false,
				    'depth'          => 2,
				    'menu_class'     => 'navbar-nav ml-auto text-uppercase',
				    'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
				    'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
				) );
				?>

				</div>

			</nav>
	</header>