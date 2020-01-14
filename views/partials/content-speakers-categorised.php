<?php
/*
Template Name: Speakers by Type
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

<?php
// Get all the categories
$categories = get_terms( 'speaker_type' );

// Loop through all the returned terms
foreach ( $categories as $category ):

    // set up a new query for each category, pulling in related posts.
    $services = new WP_Query(
        array(
            'post_type' => 'speakers',
            'showposts' => -1,
            'tax_query' => array(
                array(
                    'taxonomy'  => 'speaker_type',
                    'terms'     => array( $category->slug ),
                    'field'     => 'slug'
                )
            )
        )
    );
?>

<h3 class="speaker-type-title"><?php echo $category->name; ?></h3>
<div class="row row-speakers mx-sm-n1">
  <?php while ($services->have_posts()) : $services->the_post(); ?>
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

<?php
    // Reset things, for good measure
    $services = null;
    wp_reset_postdata();

// end the loop
endforeach;
?>