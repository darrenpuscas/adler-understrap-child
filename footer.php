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
							<?php //gravity_form(3, false, false, ) ?>
							<!-- (title, display_description, display_inactive, field_values, ajax, tabindex, echo, ) -->

							<!-- <form>
								<div class="">
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
									<label for="exampleInputEmail1" class="form-label"></label>
								</div>
							</form> -->
							<div class="footer-social">
								<div class="footer-facebook"><img src="/wp-content/uploads/facebook.png"></div>
								<div class="footer-twitter"><img src="/wp-content/uploads/twitter.png"></div>
							</div>
						</div>
					
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

