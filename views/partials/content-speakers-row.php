<?php
// ACF group - statistics row
  if( get_row_layout() == 'speakers_row' ) {
?>
<section class="content-row py-7

  <?php if ( get_sub_field('speaker_row_background') == 'primary' ) { ?>
  bg-primary text-light
  <?php } elseif ( get_sub_field('speaker_row_background') == 'secondary' ) { ?>
  bg-secondary text-light
  <?php } elseif ( get_sub_field('speaker_row_background') == 'grey' ) { ?>
  bg-light
  <?php } else { ?>
  bg-white
  <?php }; ?>

  <?php if ( get_sub_field('speaker_row_size') == 'full' ) { ?>
  full-width
  <?php }; ?>
">

  <?php if ( get_sub_field('speaker_row_size') == 'contained' ) { ?>
    <div class="container">
  <?php }; ?>

  <?php if( get_sub_field('speakers_carousel_content_before') ) : ?>
    <?php echo get_sub_field('speakers_carousel_content_before'); ?>
  <?php endif; ?>

  <?php
    $speaker_order = get_field('event_speaker_order', 'option');

    if ( get_field('event_speaker_order', 'option') && ( $speaker_order != 'custom' ) ) {
      $args = array(
        'post_type'   => 'speakers',
        'meta_key'	  => $speaker_order,
        'orderby'			=> 'meta_value',
        'order' => 'ASC',
      );
    } else {
      $args = array(
        'post_type'   => 'speakers',
      );
    }

    $speaker_query = new WP_Query( $args );
    if ( $speaker_query->have_posts() ) {
  ?>
  <!-- speakers list -->
  <div class="card-deck carousel-speaker" data-slick='{"slidesToShow": <?php echo get_sub_field('speaker_row_slides'); ?>, "slidesToScroll": <?php echo get_sub_field('speaker_row_slides'); ?>}'>
  <?php
    while($speaker_query->have_posts()) : $speaker_query->the_post();
    get_template_part('views/partials/content-speaker');
    endwhile;
    wp_reset_postdata();
  ?>
  </div>
  <?php }; ?>
  <?php
    $modal_args = array(
      'post_type'   => 'speakers',
    );
    $speaker_query_modal = new WP_Query( $modal_args );
    while($speaker_query_modal->have_posts()) : $speaker_query_modal->the_post();
    get_template_part('views/partials/content-speaker-modal');
    endwhile;
    wp_reset_postdata();
  ?>

  <?php if( get_sub_field('speakers_carousel_content_after') ) : ?>
    <?php echo get_sub_field('speakers_carousel_content_after'); ?>
  <?php endif; ?>

  <?php if ( get_sub_field('speaker_row_size') == 'contained' ) { ?>
    </div>
  <?php }; ?>

</section>
<?php }; ?>
