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

								<!-- table inside a repaeater field -->

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
														<h4><?php the_sub_field('table_name'); ?></h4>
				
														<?php	echo '<table class="table table-striped" border="1">';
				
																	if ( ! empty( $table['caption'] ) ) {
																	
																			echo '<caption>' . $table['caption'] . '</caption>';
																	}
															if ( ! empty( $table['header'] ) ) {
																
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
									<h5><?php the_field('psych_faq_title'); ?></h5>
									<?php
										// Check if rows exists.
										if( have_rows('psych_faq') ):

												// Loop through rows.
												while( have_rows('psych_faq') ) : the_row();

														// Load sub field value.
														$question = get_sub_field('question');
														$answer = get_sub_field('answer'); 
										?>
											<section class="indiv-programs-faq standard-faq">
												<details>
													<summary><?php echo $question ?></summary>
													<?php echo $answer; ?>
												</details>
											</section>

										<?php
									// End Repeater loop.
									endwhile;

									// No value in table repeater.
									else :
											// Do something...
											echo 'no faqs';
									endif; ?>

							</div><!-- end row -->
						</div><!-- end container -->
					</article>
					
				</main><!-- #main -->

			</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
