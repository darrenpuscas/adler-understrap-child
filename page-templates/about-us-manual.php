<?php
/**
 * Template Name: About Us - Manual
 *
 * Template for the About Us with 5 and 3 Tabs.
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
				<div class="container-xl">
					<div class="menu-section masthead-section why-adler-masthead-content pt-4 pt-md-6 pb-4 pb-md-3 col-md-10 offset-md-1">
						
							<header class="entry-header why-adler-title">
								<?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
							</header>
						<section><?php the_field( 'about_adler_intro' ); ?></section>	


						<section id="tab-group-1" class="page-menu-one page-tab-menu mb-0 pt-3 pt-sm-3 pb-4 pt-md-2 pb-md-2">
								<!-- tab1.php goes here -->
								<?php get_template_part('page-templates/about-us-parts/tab1-manual'); ?>
						</section><!-- tab group 2 end -->
		
						<section id="tab-group-2" class="page-menu-two page-tab-menu pb-0 pt-3 pt-sm-3 pb-5 pt-md-5 pb-md-4">
								<!-- tab2.php goes here -->
								<?php get_template_part('page-templates/about-us-parts/tab2-manual');?>
						</section><!-- id: tab group 2 -->					
					</div><!-- Why Adler masthead class -->				
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
