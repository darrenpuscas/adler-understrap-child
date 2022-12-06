<?php
/**
 * Template Name: Menu Test
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

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section id="test-masthead" class="test-with-menu">
						
						<div class="container-xl">
							<div class="row">
								<div class="menu-section masthead-section test-masthead-content pt-6 pb-6 col-md-10 offset-md-1 red-border">
									<div class="page-menu red-border">
										<header class="entry-header red-border">
											<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
										</header><!-- .entry-header -->
										<div class="page-menu-area red-border">
											<div class="page-menu-one red-border">
												<h5>What we are about</h5>
												<ul>
													<li><a href="#">About ADLER</a></li>
													<li><a href="#">Why ADLER</a></li>
													<li><a href="#">Community Initiatives</a></li>
												</ul>
											</div>
											<div class="page-menu-two red-border">
												<h5>Who we are</h5>
												<ul>
													<li><a href="#">Our Faculty and Facilitators</a></li>
													<li><a href="#">Our Administration</a></li>
													<li><a href="#">Our history</a></li>
												</ul>
											</div>
										</div>	
									</div>	
									<div class="test-masthead-image masthead-section red-border">
										<img src="http://adlerup.local/wp-content/uploads/grad-image.png" class="cerfification-masthead" alt="">
									</div>
								</div>	
							</div>
							<div class="entry-content col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-0 pb-3 container-xl red-border">
								<?php
								the_content();
								understrap_link_pages();
								?>
							</div><!-- .entry-content -->
						</div>
					</section>

					

				</main><!-- #main -->

			</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();