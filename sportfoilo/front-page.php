<?php
get_header();
?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main">

		<div id="front-page-about" class="front-page-block">
			<div>
				<h2><a href="">About Me</a></h2>
				<div class="row">
					<figure class="col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/photo.jpg" alt="serena's photo">
						<figcaption><span>Serena</span> Liao</figcaption>
					</figure>
					<div class="col-md-8">
						<p>A learner who likes solving puzzles but also strict to the rules, ending up being a web developer, now armed herself with all kinds of tools and enjoying figuring out how to build an application. </p>
						<p>She likes to try new things and is proud of her ability to think fast and learn fast. With a touch for the codes, she considers web development as Lego building: know what to build and how to build, then start collecting pieces and assembling them. It is both challenging and entertaining.</p>
						<p>Yep, that is me, Serena. And I do full-stack.</p>
					</div>
				</div>	
			</div>
		</div>

		<div id="front-page-works" class="front-page-block">
			<div>
				<h2><a href="<?php echo get_post_type_archive_link( 'projects' ); ?>">Latest Works</a></h2>
				<div class="projects row justify-center">
					<?php $projects = get_projects(); $i=0; ?>
					<?php while ( $projects->have_posts() && $i<3 ) : $projects->the_post(); ?>
					<div class="col-md col-sm-12">
						<div class="project" style="background-image: url(<?php the_post_thumbnail_url('project-thumb'); ?>);">
							<a href="<?php echo get_permalink(); ?>">
								<div class="project-intro" >
									<h3><?php the_title(); ?></h3>
								</div>
							</a>
						</div>
					</div>		
					<?php $i++; endwhile; ?>
				</div>
				<a class="button" href="<?php echo get_post_type_archive_link( 'projects' ); ?>">View All</a>
			</div>
		</div>

		<div id="front-page-contact" class="front-page-block">
			<div>
				<h2><a href="">Contact Me</a></h2>
				<?php get_template_part('template-parts/page/sociallinks'); ?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
