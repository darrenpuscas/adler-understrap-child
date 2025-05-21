<?php
/**
 * Template Name: People Bios
 *
 * Template for displaying a page of biographies and an image.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
						
		
		<div class="row">
			
			<div class="col-md-12 content-area" id="primary">
				
				<main class="site-main" id="main" role="main">
					<header class="programs-main-header standard-main-header display-1">
						<?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>	
					</header>
<!-- Understrap structure ends -->
					<section id="bio-masthead" class="bio-masthead-container">
						<div class="masthead-container min-vh-100 container-xl">				
							<div class="bio-masthead-content col-md-10 offset-md-1">
								<?php if( have_rows('bios') ): ?>
								
									<?php while( have_rows('bios') ): the_row(); ?>
									<div>
										<?php $image = get_sub_field('bio_image'); ?>
										<?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
											if( $image ) {
												echo wp_get_attachment_image( $image, $size );
											}
											else { ?>
												<div>&nbsp;</div>
											<?php } ?>
									</div>
									<div >
										<h2><?php echo wp_kses_post( get_sub_field('name') );?></h2>
										<h3><?php echo wp_kses_post( get_sub_field('credentials') );?></h3>
										<h3><?php echo wp_kses_post( get_sub_field('programs_and_titles') );?></h3>
										<?php echo ( get_sub_field('bio_text') );?>
									</div>
									<?php endwhile; ?>
								<?php endif; ?>
						</div>
					</section>

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
