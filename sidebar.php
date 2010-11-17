<h2 class="din">Subscribe</h2>
<ul>
	<li><a href="/?feed=rss2">Entries (RSS)</a></li>
	<li><a href="/?feed=comments-rss2">Comments (RSS)</a></li>
</ul>
<h2 class="din">Categories</h2>
<ul>
	<?php wp_list_categories(array('title_li' => '')); ?> 
</ul>

<h2 class="din">Archives</h2>
<ul>
	<?php wp_get_archives(array('type' => 'monthly')); ?>
</ul>