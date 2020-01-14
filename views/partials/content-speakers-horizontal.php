<?php
//  check for options
  $show_speaker_bio = get_field('event_link_speaker_bio', 'option');
  $link_to_speaker_single = get_field('event_link_to_speaker_single', 'option');

  ?>

  <div class="row no-gutters w-100 border-top pt-4">
    <div class="col-4">
    <?php get_template_part('views/partials/content-speakers/speaker-image'); ?>
    </div>

    <div class="col-8 pl-4">

    <?php
    if ( is_archive() ) {
      if ($show_speaker_bio) {
        get_template_part('views/partials/content-speakers-modal');
      }
    };
    ?>


      <p class="speaker-name mb-0 font-sm">
        <?php if ($link_to_speaker_single) { ?>
        <a href="<?php the_permalink(); ?>">
        <?php }; ?>
          <?php if (get_field('speaker_title', $speaker)) { ?>
          <?php the_field('speaker_title', $speaker); ?>
          <?php }; ?>
          <?php if (get_field('speaker_first_name', $speaker)) { ?>
          <?php the_field('speaker_first_name', $speaker); ?>
          <?php }; ?>
          <?php if (get_field('speaker_last_name', $speaker)) { ?>
          <?php the_field('speaker_last_name', $speaker); ?>
          <?php }; ?>
        <?php if ($link_to_speaker_single) { ?>
        </a>
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
      <a class="btn-enlarge font-sm" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-<?php echo $post->ID; ?>">Biography</a>
      <?php }; ?>

      <?php }; ?>
      </div>


  </div>
