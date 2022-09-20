<?php
/**
 * Template Name: Individual Program
 *
 * Template for the individual program pages.
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

					<article id="indiv-programs-masthead">
						<div class="indiv-programs-masthead-container container-xl">
							<div class="row">
								<div class="indiv-programs-masthead-content standard-masthead-content pt-6 pb-6 col-md-10 offset-md-1">
									<section class="indiv-programs-masthead-text masthead-section">
										<div class="indiv-programs-main-header standard-main-header display-1">
											<!-- Pull in title -->
											<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
											<!-- <h1>Certificate in CBT for Clinical Practitioners</h1> -->
										</div><!-- end class="indiv-programs-main-header standard-main-header display-1" -->
										
										<div class="indiv-programs-sub-statement standard-sub-statement"><h5>Program Overview</h5></div>
											<!-- ACF - sub_heading -->

										<div class="indiv-programs-text standard-text">
											<!-- ACF ??? -->
											<p>The online CBT program is a platform for learning the skills of cognitive behavioural therapy. Approved by the Academy of Cognitive Therapy and taught by Beck-trained clinicians, this program is comprehensive in nature. It is designed with a broad audience of students and practice types in mind. Please note that oral and written fluency in English is required. During their course of studies, students proceed through written lectures, talks, case studies, video demonstrations and professional practice exercises. Students will submit work for each of the 12 modules and will receive personalized, attentive feedback all throughout the course. Course content is varied and made up of lectures, viewings, demonstrations, supplemental readings, and professional/reflective exercises. There are no tests or exams, however, there are assignments for each module, which must be submitted online. Upon completion and submission of all assignments, and following their review by the teaching team, students will receive a Certificate of Completion at the end of each course.</p>
											<p>The program is divided into two levels. In Level 1, CBT - Foundations, students learn the fundamentals of the CBT modality. In Level 2, CBT - Advanced Practice, students learn how to apply these interventions by choosing one of three streams (students can take more than one stream if they wish). Students will leave the course with a broad base of understanding in this important modality and can go on to apply their training across a wide variety of contexts.</p>
											<p>All courses within the program require 40 hours of study. Students may choose to end their training after Level 1, or progress onward to one of three streams in Level 2. Upon completion of each course, students will have obtained strong academic foundations and skills-based knowledge, as well as a toolkit of worksheets available for duplication to use in their practice. Please note that to be eligible for Level 2, students must have completed Level 1 (or an approved equivalent, see below). The cost for each course is $895 + HST and these must be completed within a maximum of 12 weeks. </p>
										</div> <!-- end class="indiv-programs-text standard-text" -->
									
									</section><!-- end class="indiv-programs-masthead-text masthead-section" -->
									
									<section class="indiv-programs-masthead-image masthead-section">
										<img src="http://adlerup.local/wp-content/uploads/grad-image.png" class="cerfification-masthead" alt="">
									</section>
								</div><!-- end masthead content -->
							</div><!-- end row -->
						</div><!-- end masthead container -->
					</article>

					<article id="indiv-programs-1">

						<div class="indiv-programs-course-container standard-course-container container-xl pt-6">
							<div class="row">
								<section class="indiv-programs1-intro standard-intro masthead-section">
									<div class="indiv-programs-intro-headline standard-intro-headline display-3"><h3>CBT Courses</h3></div>
								</section>
								<div class="indiv-programs-course-content standard-course-content pb-4 col-md-10 col-lg-10 offset-md-1 col-sm-12"> 
									<section class="indiv-programs-course-image certification-course-section">
										<img src="http://adlerup.local/wp-content/uploads/grad-image.png" class="cerfification-masthead" alt="">
									</section>
									<section class="indiv-programs-course standard-course">
										<h5 class="text-uppercase">LEVEL 1: The Fundamentals of Cognitive Behavioural Therapy</h5>
											<p>This course is a thorough introduction to the foundations of practice in cognitive behavioural therapy across the lifespan, including with adults, children and youth. Designed with the cultural and contextual implications of a wide variety of students in mind, students will begin practice right away, putting to use a course-pack of 20 worksheets (the CBT “interventions”) that can be duplicated for practice.</p>
											<p>REQUIRED TEXTBOOK: Josefowitz, Nina and Myran, David (2021). CBT Made Simple: A Clinician’s Guide to Practicing Cognitive Behavioural Therapy (2nd ed.). Oakland, CA: New Harbinger Publications</p>	
										<button class="btn btn-primary">Register</button>
									</section>
								</div><!-- end column -->
							</div><!-- end row -->
						</div><!-- end container  -->
					</article>

					<article id="indiv-programs-additional">

						<div class="indiv-programs-additional standard-course-container container-xl">
							<div class="row">
								<div class="indiv-programs-additional-course-content standard-course-content pt-2 pt-md-5 pb-2 pb-md-5 col-md-10 col-lg-10 offset-md-1 col-sm-12"> 
										<section class="indiv-programs-additional-course standard-course">
											<div class="indiv-course-titlearea">
												<img src="http://adlerup.local/wp-content/uploads/noun-leaf.png">
												<h6 class="indiv-course-title text-uppercase">STREAM A: CBT With Mental Health and Addiction</h6>
											</div>	
											<div class="indiv-course-timing">40 Hours of Study - Maximum of 12 Weeks</div>
											<div class="indiv-course-cost">$895 + HST</div>
											<div class="indiv-course-details"><p>The Foundations of Professional Coaching offers a rigorous grounding in the ADLER coaching model via an interactive, stimulating environment of hands-on experience.</p></div>	
											<button class="btn btn-primary">Register</button>
										</section>

										<section class="indiv-programs-additional-course standard-course">
											<div class="indiv-course-titlearea">
												<img src="http://adlerup.local/wp-content/uploads/noun-leaf.png">
												<h6 class="indiv-course-title text-uppercase">STREAM B: CBT With Complex Mental Health</h6>
											</div>
											<div class="indiv-course-timing">40 Hours of Study - Maximum of 12 Weeks</div>
											<div class="indiv-course-cost">$895 + HST</div>
											<div class="indiv-course-details"><p>The Foundations of Professional Coaching offers a rigorous grounding in the ADLER coaching model via an interactive, stimulating environment of hands-on experience.</p></div>	
											<button class="btn btn-primary">Register</button>
										</section>

										<section class="indiv-programs-additional-course standard-course">
											<div class="indiv-course-titlearea">
												<img src="http://adlerup.local/wp-content/uploads/noun-leaf.png">
												<h6 class="indiv-course-title text-uppercase">STREAM C: CBT with Families, Children and Youth</h6>
											</div>
											<div class="indiv-course-timing">40 Hours of Study - Maximum of 12 Weeks</div>
											<div class="indiv-course-cost">$895 + HST</div>
											<div class="indiv-course-details"><p>The Foundations of Professional Coaching offers a rigorous grounding in the ADLER coaching model via an interactive, stimulating environment of hands-on experience.</p></div>	
											<button class="btn btn-primary">Register</button>
										</section>
								</div><!-- end column -->
							</div><!-- end row -->
						</div><!-- end container -->
					</article>

					<article id="indiv-programs-faq-main">
						<div class="indiv-programs-faq-container container-xl pt-3 pb-3 pt-8 pb-6">
							<div class="row">
								<section class="indiv-programs-faq standard-faq col-md-8 col-lg-8 offset-md-2 col-sm-12">
									<!-- <h5 class="text-uppercase">What is unique about the ADLER School of Professional Coaching?</h5>
									<p>With locations around the world, ADLER offers a globally respected, in-depth coach training program and model that can be applied to virtually any coaching situation. We prepare our coaches to use depth of knowledge and best practices in coaching, while finding their own unique style and voice as a coach. ADLER takes the lead in providing coach training that is grounded in theory, informed by research, and is at the forefront of defining professionalism in coaching.  At ADLER we believe that a combination of six criteria makes our Coach Training Programs unique and effective: depth, breadth, applied learning, experiencing your own coaching, in-person contact, and quality of trainers and mentors. We are committed to high quality training. Our faculty of top coaches draws on extensive experience with coaching and coach training to create a solid foundation for this fast growing profession, as well as to provide rich experiential learning in proven coaching techniques, making us a leader in the field of coach training.</p> -->
									<details>
										<summary class="text-uppercase"><h5>What is Unique About the Adler School of Professional Coaching?</h5></summary>
										With locations around the world, ADLER offers a globally respected, in-depth coach training program and model that can be applied to virtually any coaching situation. We prepare our coaches to use depth of knowledge and best practices in coaching, while finding their own unique style and voice as a coach. ADLER takes the lead in providing coach training that is grounded in theory, informed by research, and is at the forefront of defining professionalism in coaching. At ADLER we believe that a combination of six criteria makes our Coach Training Programs unique and effective: depth, breadth, applied learning, experiencing your own coaching, in-person contact, and quality of trainers and mentors. We are committed to high quality training. Our faculty of top coaches draws on extensive experience with coaching and coach training to create a solid foundation for this fast growing profession, as well as to provide rich experiential learning in proven coaching techniques, making us a leader in the field of coach training.
									</details>
								</section>
								<section class="indiv-programs-faq standard-faq col-md-8 col-lg-8 offset-md-2 col-sm-12">
								<h5 class="text-uppercase">What is Coaching</h5>
								<p>With locations around the world, ADLER offers a globally respected, in-depth coach training program and model that can be applied to virtually any coaching situation. We prepare our coaches to use depth of knowledge and best practices in coaching, while finding their own unique style and voice as a coach.
								ADLER takes the lead in providing coach training that is grounded in theory, informed by research, and is at the forefront of defining professionalism in coaching.  At ADLER we believe that a combination of six criteria makes our Coach Training Programs unique and effective: depth, breadth, applied learning, experiencing your own coaching, in-person contact, and quality of trainers and mentors.
								We are committed to high quality training. Our faculty of top coaches draws on extensive experience with coaching and coach training to create a solid foundation for this fast growing profession, as well as to provide rich experiential learning in proven coaching techniques, making us a leader in the field of coach training.</p>
								</section>	
								<section class="indiv-programs-faq standard-faq col-md-8 col-lg-8 offset-md-2 col-sm-12">
									<h5 class="text-uppercase">Why ADLER?</h5>
									<p>At ADLER, we see coaching as a profession that distinguishes itself by helping people discover how to bring their choices and actions more inline with their unique “best self” This in turn helps them to connect more creatively with a deeper human desire to make contributions for the betterment of society. Our hope and intention is to train coaches who also see their work as a creative response to this noble challenge.</p>
								</section>	
								<section class="indiv-programs-faq standard-faq col-md-8 col-lg-8 offset-md-2 col-sm-12">
									<h5 class="text-uppercase">Our Facility</h5>
									<p>ADLER coaching faculty are ICF accredited, practicing professional coaches. They draw on their experiences with both coaching and training to develop sound foundations for this fast-growing profession to provide up-to-date practical techniques. Our faculty are part of what makes the coaching program at ADLER a true leader in the realm of coach training.</p>
								</section>	
							</div><!-- end row -->
						</div><!-- end container -->
					</article>
					

				</main><!-- #main -->

			</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
