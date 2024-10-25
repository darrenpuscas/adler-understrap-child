<?php
/**
 * Template Name: Empty-no header-footer
 *
 * Template that is completely empty
 *
 * @package Understrap
 */

// Exit if accessed directly.

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div id="full-width-page-wrapper" class="wrapper">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section id="standard-masthead">
						<div class="container-xl">
							<div class="row">
								<div class="certification-masthead-content standard-masthead-content pt-md-6 pt-4 pb-4 col-md-10 offset-md-1">
									<div class="masthead-section">
										<div class="standard-main-header display-1"><h1>Standard with Masthead</h1></div>
										<div class="standard-sub-statement"><h5>Sub Title here</h5></div>
										<div class="standard-text"><p>Our fully ICF Accredited Coaching Courses can be combined in various ways depending on what you would like to do with your coach training and what type of credentialing you are looking for.  We have programs well suited if you are looking to use coaching skills in your existing occupation or role, as well as a full training path to becoming a certified professional coach.  Regardless of where you end up your journey begins with our Foundations of Professional Coaching course, offered as a week-long intensive or over 2 weekends.  All of our Foundations courses are backed up by our Money Back Guarantee*</p></div>
									</div>	
									<div class="standard-masthead-image masthead-section">
										<img src="http://adlerup.local/wp-content/uploads/grad-image.png" class="cerfification-masthead" alt="">
									</div>
								</div>
							</div>
							<div class="entry-content col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-0 pb-3">
								<?php
								the_content();
								
								?>
							</div><!-- .entry-content -->
						</div>
					</section>

					

				</main><!-- #main -->

			</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php

