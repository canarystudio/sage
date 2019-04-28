  <div class="container">
    <div class="row mb-4 pb-3 border-bottom">

      <?php
      // primary speaker photo
        if (get_field('speaker_image', $speaker)) {
          $attachment_id = get_field('speaker_image', $speaker);
          $size = "full"; // (thumbnail, medium, large, full or custom size)
          $icon = "true";
          $attr = array(
            'class' => "img-fluid",
          );
          echo '<div class="col-sm-3 pr-4">' . wp_get_attachment_image( $attachment_id, $size, $icon, $attr ) . '</div>';
        };
      ?>

      <div class="col">

        <h4 class="text-primary m-0">
          <a href="<?php the_permalink($speaker); ?>">
            <?php the_field('speaker_first_name', $speaker); ?>
            <?php the_field('speaker_last_name', $speaker); ?>
          </a>
        </h4>
        <p class="mb-3">
          <strong>
          <?php the_field('speaker_organisation_affiliation', $speaker); ?><br/>
          <?php the_field('speaker_position', $speaker); ?><br/>
          </strong>
        </p>

        <?php if ( get_field('speaker_bio', $speaker) ) : ?>
          <?php echo get_field('speaker_bio', $speaker); ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
