<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_1')?></h3>

<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
	<!-- why Adler -->
	<li class="nav-item" role="presentation">
		<button class="nav-link active" id="<?php the_field( '1_tab_name' ); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php the_field( '1_tab_name' ); ?>" type="button" role="tab" aria-controls="<?php the_field( '1_tab_name' ); ?>" aria-selected="false">
			<h5><?php the_field( '1_tab_label' ); ?></h5>
		</button>
	</li>
<!-- history -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="<?php the_field( '2_tab_name' ); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php the_field( '2_tab_name' ); ?>" type="button" role="tab" aria-controls="<?php the_field( '2_tab_name' ); ?>" aria-selected="false">
			<h5><?php the_field( '2_tab_label' ); ?></h5>
		</button>
	</li>
	<!-- Values and Mission -->
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="<?php the_field( '3_tab_name' ); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php the_field( '3_tab_name' ); ?>" type="button" role="tab" aria-controls="<?php the_field( '3_tab_name' ); ?>" aria-selected="false">
			<h5><?php the_field( '3_tab_label' ); ?></h5>
		</button>
	</li>

	<li class="nav-item" role="presentation">
		<button class="nav-link" id="<?php the_field( '4_tab_name' ); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php the_field( '4_tab_name' ); ?>" type="button" role="tab" aria-controls="<?php the_field( '4_tab_name' ); ?>" aria-selected="false">
			<h5><?php the_field( '4_tab_label' ); ?></h5>
		</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="<?php the_field( '5_tab_name' ); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php the_field( '5_tab_name' ); ?>" type="button" role="tab" aria-controls="<?php the_field( '5_tab_name' ); ?>" aria-selected="false">
			<h5><?php the_field( '5_tab_label' ); ?></h5>
		</button>
	</li>

</ul>

<!-- tab content -->

<div class="tab-content" id="tab-1-content">

	<!-- Why -->
	<div class="tab-pane fade show active mb-5" id="<?php the_field( '1_tab_name' ); ?>" role="tabpanel" aria-labelledby="<?php the_field( '1_tab_name' ); ?>-tab">
	<?php the_field( '1_tab_content' ); ?>
	</div>

	<!-- History -->
	<div class="tab-pane fade" id="<?php the_field( '2_tab_name' ); ?>" role="tabpanel" aria-labelledby="<?php the_field( '2_tab_name' ); ?>-tab">
	<?php the_field( '2_tab_content' ); ?>
	</div>

	<!-- History -->
	<div class="tab-pane fade" id="<?php the_field( '3_tab_name' ); ?>" role="tabpanel" aria-labelledby="<?php the_field( '3_tab_name' ); ?>-tab">
	<?php the_field( '3_tab_content' ); ?>
	</div>

	<!-- History -->
	<div class="tab-pane fade" id="<?php the_field( '4_tab_name' ); ?>" role="tabpanel" aria-labelledby="<?php the_field( '4_tab_name' ); ?>-tab">
	<?php the_field( '4_tab_content' ); ?>
	</div>

	<!-- History -->
	<div class="tab-pane fade" id="<?php the_field( '5_tab_name' ); ?>" role="tabpanel" aria-labelledby="<?php the_field( '5_tab_name' ); ?>-tab">
	<?php the_field( '5_tab_content' ); ?>
	</div>
	

</div><!-- tab 1 content  -->