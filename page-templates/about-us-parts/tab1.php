<?php
$group = get_field('group_1');
?>

<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_1')?></h3>

<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
	<!-- about Adler Tab -->
	<!-- <li class="nav-item" role="presentation">    
		<button 
			class="nav-link active" id="about-adler-tab" data-bs-toggle="tab" data-bs-target="#about-adler" type="button" role="tab" aria-controls="about-adler" aria-selected="true">
				<h5><?php //echo $group['label_1']?></h5>
		</button>
	</li> -->
	<!-- Why Adler Tab -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="why-adler-tab" data-bs-toggle="tab" data-bs-target="#why-adler" type="button" role="tab" aria-controls="why-adler" aria-selected="false">
			<h5><?php echo $group['label_1'] ?></h5>
		</button>
	</li>

<!-- new history spot moved  -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="adler-history-tab" data-bs-toggle="tab" data-bs-target="#adler-history" type="button" role="tab" aria-controls="community-initiatives" aria-selected="false">
			<h5><?php echo $group['label_2'] ;?></h5>
		</button>
	</li>

<!-- new values moved here -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="adler-values-tab" data-bs-toggle="tab" data-bs-target="#adler-values" type="button" role="tab" aria-controls="adler-values" aria-selected="false">
			<h5><?php echo $group['label_3'] ;?></h5>
		</button>
	</li>


<!-- Student Experience (Adler - Culture) -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="adler-culture-tab" data-bs-toggle="tab" data-bs-target="#adler-culture" type="button" role="tab" aria-controls="adler-culture" aria-selected="false">
			<h5><?php echo $group['label_4'] ;?></h5>
		</button>
	</li>



<!-- Graduate Highlight (Testimonial) -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="adler-grad-highlight-tab" data-bs-toggle="tab" data-bs-target="#adler-grad-highlight" type="button" role="tab" aria-controls="adler-grad-highlight" aria-selected="false">
			<h5><?php echo $group['label_5'] ;?></h5>
		</button>
	</li>



</ul>

<div class="tab-content" id="tab-1-content">
	<!-- <div 
		class="tab-pane fade show active mb-5" id="about-adler" role="tabpanel" aria-labelledby="about-adler-tab">
		
</div> -->
	<div class="tab-pane fade" id="why-adler" role="tabpanel" aria-labelledby="why-adler-tab">
		<?php echo (acf_esc_html ($group['text_2'])) ;?>
	</div>

	

</div><!-- tab content  -->