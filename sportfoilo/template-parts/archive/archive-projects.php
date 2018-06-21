<div class="archive-projects row justify-center">
<?php
/* Start the Loop */
while ( have_posts() ) : the_post();
	if ($post->post_parent==0): ?>
		<!-- echo $post->post_title;
		echo get_post_type(); -->
		<div class="col-md-4 col-sm-12">
			<div class="project" style="background-image: url(<?php the_post_thumbnail_url('project-thumb'); ?>);">
				<a href="<?php echo get_permalink(); ?>">
					<div class="project-intro" >
						<h3><?php the_title(); ?></h3>
					</div>
				</a>
			</div>
		</div>		
	<?php
	endif;
	// get_template_part( 'template-parts/content/content', get_post_type() );

endwhile;
?>
</div>