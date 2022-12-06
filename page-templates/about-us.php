<?php
/**
 * Template Name: About Us
 *
 * Template for the About Us.
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

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section id="standard-masthead" class="standard-with-menu">
						
						<div class="container-xl">
							<div class="row">
								<div class="menu-section masthead-section why-adler-masthead-content pt-4 pt-md-6 pb-4 pb-md-3 col-md-10 offset-md-1">
									<div class="page-menu">
										<header class="entry-header why-adler-title">
											<?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
											<!-- class="entry-title -->
										</header><!-- .entry-header -->
										<div class="page-menu-area">

										<!-- <div class="standard-masthead-image masthead-section">
										<p>May move this image either on top of tabs or below and have it a landscape orientation</p>
										<p>Or overlay text on landscape photo similar to homepage</p> 
										
										<img src="http://adlerup.local/wp-content/uploads/slider1.jpg" class="cerfification-masthead mb-1" alt="">
									</div> -->



											<div class="page-menu-one page-tab-menu mb-0 pt-3 pt-sm-3 pb-4 pt-md-2 pb-md-2">
												<div><h3 class="pb-2 pb-sm-1 pb-md-1">What we are about</h3></div>
												<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
													<li class="nav-item" role="presentation">    
														<div class="nav-link active" id="about-adler-tab" data-bs-toggle="tab" data-bs-target="#about-adler" type="button" role="tab" aria-controls="about-adler" aria-selected="true"><h5>About Adler</h5></button>
													</li>
													<li class="nav-item" role="presentation">
														<div class="nav-link" id="why-adler-tab" data-bs-toggle="tab" data-bs-target="#why-adler" type="button" role="tab" aria-controls="why-adler" aria-selected="false"><h5>Why Adler?</h5></button>
													</li>
													<li class="nav-item" role="presentation">
														<button class="nav-link" id="community-initiatives-tab" data-bs-toggle="tab" data-bs-target="#community-initiatives" type="button" role="tab" aria-controls="community-initiatives" aria-selected="false"><h5>Community Initiatives</h5></button>
													</li>
												</ul>
		
												<div class="tab-content" id="myTabContent">
													<div class="tab-pane fade show active" id="about-adler" role="tabpanel" aria-labelledby="about-adler-tab">ADLER is a graduate professional school offering a variety of academic programs which prepare students to provide services in the areas of mental health and wellbeing. Our graduates pursue careers in psychology (clinical and counselling psychology), professional coaching, psychotherapy, and mental health counselling.

													<blockquote>
														Built on Adlerian values of mutual respect and collaboration, ADLER continues a 40-year tradition of Adlerian education and training in Ontario.
														Why choose ADLER?  Unique amongst private educational institutions, we offer a professional Master of Psychology* degree (with full consent of the Ontario Ministry of Advanced Education and Skills Development) making ours the only such degree in Ontario.  A hands-on, applied approach in all our courses and programs.
													</blockquote>

													ADLER instructors are all practitioners, bringing their professional experience into the classroom, as well as training in the field. Our objective is to ensure students successfully secure employment or assist them in their goal of developing further in the job they have.  We have a compact student body, enabling us to develop individualized courses and training. 

													We provide the option of taking individual graduate courses to retrain, upgrade, or remediate for registration or certification. ADLER programs and courses reflect current professional standards, and our students are informed about the latest changes in legislation or accreditation.  We’ve developed weekend and intensive schedules that are ideal for working adults, with a curriculum built on the principles of adult education.

													*This program is offered under the written consent of the Ontario Minister of Advanced Education and Skills Development for the period from August 8, 2017 to August 7, 2022. Prospective students are responsible for satisfying themselves that the program and the degree will be appropriate to their needs (e.g., acceptable to potential employers, professional licensing bodies or other educational institutions).
												</div>
													<div class="tab-pane fade" id="why-adler" role="tabpanel" aria-labelledby="why-adler-tab"><li>A hands-on, applied approach characterizes all of our courses and programs</li>
													<li>Our instructors are all practitioners, bringing their professional experience into the classroom, as well as training in the field</li>
													<li>Our objective is to ensure students successfully secure employment or to assist them in their goal of developing further in the job they have</li>
													<li>We have a compact student body, enabling us to develop individualized courses and training</li>
													<li>We provide the option of taking individual graduate courses to retrain, upgrade, or remediate for registration or certification</li>
													<li>ADLER programs and courses reflect current professional standards, and our students are informed about the latest changes in legislation or accreditation</li>
													<li>We’ve developed weekend and intensive schedules that are ideal for working adults, with a curriculum built on the principles of adult education</li>
													<li>We offer the only graduate program in Psychology that is tailored for individuals from a non- traditional psychology background</li>

												</div>
													<div class="tab-pane fade" id="community-initiatives" role="tabpanel" aria-labelledby="community-initiatives-tab">At ADLER we believe strongly in social entrepreneurship and giving back to the community.  We have a number of ongoing initiatives:

													<h6>ALFREDS Community Mental Health Services</h6>
													In collaboration with ALFREDS (Adler Learning Federation for Research, Education, and Delivery of Services), advanced ADLER students provide psychological, psychotherapy, and life coaching services to the community. Practicum students provide testing, psychotherapy, referral, coaching, and consulting services, as appropriate to their qualifications, to community-based or organizational clients under supervision of a qualified professional faculty member. Clients may be self-referred or referred by agencies or by health care or social services practitioners.
													<h6>Life Plan - Coaching for At-Risk Youth</h6>
													Life Plan is a collaboration between ADLER and the PACT Urban Peace Program (Participation, Acknowledgement, Commitment & Transformation) to support youth involved with the justice system.
													Through Life Plan, youth age 14 – 18, who are deemed higher risk repeat offenders, receive life coaching from ADLER coaching graduates and advanced coaching students. As well, ADLER provides scholarships to youth involved in the PACT Urban Peace Program who show a desire and aptitude to become certified coaches and in turn, give back to their community through coaching.

													<h6>The Julien Project</h6>
													The Julien Project is an innovative skill development and health promotional program
													for marginalized populations. Through therapeutic gardening, urban agriculture and harvesting programs, The Julien Project enhances the participants’ relationship with the land, their community, and supports development of their inner strengths. Within an environment of dignity and respect, The Julien Project provides tailored horticultural therapy and skill development programs for vulnerable adult and youth populations.
													The programs address issues of healthy community building and resilience. Through horticulture, the participants develop their cognitive abilities and social skills while also developing increased self-sufficiency and confidence. Within a model of participatory education, the project embraces a philosophy of experiential learning, peer teaching, increased capacity and inclusion.
													<h6>Brands for Canada</h6>
													brands-for-canada-iconBrands for Canada (BFC) is excited to partner with ADLER Graduate Coaching to support a new and exciting employment training program, the BFC EDGE program. This new program is a new and exciting employment training program, providing training to individuals with disabilities in the area of soft skills and life skills which are critical for securing and sustaining long-term employment. The program provides training in the areas of: EQ skills, leading with your strengths, communication, conflict resolution, managing your disability in the workplace, interview and job search support, and stress management. As part of the BFC EDGE program, participants receive ten coaching sessions from a professional ADLER coach who will provide support throughout the classroom experience, delivering a competitive EDGE in today’s job market. ADLER has also generously provided an opportunity to one EDGE graduate per year, to receive a scholarship for the Coach training program at ADLER.

													Cindy Roemer
													Programs Director, Brands for Canada
</div>
												</div>
											</div>

											<div class="page-menu-two page-tab-menu pb-0 pt-3 pt-sm-3 pb-5 pt-md-5 pb-md-4">
												<h3 class="pb-2 pb-sm-1 pb-md-1">Who we are</h3>
												<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
													<li class="nav-item" role="presentation">    
														<div class="nav-link active" id="faculty-adler-tab" data-bs-toggle="tab" data-bs-target="#faculty-adler" type="button" role="tab" aria-controls="faculty-adler" aria-selected="true"><h5>Mission and Values</h5></button>
													</li>
													<li class="nav-item" role="presentation">
														<div class="nav-link" id="administration-adler-tab" data-bs-toggle="tab" data-bs-target="#administration-adler" type="button" role="tab" aria-controls="administration-adler" aria-selected="false"><h5>Our Administration</h5></button>
													</li>
													<li class="nav-item" role="presentation">
														<button class="nav-link" id="history-adler-tab" data-bs-toggle="tab" data-bs-target="#history-adler" type="button" role="tab" aria-controls="history-adler" aria-selected="false"><h5>Our history</h5></button>
													</li>
												</ul>
		
												<div class="tab-content" id="myTabContent">
													<div class="tab-pane fade show active" id="faculty-adler" role="tabpanel" aria-labelledby="faculty-adler-tab">Mission & Values</div>
													<div class="tab-pane fade" id="administration-adler" role="tabpanel" aria-labelledby="administration-adler-tab">
														DB Query to Admin CPT
														<?php
														// WP_Query arguments
														$args = array(
															'post_type'              => array( 'staff' ),
														);

														// The Query
														$query = new WP_Query( $args );

														// The Loop
														if ( $query->have_posts() ):												
															while ( $query->have_posts() ):
																$query->the_post();
														?>
																<p><?php the_ID() ?></p>
																<p><?php the_title() ?></p>
																<p><?php //the_excerpt() ?> </p>
																<p><?php the_content() ?></p>
														<?php
														endwhile;
														 else: ;
															echo 'no staff found';
														endif;
														// Restore original Post Data
														wp_reset_postdata();
													?>
													</div>
													<div class="tab-pane fade" id="history-adler" role="tabpanel" aria-labelledby="history-adler-tab">adler history text</div>
												</div>
											</div>
											
										</div>
										
									</div>	

								</div>	
							</div>
							<div class="entry-content col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-0 pb-3 container-xl">
								<?php
								the_content();
								understrap_link_pages();
								?>
							</div><!-- .entry-content -->
						</div>
					</section>


					<div class="page-menu-one">






				</main><!-- #main -->

			</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
