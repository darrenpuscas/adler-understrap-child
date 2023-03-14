<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field( 'tab_group_heading' ); ?></h3>
<?php if ( have_rows( 'tab_list' ) ) : ?>
	<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">

	<?php while ( have_rows( 'tab_list' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'active' ) == 1 ) : ?>
			<li class="nav-item" role="presentation">
				<button
					class="nav-link active" 
					id="<?php the_sub_field('tab_name');?>-tab"
					data-bs-toggle="tab" 
					data-bs-target="#<?php the_sub_field('tab_name');?>" 
					type="button" role="tab" 
					aria-controls="<?php the_sub_field('tab_name');?>" 
					aria-selected="true">
					<h5><?php the_sub_field( 'tab_label' ); ?></h5>
				</button>
			</li>
		<?php else : ?>
			<li class="nav-item" role="presentation"> 
				<button
					class="nav-link" 
					id="<?php the_sub_field('tab_name');?>-tab"
					data-bs-toggle="tab" 
					data-bs-target="#<?php the_sub_field('tab_name');?>" 
					type="button" role="tab" 
					aria-controls="<?php the_sub_field('tab_name');?>" 
					aria-selected="true">
					<h5><?php the_sub_field( 'tab_label' ); ?></h5>
				</button>
			</li>
		<?php endif; ?>
	<?php endwhile; ?>
	</ul>
<?php else : ?>
	<?php echo('<p>No Tabs Found</p>') ?>
<?php endif; ?>

</div>
<!-- add console log for php -->
<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

?>


<?php if ( have_rows( 'tab_group_1_content' ) ): ?>
<section class="tab-content" id="tab-1-content">
	<?php while ( have_rows( 'tab_group_1_content' ) ) : the_row(); ?>

	<?php if ( get_row_layout() == 'tab_content' ) : ?>
		<?php $tabName = get_sub_field( 'tab_name' ) ?>
	<?php endif ?>

		<div 
			class="tab-pane fade show active mb-5" id="<?php echo $tabName?>" role="tabpanel" aria-labelledby="<?php echo $tabName?>">


	<?= console_log($tabName); ?>


			<?php if ( get_row_layout() == 'tab_content' ) : ?>
			<?php //the_sub_field( 'tab_name' ); ?>


			<?php if ( have_rows( 'paragraph' ) ) : ?>
				<?php while ( have_rows( 'paragraph' ) ) : the_row(); ?>
					<?php the_sub_field( 'text' ); ?>
					<?php //the_sub_field( 'image_position' ); ?>
					<?php //if ( get_sub_field( 'drop_cap' ) == 1 ) : ?>
						<?php // echo 'true'; ?>
					<?php //else : ?>
						<?php // echo 'false'; ?>
					<?php //endif; ?>

				<?php endwhile; ?>
			<?php else : ?>
				<?php // No rows found ?>
			<?php endif; ?>




			<?php if ( have_rows( 'bullet_list' ) ) : ?>
				<?php while ( have_rows( 'bullet_list' ) ) : the_row(); ?>
					<?php the_sub_field( 'content' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // No rows found ?>
			<?php endif; ?>
			<?php if ( have_rows( 'blockquote' ) ) : ?>
				<?php while ( have_rows( 'blockquote' ) ) : the_row(); ?>
					<?php the_sub_field( 'content' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // No rows found ?>
			<?php endif; ?>
		<?php endif; ?>

		</div><!-- tab1 group content -->
	<?php endwhile; ?>


<?php else: ?>
	<?php echo 'No layouts found' ?>


</section>
<?php endif; ?>
