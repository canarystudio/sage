<div class="modal mo fade modal-dialog-centered bd-example-modal-sm-<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        <div class="speaker-name-modal m-0">

          <p class="m-0">
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
          <p class="speaker-position m-0 font-sm">
            <?php echo get_field('speaker_position', $speaker); ?>
          </p>
          <?php endif; ?>
          <?php if (get_field('speaker_organisation_affiliation', $speaker)) { ?>
          <p class="speaker-organisation m-0 font-sm">
            <?php the_field('speaker_organisation_affiliation', $speaker); ?>
          </p>
          <?php }; ?>
        </div>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body font-xs">
        <?php echo get_field('speaker_bio', $speaker); ?>
      </div>
    </div>
  </div>
</div>
