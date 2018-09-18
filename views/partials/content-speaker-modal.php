<?php if ( get_field('speaker_bio', $speaker) ) : ?>
<div class="modal mo fade bd-example-modal-sm-<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="speaker-name-modal m-0">

          <?php if (get_field('speaker_title', $speaker)) { ?>
          <?php the_field('speaker_title', $speaker); ?>
          <?php }; ?>
          <?php if (get_field('speaker_first_name', $speaker)) { ?>
          <?php the_field('speaker_first_name', $speaker); ?>
          <?php }; ?>
          <?php if (get_field('speaker_last_name', $speaker)) { ?>
          <?php the_field('speaker_last_name', $speaker); ?>
          <?php }; ?>

          <?php if ( get_field('speaker_position', $speaker) ) : ?>
          <small class="speaker-position">
            <?php echo get_field('speaker_position', $speaker); ?>
          </small>
          <?php endif; ?>
          <?php if (get_field('speaker_organisation_affiliation', $speaker)) { ?>
          <small class="speaker-organisation">
            <?php the_field('speaker_organisation_affiliation', $speaker); ?>
          </small>
          <?php }; ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo get_field('speaker_bio', $speaker); ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
