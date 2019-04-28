<div class="col-sm-12 mb-4">
  <a href="<?php the_permalink(); ?>">
  <?php

    // primary speaker photo
    $placeholder_image = '<svg xmlns="http://www.w3.org/2000/svg" class="img-fluid" fill="#eaeaea" viewBox="0 0 86 70"><path d="M.81,0A1,1,0,0,0,0,1V69a1,1,0,0,0,1,1H85a1,1,0,0,0,1-1V1a1,1,0,0,0-1-1H.81ZM2,2H84V59.41L64.75,38.31a1,1,0,0,0-.91-.31,1,1,0,0,0-.28.1L36.69,51.53,25.75,39.31a1,1,0,0,0-.91-.31,1,1,0,0,0-.28.1L2,50.38ZM41,16a9,9,0,1,0,9,9A9,9,0,0,0,41,16Zm0,2a7,7,0,1,1-7,7A7,7,0,0,1,41,18ZM63.75,40.22,84,62.31l0,.07V68H51.41a1.77,1.77,0,0,0-.16-.22L38.06,53.06Zm-39,1L48.78,68H2V52.59Z"/></svg>';

    // if has image
    if (get_field('speaker_image', $speaker)) {
      $attachment_id = get_field('speaker_image', $speaker);
      $size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
      $icon = "true";
      $attr = array(
        'class' => "card-img-top h-auto",
        'alt' => $speaker_name,
      );

      // get image src
      $image_attributes = wp_get_attachment_image_src( $attachment_id );

      // check if file has a src (not broken)
      if ( $image_attributes[0] ) {
        // return correct image
        echo wp_get_attachment_image( $attachment_id, $size, $icon, $attr );
      } else {
        // if file is broken, return default image
        echo $placeholder_image;
      }

    // if has no attachment at all, return default image

    } else {
        echo $placeholder_image;
    };

  ?>
  </a>
</div>
