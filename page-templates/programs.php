<?php
/**
 * Template Name: Programs
 *
 * Template for the programs page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div id="full-width-page-wrapper" class="wrapper">



	<div class="col-md-12 content-area" id="primary">

		<main class="site-main" id="main" role="main">

					<section id="programs-masthead">
						<div class="programs-masthead-container container-xl">
							<div class="row">
								<div class="programs-masthead-content pt-4 pt-md-6 pt-lg-7 pb-2 pb-2 col-md-10 offset-md-1">
								
									<div class="programs-masthead-text masthead-section">
										<div class="programs-main-header standard-main-header display-1"><h1>Our Programs and Courses</h1></div>
										<div class="programs-text standard-text"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p></div>
										<div class="programs-course-mobile-image programs-course-section">
											<img src="http://adlerup.local/wp-content/uploads/2022/07/grad-image.png" class="cerfification-masthead" alt="">
										</div>
									</div>	
								</div>
							</div>
						</div>
					</section>

			<div class="container-lg">

				<div class="row">

					<section id="programs" class="">
							<div class="programs-course-content standard-course-content pt-2 pt-md-6 pb-6 col-sm-12"> 
								<div class="programs-course">
									<div class="programs-course-text standard-course-text">
										<h4 class="text-uppercase">Master of Psychology (MPsy)</h5>
										<p>ADLER’s Master of Psychology degree* prepares students for registration as a Psychological Associate with the Ontario College of Psychologists, in clinical and counselling practice areas. The MPsy degree provides students with the knowledge, skills, and attitudes necessary in preparing them to offer psychological services in a variety of diagnostic, therapeutic, and assessment settings.</p>	
										<div class="programs-details">
											<h6 class="programs-details-title">ADLER MPsy Courses:</h6>
											<ul>
												<li>SED UT PERSPICIATIS</li>
												<li>NEQUE PORRO ENIM IPSAM</li>
											</ul>
										</div>
										<button class="btn btn-primary programs-button">Learn more</button>

									</div>
									<div class="programs-course-image programs-course-section">
										<img src="http://adlerup.local/wp-content/uploads/2022/09/cert-smiling.png" class="cerfification-masthead" alt="">
									</div>
								</div>	
								
								<div class="programs-course">
									<div class="programs-course-text standard-course-text">
										<h4 class="text-uppercase">Master of Psychology (MPsy)</h5>
										<p>ADLER’s Master of Psychology degree* prepares students for registration as a Psychological Associate with the Ontario College of Psychologists, in clinical and counselling practice areas. The MPsy degree provides students with the knowledge, skills, and attitudes necessary in preparing them to offer psychological services in a variety of diagnostic, therapeutic, and assessment settings.</p>	
										<div class="programs-details">
											<h6 class="programs-details-title">ADLER MPsy Courses:</h6>
											<ul>
												<li>SED UT PERSPICIATIS</li>
												<li>NEQUE PORRO ENIM IPSAM</li>
											</ul>
										</div>
										<button class="btn btn-primary programs-button">Learn more</button>

									</div>
									<div class="programs-course-image programs-course-section">
										<img src="http://adlerup.local/wp-content/uploads/2022/09/cert-smiling.png" class="cerfification-masthead" alt="">
									</div>
								</div>

								<div class="programs-course">
									<div class="programs-course-text standard-course-text">
										<h4 class="text-uppercase">Master of Psychology (MPsy)</h5>
										<p>ADLER’s Master of Psychology degree* prepares students for registration as a Psychological Associate with the Ontario College of Psychologists, in clinical and counselling practice areas. The MPsy degree provides students with the knowledge, skills, and attitudes necessary in preparing them to offer psychological services in a variety of diagnostic, therapeutic, and assessment settings.</p>	
										<div class="programs-details">
											<h6 class="programs-details-title">ADLER MPsy Courses:</h6>
											<ul>
												<li>SED UT PERSPICIATIS</li>
												<li>NEQUE PORRO ENIM IPSAM</li>
											</ul>
										</div>
										<button class="btn btn-primary programs-button">Learn more</button>

									</div>
									<div class="programs-course-image programs-course-section">
										<img src="http://adlerup.local/wp-content/uploads/2022/09/cert-smiling.png" class="cerfification-masthead" alt="">
									</div>
								</div>

								<div class="programs-course">
									<div class="programs-course-text standard-course-text">
										<h4 class="text-uppercase">Master of Psychology (MPsy)</h5>
										<p>ADLER’s Master of Psychology degree* prepares students for registration as a Psychological Associate with the Ontario College of Psychologists, in clinical and counselling practice areas. The MPsy degree provides students with the knowledge, skills, and attitudes necessary in preparing them to offer psychological services in a variety of diagnostic, therapeutic, and assessment settings.</p>	
										<div class="programs-details">
											<h6 class="programs-details-title">ADLER MPsy Courses:</h6>
											<ul>
												<li>SED UT PERSPICIATIS</li>
												<li>NEQUE PORRO ENIM IPSAM</li>
											</ul>
										</div>
										<button class="btn btn-primary programs-button">Learn more</button>

									</div>
									<div class="programs-course-image programs-course-section">
										<img src="http://adlerup.local/wp-content/uploads/2022/09/cert-smiling.png" class="cerfification-masthead" alt="">
									</div>
								</div>
										
									
								</div>
								
					</section>
				</div>

			</div>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
