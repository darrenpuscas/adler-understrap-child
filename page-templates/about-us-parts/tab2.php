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
	<div class="tab-pane fade show active" id="mission-adler" role="tabpanel" aria-labelledby="mission-adler-tab">
			<?php echo (acf_esc_html($group2['text_1'])); ?>
			<!-- need repeater for mission images and text -->
	</div>
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

<<<<<<< HEAD
	<div class="tab-pane fade mb-1" id="history-adler" role="tabpanel" aria-labelledby="history-adler-tab">
=======
	<div class="tab-pane fade" id="history-adler" role="tabpanel" aria-labelledby="history-adler-tab">
		<!-- need left/right col - float(or use grid) image -->
>>>>>>> michael-work
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