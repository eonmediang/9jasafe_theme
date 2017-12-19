<?php
/**
 * Template name: Homepage
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package naijasafe
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="home-jumbotron" style="background: url('<?= get_template_directory_uri().'/assets/img/jumb-img.jpg' ?> ') center top fixed no-repeat;">
			<div class="social-glide right">
				<ul>
					<li class="link" data-scroll-reveal="enter right over 0.2s after 0.35s">
						<a href="//facebook.com/safetyrecord" target="_blank" class="fb">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li class="link" data-scroll-reveal="enter right over 0.25s after 0.35s">
						<a href="//twitter.com/safetyrecordng" target="_blank" class="twtr">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="link" data-scroll-reveal="enter right over 0.3s after 0.35s">
						<a href="//instagram.com/safetyrecord" target="_blank" class="insta">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li class="link" data-scroll-reveal="enter right over 0.35s after 0.35s">
						<a href="https://www.linkedin.com/company/nigeria-safety-award-for-excellence-9jasafe-awards-" target="_blank" class="linkedin">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<section class="nom-action" style="background: url('<?= get_template_directory_uri().'/assets/img/p5b.png' ?> ');">
					<div class="container">
						<div class="row">
							<!-- <div class="col-md-5">
								<p>Nominations have ended. </p>
								<p><small>Thanks for your participation</small></p>
							</div> -->
							<div class="col-md-8 col-md-offset-2">
								<a href="/nominations" class="btn btn-lg bgold">
									View nomination critera
								</a>
								<a href="/tickets" class="btn btn-lg bgold pull-right">
									Get your tickets
								</a>
							</div>
							
						</div><!-- row -->
					</div>
				</section>
			</div><!-- row -->
			<div class="row">
				<div class="container">
					<div class="row">
						<main id="main" class="site-main col-sm-8" role="main">
							<section id="welcome" class="home-section">
								<h1 class="text-center">
									Welcome to Nigeria Safety Award for Excellence (9jaSAFE) Hall of Fame 2017 Awards
								</h1>
								<div class="row">
									<div class="home-tube clearfix" style="background: url('<?= get_template_directory_uri().'/assets/img/p51.png' ?>');">
										<div class="col-sm-10 col-sm-offset-1">
											<iframe class="yvideo" src="https://www.youtube.com/embed/1Oh1FtSMdM8" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4" data-scroll-reveal="enter bottom over 0.5s after 0.3s" style="margin-bottom: 30px;">
										<img src="<?= get_template_directory_uri().'/assets/img/2017-logo.png' ?>" alt="9jaSAFE Awards 2017" class="img-responsive">
									</div>
									<div class="col-sm-6 col-sm-offset-1" data-scroll-reveal="enter right over 0.5s after 0.3s">
										<p>9jaSAFE Awards, which has been described by Health, Safety and Environmental (HSE) professionals/stakeholders as the most prestigious Safety Award in Nigeria, now in its third edition, is set up to be Africa’s independent awards safety event, recognizing the outstanding performances/initiatives of Companies /Organization, Individuals/groups, Schools/institutions towards promoting and raising Safety Consciousness.</p>
									</div>
									<div class="col-sm-12 b-quote" data-scroll-reveal="enter bottom over 0.5s after 0.3s">
										<p>Over 170 industry professionals attended the maiden edition of the award/gala night in 2015 and In 2016, nomination was received from 15 states across the nation with 345 nominees from different sectors of the economy with 220 attendance at the gala night held at banquet hall of the prestigious Lagos Oriental Hotel, Lekki Victoria Island to network, celebrate success and enjoy the high profile evening hosted by A-list popular Nigerian comedian SEYI LAW.</p>
									</div>
								</div><!-- row -->
							</section>
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'homepage' );

							endwhile; // End of the loop. ?>

						</main><!-- #main -->
						<aside class="col-sm-4 sidebar" style="padding: 20px 20px 0 10px; background-color: #fff;">
							<?php get_sidebar('home'); ?>
						</aside>
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- row -->
		</div><!-- container-fluid -->
	</div><!-- #primary -->

<?php get_footer();