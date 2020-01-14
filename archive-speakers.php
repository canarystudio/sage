<?php
/**
   * Get global options
   *
   * These are set by the CW Options plugin
   */

  //  check for options
  $event_option_speaker_order_alpha_surname = get_field('event_option_speaker_order_alpha_surname', 'option');
  $event_option_speaker_size = get_field('event_option_speaker_size', 'option');
  $event_option_speaker_layout = get_field('event_option_speaker_layout', 'option');
  $event_option_speaker_categorise = get_field('event_option_speaker_categorise', 'option');

  if ( !$event_option_speaker_size ) {
    $event_option_speaker_size_cols = ' col-sm-4 col-md-3 col-lg-2';
  } else {
    $event_option_speaker_size_cols = ' ' . $event_option_speaker_size;
  };
?>

<div class="primary-content container-xl px-cw py-4 py-sm-8">
  <?php get_template_part('views/partials/page-header', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>


  <?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
  <?php endif; ?>


  <?php
  /**
   * Check if categorised or not
   *
   * These are set by the CW Options plugin
   */

  if ( $event_option_speaker_categorise ) { ?>

  <?php get_template_part('views/partials/content-speakers-categorised'); ?>

  <?php } else { ?>

  <div class="row row-speakers mx-sm-n1">
  <?php
  if ( $event_option_speaker_order_alpha_surname ) {
    $args = array(
      'post_type'     => 'speakers',
      'posts_per_page'  => -1,
      'meta_key'      => 'speaker_last_name',
      'orderby'     => 'meta_value',
      'order'       => 'ASC'
    );
    query_posts($args);
  }
  ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="d-flex px-sm-1 mb-3<?php echo $event_option_speaker_size_cols; ?>">
      <?php if ( $event_option_speaker_layout == 'vertical' ) { ?>
      <?php get_template_part('views/partials/content-speakers'); ?>
      <?php } elseif ( $event_option_speaker_layout == 'horizontal' ) { ?>
      <?php get_template_part('views/partials/content-speakers-horizontal'); ?>
      <?php } else { ?>
      <?php }; ?>
    </div>
    <?php endwhile; ?>
  </div>
  <?php }; ?>


  <?php the_posts_navigation(); ?>
</div>