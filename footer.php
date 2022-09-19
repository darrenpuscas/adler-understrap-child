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
							<h4>Keep up With ADLER</h4>
							<form>
								<div class="">
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
									<label for="exampleInputEmail1" class="form-label"></label>
								</div>
							</form>
							<div class="footer-social">
								<div class="footer-facebook"><img src="http://adlerup.local/wp-content/uploads/facebook.png"></div>
								<div class="footer-twitter"><img src="http://adlerup.local/wp-content/uploads/twitter.png"></div>
							</div>
						</div>
					
						<div class="footer-resources">
							<div class="footer-resources1">	
								<ul>
									<li>Why ADLER?</li>
									<li>About ADLER?</li>
									<li>Work at ADLER?</li>
									<li>News & Events</li>
									<li>Contact Us</li>
								</ul>
							</div>
							<div class="footer-resources2">	
								
								<ul>
									<li class="testbbb">Policy Statements</li>	
									<li>Aoda</li>
									<li>Statement on diversity</li>
									<li>Covid Vaccination policy</li>
								</ul>
							</div>
							<div class="footer-resources3">	
							
								<ul>
									<li class="testbbb">Resources</li>
									<li>GSAEC</li>
									<li>Library of Psychology</li>
									<li>Find a coach</li>
								</ul>
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

