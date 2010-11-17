<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php if ( is_front_page() ) { ?>
	<h2 class="entry-title"><?php the_title(); ?></h2>
<?php } else { ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
<?php } ?>

<?php the_content(); ?>
<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
