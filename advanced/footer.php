		<div class="side">
			<?php if(is_active_sidebar('sidebar') && !is_front_page()): ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>
	</div>
	<footer class="main-footer">
		<div class="container">
			<div class="f_left">
				<p>&copy; 2017 - Advanced WP Theme</p>
			</div>
			<div class="f_right">
				<?php wp_nav_menu( array(
					'theme_location'  => 'footer',
				) ); ?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>