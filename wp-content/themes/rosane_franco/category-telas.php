<?php /* Template Name: Telas */ ?>

<?php get_header(); ?>

<?php
	/**
	 * If child term of 'recipe' show recipe-child template
	 * Else if is 'recipe' archive show recipe-parent template
	 // * @link http://thestizmedia.com/different-templates-parent-child-category-archives/
	 */
	$catid = get_query_var('cat'); // current cat ID
	if ( cat_is_ancestor_of( 22, $catid ) ) { // 22 is ID of the parent category 'telas'
	    get_template_part('includes/telas', 'child');
	} elseif ( is_category('telas') ) {
	    get_template_part('includes/telas', 'parent');
	}
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>