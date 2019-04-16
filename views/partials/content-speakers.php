

  <div class="card card-speaker">

    <?php

    // primary speaker photo
    $placeholder_image = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 585 350" class="img-fluid"><title>' . $speaker_name . '</title><rect width="585" height="350" style="fill:#eff2f4"/><path d="M425.56,350c0-58.84-31.47-108.39-77.26-133.16,17.17-15.49,25.75-40.26,25.75-65,0-49.55-37.2-89.81-83-89.81s-83,40.26-83,89.81c0,24.77,11.45,49.54,28.62,65-45.79,24.77-77.26,74.32-77.26,133.16" style="fill:none;stroke:#001135;stroke-miterlimit:8"/></svg>';

    // if has image
    if (get_field('speaker_image', $speaker)) {
      $speaker_name = get_field(speaker_first_name) . " " . get_field(speaker_last_name);
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

    <?php if (get_field('speaker_bio')) { ?>
    <a class="card-button btn-icon btn-enlarge" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-<?php echo $post->ID; ?>">Biography</a>
    <?php }; ?>

    <?php
    if ( is_archive() ) {
      get_template_part('views/partials/content-speakers-modal');
    };
    ?>

    <div class="card-body">
      <p class="speaker-name mb-0">
        <a href="<?php the_permalink(); ?>">
        <span>
        <?php if (get_field('speaker_title', $speaker)) { ?>
        <?php the_field('speaker_title', $speaker); ?>
        <?php }; ?>
        <?php if (get_field('speaker_first_name', $speaker)) { ?>
        <?php the_field('speaker_first_name', $speaker); ?>
        <?php }; ?>
        <?php if (get_field('speaker_last_name', $speaker)) { ?>
        <?php the_field('speaker_last_name', $speaker); ?>
        <?php }; ?>
        </span>
        </a>
        <?php if ( get_field('speaker_position', $speaker) ) : ?>
        <span class="speaker-position">
        <br>
        <?php echo get_field('speaker_position', $speaker); ?>
        </span>
        <?php endif; ?>
        <?php if (get_field('speaker_organisation_affiliation', $speaker)) { ?>
        <br>
        <span class="speaker-organisation">
        <?php the_field('speaker_organisation_affiliation', $speaker); ?>
        </span>
        <?php }; ?>
      </p>
    </div>
  </div>
