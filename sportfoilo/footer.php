<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sportfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<nav id="footer-navigation" class="main-navigation footer-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<?php get_template_part('template-parts/page/sociallinks'); ?>
		<div class="site-info">
			<p>© <?php echo date('Y'); ?> - Serena Liao. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
