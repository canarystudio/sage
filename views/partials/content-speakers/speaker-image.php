<?php
$event_option_speaker_thumbnail_width = get_field('event_option_speaker_thumbnail_width', 'option');
$event_option_speaker_thumbnail_height = get_field('event_option_speaker_thumbnail_height', 'option');
$event_option_speaker_thumbnail_ratio = $event_option_speaker_thumbnail_height / $event_option_speaker_thumbnail_width * 100;
?>
<div class="card-speaker-img">
  <?php
    // primary speaker photo
  $placeholder_image = '<div class="cw-speaker-thumbnail cw-speaker-placeholder" style="padding-bottom: '. $event_option_speaker_thumbnail_ratio .'%;"></div>';

    // if has image
  if (get_field('speaker_image', $speaker)) {
    $speaker_name = get_field(speaker_first_name) . " " . get_field(speaker_last_name);

    $attachment_id = get_field('speaker_image', $speaker);
      $size = 'speaker-thumbnail'; // (thumbnail, medium, large, full or custom size)
      $icon = "true";
      $attr = array(
        'class' => "img-fluid h-auto",
        'alt'   => $speaker_name,
      );

      // get image src
      $image_attributes = wp_get_attachment_image_src( $attachment_id );

      // check if file has a src (not broken)
      if ( $image_attributes[0] ) {
        // return correct image
        echo '<div class="cw-speaker-thumbnail cw-speaker-photo">' . wp_get_attachment_image( $attachment_id, $size, "true", $attr ) . '</div>';
      } else {
        // if file is broken, return default image
        echo $placeholder_image;
      }

    // if has no attachment at all, return default image

    } else {
      echo $placeholder_image;
    };

    ?>
  </div>
