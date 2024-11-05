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
								
								<p><img src="http://adlerca-local.local/wp-content/uploads/Teplin-2024.jpg" alt=""></p>
								<div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porta consectetur scelerisque. Nulla purus nibh, gravida at nisi nec, facilisis interdum purus. Vestibulum nec turpis interdum, varius quam eget, ultricies nisl. Praesent convallis arcu a augue luctus blandit. Morbi id suscipit libero. Morbi vel feugiat nisl. Phasellus vel leo lacus. Fusce eu elementum dolor, et gravida nisl. Morbi ut erat non magna feugiat pretium in vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ullamcorper magna.</p>
									
									<p>Donec risus urna, tincidunt a magna vehicula, aliquam consectetur enim. Proin aliquet lacus vitae eros semper ornare. In eget odio ligula. Nam lobortis aliquet leo id efficitur. Sed eleifend mauris eu dui feugiat, quis consequat est pretium. Aenean et tortor nisl. Quisque sodales vel sem eget tristique. Donec ac nisi quis est consequat auctor. Mauris quis ipsum nulla. Nunc eleifend, sem quis malesuada vestibulum, diam eros accumsan leo, eget luctus mauris lectus imperdiet mi. Morbi accumsan tortor ex, eu commodo sapien rhoncus ac. Mauris vitae ligula gravida, condimentum justo at, tempor purus. Duis egestas tincidunt ipsum sit amet interdum. Quisque quis ullamcorper metus. Nullam tempor ut leo in tincidunt. Praesent rutrum aliquet semper.</p>
								</div>
							</div>
						</div>
					</section>

					<section id="bio-masthead" class="bio-masthead-container">
						<div class="masthead-container min-vh-100 container-xl">				
							<div class="bio-masthead-content col-md-10 offset-md-1">
							<?php if( have_rows('bios') ): ?>
								<?php while( have_rows('bios') ): the_row(); 
									$image = get_sub_field('bio_image');
								?>
								<div><?php echo $imgage ?></div>
										<div><img src="<?php $image['url']; ?>"></div>
										<p> <?php echo wp_kses_post( wpautop(get_sub_field('bio-text') ) ); ?></p>
									
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
