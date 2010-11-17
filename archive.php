<?php get_header(); ?>

<h1>
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	<?php the_time('M d Y') ?><br />
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
	<p class="comment_count"><?php comments_popup_link('<span>No</span> comments yet', '<span>1</span> Comment', '<span>%</span> Comments', 'comments-link', 'Comments are off for this post'); ?></p>
	</div>
</div>

<?php if (show_posts_nav()) : ?>
<div class="navigation">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>
<?php endif; ?>
	
<?php endwhile; endif; ?>
		
<?php get_sidebar(); ?>

<?php get_footer(); ?>