<?php
/**
   * Get global options
   *
   * These are set by the CW Options plugin
   */

  //  check for options
  $event_option_speaker_order_alpha_surname = get_field('event_option_speaker_order_alpha_surname', 'option');
  $event_option_speaker_size = get_field('event_option_speaker_size', 'option');

  if ( !$event_option_speaker_size ) {
    $event_option_speaker_size_cols = ' col-sm-4 col-md-3 col-lg-2';
  } else {
    $event_option_speaker_size_cols = ' ' . $event_option_speaker_size;
  };
?>

<div class="px-4 py-10 px-sm-8 pt-sm-8 pb-sm-3 ">
<?php get_template_part('views/partials/page-header', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
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
    <?php get_template_part('views/partials/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  </div>
  <?php endwhile; ?>
</div>
<?php the_posts_navigation(); ?>
</div>
