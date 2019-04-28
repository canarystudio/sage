<div class="container">

  <div class="page-header container pt-5">
    <h1>All Speakers</h1>
  </div>

  <div class="row">
  <?php
    // loop for speakers who NO NOT belong to keynote
    $args = array(
      'post_type'   => 'speakers',
      'posts_per_page' => '-1',
      'meta_key'      => 'speaker_last_name',
      'orderby'     => 'meta_value',
      'order'       => 'ASC',
      'tax_query' => array(
      array(
        'taxonomy' => 'speaker_type',
        'terms' => 'keynote',
        'field' => 'slug',
        'operator' => 'NOT IN'
        )
      ),
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
  ?>

    <div class="col-sm-3 px-sm-1 mb-3">
      <?php get_template_part('views/partials/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </div>

  <?php
    }
    wp_reset_postdata(); // restore the original archive loop
    };
  ?>
  </div>
</div>
