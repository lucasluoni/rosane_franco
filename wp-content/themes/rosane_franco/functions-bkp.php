<?php
/****************************************************************************
1.Theme setup
****************************************************************************/

function rosane_franco_theme_setup() {
	
	// 1.1.Make theme available for translation.*/
	// load_theme_textdomain( 'rosane_franco', get_stylesheet_directory() . '/languages' );
	
	
	// 1.2.post formats
	add_theme_support( 'post_formats' );
	
	// 1.3.Enable support for Post Thumbnails on posts and pages
	add_theme_support( 
		'post-thumbnails', 
			array( 
				'post', 
				'page', 
				'curso',
				'evento',
				'depoimento',
				'cliente',
                'eventos',
                'depoimentos',
                'clientes'
	));
	
	// 1.4.add_image_size( 'rosane_franco-featured-image', 2000, 1200, true );
	add_image_size( 'rosane_franco-thumbnail-avatar', 100, 100, true );

	
	// 1.5.Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	
	// 1.6.title tags
	add_theme_support( 'title-tag' );
	
	// 1.7.This theme uses wp_nav_menu() in two locations
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'rosane_franco' ),
		'social' => __( 'Social Links Menu', 'rosane_franco' ),
		
	) );
	
	// 1.8.Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	 // 1.9.Enable support for Post Formats.
	 // See: https://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	
	// 1.10.Default to a static front page and assign the front and posts pages.
	$starter_content = array(
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
				),


	// 1.11.Assign a menu to the "social" location.
			'social' => array(
				'name' => __( 'Social Links Menu', 'twentyseventeen' ),
				'items' => array(
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_vimeo',
					'link_linkedin'
				),
			),
	
	);	
		

}

add_action( 'after_setup_theme', 'rosane_franco_theme_setup' );

require get_template_directory() . '/bootstrap-navwalker-master/bootstrap-navwalker.php';

/****************************************************************************
2.Filtra o comprimento to the_exercpt para 13 palavras (aprox. 2 linhas)
****************************************************************************/

/**
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 9 );


/****************************************************************************
3. Adiciona as open graph tags no Header
****************************************************************************/

function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="fb:admins" content="rosane.franco"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="Portfolio de Rosane Franco"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image = get_template_directory_uri() . '/images/logo_header.png'; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );



function add_twitter_cards() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta name="twitter:card" value="summary" />';
        echo '<meta name="twitter:site" value="@rosane_franco" />';
        echo '<meta name="twitter:title" value="' . get_the_title() . '"/>';
        // echo '<meta name="twitter:description" value="' . bloginfo('description') . '"/>';
        echo '<meta name="twitter:description" value="Portfolio de Rosane Franco" />';
        echo '<meta name="twitter:url" value="' . get_permalink() . '"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $tc_image=get_template_directory_uri() . '/images/logo_header.png'; //replace this with a default image on your server or an image in your media library
        echo '<meta name="twitter:image" value="' . $tc_image . '"/>';
    }
    else{
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'add_twitter_cards', 5 );


/****************************************************************************
4.Registra: Popper; Bootstrap CSS; JQuery; Font-Awesome; JSocials; 
Estilos do site (style.css); Image-Grid (CSS); Google Fonts; Bootstrap JS
****************************************************************************/

function wpt_register_popper() {
    wp_register_script('popper.min.js', get_template_directory_uri() . '/js/popper.min.js', 'jquery', 'false', true);
    wp_enqueue_script('popper.min.js');
}
add_action('wp_enqueue_scripts', 'wpt_register_popper');

function wpt_register_bootstrap_css() {
    wp_register_style('bootstrap.min', get_template_directory_uri() . '/bootstrap-4.1.3-dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap.min');
}
add_action( 'wp_enqueue_scripts', 'wpt_register_bootstrap_css' );

//include jquery to load more in loop-blog.php (blog/novidades) 
function register_rosane_franco_jquery() {
    wp_register_script('jquery-3.4.1.min', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', 'jquery', 'false', true);
    wp_enqueue_script('jquery-3.4.1.min');
}
add_action('wp_enqueue_scripts', 'register_rosane_franco_jquery');

function register_jsocials_styles() {
	wp_register_style('jssocials', get_template_directory_uri() . '/jssocials-1.4.0/jssocials.css');
	wp_register_style('jssocials-theme-minima', get_template_directory_uri() . '/jssocials-1.4.0/jssocials-theme-minima.css');
	wp_enqueue_style('jssocials', 'jssocials-theme-minima');
}
add_action('wp_enqueue_scripts', 'register_jsocials_styles');

function register_jsocials_theme_minima() {
	wp_register_style('jssocials-theme-minima', get_template_directory_uri() . '/jssocials-1.4.0/jssocials-theme-minima.css');
	wp_enqueue_style('jssocials-theme-minima');
}
add_action('wp_enqueue_scripts', 'register_jsocials_theme_minima');

function register_css() {
	wp_register_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'register_css');	

function register_photo_wrapper_styles() {
	wp_register_style('image-grid', get_template_directory_uri() . '/image-grid.css');
	wp_enqueue_style('image-grid');
}
add_action('wp_enqueue_scripts', 'register_photo_wrapper_styles');	

function register_google_fonts_styles() {
	wp_register_style('css', 'https://fonts.googleapis.com/css?family=Rambla|Ruda:700&display=swap');
	wp_enqueue_style('css');
}
add_action( 'wp_enqueue_scripts', 'register_google_fonts_styles' );	

function register_jsocials_scripts() {
	wp_register_script('jssocials.min', get_template_directory_uri() . '/jssocials-1.4.0/jssocials.min.js', 'jquery', 'false', true);
	wp_enqueue_script('jssocials.min');
}
add_action( 'wp_enqueue_scripts', 'register_jsocials_scripts' );

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/bootstrap-4.1.3-dist/js/bootstrap.min.js', 'jquery', 'false', true);
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'wp_enqueue_scripts', 'wpt_register_js' );

function register_owlcarousel_scripts() {
    wp_register_script('owl.carousel.min', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', 'jquery', 'false', true);
    wp_enqueue_script('owl.carousel.min');
}
add_action( 'wp_enqueue_scripts', 'register_owlcarousel_scripts' );

function register_owlcarousel_styles() {
    wp_register_style('owl.carousel.min', get_template_directory_uri() . '/owlcarousel/css/owl.carousel.min.css' );
    wp_enqueue_style('owl.carousel.min', 'owl.theme.default.min' );
}
add_action( 'wp_enqueue_scripts', 'register_owlcarousel_styles' );

function register_ionicons_scripts() {
    wp_register_script('ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js', 'jquery', 'false', true);
    wp_enqueue_script('ionicons');
}
add_action( 'wp_enqueue_scripts', 'register_ionicons_scripts' );

function register_numscroller() {
    wp_register_script('numscroller-1.0', get_template_directory_uri() . '/js/numscroller-1.0.js', 'jquery', 'false', true);
    wp_enqueue_script('numscroller-1.0');
}
add_action( 'wp_enqueue_scripts', 'register_numscroller' );

function register_aos_scripts() {
    wp_register_script('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js', 'jquery', 'false', true);
    wp_enqueue_script('aos');
}
add_action( 'wp_enqueue_scripts', 'register_aos_scripts' );

function register_aos_styles() {
    wp_register_style('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css' );
    wp_enqueue_style('aos');
}
add_action( 'wp_enqueue_scripts', 'register_aos_styles' );


