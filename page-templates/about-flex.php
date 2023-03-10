<?php
/**
 * Template Name: About - Flexible
 *
 * Template for the About Page - Flexible Content.
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
			<div id="standard-masthead" class="standard-with-menu">	
				
			
			<section class="indiv-programs-masthead-text masthead-section">
				<div class="indiv-programs-main-header standard-main-header display-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
				</div><!-- end class="indiv-programs-main-header standard-main-header display-1" -->
				<div class="indiv-programs-sub-statement standard-sub-statement"><?php the_field( 'page_introduction' ); ?></div>
				
			
			</section><!-- end class="indiv-programs-masthead-text masthead-section" -->

				<!-- <article class="container-xl">
					<div class="menu-section masthead-section why-adler-masthead-content pt-4 pt-md-6 pb-4 pb-md-3 col-md-10 offset-md-1">
							<header class="entry-header why-adler-title">
								<?php //the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
							</header> -->
							
							
							
							<!-- Group 1 Parts -->

							



							
								<?php get_template_part('page-templates/about-us-flex-parts/flex-1'); ?>
								
								<!-- Group 2 Part -->

					<!-- </div> -->
					<!-- Why Adler masthead class -->				
				<!-- </article> -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>