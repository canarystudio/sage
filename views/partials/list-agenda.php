<?php

  /**
   * start agenda row
   * one row per timeslot
   */

?>

<header class="row mt-4 border-dark border-bottom no-gutters p-3">
  <h3 class="col m-0"><?php the_title(); ?></h3>
</header>

 <?php

  // get agenda row
  if ( have_rows('cw_agenda_row') ):
    while( have_rows('cw_agenda_row') ) : the_row();

      // set style for agenda row
      if( get_sub_field('cw_agenda_row_type') ) {
        $cw_agenda_row_type = get_sub_field('cw_agenda_row_type');
      }
  ?>

  <div class="row border-dark border-bottom no-gutters"<?php echo ' style="background-color:' . $cw_agenda_row_type . '"';?>>

  <?php

      // get time and row type for styling
      if( get_sub_field('cw_agenda_row_time') ) {
      ?>
        <div class="cw-time p-3 col-sm-2"><?php echo get_sub_field('cw_agenda_row_time'); ?></div>
      <?php
      }

        // get rows for each agenda item
        if ( have_rows('cw_agenda_item') ):
          while( have_rows('cw_agenda_item') ) : the_row();

            // get first 'room' term
            $term = get_term_by('id', get_sub_field('cw_agenda_item_room'), 'rooms');
            $room_name = $term->name;
            ?>

            <?php
            // set agenda item type
            if( get_sub_field('cw_agenda_item_type') ) {
              $cw_agenda_item_type = get_sub_field('cw_agenda_item_type');
            }

            // if agenda item is presentation
            if ( $cw_agenda_item_type == 'presentation' ) {

              // create html container - open
              ?>

              <div class="border-left p-3 col">

                <?php if ($room_name)  : ?>
                  <p class="badge d-inline-block badge-secondary rounded"><?php echo $room_name; ?></p>
                <?php endif; ?>

              <?php

              // set presentation post object
              $post_object = get_sub_field('cw_agenda_item_presentation', $postid);

              // get presentation post object
              if( $post_object ):

                // override $post
                $post = $post_object;
                setup_postdata( $post );

                // presentation fields
                ?>
                <p><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></p>
                <?php

                  // get speaker post object, as set by presentation
                  $post_object = get_field('presentation_primary_speaker')[0];

                  // get speaker post object
                  if( $post_object ):

                    // override $post
                    $post = $post_object;
                    setup_postdata( $post );

                    // speaker fields
                    ?>

                      <?php if ( get_field('speaker_first_name') ) : ?>
                        <p class="m-0">
                          <strong>
                            <?php echo get_field('speaker_first_name'); ?>
                            <?php echo get_field('speaker_last_name'); ?>
                          </strong>
                        </p>
                      <?php endif; ?>

                      <?php if ( get_field('speaker_organisation_affiliation') ) : ?>
                        <p class="m-0"><?php echo get_field('speaker_organisation_affiliation'); ?></p>
                      <?php endif; ?>


                    <?php

                    // reset the $post object so the rest of the page works correctly
                    wp_reset_postdata();
                  endif;


                // reset the $post object so the rest of the page works correctly
                wp_reset_postdata();
              endif;

              // close presentation container
              ?>
              </div>
              <?php


            // if agenda item is not presentation
            } else {

            ?>
            <div class="border-left p-3 col">

              <?php if ($room_name)  : ?>
                <p class="badge d-inline-block badge-secondary rounded"><?php echo $room_name; ?></p>
              <?php endif; ?>

              <p><strong><?php the_sub_field('cw_agenda_item_name'); ?></strong></p>
            </div>
            <?php

            };


        endwhile; // close while rows for agenda items
      endif; // close if rows for agenda items

  ?>

  </div>
  <?php

    endwhile; // close while rows for agenda rows
  endif; // close if rows for agenda rows
