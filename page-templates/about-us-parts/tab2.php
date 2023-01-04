<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_2'); ?></h3>

<?php
$group2 = get_field('group_2');
if( $group2 ): ?>
  
<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
	<li class="nav-item" role="presentation">    
		<div class="nav-link active" id="faculty-adler-tab" data-bs-toggle="tab" data-bs-target="#faculty-adler" type="button" role="tab" aria-controls="faculty-adler" aria-selected="true"><h5><?php echo esc_attr( $group2['label_1']); ?></h5></button>
	</li>
	<li class="nav-item" role="presentation">
		<div class="nav-link" id="administration-adler-tab" data-bs-toggle="tab" data-bs-target="#administration-adler" type="button" role="tab" aria-controls="administration-adler" aria-selected="false"><h5><?php echo esc_attr( $group2['label_2']); ?></h5></button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="history-adler-tab" data-bs-toggle="tab" data-bs-target="#history-adler" type="button" role="tab" aria-controls="history-adler" aria-selected="false"><h5><?php echo esc_attr( $group2['label_3']); ?></h5></button>
	</li>
</ul>

<?php endif; ?>

<div class="tab-content" id="tab-2-content">
	<div class="tab-pane fade" id="history-adler" role="tabpanel" aria-labelledby="history-adler-tab">
			mission and values text
	</div>





	<div class="tab-pane fade show active" id="faculty-adler" role="tabpanel" aria-labelledby="faculty-adler-tab">
	<?php
		// repeater in a group
		if( have_rows('your_group') ): while ( have_rows('your_group') ) : the_row(); 

				if( have_rows('your_repeater') ): while ( have_rows('your_repeater') ) : the_row();       

						echo get_sub_field('repeater_sub_field');

				endwhile; endif;

		endwhile; endif;

		?>
	</div>
	<div class="tab-pane fade" id="administration-adler" role="tabpanel" aria-labelledby="administration-adler-tab">
		DB Query to Admin CPT
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

	<div class="tab-pane fade" id="history-adler" role="tabpanel" aria-labelledby="history-adler-tab">
		adler history text
	</div>		
</div>