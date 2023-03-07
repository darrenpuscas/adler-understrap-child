
<?php if ( have_rows( 'about_us' ) ): ?>
	<?php while ( have_rows( 'about_us' ) ) : the_row(); ?>

<?php if ( get_row_layout() == 'tab_group' ) : ?>
		<!-- Repeatable content - Each Tab Group -->
<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_sub_field('tab_group_heading')?></h3>

<!-- Tab List Repeater for ul -->

<?php if ( have_rows( 'tab_list' ) ) : ?>
	
	<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
		<?php while ( have_rows( 'tab_list' ) ) : the_row(); ?>
		
			<li class="nav-item" role="presentation"> 
				<button 
					class="nav-link active" 
					id="<?php the_sub_field('tab_label');?>-tab"
					data-bs-toggle="tab" 
					data-bs-target="#<?php the_sub_field('tab_label');?>" 
					type="button" role="tab" 
					aria-controls="<?php the_sub_field('tab_label');?>" 
					aria-selected="true">
					<h5><?php the_sub_field( 'tab_name' ); ?></h5>
				</button>
			</li>

					<?php //the_sub_field( 'tab_name' ); ?>
					<?php //the_sub_field( 'tab_label' ); ?>
				<?php endwhile; ?>

			</ul>
			<?php else : ?>
				<?php // No rows found ?>
			<?php endif; ?>






<!-- content section -->

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
<?php endif; ?>