

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
    <h5 class="sponsor-category-title"><?php echo $cat->name; ?></h5>
    <div class="card-deck list-sponsor">

    <?php
      // loop sponsors that belong to category
      $args = array( 'post_type' => 'sponsors', 'category' => $cat->cat_ID, 'posts_per_page' => -1 );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
      $catid = $cat->term_id;
      $catlabel = $cat->name;
    ?>

    <div class="card justify-content-center items-center <?php if ( get_field('sponsors_size') ) : echo ' sponsor-' . get_field('sponsors_size'); endif; ?>">
      <?php
        get_template_part('views/partials/content-sponsors');
      ?>
    </div>


    <?php endforeach; ?>
    </div>
    <?php endif;
    endforeach; ?>

