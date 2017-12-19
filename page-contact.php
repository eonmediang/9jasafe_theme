<?php
/**
 * Template name: Contact page
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package naijasafe
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section style="background: url('<?= get_template_directory_uri().'/assets/img/blurrrryy.jpg' ?>') center center no-repeat; background-size: cover;">
				<div class="container">
					<div class="row" data-scroll-reveal="enter bottom over 0.4s after 0.2s">
						<h1 class="text-center sponsor-us">
							Contact us
						</h1>
					</div><!-- row -->
				</div><!-- container -->
			</section>
			<section class="home-section">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<script>
		var tx = document.getElementById('y-msg');
		tx.setAttribute('rows', '4');
	</script>

<?php get_footer();