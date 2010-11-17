<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
		<?php the_time('M d Y') ?><br />
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		<p class="comment_count"><?php comments_popup_link('<span>No</span> comments yet', '<span>1</span> Comment', '<span>%</span> Comments', 'comments-link', 'Comments are off for this post'); ?></p>
		<?php edit_post_link('Edit This Post', '<p class="edit-link">', '</p>' ); ?>
		<?php comments_template( '', true ); ?>
	</div>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>