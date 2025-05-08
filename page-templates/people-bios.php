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

//$wrapper_id = 'full-width-page-wrapper';
//if ( is_page_template( 'page-templates/no-title.php' ) ) {
//	$wrapper_id = 'no-title-page-wrapper';
//}

?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
<!-- Understrap structure ends -->
					<section id="bio-masthead" class="bio-masthead-container">
						<div class="masthead-container min-vh-100 container-xl">				
							<div class="bio-masthead-content col-md-10 offset-md-1">
								<?php if( have_rows('bios') ): ?>
								<div>
									<?php while( have_rows('bios') ): the_row(); 
										$image = get_sub_field('bio_image');
									?>
									<?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
									?>
								</div>
							<div>		
								<p> <?php echo wp_kses_post( wpautop(get_sub_field('bio_text') ) ); ?></p>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</section>

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
