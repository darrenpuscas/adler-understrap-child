<?php
/**
 * Template Name: Standard with Menu
 *
 * Template for a standard page with an opening menu area. (No template needed for a standard page without a menu).
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
								<div class="menu-section masthead-section menu-masthead-content pt-4 pt-md-6 pb-4 pb-md-3 col-md-10 offset-md-1">
									<div class="page-menu">
										<header class="entry-header why-adler-title">
											<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
										</header><!-- .entry-header -->
										<div class="page-menu-area">

											<div class="page-menu-one page-tab-menu mb-0 pt-3 pt-sm-3 pb-4 pt-md-2 pb-md-2">
												<div><h3 class="pb-2 pb-sm-1 pb-md-1">What we are about</h3></div>
												<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
													<li class="nav-item" role="presentation">    
														<div class="nav-link active" id="about-adler-tab" data-bs-toggle="tab" data-bs-target="#about-adler" type="button" role="tab" aria-controls="about-adler" aria-selected="true"><h6>About Adler</h6></button>
													</li>
													<li class="nav-item" role="presentation">
														<div class="nav-link" id="why-adler-tab" data-bs-toggle="tab" data-bs-target="#why-adler" type="button" role="tab" aria-controls="why-adler" aria-selected="false"><h6>Why Adler?</h6></button>
													</li>
													<li class="nav-item" role="presentation">
														<button class="nav-link" id="community-initiatives-tab" data-bs-toggle="tab" data-bs-target="#community-initiatives" type="button" role="tab" aria-controls="community-initiatives" aria-selected="false"><h6>Community Initiatives</h6></button>
													</li>
												</ul>
		
												<div class="tab-content" id="myTabContent">
													<div class="tab-pane fade show active" id="about-adler" role="tabpanel" aria-labelledby="about-adler-tab">About adler text. about adler text. about adler text. about adler text. about adler text. about adler text. about adler text.</div>
													<div class="tab-pane fade" id="why-adler" role="tabpanel" aria-labelledby="why-adler-tab"><li>A hands-on, applied approach characterizes all of our courses and programs</li>
<li>Our instructors are all practitioners, bringing their professional experience into the classroom, as well as training in the field</li>
<li>Our objective is to ensure students successfully secure employment or to assist them in their goal of developing further in the job they have</li>
<li>We have a compact student body, enabling us to develop individualized courses and training</li>
<li>We provide the option of taking individual graduate courses to retrain, upgrade, or remediate for registration or certification</li>
<li>ADLER programs and courses reflect current professional standards, and our students are informed about the latest changes in legislation or accreditation</li>
<li>We’ve developed weekend and intensive schedules that are ideal for working adults, with a curriculum built on the principles of adult education</li>
<li>We offer the only graduate program in Psychology that is tailored for individuals from a non- traditional psychology background</li>

</div>
													<div class="tab-pane fade" id="community-initiatives" role="tabpanel" aria-labelledby="community-initiatives-tab">Com init...</div>
												</div>
											</div>

											<div class="page-menu-two page-tab-menu pb-0 pt-3 pt-sm-3 pb-5 pt-md-5 pb-md-4">
												<h3 class="pb-2 pb-sm-1 pb-md-1">Who we are</h3>
												<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
													<li class="nav-item" role="presentation">    
														<div class="nav-link active" id="faculty-adler-tab" data-bs-toggle="tab" data-bs-target="#faculty-adler" type="button" role="tab" aria-controls="faculty-adler" aria-selected="true"><h6>Mission and Values</h6></button>
													</li>
													<li class="nav-item" role="presentation">
														<div class="nav-link" id="administration-adler-tab" data-bs-toggle="tab" data-bs-target="#administration-adler" type="button" role="tab" aria-controls="administration-adler" aria-selected="false"><h6>Our Administration</h6></button>
													</li>
													<li class="nav-item" role="presentation">
														<button class="nav-link" id="history-adler-tab" data-bs-toggle="tab" data-bs-target="#history-adler" type="button" role="tab" aria-controls="history-adler" aria-selected="false"><h6>Our history</h6></button>
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
									<div class="standard-masthead-image masthead-section">
										<img src="http://adlerup.local/wp-content/uploads/grad-image.png" class="cerfification-masthead" alt="">
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
