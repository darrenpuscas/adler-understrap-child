<?php
/**
 * Template Name: Flexible - About
 *
 * Template for the About us Flex.
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
				<article class="container-xl">
					<div class="row">
						<div class="menu-section masthead-section why-adler-masthead-content pt-4 pt-md-6 pb-4 pb-md-3 col-md-10 offset-md-1">
								<header class="entry-header why-adler-title">
									<?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
								</header><!-- .entry-header -->
							<p><?php echo (acf_esc_html ($group['text_1'])) ;?></p>								
									<!-- Tabs -->
									<?php get_template_part('page-templates/about-us-parts/flex'); ?>				
						</div><!-- Why Adler masthead class -->				
					</div><!-- row -->
				</article>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
