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

			<section id="indiv-programs-masthead">
				<div class="indiv-programs-masthead-container container-xl">
					<div class="indiv-programs-masthead-content standard-masthead-content pt-6 pb-6 col-md-10 offset-md-1">
						<div class="indiv-programs-masthead-text masthead-section">
							<div class="indiv-programs-main-header standard-main-header display-1"><?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?></div>

							<?php if ( have_rows( 'introduction' ) ) : ?>
								<?php while ( have_rows( 'introduction' ) ) : the_row(); ?>
								<div class="indiv-programs-sub-statement standard-sub-statement"><?php the_sub_field( 'sub_title' ); ?></div>
									<div class="indiv-programs-text standard-text"><?php the_sub_field( 'introduction_text' ); ?></div>
									
							</div><!-- Section  -->
							<div class="indiv-programs-masthead-image masthead-section">
								<?php $introduction_image = get_sub_field( 'introduction_image' ); ?>
									<?php if ( $introduction_image ) : ?>
										<img src="<?php echo esc_url( $introduction_image['url'] ); ?>" alt="<?php echo esc_attr( $introduction_image['alt'] ); ?>" />
									<?php endif; ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
					</div>
				</div>
			</section>

			<section id="indiv-programs-1">
				<div class="indiv-programs-course-container standard-course-container container-xl pt-6">
					<div class="indiv-programs1-intro standard-intro masthead-section">
						<?php if ( have_rows( 'section 2' ) ) : ?>
						<?php while ( have_rows( 'section 2' ) ) : the_row(); ?>
						<h3 class="standard-intro-headline"><?php the_sub_field( 'section_title' ); ?></h3>
						<?php the_sub_field( 'section_text' ); ?>
						<div class="indiv-programs-intro-headline standard-intro-headline display-3">
						</div>
					</div>

					<div class="indiv-programs-course-content standard-course-content pb-4 col-md-10 col-lg-10 offset-md-1 col-sm-12">
							<?php $section_image = get_sub_field( 'section_image' ); ?>
								<?php if ( $section_image ) : ?>
							<div class="indiv-programs-course-image certification-course-section">
								<img src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
							</div>
									<?php endif; ?>
								<?php endwhile; ?>
						</div>
							<?php endif; ?>	
					</div>
				</section>


				<section class="section-tertiary-background">
				<div class="indiv-programs-course-container standard-course-container container-xl pt-6">
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
				<div class="indiv-programs-additional standard-course-container container-xl">
					<div class="indiv-programs-additional-course-content standard-course-content pt-2 pt-md-5 pb-2 pb-md-5 col-md-10 col-lg-10 offset-md-1 col-sm-12">


					<?php if ( have_rows( 'course_2' ) ) : ?>
						<div class="indiv-programs-additional-course standard-course">

						<?php while ( have_rows( 'course_2' ) ) : the_row(); ?>

							<div class="indiv-course-titlearea">
								<img src="http://adlerup.local/wp-content/uploads/noun-leaf.png">
								<h6 class="indiv-course-title text-uppercase"><?php the_sub_field( 'course_title' ); ?></h6>
							</div>	
							<div class="indiv-course-timing"><?php the_sub_field( 'course_description' ); ?></div>
							<a href="<?php the_sub_field( 'button_url' ); ?>" class="btn btn-primary"><?php the_sub_field( 'button_label' ); ?></a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					</div>
				</div>		
			</section>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
