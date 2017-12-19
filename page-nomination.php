<?php
/**
 * Template name: Nomination
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package naijasafe
 */

get_header(); 
$status = ( isset( $_COOKIE['vti'] ) ) ? 1 : 0;
?>

	<div id="primary" class="content-area">
		<div id="voter-status" style="display: none;">
			{"user_is_registered":<?=$status?>}
		</div>
		<main id="main" class="site-main" role="main">
			<section class="nom-j" style="background: url('<?= get_template_directory_uri().'/assets/img/p51.png' ?>');">
				<div class="container">
					<div class="row" data-scroll-reveal="enter bottom over 0.5s after 0.3s">
						<div class="col-md-4">
							<img src="<?= get_template_directory_uri().'/assets/img/helmet-sm.png' ?>" alt="" class="img-responsive">
						</div>
						<div class="col-md-8">
							<h2 class="cgold"> 9jaSAFE Awards 2017 Nominations &amp; Descriptions </h2>
							<p>Nominations for the 9jaSAFE Awards 2017 have ended.</p>

							<p>Thank you all for participating in the nomination process. </p>
							<p>To participate in the Award Night / Dinner or for other enquiries, please contact <span style="color:#639e1d;">awards@safetyrecordng.com</span> or call <span style="color:#639e1d;">08036979392</span></p>
							<p>Below are 2017 Award categories and nomination criteria.</p>
							<!--<div class="imp">
								<p>Please, kindly note that, this is a sensitive award as it concerns health and safety, carefully read the criteria before nominating for any category</p>
							</div>-->
						</div>
					</div><!-- row -->
				</div>
			</section>
			<section class="home-section" style="background-color: #eaeaea;">
				<div class="container">
					<div class="row">
						<h2 class="text-center" style="padding-bottom: 10px;">
							List of Awards <br /><small>(Click to expand)</small>
						</h2>
						<!-- <div class="col-sm-6">
							<p>1. 9jaSAFE Guardian Angel Awards</p>
							<p>2. 9jaSAFE Corporate Pacesetter Awards</p>
							<p>3. 9jaSAFE Torch Bearers Award</p>
							<p>4. 9jaSAFE Company of the Year Corporate, Multi-site or Single-site</p>
							<ul style="list-style: none; padding: 4px 0 4px 20px;">
								<li>a. Hospitality (Category A – Hotels. Category B- Event Centres)</li>
								<li>b. Manufacturing</li>
								<li>c. Banking</li>
								<li>d. Telecommunication</li>
								<li>e. Non-profit/NGO</li>
								<li>f. Iron and Steel</li>
								<li>g. Construction</li>
								<li>h. Oil and Gas <strong>(upstream and downstream)</strong></li>
								<li>i. Banking &amp; Insurance</li>
								<li>j. Aviation</li>
								<li>k. Maritime</li>
							</ul>
						</div>
						<div class="col-sm-5 col-sm-offset-1">
							<p>5. 9jaSAFE Achievement Awards</p>
							<p>6. 9jaSAFE Fleet Safety Awards</p>
							<p>7. 9jaSAFE Best Use of Social Media - (Category A: Group) (Category B: Individual)</p>
							<p>8. 9jaSAFE HSE Manager Awards (Category A, B &amp; C)</p>
							<p>9. 9jaSAFE Merit Awards</p>
							<p>10. 9jaSAFE Commendation Awards</p>
							<p>11. 9jaSAFE School Safety Award</p>
						</div> -->
					</div><!-- row -->
				</div>
			</section>
			<section class="home-section">
				<div class="container">
					<!-- Guardian Angels -->
					<div class="nom-cat">
						<header>
							<span>1. The 9jaSAFE Guardian Angel Awards</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>
								This is a public office holder/executive who exhibits total dedication and commitment to the protection of people, property, resources, and the workplace/environment through participation and personal involvement in safety activities geared towards promoting and raising safety consciousness.
							</p>
							<p>This is an individual who has shown above-average support to health and safety. It could be a Head of a Government Ministry, Agency or Parastatal who has made remarkable difference through unique initiatives in promoting health and safety OR an Executive/Managerial Safety professional with at least 26 years of work experience. Preference will be given to individuals that are influencing safety policy.</p>
							<p><strong>Nominator: </strong>May be nominated by an individual or organization with an in-depth knowledge of the nominee’s accomplishments.</p>
							<p><strong>Criteria for Nomination: </strong>Award category primarily seeks to reward the actions of those who would otherwise go unnoticed, thereby motivating others to take up the torch and help shape a safer society for all. Nominee does not have to be a safety professional.
							The nominee must have fulfilled at least two (2) of the following requirements:
							</p>
							<p>
								<ol type="I">
								 	<li>Documented involvement in promoting safety consciousness through innovative programs; with distinctive purpose and goals to enhance safety awareness</li>
								 	<li>Has pioneered/formulated/ enduring safety policy or culture, thereby protecting colleagues or the general public</li>
								 	<li>Has influenced the passage of safety policy or moved a motion for the passage of safety law</li>
								 	<li>Has supported organization of safety campaigns, seminars or programs</li>
								 	<li>Designed concept, process, or some other notable invention within the safety disciplines</li>
								 	<li>Shown a significant support for the promotion of safety education and discipline;</li>
								</ol>
								Other significant accomplishments may be submitted for review.
							</p>
						</div>
					</div><!-- nom-cat -->
					<!-- Corporate pacesetter award -->
					<div class="nom-cat">
						<header>
							<span>2. Corporate Pacesetter Award</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>This celebrates the pioneer effort of organizations that have by their corporate culture set standards of safety compliance for others to follow.</p>
							<p><strong>Nominator:</strong> May be nominated by an individual or organization with an in-depth knowledge of the nominee’s accomplishments.</p>
							<p><strong>Criteria for Nomination: </strong>Company or corporation that pioneered safety standards in Nigeria and is still actively contributing to the protection of people, property, resources, and the environment through innovative programs and shows distinctive concern for the well-being of its employees and local community.</p>
						</div>
					</div><!-- nom-cat -->
					<!-- Torch Bearers -->
					<div class="nom-cat">
						<header>
							<span>3. 9jaSAFE Torch Bearers</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>Nominees in this category are safety professionals who lead or inspire others in working towards a valued goal. This award celebrates individuals who have been nominated by members of the general public impacted by their (nominee’s) acts in promoting/raising safety awareness in their world of contact (workplace, place of abode, religious environment etc.) within the award calendar year prior to receipt of nominations.</p>
							<p><strong>Nominator: </strong>May be nominated by an individual or organization with an in-depth knowledge of the nominee’s accomplishments.</p>
							<p><strong>Criteria for Nomination: </strong>Nominee must be a practicing safety professional with membership of any of the recognized safety organizations/institutes in Nigeria with pass mark in any 3 of the listed below:
							</p>
							<p>
								<ol type="I">
								 	<li>Can document a unique initiative taken between April 2016 till date;</li>
								 	<li>Participation and contribution at national/local conferences on safety</li>
								 	<li>Social media / Online campaign to raise safety consciousness</li>
								 	<li>Authored book(s)/article(s)/text(s) in his/her field of expertise, significant in nature</li>
								 	<li>Designed concept, process, or some other notable invention within the safety disciplines;</li>
								 	<li>Shown a significant support for the promotion of safety education and discipline;</li>
								 	<li>Other significant accomplishments may be submitted for review.</li>
								</ol>
							</p>
						</div>
					</div><!-- nom-cat -->
					<!-- Company of the year -->
					<div class="nom-cat">
						<header>
							<span>4. 9jaSAFE Company of the Year Corporate, Multi-site or Single-site</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>This award recognizes an organization for outstanding health, safety and environmental program achievement. The company must have implemented a program that contributed towards the establishment of a safe and healthful environment by having built a culture that demonstrates commitment to continuous improvement of health, safety and environmental standards and will move the organization towards the goal of zero loss of human and material resources. </p>
							<p><strong>Nominator: </strong>May be nominated by an individual or organization with an in-depth knowledge of the nominee’s accomplishments.</p>
							<p><strong>Criteria for Nomination: </strong>Must have a pass mark in any 3 of the listed requirements below:
							</p>
							<p>
								<ol type="I">
								 	<li>Commitment to health, safety and environmental protocols within the workplace including: systematic management of occupational health and safety; injury management (including return-to-work programs); and systematic identification, assessment and control strategies for hazards.</li>
								 	<li>Demonstration of best-practice approaches and achievements in health, safety and environmental management, which may include: - improved efficiency and ability to identify and abate unsafe conditions and practices; - elimination of or reduction in hazards and/or exposures, accidents, injuries or fatalities; - leadership in fostering timely and safe return to work; - solutions to a specific safety management problem or significant safety program improvement; increased safety knowledge, skills or awareness within the workforce through program communication; - implementation of effective safety and health resourcing strategies.</li>
								 	<li>Developing and creating a safety culture inclusive of all employees and activities in   consultation with relevant workplace parties (e.g. employees, third-party contractors, management, unions, etc.) and, where appropriate, with outside organizations.</li>
								 	<li><span class="indented">
								 		<p>(a). No fatal accident</p>
								 		<p>(b). No stop work order</p>
								 		<p>(c). No pending convictions</p>
								 	</span></li>
								</ol>
								Other significant accomplishments may be submitted for review.
							</p>
						</div>
					</div><!-- nom-cat -->
					<!-- Achievements Award -->
					<div class="nom-cat">
						<header>
							<span>5. 9jaSAFE Achievements Awards</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>These awards are non-competitive and are based on the organization's individual occupational health and safety performance assessed against the judging criteria.</p>
							<p>Entrants must provide evidence of a good health and safety management system by answering key performance questions and supporting the answers with a concise portfolio of relevant documentation.</p>
							<p><strong>Nominator: </strong>May be nominated by an individual or organization with an in-depth knowledge of the nominee’s accomplishments.</p>
							<p><strong>Criteria for Nomination: </strong>You should enter this award if your organization has introduced new or developed existing initiatives to improve the safety and wellbeing of staff members. Initiatives should have been implemented and results reported within the past one year.</p>
						</div>
					</div><!-- nom-cat -->
					<!-- Fleet Safety -->
					<div class="nom-cat">
						<header>
							<span>6. 9jaSAFE Fleet Safety Awards</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>The 9jaSAFE Fleet Safety Awards reward excellence and encourage improvement in the key area of managing occupational road risk. These awards provide recognition and encouragement for improvement in performance standards in this vital operational area.</p>
							<p><strong>Nominator: </strong>May be nominated by an individual or organization with an in-depth knowledge of the nominee’s accomplishments.</p>
							<p><strong>Criteria for Nomination: </strong>Entries to these prestigious awards are invited from organisations running any type of fleet, who have worked to improve safety or have most effectively managed its occupational road risks over the past 12 months, thereby protecting passengers, drivers, other road users etc. . 
