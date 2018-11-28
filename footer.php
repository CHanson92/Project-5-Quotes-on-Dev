<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->
			
			<!-- #post-## -->
			

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
					<p><?php printf( 'Proudly brought to you by' ) ?> <span><a href='https://www.github.com/CHanson92'><?php printf( 'Chris Hanson' ); ?></a></span></p>
				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
