<?php
/**
 * Template name: Sponsorship
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package naijasafe
 */

get_header(); ?>

<style>
	.bgc {
		background: url('<?= get_template_directory_uri().'/assets/img/blurrrryy.jpg' ?>') center center no-repeat; background-size: cover;
	}

	#main > div { position: absolute; top: 0; bottom: 0;}
	.a {left: 0;}
	.b {right: 0;}

	@media screen and (max-width: 768px) {
		.bgc {height: auto;}
	}
</style>

	<div id="primary" class="content-area">
		<div class="container-fluid">
			<main id="main" class="row" role="main">
				<div class="a bgc col-sm-4">
					<div data-scroll-reveal="enter bottom over 0.4s after 0.2s">
						<h1 class="text-center sponsor-us">
							BECOME A SPONSOR
						</h1>
					</div>
				</div>
				<div class="b col-md-8" style="overflow: auto;">
					<section class="home-section" style="background-color: #f7f7f7;">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<p>9jaSAFE Award is an event that people who attend do not forget. Being a sponsor enables you to gain respect, increase brand awareness and credibility from our guests, our vast network, your potential customers and the Nigerian workers in general.</p>
									<p>Having your brand featured on our collateral prior to, on the event day and post event expands your awareness base – frequency breeds familiarity and puts you at the front of the minds of our delegates.</p>
								</div><hr>				
							</div><!-- row -->
						</div>
					</section>
					<section class="home-section">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<?php
									while ( have_posts() ) : the_post();

										get_template_part( 'template-parts/content', 'page' );

										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;

									endwhile; // End of the loop.
									?>
								</div>						
							</div>
						</div>
					</section>
					<section class="home-section" style="background: url('<?= get_template_directory_uri().'/assets/img/p5b.png' ?> ');">
						<div class="container-fluid">
							<div class="row">
								
							</div>
						</div>
					</section>
					<section class="home-section">
						<div class="container-fluid">
							<p>For enquiries / sponsorship please contact:</p>
							<p>The Chief Coordinating Officer, 9jaSAFE Awards, Femi Da-silva on 08036979392</p>
							<p>Email: <a href="mailto:awards@safetyrecordng.com">awards@safetyrecordng.com</a>, femidasilva17@gmail.com</p>
							<p>Twitter: @SafetyRecordNG</p>
							<p>Facebook: SafetyRecord</p>
							<strong>9jaSAFE Awards</strong> is a registered trademark of <strong>Safety Record Newspaper company</strong>.
						</div>
					</section>
				</div>
			</main><!-- #main -->
		</div>
	</div><!-- #primary -->


	<script>
		document.getElementById('y-msg').setAttribute('rows', 5);
	</script>

<?php 

$modals = [
	'guardian',
	'torch-bearer',
	'company-year',
	'achievements',
	'fleet-safety',
	'social-media',
	'personality',
	'hse-manager',
	'merit',
	'commendation',
	'school-safety',
	];

appendModals( $modals );

get_footer();