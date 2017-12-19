<?php
/**
 * Template name: Tickets
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
                            GET YOUR TICKETS
                        </h1>
                    </div><!-- row -->
                </div><!-- container -->
            </section>
            <section class="home-section" style="background-color: #f7f7f7;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
									<form action="/wp-content/themes/naijasafe/ajax/ticket.php" class="form" id="gticketform">
										<header><h2 class="text-center" style="margin-top: 0">Enter your details</h2></header><hr>
										<div class="row">
											<div class="form-group col-sm-6">
												<label for="fullname" class="sr-only">Full name</label>
												<p>Full name</p>
												<input class="form-control required" type="text" id="fullname" name="fullname" placeholder="Full name" required>
											</div>
											<div class="form-group col-sm-6">
												<label for="comp_org" class="sr-only">Company</label>
												<p>Company/Organisation</p>
												<input class="form-control" type="text" id="comp_org" name="comp_org" placeholder="Your company or organisation">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-6">
												<label for="phone" class="sr-only">Phone number</label>
												<p>Phone number</p>
												<input class="form-control" type="text" id="phone" name="phone" placeholder="Phone number" maxlength="15" required>
											</div>
											<div class="form-group col-sm-6">
												<label for="email" class="sr-only">Email</label>
												<p>Email</p>
												<input class="form-control" type="email" id="email" name="email" placeholder="Email or website (if available)" maxlength="30">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-6">
												<label for="em_web" class="sr-only">Website if available</label>
												<p>Website (if available)</p>
												<input class="form-control" type="text" id="website" name="website" placeholder="Website" maxlength="30">
											</div>
											<div class="form-group col-sm-6">
												<label for="ticket_type" class="sr-only">Ticket type</label>
												<p>Ticket type</p>
												<select name="ticket_type" id="ticket_type" class="dropdown form-control">
													<option value="Regular">Single ticket</option>
													<option value="Table for 5">Table for 5</option>
													<option value="Table for 10">Table for 10</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<button class="fw bdr0 btn bblue submit">
												<span class="txt">Get ticket</span>
												<span class="log-spin" style="display: none"></span>
											</button>
										</div>
									</form>
									<p class="text-center">All ticket are pre-booked. Limited seats available</p>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
							<h2 class="text-center mgt0">Ticket details</h2><hr>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Type</th>
										<th>Price (₦)</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>Regular</td><td>₦25,000.00</td></tr>
									<tr><td>Table for 5</td><td>₦300,000.00</td></tr>
									<tr><td>Table for 10</td><td>₦500,000.00</td></tr>
								</tbody>
							</table>
							<p>Kindly pay/transfer to <br>
							<strong>Safety Records Newspaper</strong><br> 
							<strong>Account no:</strong> 1016417372.&nbsp;&nbsp;
							<strong>Bank:</strong> UBA</p>
							<p>Send a text or call <strong>Deji</strong> on 09071089333 to notify of payment. 
							Once payment is confirmed,  you will get your ticket within 24 hours.</p>
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

<?php get_footer();