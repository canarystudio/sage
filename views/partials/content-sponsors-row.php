<?php
// ACF group - statistics row
  if( get_row_layout() == 'sponsors_row' ) {
?>
<section class="text-center content-row py-7

  <?php if ( get_sub_field('sponsors_row_background') == 'primary' ) { ?>
  bg-primary text-light
  <?php } elseif ( get_sub_field('sponsors_row_background') == 'secondary' ) { ?>
  bg-secondary text-light
  <?php } elseif ( get_sub_field('sponsors_row_background') == 'grey' ) { ?>
  bg-light
  <?php } else { ?>
  bg-white
  <?php }; ?>

  <?php if ( get_sub_field('sponsors_row_size') == 'full' ) { ?>
  full-width
  <?php }; ?>
">

  <?php if ( get_sub_field('sponsors_row_size') == 'contained' ) { ?>
  <div class="container">
    <?php }; ?>

    <?php if( get_sub_field('sponsors_carousel_content_before') ) : ?>
    <?php echo get_sub_field('sponsors_carousel_content_before'); ?>
    <?php endif; ?>

    <?php
      wp_reset_postdata();

      // get sponsor category
      $idObj = get_category_by_slug('sponsor');
      $id = $idObj->term_id;
      $args = array( 'parent' => $id, 'hide_empty' => 1 );
      $categories = get_categories( $args );

      // loop sponsor category
      foreach($categories as $cat) :
        if (($cat->count != '0') && ($cat->name != 'Uncategorized')) :
    ?>
    <h5 class="sponsor-category-title mt-8"><?php echo $cat->name; ?></h5>
    <div class="row justify-content-center list-sponsor">

    <?php
      // loop sponsors that belong to category
      $args = array( 'post_type' => 'sponsors', 'category' => $cat->cat_ID, 'posts_per_page' => -1 );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
      $catid = $cat->term_id;
      $catlabel = $cat->name;
    ?>

    <div class="col<?php if ( get_field('sponsors_size') ) : echo ' sponsor-' . get_field('sponsors_size'); endif; ?>">
      <?php
        get_template_part('views/partials/content-sponsors');
      ?>
    </div>


    <?php endforeach; ?>
    </div>
    <?php endif;
    endforeach; ?>

    <?php if ( get_sub_field('sponsors_row_size') == 'contained' ) { ?>
  </div>
  <?php }; ?>

</section>
<?php
  };
  wp_reset_postdata();
?>
