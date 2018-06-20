<?php get_header(); ?>
	<div class="main block">
		<?php if(have_posts()): ?>
			<?php while(have_posts()) : the_post(); ?>
				<article class="page">
					<?php if(page_is_parent()||$post->post_parent > 0): ?>
						<nav class="nav sub-nav">
							<ul>
								<span class="parent-link">
									<a href="<?php echo get_the_permalink(get_top_parent()); ?>">
											<?php echo get_the_title(get_top_parent()); ?>
									</a>
								</span>
								<?php 
									$args = array(
										'child_of' => get_top_parent(),
										'title_li' => ''
									);
									wp_list_pages( $args); 
								?>
							</ul>
						</nav>
						<div class="clr"></div>
					<?php endif; ?>
					<h2><?php the_title(); ?></h2>
					<p class="phone">1-800-555-5555</p>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php else: ?>
			<?php echo wpautop('Sorry, no posts found'); ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>