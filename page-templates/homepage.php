<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'home' );
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div id="full-width-page-wrapper" class="wrapper">
			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section id="home-masthead">
						<div class="masthead-container min-vh-100 container-xl">
							<div class="row">
								<div class="home-masthead-content col-md-10 offset-md-1">
									<div class="home-masthead-text masthead-section">
										<div class="main-statement display-1"><h1>Are you looking to become a professional in human systems and services?</h1></div>
										<div class="sub-statement display-3"><h3>We are a graduate professional school offering a variety of academic programs which prepare students to provide services in the areas of mental health and wellbeing.</h3></div>
										<button class="btn btn-primary">Learn more about Adler</button>							
									</div>	
									<div class="home-masthead-image masthead-section">
	
										<img src="http://adlerup.local/wp-content/grad-image.png" class="home-masthead" alt="">
									</div>
								</div>
							</div>
						</div>
					</section>

					<section id="why-adler">
						<div class="whyadler-container container-xl pt-6 pb-6 pt-md-7 pb-md-7 pt-lg-8 pb-lg-8">
							<div class="row">
								<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-sm-12">
									<h2 class="text-uppercase">Why Adler?</h2>
									<ul>
										<li>A hands-on, applied approach characterizes all of our courses and programs</li>
										<li>Our instructors are all practitioners, bringing their professional experience into the classroom, as well as training in the field</li>
										<li>Our objective is to ensure students successfully secure employment or to assist them in their goal of developing further in the job they have</li>
										<li>We have a compact student body, enabling us to develop individualized courses and training</li>
										<li>We provide the option of taking individual graduate courses to retrain, upgrade, or remediate for registration or certification</li>
										<li>ADLER programs and courses reflect current professional standards, and our students are informed about the latest changes in legislation or accreditation</li>
										<li>We’ve developed weekend and intensive schedules that are ideal for working adults, with a curriculum built on the principles of adult education</li>
										<li>We offer the only graduate program in Psychology that is tailored for individuals from a non- traditional psychology background</li>
									</ul>
									<button class="btn btn-primary">Learn more about why you should choose Adler</button>
								</div>	
							</div>
						</div>	
					</section>
					<section id="home-infoboxes">
						<div class="home-infoboxes-container container-xl pt-6 pb-4">
							<div class="row">
								<div class="home-infoboxes-area col-xsm-12 col-sm-12 col-lg-12 offset-lg-0">
									<article class="home-infobox home-infobox1">

										<div class="infobox-textarea">
											<div class="home-infobox-title">
												<div class="home-infobox-image home-infobox-icon1"><img src="http://adlerup.local/wp-content/news-icon.png" alt=""></div>
												<h3>News</h3>
											</div>
											<li>News story number 1 News story number 1 News story number 1</li>
											<li>News Story #2 News Story #2 News Story #2 News Story #2</li>
											<li>And now a third story And now a fourth story And now a fourth story</li>
										</div>	
										<button class="btn btn-secondary">More News</button>
									</article>
									
									<article class="home-infobox home-infobox2">

										<div class="infobox-textarea">
											<div class="home-infobox-title">
												<div class="home-infobox-image home-infobox-icon3"><img src="http://adlerup.local/wp-content/event-icon.png" alt=""></div>
												<h3>Events</h3>
											</div>
											<li>News story number 1 News story number 1 News story number 1</li>
											<li>News Story #2 News Story #2 News Story #2 News Story #2</li>
											<li>And now a third story</li>
										</div>
										<button class="btn btn-secondary">More Events</button>
									</article>
									<article class="home-infobox home-infobox3">
										<div class="infobox-textarea">
											<div class="home-infobox-title">
												<div class="home-infobox-image home-infobox-icon4"><img src="http://adlerup.local/wp-content/contact-icon.png" alt=""></div>
												<h3>Contact Adler</h3>
											</div>
											<li></li>
											<li></li>
											<li></li>
										</div>	
										<button class="btn btn-secondary">Important Documents</button>
									</article>
								</div>
							</div>
						</div>		
					</section>
				</main><!-- #main -->

			</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