</p>
							<p>Entries are judged on a combination of verifiable historical performance data, along with evidence of an effective and cohesive programme for managing fleet risk.</p>
							<p><strong>N.B: </strong>Awards are made at in three categories </p>
						</div>
					</div><!-- nom-cat -->
					<!-- Social Media -->
					<div class="nom-cat">
						<header>
							<span>7. 9jaSAFE Best Use of Social Media</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>This awards seeks to reward those who have used online platforms and technologies (especially social media) to pass information, create professional synergy, enhance intellectual capacity development, job opportunity etc. and generally raise safety awareness and advanced the safety profession online.</p>
							<p>It is divided into two (2) categories: Group and Individual.</p>
							<p><strong>Nominator: </strong>May be nominated by an individual or organization with an in-depth knowledge of the nominee’s accomplishments as per stated criteria.</p>
							<strong>Criteria for Nomination: </strong>
							<p>Category A - Group: Any group that has enhanced professional development, mentorship, information sharing, provided job opportunity for members and has generally created impact within the profession. Group in this category includes WhatsApp group, Facebook group, LinkedIn group etc. This group should have been active for at least 6 months prior to the award nomination.</p>
							<p>Category B - Individual: This category seeks to recognize individuals who have innovatively used online technologies to raise the safety consciousness of the general public. For consideration are individual Facebook pages, Twitter handles, Instagram pages, GooglePlus profiles etc.</p>
						</div>
					</div><!-- nom-cat -->
					<!-- HSE Manager -->
					<div class="nom-cat">
						<header>
							<span>8. HSE Manager of the Year Awards</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>The HSE Manager of the Year Award is presented annually to a safety manager that has made significant contributions through the implementation of an effective CASHES management program at work. This award recognizes the contribution of the safety manager in fostering a culture of Health and Safety in the workplace.</p>
							<p>An example of a worthy winner would be a person who identified an opportunity to improve workplace practices and engaged with other employees and the employers to design/develop a change or improvement.</p>
							<p>He/she then takes the lead in promoting and gaining the support for the changes and continues to promote the change through all levels of the organization. The nominee must be a member of the nation’s leading safety professional bodies and must submit a letter of endorsement from his company.</p>
							<p>Category A: HSE Director - Multinational Organizations or Corporations</p>
							<p>Category B: HSE Manager - National, Multi-site</p>
							<p>Category C: HSE Manager - National, Single-site</p>
							<p><strong>Nominator: </strong>May be nominated by a present or past colleague (subordinate or superior) or organization, associate or body with an in-depth knowledge of the nominee’s accomplishments.</p>
							<p><strong>Criteria for Nomination: </strong>Nominee must have initiated a safety initiative/program in his/her place of employment. Nominee must have developed or implemented an effective CASHES management system for an organization. Nominee’s organization must be able to provide documentary evidence of satisfactory HSE record traceable to nominee’s effort.</p>
						</div>
					</div><!-- nom-cat -->
					<!-- Personality -->
					<!-- <div class="nom-cat">
						<header>
							<span>9. 9jaSAFE Personality of the Year</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>This award celebrates an individual with the most unique Health and Safety innovations/initiatives which have impacted not only on their work site/environment but on safety professionals and practitioners alike and the general public. The winner will be drawn from the Torch Bearers Award and HSE Manager Award category.</p> -->
							<!-- <span class="nom-btn">
								<input type="button" value="Nominate" data-cat="personality" class="btn bgold" />
							</span> -->
						<!-- </div> -->
					<!-- </div>nom-cat -->
					<!-- Merit Awards -->
					<div class="nom-cat">
						<header>
							<span>9. 9jaSAFE Merit Awards</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>This award celebrates organizations that go ‘above and beyond’ the call of duty based on recommendation ONLY by selected credible national professional bodies (ISPoN, SOEHPON, WSO,  ASSE etc) <strong>OR</strong> state/government agencies (Ministry of Labour and Employment, FRSC, Lagos State Safety Commission etc)  for their visible role in promoting Health and Safety. </p>
							<p>This category also recognizes local businesses that have integrated Health and Safety as part of their core business.</p>
							<p><strong>Nominator: </strong>Professional safety bodies and state/federal government safety regulatory agencies.</p>
							<p><strong>Criteria for Nomination: </strong>Visible role (sponsorship, support etc) in promoting health and safety culture. No fatality in workplace, No stop work order. No pending conviction in court.</p>
							<!-- <span class="nom-btn">
								<input type="button" value="Nominate" data-cat="merit" class="btn bgold" />
							</span> -->
						</div>
					</div><!-- nom-cat -->
					<!-- Commendation Award -->
					<div class="nom-cat">
						<header>
							<span>10. 9jaSAFE Commendation Award</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<p>This award recognizes certain organizations and individuals as a formal recommendation or commendation for their notable contributions to HSE in Nigeria. To be nominated, the individual must have played a significant role in advancing Health and Safety in the nation. Organizations to be nominated must have played an active and visible role in safeguarding the workplace and protecting the environment.</p>
							<p><strong>Nominator: </strong>Recipients of this award are nominated by only certified safety professionals and shortlisted by the Awards Committee.</p>
							<p><strong>Criteria for Nomination: </strong>To be considered for this award, a nominee must have met at least three (3) of below-stated conditions:
							</p>
							<p>
								<ol type="I">
								 	<li>Documented and consistent contribution to the development of the field of HSE in Nigeria for the past 5 years</li>
								 	<li>Taken visible role in formulating, initiating or supporting environment-protection efforts</li>
								 	<li>Taken an active role and being a strong advocate of safety and health in Nigeria</li>
								 	<li>Influenced the formation of safety policy in Nigeria</li>
								 	<li>Contributed to building body of knowledge in HSE in Nigeria or abroad</li>
								 	<li>Mentored many safety professionals</li>
								</ol>
							</p>
