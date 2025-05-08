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
								<h1>Alison Hunt - r</h1>
								<?php echo wp_kses_post( wpautop(get_sub_field('name') ) ); ?>
								<?php echo wp_kses_post( wpautop(get_sub_field('credentials') ) ); ?>
								<?php echo wp_kses_post( wpautop(get_sub_field('bio_text') ) ); ?>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut risus sed tortor consectetur fringilla ac sit amet nulla. In nulla lacus, pellentesque ut scelerisque quis, mattis eu risus. Maecenas iaculis mi vel massa cursus fringilla. Phasellus enim leo, pretium vel ullamcorper id, consectetur eget sem. Praesent efficitur sollicitudin sagittis. Pellentesque tristique lobortis nisl, eget pretium tortor volutpat non. Nunc tempor turpis mauris, quis lobortis felis tristique viverra. Cras in rhoncus ante.</p>
<p>Vivamus ultrices nulla eu diam sodales, eget blandit ex elementum. Mauris imperdiet et lorem id faucibus. Maecenas id vulputate ligula, tincidunt semper diam. Integer suscipit tempus interdum. Proin non gravida enim. Donec at lacus a dui dignissim scelerisque in sed nunc. Integer pharetra urna ac eros posuere varius. Ut venenatis pulvinar tortor, et imperdiet sem consequat ac. END OF HARDCODED</p>
<?php echo wp_kses_post( wpautop(get_sub_field('bio_text') ) ); ?>
<p>Ut velit odio, pulvinar eget neque ut, egestas aliquam metus. Ut ac porttitor felis, a efficitur metus. Vestibulum magna dui, rutrum et aliquam ac, pharetra eu tellus. Maecenas ac eleifend sapien. Vestibulum pulvinar risus sed ante fringilla ullamcorper. Pellentesque dignissim ultrices dui, eu porta enim aliquam faucibus. Quisque erat mi, hendrerit eget sapien in, auctor ultricies velit.</p>
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
