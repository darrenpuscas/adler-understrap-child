<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_2'); ?></h3>

<?php
$group2 = get_field( 'group_2');
if( $group2 ): ?>
  
<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
	<li class="nav-item" role="presentation">    
		<button class="nav-link active" id="mission-adler-tab" data-bs-toggle="tab" data-bs-target="#mission-adler" type="button" role="tab" aria-controls="mission-adler" aria-selected="true"><h5><?php echo acf_esc_html( $group2['label_1']); ?></h5></button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="administration-adler-tab" data-bs-toggle="tab" data-bs-target="#administration-adler" type="button" role="tab" aria-controls="administration-adler" aria-selected="false"><h5><?php echo acf_esc_html( $group2['label_2']); ?></h5></button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="history-adler-tab" data-bs-toggle="tab" data-bs-target="#history-adler" type="button" role="tab" aria-controls="history-adler" aria-selected="false"><h5><?php echo acf_esc_html( $group2['label_3']); ?></h5></button>
	</li>
</ul>
<div class="tab-content" id="tab-2-content">
		<!-- Tab 1 repeater -->
	<?php if( have_rows('img_text_mission') ): ?>
	<div class="tab-pane fade show active" id="mission-adler" role="tabpanel" aria-labelledby="mission-adler-tab">
		<p>What's Here?<?php the_field('logo-text-intro-heading');?></p>
		<?php while( have_rows('img_text_mission') ): the_row(); 
			$image = get_sub_field('image');
			$heading = get_sub_field('heading');
			$text = get_sub_field('text');
		?>
		<section class="logo-text-grid">
			<div class="flex-center mb-2">
				<div class="centered-element">
					<img src="<?php echo (acf_esc_html( $image['url'])); ?>" alt="<?php echo (acf_esc_html ($image['alt'])); ?>">
				</div>
			</div>
			<div>
				<h4><?php echo $heading; ?></h4>
					<?php echo (acf_esc_html( $text)); ?>
			</div>
		</section>
	<?php endwhile; ?>
	</div><!-- id=community-initiatives -->
	<?php endif; ?>

	<div class="tab-pane fade" id="administration-adler" role="tabpanel" aria-labelledby="administration-adler-tab">
		<?php
			// WP_Query arguments
			$args = array(
				'post_type'              => array( 'staff' ),
			);

			// The Query
			$query = new WP_Query( $args );

		// The Loop
			if ( $query->have_posts() ):												
				while ( $query->have_posts() ):
					$query->the_post();
		?>
				<p><?php the_ID() ?></p>
				<p><?php the_title() ?></p>
				<p><?php //the_excerpt() ?> </p>
				<p><?php the_content() ?></p>
		<?php
			endwhile;
				else: ;
				echo 'no staff found';
			endif;
			// Restore original Post Data
			wp_reset_postdata();
		?>
	</div><!-- administration -->

	<div class="tab-pane fade mb-1" id="history-adler" role="tabpanel" aria-labelledby="history-adler-tab">
		<aside class="image-box-container alignleft">
			<figure>
				<img src="<?php echo (acf_esc_html( $group2['tab_3_image']['url'])); ?>" alt="<?php echo (acf_esc_html( $group2['tab_3_image']['alt'])); ?>" />
				<figcaption class="mt-1 p-2">
				<h6><?php echo (acf_esc_html( $group2['tab_3_aside_title'])); ?></h6>
				<p class="text-center"><?php echo (acf_esc_html( $group2['image_caption'])); ?></p>
				</figcaption>
			</figure>
		</aside>
		<div class="group-2-text">
			<?php echo (acf_esc_html( $group2['text_3'])); ?>
		</div>
	</div>
</div>

<?php endif; ?>