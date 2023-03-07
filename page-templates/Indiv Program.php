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
		<main class="site-main" id="main" role="main" >
		

			<article class="section-tertiary-background">
				<div class="container-xl">
					<div id="coaching-grid-img_R1" class="indiv-programs-masthead-content standard-masthead-content pt-6 pb-6 col-md-10 offset-md-1 ">

						<section class="indiv-programs-masthead-text masthead-section ">
							<div class="indiv-programs-main-header standard-main-header display-1"><?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?></div>

								<?php if ( have_rows( 'introduction' ) ) : ?>
									<?php while ( have_rows( 'introduction' ) ) : the_row(); ?>
								<div class="indiv-programs-sub-statement standard-sub-statement"><h2><?php the_sub_field( 'sub_title' ); ?></h2></div>
								<div class="indiv-programs-text standard-text"><?php the_sub_field( 'introduction_text' ); ?></div>
						</section><!-- Section: Intro  -->
						<figure class="indiv-programs-masthead-image masthead-section ">
							<?php $introduction_image = get_sub_field( 'introduction_image' ); ?>
								<?php if ( $introduction_image ) : ?>
									<img src="<?php echo esc_url( $introduction_image['url'] ); ?>" alt="<?php echo esc_attr( $introduction_image['alt'] ); ?>" />
							<?php endif; ?>
						</figure>

							<?php endwhile; ?>
							<?php endif; ?>

					</div>
				</div>
			</article>
			<!-- coaching grid -ImgR1 -->

							<?php if ( have_rows( 'section 2' ) ) : ?>
						<?php while ( have_rows( 'section 2' ) ) : the_row(); ?>
					
			<article class="pt-6">
				<div class="container-xl">
					<div id="coaching-grid-img_L1" class="offset-md-1 col-md-10 indiv-programs-masthead-container ">
						<section class="indiv-programs-course-container standard-course-container section-white-background container-xl">
							<div class="indiv-programs1-intro standard-intro masthead-section">
							<?php if ( the_sub_field('section_title') ) : ?>
								<h2 class="standard-intro-headline"><?php the_sub_field( 'section_title' ); ?></h2>
							<?php endif ?>
								<?php the_sub_field( 'section_text' ); ?>
							</div>
						</section>

									<?php endwhile; ?>
								<?php endif; ?>	

					</div>

				</div>

			</article>			

		
		<section class="section-tertiary-background">
				<!-- Single Coaching Course -->
				<div class="indiv-programs-course-container standard-course-container container-xl pt-6">
					<p>Single Coaching Course</p>
					<div class="indiv-programs1-intro standard-intro masthead-section">
					<?php if ( have_rows( 'course_1' ) ) : ?>
						<?php while ( have_rows( 'course_1' ) ) : the_row(); ?>
						<div class="indiv-programs-course standard-course">
							<h3><?php the_field( 'courses_title' ); ?></h3>
									<h5 class="text-uppercase"><?php the_sub_field( 'course_title' ); ?></h5>
								<p><?php the_sub_field( 'course_description' ); ?>	
							<a href="<?php the_sub_field( 'button_url' ); ?>" class="btn btn-primary"><?php the_sub_field( 'button_label' ); ?></a href="">
						</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>		
			</section>








				<section id="indiv-programs-additional">
					<p>Course 2</p>
					<div class="indiv-programs-additional standard-course-container container-xl">
						<div class="indiv-programs-additional-course-content standard-course-content pt-2 pt-md-5 pb-2 pb-md-5 col-md-10 col-lg-10 offset-md-1 col-sm-12">

						<?php if ( have_rows( 'course_grid' ) ) : ?>
							
							<aside class="indiv-programs-additional-course standard-course">

							<?php while ( have_rows( 'course_grid' ) ) : the_row(); ?>

								<div class="indiv-course-titlearea">
								<?php if ( $course_image ) : ?>
			<img src="<?php echo esc_url( $course_image['url'] ); ?>" alt="<?php echo esc_attr( $course_image['alt'] ); ?>" />
			<?php endif; ?>
									<h6 class="indiv-course-title text-uppercase"><?php the_sub_field( 'course_title' ); ?></h6>
								</div>	
								<div class="indiv-course-timing"><?php the_sub_field( 'course_description' ); ?></div>
								<a href="<?php the_sub_field( 'button_url' ); ?>" class="btn btn-primary"><?php the_sub_field( 'button_label' ); ?></a>
								<?php endwhile; ?>
							</aside>
							<?php else : ?>
								<?php // No rows found ?>
						<?php endif; ?>


						</div>
					</div>

				</section><!-- Invididual Course List: Modals -->

				</div><!-- Coaching Grid -->

			<!--</article> Masthead -->

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
