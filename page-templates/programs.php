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
					<div class="programs-masthead-content pt-4 pt-md-6 pt-lg-7 pb-2 pb-2 ">
						<div class="programs-masthead-text masthead-section">
							<div class="programs-main-header standard-main-header display-1"><h1><?php the_title(); ?></h1></div>
							<div class="programs-text standard-text"><p class="offset-centered"><?php the_field('intro_paragraph');?></p></div>
							<div class="programs-course-mobile-image programs-course-section">
								<?php $image = get_field ('mobile_image');?>
								<img style="border-radius:8px;" src="<?php echo $image['url'];?>" class="cerfification-masthead" alt="<?php echo $image['alt'];?>" >
							</div>
						</div>	
					</div>
				</div>
			</section>



<!-- -------------------------------------------------------------------- -->


			<div class="container-lg">
				<!-- <div class="row">-->
				<!-- <section id="programs" class="col2-withsub-grid">   -->
				<section class="programs-course-content standard-course-content pt-2 pt-md-6 pb-6 col-sm-12">

				<?php
				$values = get_field('program_box');
				if ( $values ) : ?>
					<?php foreach($values as $value) : ?>
						<aside class="programs-course inner-box-border">
							<div class="programs-course-text standard-course-text">
								<div class="programs-course-text-inner">
									<h4 class="text-uppercase"><?php echo $value['program_heading']?></h5>
									<p><?php echo $value['program_description']; ?></p>	
									<div class="programs-details">
										<h6 class="programs-details-title"><?php echo $value['sub_heading']; ?></h6>
										<?php echo $value['bullet_points_program_highlights']; ?>
									</div>
									<a href="<?php echo $value['button_url'];?>" class="btn btn-primary programs-button"><?php echo $value['button_label'];?></a>
								</div>	 
							</div>
							<div class="programs-course-image programs-course-section">
								<img src="<?php echo $value['program_image']['url'];?>" class="cerfification-masthead" alt="">
							</div>
					</aside>	
						<?php endforeach; ?>
						<?php endif; ?>
				<!-- </section> -->
			</section>

			</div>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
