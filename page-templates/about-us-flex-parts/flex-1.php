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
				aria-selected="false">
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


<?php if ( have_rows( 'tab_group_1_content' ) ): ?>
<section class="tab-content container-xl" id="tab-1-content">
	<?php while ( have_rows( 'tab_group_1_content' ) ) : the_row(); ?>

		<?php if ( get_row_layout() == 'tab_content' ) : ?>
			<?php $tabName = get_sub_field( 'tab_name' ) ?>
		

		<div 
				class="tab-pane fade show active mb-5" 
				id="<?php echo $tabName?>" 
				role="tabpanel" 
				aria-labelledby="<?php echo $tabName?>"
			>
			<p><?php if ( get_sub_field( 'starts_selected' ) == 1 ) : ?>
				<?php echo 'true'; ?></p>
			<p>Tab Name: <?php echo $tabName?></p>
			<?php //get_template_part('page-templates/about-us-parts/content'); ?>

		</div>

		<?php else : ?>
				<?php echo 'false'; ?>			

		<div 
				class="tab-pane fade" 
				id="<?php echo $tabName?>" 
				role="tabpanel" 
				aria-labelledby="<?php echo $tabName?>"
			>
			<p>Not active</p>
			<p>Tab Name: <?php echo $tabName?></p>
			<?php //get_template_part('page-templates/about-us-parts/content'); ?>


		</div>
		<?php endif ?>
		<?php endif ?>

	<?php endwhile; ?>


<?php else: ?>
	<?php echo 'No layouts found' ?>


</section><!-- tab1 group content -->
<?php endif; ?>
