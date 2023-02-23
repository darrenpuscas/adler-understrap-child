
<!-- <div id="tab-group-2" class="page-menu-two page-tab-menu pb-0 pt-3 pt-sm-3 pb-5 pt-md-5 pb-md-4"> -->

<!-- </div> -->

<?php if ( have_rows( 'about_us' ) ): ?>
	<?php while ( have_rows( 'about_us' ) ) : the_row(); ?>
  <div id="tab-group-1" class="page-menu-one page-tab-menu mb-0 pt-3 pt-sm-3 pb-4 pt-md-2 pb-md-2">


		<?php if ( get_row_layout() == 'tab_group' ) : ?>
			<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('tab_label')?></h3>
			<?php //the_sub_field( 'tab_label' ); ?>

			<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">

			<li class="nav-item" role="presentation">    
		<button 
			class="nav-link active" 
			
			
			
			
			id="<?php the_sub_field('tab_name');?>-tab"
			data-bs-toggle="tab" 
			data-bs-target="#<?php the_sub_field('tab_name');?>" 
			type="button" role="tab" 
			aria-controls="<?php the_sub_field('tab_name');?>" 
			aria-selected="true">
				<h5><?php echo $group['label_1']?></h5>
		</button>
	</li>



			<?php if ( have_rows( 'paragraph' ) ) : ?>
				
        <?php while ( have_rows( 'paragraph' ) ) : the_row(); ?>
					<?php the_sub_field( 'text' ); ?>
					<?php the_sub_field( 'image_position' ); ?>
					<?php if ( get_sub_field( 'drop_cap' ) == 1 ) : ?>

            <?php // echo 'true'; ?>

            <?php else : ?>

              <?php // echo 'false'; ?>
					<?php endif; ?>
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


	<?php endwhile; ?>

<?php else: ?>



	<?php // No layouts found ?>


</div>
<?php endif; ?>