<?php
/**
 * Template name: 9jaSAFE 2015
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package naijasafe
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="n2015">
				<div class="social-glide md left">
					<p class="shout">
						9jaSAFE 2015
					</p>
				</div>
			</section>
			<section class="home-section" style="background: url('<?= get_template_directory_uri().'/assets/img/p5.png'; ?>');">
				<div class="container">
					<div class="row">
						<article class="desc">
							<div class="col-md-4">
								<p>The first edition of this landmark award event was held on the 4th of September, 2015 at the Oriental Hotel, Lekki Lagos.</p>
								<p>It was executed excellently and discussions centered around deepening the opportunities yet to be explored in the HSE industry.</p>
								<p>It was a convergence of HSE professionals majorly organisations and stakeholders in Manufacturing, Oil and Gas, Power and Utilities, Emergency response, Telecommunication, Aviation, Banking, Transportation among others.</p>
							</div>
							<div class="col-md-7 col-md-offset-1">
								<iframe class="yvideo" src="https://www.youtube.com/embed/kKwPP_0XMhU" frameborder="0" allowfullscreen></iframe>
								<span class="caption">Watch Short highlight of the 2015 edition of 9jaSAFE Awards. The event took place on the 4th of September 2015 at the Lagos Oriental Hotel, Victoria Island.</span>
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