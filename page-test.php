<?php
/**
 * Template name: Testing
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
							BECOME A SPONSOR
						</h1>
					</div><!-- row -->
				</div><!-- container -->
			</section>
			<section class="home-section" style="background-color: #f7f7f7;">
				<div class="container">
					<div class="row">
						<div class="col-sm-8" style="padding-top: 20px;">
							<iframe class="yvideo" src="https://www.youtube.com/embed/_O_vhNWuIcU" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="col-sm-4">
							<h3>5 reasons to sponsor 9jaSAFE Awards</h3>
							<ul class="sp-reasons">
								<li><p>Access a unique platform for your corporate social responsibility activity</p></li>
								<li><p>Demonstrate your brand’s commitment to occupational health and workplace safety</p></li>
								<li><p>Gain exposure to an audience of millions of individuals in the lead up to the event</p></li>
								<li><p>Access increased brand awareness amongst health and safety professionals / practitioners and the Nigerian workers in general</p></li>
								<li><p>Associate your brand with excellence in health and safety</p></li>
							</ul>
						</div>							
					</div><!-- row -->
				</div>
			</section>
			<section class="home-section about-gala">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<h1 class="text-center">9jaSAFE Awards 2017 Gala Dinner / Award night</h1>
							<div class="toast lg" data-scroll-reveal="enter bottom over 0.4s after 0.2s">
								<header></header>
								<div class="content">
									<p>Scheduled to take place on Friday September 8, 2017 at the ball room of the prestigious Lagos Oriental Hotel, Lekki, the awards Gala Dinner showcases amazing examples of commitments to achieving a high standard of health and safety practice in the workplace.</p>
								</div>
							</div><!-- toast -->
							<div class="toast lg right" data-scroll-reveal="enter bottom over 0.4s after 0.2s">
								<header></header>
								<div class="content">
									<h3>The Audience</h3>
									<p>In 2016, nomination was received from 15 states across the nation with 345 nominees from different sector of the economy with 220 attendance at the gala night.</p>
									<p>Over 170 industry professionals attended the maiden edition of the award / gala night in 2015 to network, celebrate success and enjoy the high profile evening.</p>
									<p>The event and all its build up and after events will be broadcasted on major TV and Radio stations across Nigeria including social media.</p>
								</div>
							</div><!-- toast -->
							<div class="toast fx" data-scroll-reveal="enter bottom over 0.4s after 0.2s">
								<header></header>
								<div class="content">
									<h3>Aims &amp; Objectives</h3>
									<ul class="sp-reasons">
										<li><p>To promote and raise the much-needed awareness on Health Safety and Environment across the Nation through visible publicity using all marketing platform.</p></li>
										<li><p>Identifying and rewarding individuals and corporate organization effort in workplace safety through performance recognition</p></li>
										<li><p>Promoting and improving the safety culture in organizations in Nigeria emerging economy</p></li>
										<li><p>Motivate an existing system in achieving more within the HSE environment</p></li>
										<li><p>Finalists' names go in the Nigeria Safety Hall of Fame Book of Record to be recognised as an important benchmark for reference in the safety sector.</p></li>
									</ul>
								</div>
							</div><!-- toast -->
						</div>
					</div>
				</div>
			</section>
			<section class="home-section" style="background: url('<?= get_template_directory_uri().'/assets/img/p5b.png' ?> ');">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<img src="/wp-content/themes/naijasafe/assets/img/become-sponsor.png" alt="" class="img-responsive b-sponsor">
						</div>
						<div class="col-sm-8" style="color: #fff;">
							<h2 style="color: #fff;">Marketing the 9jaSAFE Award and your brand</h2>
							<p>The publicity planned for the 2017 national Safety Awards will begin earnestly on March 2017 and has been designed to provide sponsors and partners with significant exposure to millions of people around the nation.</p>
							<p>Advertising will be placed in online and offline media (National dailies, Social media, radio and TV) to reach a range of audiences, further raising the profile of the 9jaSAFE Awards along with its sponsors and partners. Regular and dedicated marketing will also be directed at members of the various safety governing bodies and stakeholders nationwide.</p>
							<p>Sponsorship ranges from N5,000,000 to 500,000.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="home-section">
				<div class="container">
					<p>For enquiries / sponsorship please contact:</p>
					<p>The Chief Coordinating Officer, 9jaSAFE Awards, Femi Da-silva on 08036979392</p>
					<p>Email: <a href="mailto:awards@safetyrecordng.com">awards@safetyrecordng.com</a>, femidasilva17@gmail.com</p>
					<p>Twitter: @SafetyRecordNG</p>
					<p>Facebook: SafetyRecord</p>
					<strong>9jaSAFE Awards</strong> is a registered trademark of <strong>Safety Record Newspaper company</strong>.
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

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