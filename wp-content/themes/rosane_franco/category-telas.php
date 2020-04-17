<?php /* Template Name: Obras	 */ ?>

<?php get_header(); ?>

<?php
	$catid = get_query_var('cat'); // current cat ID
	if ( is_category(22) ) { // # is ID of the parent category 'telas'
	    get_template_part('includes/loop', 'obras');
	} elseif (cat_is_ancestor_of( $catid, 22  )) {
	    get_template_part('includes/loop', 'single');
	}
?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>



