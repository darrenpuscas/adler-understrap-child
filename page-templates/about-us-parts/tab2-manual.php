<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_2'); ?></h3>

<?php
$group2 = get_field( 'group_2');
if( $group2 ): ?>
  
<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
<!-- Staff - Administration -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="administration-adler-tab" data-bs-toggle="tab" data-bs-target="#administration-adler" type="button" role="tab" aria-controls="administration-adler" aria-selected="false"><h5><?php echo acf_esc_html( $group2['label_2']); ?></h5></button>
	</li>
	<!-- Leadership -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="leadership-adler-tab" data-bs-toggle="tab" data-bs-target="#leadership-adler" type="button" role="tab" aria-controls="leadership-adler" aria-selected="false"><h5><?php echo acf_esc_html( $group2['label_2']); ?></h5></button>
	</li>
	<!-- Community -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="community-initiatives-tab" data-bs-toggle="tab" data-bs-target="#community-initiatives" type="button" role="tab" aria-controls="community-initiatives" aria-selected="false">
			<h5><?php echo $group['label_3'] ;?></h5>
		</button>
	</li>
</ul>
<!-- tab Content -->

<div class="tab-content" id="tab-2-content">

	<!-- Admin -->
	<div class="tab-pane fade" id="administration-adler" role="tabpanel" aria-labelledby="administration-adler-tab">
		<?php
			// WP_Query arguments
			$args = array(
				'post_type' => array( 'staff' ),
			);

			// The Query
			$query = new WP_Query( $args );

		// The Loop
			if ( $query->have_posts() ):												
				while ( $query->have_posts() ):
					$query->the_post();
		?>
				<?php //the_ID() 
          $image = get_field('staff_image');

        ?>
        <section class="logo-text-grid">
          <div class="logo-text-logo">
            <!-- <div class="image-container"> -->
							<img class="rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">
						<!-- </div> -->
          </div>
          <div class="logo-text-text">
            <?php the_field('first_name');?> <?php the_field('last_name');?></br>
            <?php the_field('job_title');?></br></br>
						<h6>Working Hours:</h6>
            <?php the_field('working_days');?></br>
            <?php the_field('working_hours_begin');?> - <?php the_field('working_hours_end');?></br></br>

            <h6>In-person office hours:</h6>
            <?php the_field('office_days');?></br>
            <?php the_field('office_hours_begin');?> - <?php the_field('office_hours_end');?></br></br>
            <?php
              $content = get_field('staff_bio');
              if ($content) {
                echo $content;
              }
            ?>
          </div>
				</section>
		<?php
			endwhile;
				else: ;
				echo 'no staff found';
			endif;
			// Restore original Post Data
			wp_reset_postdata();
		?>
	</div><!-- administration -->
<?php endif; ?>

<!-- Leadership -->
<!-- New content area -->

<!-- Community -->

<!-- Tab 3 repeater Community -->
<?php if( have_rows('logo-text') ): ?>
		<div 
		class="tab-pane fade" id="community-initiatives" role="tabpanel"
		aria-labelledby="community-initiatives-tab"
		>
		<h6><?php the_field('logo-text-intro-heading');?></h6>
		<hr class="separator-hr">
		<?php while( have_rows('logo-text') ): the_row(); 
			$logo = get_sub_field('logo');
			$heading = get_sub_field('heading');
			$text = get_sub_field('text');
		?>
			<section class="logo-text-grid">
				<div class="flex-center">
					<div class="centered-element">
						<img src="<?php echo (acf_esc_html( $logo['url'])); ?>" alt="<?php echo (acf_esc_html ($logo['alt'])); ?>">
					</div>
				</div>
				<div>
					<h4><?php echo $heading; ?></h4>
					<?php echo (acf_esc_html( $text)); ?>
				</div>
			</section>
			<hr class="separator-hr">
		<?php endwhile; ?>
	</div><!-- id=community-initiatives -->
<?php endif; ?>


</div><!-- tab 2 content container -->

