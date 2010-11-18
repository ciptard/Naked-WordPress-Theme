<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post">
	<?php the_time('M d Y') ?><br />
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
	<p class="comment_count"><?php comments_popup_link('No comments yet', '1 Comment', '% Comments', 'comments-link', 'Comments are off for this post'); ?></p>
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
