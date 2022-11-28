<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'home' );
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div id="full-width-page-wrapper" class="wrapper">
			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section id="home-masthead">
						<div class="masthead-container min-vh-100 container-xl">
							<div class="row">
								<div class="home-masthead-content col-md-10 offset-md-1">
									<div class="home-masthead-text masthead-section">
										<div class="main-statement display-1">
										<?php $masthead = get_field('home_masthead'); ?> 
											<h1><?php echo $masthead['text'];?>masthead text </h1>
										</div>
										<div class="sub-statement display-3"><h3><?php echo $masthead['sub_text'];?></h3></div>
										<a href="<?php echo $masthead['button_url']; ?>" target="_blank" rel="noopener noreferrer">
											<span class="btn btn-primary"><?php echo $masthead['button']; ?></span>							
										</a>
									</div>	
									<div class="home-masthead-image masthead-section">
										<?php $masthead = get_field('home_masthead');
										if( $masthead ): ?>							
												<img class="home-masthead" src="<?php echo esc_url( $masthead['image']['url'] ); ?>" alt="<?php echo esc_attr( $masthead['image']['alt'] ); ?>" />
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section id="why-adler">
						<div class="whyadler-container container-xl pt-6 pb-6 pt-md-7 pb-md-7 pt-lg-8 pb-lg-8">
							<div class="row">
								<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-sm-12">
									<h2 class="text-uppercase"><?php the_field('home_heading');?></h2>
								<?php the_field('home_bullets'); ?>
									<a class="btn btn-primary" href="<?php the_field('home_button_url');?>"><?php the_field('home_button');?></a>
								</div>	
							</div>
						</div>	
					</section>						
				<?php if( have_rows('home_box') ): ?>			
					<section id="home-infoboxes">
						<div class="home-infoboxes-container container-xl pt-6 pb-4">
							<div class="row">
							<div class="home-infoboxes-area col-xsm-12 col-sm-10 offset-sm-1 col-md-6 offset-md-3 col-lg-10 offset-lg-1 col-xl-12 offset-xl-0">
									<?php while( have_rows('home_box') ): the_row();
									$icon = get_sub_field('icon');
									?>
									<article class="home-infobox">
										<div class="infobox-textarea">
											<div class="home-infobox-title">
												<div class="home-infobox-image">								
													<img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>">
												</div>
												<h3><?php the_sub_field('heading')?></h3>
											</div>
										<?php the_sub_field('content');?>
										</div>
											<a class="btn btn-secondary" href="<?php the_sub_field('button_url');?>" 
												target="_blank" rel="noopener noreferrer"><?php the_sub_field('button');?>
											</a>
									</article>
									<?php endwhile; ?>			
								</div>
							</div>			
						</div>
					</section>
				<?php endif; ?>
<!-- 

									
													<img src="http://adlerup.local/wp-content/uploads/news-icon.png" alt=""></div>
												<h3>News</h3>
											</div>
											<li>News story number 1 News story number 1 News story number 1</li>
											<li>News Story #2 News Story #2 News Story #2 News Story #2</li>
											<li>And now a third story And now a fourth story And now a fourth story</li>
										</div>	
										<button class="btn btn-secondary">More News</button>
									</article>
									
									<article class="home-infobox home-infobox2">

										<div class="infobox-textarea">
											<div class="home-infobox-title">
												<div class="home-infobox-image home-infobox-icon3"><img src="http://adlerup.local/wp-content/uploads/event-icon.png" alt=""></div>
												<h3>Events</h3>
											</div>
											<li>News story number 1 News story number 1 News story number 1</li>
											<li>News Story #2 News Story #2 News Story #2 News Story #2</li>
											<li>And now a third story</li>
										</div>
										<button class="btn btn-secondary">More Events</button>
									</article>
									<article class="home-infobox home-infobox3">
										<div class="infobox-textarea">
											<div class="home-infobox-title">
												<div class="home-infobox-image home-infobox-icon4"><img src="http://adlerup.local/wp-content/uploads/contact-icon.png" alt=""></div>
												<h3>Contact Adler</h3>
											</div>
											<li></li>
											<li></li>
											<li></li>
										</div>	
										<button class="btn btn-secondary">Important Documents</button>
									</article> -->
<!-- 									
								</div>
							</div>
						</div>		
					</section> -->
				</main><!-- #main -->

			</div><!-- #primary -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
