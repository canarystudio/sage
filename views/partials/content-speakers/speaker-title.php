
  <?php echo get_the_title($speaker); ?>
  <?php if( get_field('speaker_organisation_affiliation', $speaker) ): ?>
  <br /><span class="text-muted">
    <?php the_field('speaker_organisation_affiliation', $speaker); ?></span>
  <?php endif; ?>
  <?php if( get_field('speaker_position', $speaker) ): ?>
  <br /><span class="text-muted">
    <?php the_field('speaker_position', $speaker); ?></span>
  <?php endif; ?>
