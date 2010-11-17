<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<h1><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

<?php
/* Run the loop for the search to output the results.
 * If you want to overload this in a child theme then include a file
 * called loop-search.php and that will be used instead.
 */
 get_template_part( 'loop', 'search' );
?>
<?php else : ?>
	<h2><?php _e( 'Nothing Found' ); ?></h2>
	<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.' ); ?></p>
<?php get_search_form(); ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
