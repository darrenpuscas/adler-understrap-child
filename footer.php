<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="container-lg">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info footer-sections">
						<div class="footer-signup">
							<h4>Signup for Adler's Newsletter</h4>
							<?php gravity_form(3, false, false, ) ?>
							<!-- (title, display_description, display_inactive, field_values, ajax, tabindex, echo, ) -->												
            <?php if( have_rows('footer_social_media', 'option') ): ?>
             <div class="footer-social">
                <?php while( have_rows('footer_social_media', 'option') ): the_row(); ?>
                  <a href="<?php the_sub_field('social_url', 'option')?>"><i class="fa fa-<?php the_sub_field('social_image', 'option'); ?>"></i></a>
                  <?php endwhile; ?>
                  
              <?php endif; ?>
							</div><!-- footer social -->
						</div><!-- footersignup -->
					
						<div class="footer-resources">

							<div class="footer-resources1">	
							<?php 
								wp_nav_menu( 
										array( 
												'theme_location' => 'footer-menu-left',
												'container' => 'nav',
												'menu_class' => 'footer-menu footer-menu-left',
												'menu-item' => 'footer-menu-left-item'
										) 
								); 
						?>
							</div>
							<div class="footer-resources2">	
							<?php 
								wp_nav_menu( 
										array( 
												'theme_location' => 'footer-menu',
												'container' => 'nav',
												'menu_class' => 'footer-menu',
												'menu-item' => 'footer-menu-item'
										) 
								); 
						?>
							</div>
							<div class="footer-resources3">	
							<?php 
								wp_nav_menu( 
										array( 
												'theme_location' => 'footer-menu-right',
												'container' => 'nav',
												'menu_class' => 'footer-menu-right',
												'menu-item' => 'footer-menu-right-item'
										) 
								); 
						?>
							</div>
						</div>	
						</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

