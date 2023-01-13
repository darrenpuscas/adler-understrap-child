<?php
$group = get_field('group_1');
?>

<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_1')?></h3>

<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
	<li class="nav-item" role="presentation">    
		<button 
			class="nav-link active" id="about-adler-tab" data-bs-toggle="tab" data-bs-target="#about-adler" type="button" role="tab" aria-controls="about-adler" aria-selected="true">
				<h5><?php echo $group['label_1']?></h5>
		</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="why-adler-tab" data-bs-toggle="tab" data-bs-target="#why-adler" type="button" role="tab" aria-controls="why-adler" aria-selected="false">
			<h5><?php echo $group['label_2'] ?></h5>
		</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="community-initiatives-tab" data-bs-toggle="tab" data-bs-target="#community-initiatives" type="button" role="tab" aria-controls="community-initiatives" aria-selected="false">
			<h5><?php echo $group['label_3'] ;?></h5>
		</button>
	</li>
</ul>

<div class="tab-content" id="tab-1-content">
	<div 
		class="tab-pane fade show active" id="about-adler" role="tabpanel" aria-labelledby="about-adler-tab">
		<?php echo (acf_esc_html ($group['text_1'])) ;?>
</div>
	<div class="tab-pane fade" id="why-adler" role="tabpanel" aria-labelledby="why-adler-tab">
		<?php echo (acf_esc_html ($group['text_2'])) ;?>
	</div>

	
	<!-- Tab 3 repeater -->
	<?php if( have_rows('logo-text') ): ?>
		<div 
		class="tab-pane fade" id="community-initiatives" role="tabpanel"
		aria-labelledby="community-initiatives-tab"
		>
		<p><?php the_field('logo-text-intro-heading');?></p>
		<?php while( have_rows('logo-text') ): the_row(); 
			$logo = get_sub_field('logo');
			$heading = get_sub_field('heading');
			$text = get_sub_field('text');
		?>
			<section class="logo-text-grid">
				<div class="flex-center mb-2">
					<div class="centered-element">
						<img src="<?php echo (acf_esc_html( $logo['url'])); ?>" alt="<?php echo (acf_esc_html ($logo['alt'])); ?>">
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
</div><!-- tab content  -->