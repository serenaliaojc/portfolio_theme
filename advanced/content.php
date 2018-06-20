<?php if(is_search()||is_archive()): ?>
	<div class="archive-post">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h4>
		<p>Posted On: <?php the_time('F j, Y g:i a'); ?></p>
	</div>
<?php else: ?>
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
		<p class="meta">Posted at <?php the_time('F j, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted In <?php 
			$categories = get_the_category();
			$separator = ",";
			$output = '';

			if ($categories) {
				foreach ($categories as $c) {
					$output .= '<a href="'.get_category_link($c->term_id).'">'.$c->cat_name.'</a>'.$separator;
				}
			}
			echo trim($output,$separator);
		 ?></p>
		<?php if(has_post_thumbnail()): ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		<?php if(is_single()): ?>
			<?php the_content(); ?>
		<?php else: ?>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="button">Read More</a>
		<?php endif; ?>
	</article>
<?php endif; ?>
