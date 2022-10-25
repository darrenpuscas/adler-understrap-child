<?php
/**
 * Template Name: Psych Program
 *
 * Template for the Psych Program pages.
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
<!-- add console log for php -->
<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
// <?= console_log($var); ?>

<div id="full-width-page-wrapper" class="wrapper">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<article id="indiv-programs-masthead">
						<div class="indiv-programs-masthead-container container-xl">
							<div class="row">
								<div class="indiv-programs-masthead-content standard-masthead-content pt-6 pb-6 col-md-10 offset-md-1">
									<section class="indiv-programs-masthead-text masthead-section">
										<div class="indiv-programs-main-header standard-main-header display-1">
											<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
										</div><!-- end class="indiv-programs-main-header standard-main-header display-1" -->
										<div class="indiv-programs-sub-statement standard-sub-statement"><h5><?php the_field('prog_sub_heading'); ?></h5></div>
										<div class="indiv-programs-text standard-text">
											<!-- ACF prog_desc_text -->
											<?php the_field('prog_overview_text'); ?>
										</div> <!-- end class="indiv-programs-text standard-text" -->
									
									</section><!-- end class="indiv-programs-masthead-text masthead-section" -->
									
									<section class="indiv-programs-masthead-image masthead-section">
										<?php $image = get_field('prog_overview_image');
											if( !empty( $image ) ): ?>
    										<img src="<?php echo esc_url($image['url']); ?>" class="cerfification-masthead" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
												
									</section>
								</div><!-- end masthead content -->
							</div><!-- end row -->
						</div><!-- end masthead container -->
					</article>

					<article id="indiv-programs-1">
						<div class="indiv-programs-course-container standard-course-container container-xl pt-6">
							<div class="row">
								<?php $title = get_field('prog_section_title_1');
								if( $title ): ?>
										<section class="indiv-programs1-intro standard-intro masthead-section">
											<div class="indiv-programs-intro-headline standard-intro-headline display-3">					
												<h3><?php the_field('prog_section_title_1') ?></h3>
											</div>
										</section>
								<?php endif ?>
								<div class="indiv-programs-course-content standard-course-content pb-4 col-md-10 col-lg-10 offset-md-1 col-sm-12">
								<!-- Box 1 -->
								<?php $box1 = get_field('prog_box_1'); ?>
									<section class="indiv-programs-course-image certification-course-section">
									
										<img src="<?php echo esc_url( $box1['image']['url'] ); ?>" class="cerfification-masthead" alt="">
									</section>
										<section class="indiv-programs-course standard-course">
											<h5 class="text-uppercase"><?php echo $box1['title'] ?></h5>
											<p><?php echo $box1['text'] ?></p>
											<a href="<?php echo esc_url( $box1['button_url'] ) ?>" class="btn btn-primary"><?php echo $box1['button'] ?></a>
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
											<?php $box2 = get_field('prog_box_2'); ?>
											<div class="indiv-course-titlearea">
												<img src="<?php echo esc_url( $box2['icon']['url'] ); ?>">
												<h6 class="indiv-course-title text-uppercase"><?php echo $box2['title']; ?></h6>
											</div>
											<?php echo $box2['text'] ?>
											<a class="btn btn-primary" href="<?php echo esc_url( $box2['button_url'] )?>"><?php echo $box2['button']?></a>
										</section>

										<section class="indiv-programs-additional-course standard-course">
											<?php $box3 = get_field('prog_box_3'); ?>
											<div class="indiv-course-titlearea">
											<img src="<?php echo esc_url( $box3['icon']['url'] ); ?>">
												<h6 class="indiv-course-title text-uppercase"><?php echo $box3['title']; ?></h6>
											</div>
											<?php echo $box3['text'] ?>
											<a class="btn btn-primary" href="<?php echo esc_url( $box3['button_url'] )?>"><?php echo $box3['button']?></a>
										</section>

										<section class="indiv-programs-additional-course standard-course">
											<?php $box4 = get_field('prog_box_4'); ?>
											<div class="indiv-course-titlearea">
											<img src="<?php echo esc_url( $box4['icon']['url'] ); ?>">
												<h6 class="indiv-course-title text-uppercase"><?php echo $box4['title']; ?></h6>
											</div>
											<?php echo $box4['text'] ?>
											<a class="btn btn-primary" href="<?php echo esc_url( $box4['button_url'] )?>"><?php echo $box4['button']?></a>
										</section>
								</div><!-- end column -->
							</div><!-- end row -->
						</div><!-- end container -->
					</article>


					<article class="indiv-programs-additional-light">
						<div class="indiv-programs-additonal-container standard-course-container container-xl pt-3 pb-3 pt-8 pb-6">
							<div class="row">
								<section>
								<?php $image = get_field('prog_program_map_image');
									if( !empty( $image ) ): ?>
										<img src="<?php echo esc_url($image['url']); ?>" class="" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</section>
							</div>
						</div>
					</article>

					<article class="indiv-programs-additional">
						<div class="indiv-programs-additonal-container standard-course-container container-xl pt-3 pb-3 pt-8 pb-6">
							<div class="row">
								<section>
								<h3><?php the_field('prog_table_section_title'); ?></h3>
								<?php the_field('prog_before_table'); ?>

								<!-- table inside a repeater field -->

								<?php

									// Check if rows exists.
									if( have_rows('prog_info_tables') ):


											// Loop through rows.
											while( have_rows('prog_info_tables') ) : the_row();

													// Load sub field value.
													//$sub_value = get_sub_field('sub_field');
													// Do something...
													$table = get_sub_field( 'prog_info_table' );

													if ( ! empty ( $table ) ): ?>
													 <h3><?php the_sub_field('table_name</h3>'); ?></h3>
				
														<?php	echo '<table border="1">';
				
																	if ( ! empty( $table['caption'] ) ) {
																		echo 'in caption if';
				
																			echo '<caption>' . $table['caption'] . '</caption>';
																	}
															if ( ! empty( $table['header'] ) ) {
																echo 'in header if';
															echo '<thead>';
				
																	echo '<tr>';
				
																			foreach ( $table['header'] as $th ) {
				
																					echo '<th>';
																							echo $th['c'];
																					echo '</th>';
																			}
				
																	echo '</tr>';
				
															echo '</thead>';
														}
															//end header if
				
															echo '<tbody>';
				
															foreach ( $table['body'] as $tr ) {
																	echo 'for each body';
																	echo '<tr>';
				
																			foreach ( $tr as $td ) {
				
																					echo '<td>';
																							echo $td['c'];
																					echo '</td>';
																			}
				
																	echo '</tr>'; 
															} 
															echo '</tbody>';
															echo '</table>'; 
														endif;
													//end table if
				
											// End Repeater loop.
											endwhile;

									// No value in table repeater.
									else :
											// Do something...
											echo 'no table date entered';
									endif; ?>
								
								<?php the_field('prog_after_table'); ?>
								</section>
							</div>
						</div>
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
