<?php 

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if (have_posts()):
				while ( have_posts() ) : the_post();
			?>
				<div class="work">
					<?php the_title( $before = '<h2>', $after = '</h2>' ); ?>
					<?php if ('' !== get_the_post_thumbnail() && is_single()): ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
							</a>
						</div>
					<?php endif; ?>
					<?php print get_post_meta( $post->ID, $key = '', $single = false ); ?>
				</div>
			<?php
				endwhile; // End of the loop.
			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

 ?>