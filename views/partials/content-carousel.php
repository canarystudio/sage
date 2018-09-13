<?php
// ACF group - feature_blocks
  if( get_row_layout() == 'carousel_row' ) {
?>
<section class="content-row content-row-carousel

  <?php if ( get_sub_field('carousel_row_size') == 'full' ) { ?>
  full-width
  <?php } elseif ( get_sub_field('carousel_row_size') == 'contained' ) { ?>
  py-7
    <?php if ( get_sub_field('carousel_row_background') == 'primary' ) { ?>
    bg-primary text-light
    <?php } elseif ( get_sub_field('carousel_row_background') == 'secondary' ) { ?>
    bg-secondary text-light
    <?php } elseif ( get_sub_field('carousel_row_background') == 'grey' ) { ?>
    bg-light
    <?php } else { ?>
    bg-white
    <?php }; ?>
  <?php }; ?>
">

  <?php $carousel_image_height = get_sub_field('carousel_row_height'); ?>

  <?php if ( get_sub_field('carousel_row_size') == 'contained' ) { ?>
  <div class="container">
  <?php }; ?>

  <?php if( have_rows('carousel_row_images') ): ?>

  <div class="carousel-fade">

  <?php while ( have_rows('carousel_row_images') ) : the_row(); ?>

  <?php if ( get_sub_field('carousel_row_image') ) : ?>
  <?php $carousel_image = get_sub_field('carousel_row_image'); ?>
  <?php endif; ?>

  <div class="content-row-carousel-item content-row-carousel-item-height-<?php echo $carousel_image_height; ?>" style="background-image: url(<?php echo $carousel_image['sizes']['large']; ?>);"></div>

  <?php endwhile; ?>
  </div>
  <?php endif; ?>

  <?php if ( get_sub_field('carousel_row_size') == 'contained' ) { ?>
  </div>
  <?php }; ?>

</section>
<?php }; ?>
