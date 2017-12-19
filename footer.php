<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naijasafe
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<?php get_sidebar('footer'); ?>
			</div>
			<div class="row">
				<div class="site-info">
					<span class="sep"></span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'naijasafe' ), 'naijasafe', '<a href="http://abeebola.com/about-me" rel="designer">Abeeb Ola</a>' ); ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="modal-bg">
	<?php do_action('naijasafe_load_modals'); ?>
</div>

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory')?>/assets/js/script.js?ver=1.0.5"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/scrollReveal.js"></script>

</body>
</html>
