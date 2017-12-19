<?php
/**
 * Template name: 9jaSAFE 2016
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package naijasafe
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="n2016">
				<div class="social-glide md left">
					<p class="shout">
						9jaSAFE 2016
					</p>
				</div>
			</section>
			<section class="home-section" style="background: url('<?= get_template_directory_uri().'/assets/img/p51.png'; ?>');">
				<div class="container">
					<div class="row">
						<article class="desc">
							<div class="col-md-8 col-md-offset-2">
								<iframe class="yvideo" src="https://www.youtube.com/embed/_O_vhNWuIcU" frameborder="0" allowfullscreen></iframe>
								<!-- <span class="caption">Watch Short highlight of the 2015 edition of 9jaSAFE Awards. The event took place on the 4th of September 2015 at the Lagos Oriental Hotel, Victoria Island.</span> -->
							</div>
						</article>
					</div><!-- row -->
				</div>
			</section>
			<div class="container-fluid">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</div><!-- container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();