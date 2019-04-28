<?php
// ACF group - banner row
// @TODO set banner as default if none supplied
  if( get_row_layout() == 'banner_row' ) {
?>

  <?php if ( get_sub_field('banner_row_size') == 'large' ) { ?>
    <?php get_template_part('views/partials/page', 'header-large'); ?>
  <?php } elseif ( get_sub_field('banner_row_size') == 'custom' ) { ?>
    <?php get_template_part('views/partials/page', 'header-custom'); ?>
  <?php } else { ?>
  <?php get_template_part('views/partials/page', 'header-small'); ?>
  <?php }; ?>


<?php }; ?>