<!-- 							<span class="nom-btn">
								<input type="button" value="Nominate" data-cat="commendation" class="btn bgold" />
							</span> -->
						</div>
					</div><!-- nom-cat -->
					<!-- School Safety -->
					<div class="nom-cat">
						<header>
							<span>11. 9jaSAFE School Safety Award</span><i class="fa fa-chevron-circle-down arrow"></i>
						</header>
						<div class="body indented">
							<h3>Award Selection Criteria</h3>
							<p>In choosing the recipients of the School Safety Awards, preference is given to the nominee's achievements in the year prior to receipt of nominations. That is April 2016 to date.</p><p>&nbsp;</p>
							<h4>The selection criteria:</h4>
							<p>A school in Nigeria that has demonstrated significant improvement in Safety in their School(s) by having at least 3 of the following in place:</p>
							<p>
								<ul>
								 	<li>Health and Safety Policy and/or manual</li>
								 	<li>Risk assessments for at least 5 tasks and activities</li>
								 	<li>Policies on at least 3 of the following Security, transport, playground safety, incident reporting, emergency procedures and child protection</li>
								 	<li>A sick bay and fully stocked First Aid Box</li>
								 	<li>Fire Risk Assessments and Fire Extinguishers in strategic locations</li>
								 	<li>Staff members have been trained on at least Basic Health and Safety</li>
								 	<li>Evidence of at least 1 health, safety and/or wellbeing event for their students</li>
								</ul>
							</p><p>&nbsp;</p>
							<h4>Eligibility Criteria</h4>
							<ul>
							 	<li>Nominees must be schools in Nigeria</li>
							 	<li>Awards will only be granted on merit</li>
							 	<li>Groups of schools will not be eligible as this award is for individual schools or schools with multiple locations. If a school has several locations, the award will be given to the location(s) with the most outstanding achievements.</li>
							 	<li>Current members of the Award board are not eligible</li>
							 	<li>The number of times a school is nominated does not affect selection.</li>
							 	<li>Finalists chosen must have scored an average of 60% from the above selection criteria.</li>
							</ul>
						</div>
					</div><!-- nom-cat -->
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
	'pacesetter',
	];

appendModals( $modals );

// var_dump( 3429 << 46 | 1 << 36 | 7075733 << 0 );
// var_dump( 351 << 30 | 10258 << 0 );

// var_dump( 'Shard ID: '.( ( 376883390482 >> 30 ) & ( 0xFFFF ) ) );
// var_dump( 'Local ID: '.( ( 376883390482 >> 0 ) & ( 0x3FFFFFF ) ) );

get_footer();