<?php if ( get_row_layout() == 'tab_content' ) : ?>
  <?php //the_sub_field( 'tab_name' ); ?>
in content.php

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