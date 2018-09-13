<?php
// ACF group - statistics row
  if( get_row_layout() == 'statistics_row' ) {
?>

<section class="content-row text-center py-7 full-width
  <?php if ( get_sub_field('statistics_row_background') == 'primary' ) { ?>
  bg-primary text-light
  <?php $large_text_color = 'text-secondary'; ?>
  <?php } elseif ( get_sub_field('statistics_row_background') == 'secondary' ) { ?>
  bg-secondary text-light
  <?php $large_text_color = 'text-primary'; ?>
  <?php } elseif ( get_sub_field('statistics_row_background') == 'grey' ) { ?>
  bg-light
  <?php $large_text_color = 'text-primary'; ?>
  <?php } else { ?>
  bg-white
  <?php $large_text_color = 'text-primary'; ?>
  <?php }; ?>
">

  <?php if( get_sub_field('content_before') ) : ?>
    <?php echo get_sub_field('content_before'); ?>
  <?php endif; ?>

  <?php if( have_rows('stats') ): ?>
  <div class="row justify-content-center mb-3">
    <?php while ( have_rows('stats') ) : the_row(); ?>
    <p class="col-sm-2">
      <span class="h1 display-1 <?php echo $large_text_color; ?>"><?php the_sub_field('number'); ?></span><br>
      <?php the_sub_field('label'); ?>
    </p>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>

  <?php if( get_sub_field('content_after') ) : ?>
    <?php echo get_sub_field('content_after'); ?>
  <?php endif; ?>

</section>
<?php }; ?>
