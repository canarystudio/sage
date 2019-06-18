<?php
//  check for options
  $show_speaker_bio = get_field('event_link_speaker_bio', 'option');

  ?>

  <div class="card card-speaker w-100">

    <?php

    // primary speaker photo
    $placeholder_image = '';

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
    <?php
    if ( is_archive() ) {
      get_template_part('views/partials/content-speakers-modal');
    };
    ?>

    <div class="card-body">
      <p class="speaker-name mb-0 font-sm">
      <?php if (get_field('speaker_title', $speaker)) { ?>
      <?php the_field('speaker_title', $speaker); ?>
      <?php }; ?>
      <?php if (get_field('speaker_first_name', $speaker)) { ?>
      <?php the_field('speaker_first_name', $speaker); ?>
      <?php }; ?>
      <?php if (get_field('speaker_last_name', $speaker)) { ?>
      <?php the_field('speaker_last_name', $speaker); ?>
      <?php }; ?>
      </p>

      <?php if ( get_field('speaker_position', $speaker) ) : ?>
      <p class="speaker-position m-0 font-xs">
        <?php echo get_field('speaker_position', $speaker); ?>
      </p>
      <?php endif; ?>
      <?php if (get_field('speaker_organisation_affiliation', $speaker)) { ?>
      <p class="speaker-organisation m-0 font-xs">
        <?php the_field('speaker_organisation_affiliation', $speaker); ?>
      </p>
      <?php }; ?>


      <?php
        // show link to bio if option has been set
        if ($show_speaker_bio) {
      ?>

      <?php if (get_field('speaker_bio')) { ?>
      <a class="btn-enlarge  font-sm" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-<?php echo $post->ID; ?>">Biography</a>
      <?php }; ?>

      <?php }; ?>

    </div>
  </div>
