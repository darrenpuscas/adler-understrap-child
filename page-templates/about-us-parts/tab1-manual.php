<?php
$group = get_field('group_1');
?>

<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_1')?></h3>

<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
	<!-- why Adler -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="why-adler-tab" data-bs-toggle="tab" data-bs-target="#why-adler" type="button" role="tab" aria-controls="why-adler" aria-selected="false">
			<h5><?php echo $group['label_2'] ?></h5>
		</button>
	</li>
<!-- history -->
<li class="nav-item" role="presentation">
		<button class="nav-link" id="history-adler-tab" data-bs-toggle="tab" data-bs-target="#history-adler" type="button" role="tab" aria-controls="history-adler" aria-selected="false"><h5><?php echo acf_esc_html( $group2['label_3']); ?></h5></button>
	</li>
	<!-- Values and Mission -->
	<li class="nav-item" role="presentation">    
		<button class="nav-link active" id="mission-adler-tab" data-bs-toggle="tab" data-bs-target="#mission-adler" type="button" role="tab" aria-controls="mission-adler" aria-selected="true"><h5><?php echo acf_esc_html( $group2['label_1']); ?></h5></button>
	</li>
	<!-- Student Experience - Culture -->
	<li class="nav-item" role="presentation">    
		<button class="nav-link active" id="culture-adler-tab" data-bs-toggle="tab" data-bs-target="#culture-adler" type="button" role="tab" aria-controls="culture-adler" aria-selected="true"><h5><?php echo acf_esc_html( $group2['label_1']); ?></h5></button>
	</li>
	<!-- Grad - Highlight -->
	<li class="nav-item" role="presentation">    
		<button class="nav-link active" id="grad-adler-tab" data-bs-toggle="tab" data-bs-target="#grad-adler" type="button" role="tab" aria-controls="grad-adler" aria-selected="true"><h5><?php echo acf_esc_html( $group2['label_1']); ?></h5></button>
	</li>





</ul>



<!-- tab content -->








<div class="tab-content" id="tab-1-content">

<!-- Why Adler -->
	<div 
		class="tab-pane fade show active mb-5" id="about-adler" role="tabpanel" aria-labelledby="about-adler-tab">
		<?php echo (acf_esc_html ($group['text_1'])) ;?>
	</div>
	<div class="tab-pane fade" id="why-adler" role="tabpanel" aria-labelledby="why-adler-tab">
		<?php echo (acf_esc_html ($group['text_2'])) ;?>
	</div>

<!-- History -->
<div class="tab-pane fade mb-1" id="history-adler" role="tabpanel" aria-labelledby="history-adler-tab">
		<aside class="callout-container alignleft">
			<figure class="tabs-figure">
				<img src="<?php echo (acf_esc_html( $group2['tab_3_image']['url'])); ?>" alt="<?php echo (acf_esc_html( $group2['tab_3_image']['alt'])); ?>" />
				<figcaption class="mt-1">
				<p class="text-center"><?php echo (acf_esc_html( $group2['image_caption'])); ?></p>
				</figcaption>
			</figure>
		</aside>
		<div class="group-2-text">
			<?php echo (acf_esc_html( $group2['text_3'])); ?>
		</div>
	</div>

	<!-- Mission -->
		<!-- repeater Mission -->
	<?php if( have_rows('img_text_mission') ): ?>
	<div class="tab-pane fade show active" id="mission-adler" role="tabpanel" aria-labelledby="mission-adler-tab">
		<?php the_field('mission_intro');?>
		<section class="logo-text-grid-3col">
			<?php while( have_rows('img_text_mission') ): the_row(); 
			$image = get_sub_field('image');
			$title = get_sub_field('image_title');
			$text = get_sub_field('text');
			?>
			<aside class="inner-box-border">
				<div class="image-container-3col">
					<img src="<?php echo (acf_esc_html( $image['url'])); ?>" alt="<?php echo (acf_esc_html ($image['alt'])); ?>">
					<h4 class="text-center"><?php echo $title; ?></h4>
				</div>
				<div><?php echo (acf_esc_html( $text)); ?></div>
			</aside>
		<?php endwhile; ?>
		</section><!-- 3col -->
	<?php endif; ?>
	</div>

<!-- Culture -->
<!-- New content area -->


<!-- Highlight -->
<!-- New content area -->

</div><!-- tab content  -->