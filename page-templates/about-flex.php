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
	<div class="col-md-12 content-area" id="primary">
		<main class="site-main" id="main" role="main" >
			<div class="section-tertiary-background">
				<div class="container-xl">
					<header class="indiv-programs-masthead-text masthead-section ">
						<div class="display-1"><?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?></div>	
					</header>
					<section id="about-us-masthead" class="pt-6 pb-6 col-md-10 offset-md-1 ">
						<?php the_field( 'page_introduction' ); ?>
					</section>
							<!-- Group 1 Parts -->
					<section>
						<?php get_template_part('page-templates/about-us-flex-parts/flex-1'); ?>
				</section>
								<!-- Group 2 Part -->		
				</div><!-- container xl -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>