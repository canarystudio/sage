<?php
  // check for cw presentation plugin
  if(in_array('cw-presentation-plugin-v2/presentation-plugin.php', apply_filters('active_plugins', get_option('active_plugins')))){
?>

  <div class="card card-speaker h-100">

    <?php
    // primary speaker photo
      if (get_field('speaker_image', $speaker)) {
        $speaker_name = get_field(speaker_first_name) . " " . get_field(speaker_last_name);
        $attachment_id = get_field('speaker_image', $speaker);
        $size = "full"; // (thumbnail, medium, large, full or custom size)
        $icon = "true";
        $attr = array(
          'class' => "card-img-top h-auto",
          'alt' => $speaker_name,
        );
        echo wp_get_attachment_image( $attachment_id, $size, $icon, $attr );
      };
    ?>

    <?php if (get_field('speaker_bio')) { ?>
    <a class="card-button btn-icon btn-enlarge" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-<?php echo $post->ID; ?>">Biography</a>
    <?php }; ?>

    <div class="card-body">
      <p class="speaker-name mb-0">
        <a href="<?php the_permalink(); ?>">
        <span class="h5">
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

  <?php
  } else {
    // show error in console
  ?>
  <script>
    console.log('Enable the presentations plugin to display speakers.');
  </script>
  <?php
  }
?>
