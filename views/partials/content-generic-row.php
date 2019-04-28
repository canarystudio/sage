<?php
// ACF group - statistics row
  if( get_row_layout() == 'generic_row' ) {
?>
<section class="content-row py-7 full-width
  <?php if ( get_sub_field('generic_row_background') == 'primary' ) { ?>
  bg-primary text-light
  <?php } elseif ( get_sub_field('generic_row_background') == 'secondary' ) { ?>
  bg-secondary text-light
  <?php } elseif ( get_sub_field('generic_row_background') == 'grey' ) { ?>
  bg-light
  <?php } else { ?>
  bg-white
  <?php }; ?>
">

  <?php if ( get_sub_field('generic_row_size') == 'contained' ) { ?>
    <div class="container">
  <?php }; ?>

  <?php the_sub_field('generic_row_content'); ?>

  <?php if ( get_sub_field('generic_row_size') == 'contained' ) { ?>
    </div>
  <?php }; ?>

</section>
<?php }; ?>
