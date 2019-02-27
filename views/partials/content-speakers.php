<?php
  // check for cw presentation plugin
  if(in_array('cw-presentation-plugin-v2/presentation-plugin.php', apply_filters('active_plugins', get_option('active_plugins')))){
?>

  <div class="card card-speaker">
  <?php if (get_field('speaker_image', $speaker)) { ?>
    <?php
      // first, get the image object returned by ACF
      $image_object = get_field('speaker_image', $speaker);
      // and the image size you want to return
      $image_size = 'thumbnail';
      // now, we'll exctract the image URL from $image_object
      $image_url = $image_object['sizes'][$image_size];
    ?>
    <img class="card-img-top" src="<?php echo $image_url; ?>" alt="<?php the_field(speaker_first_name); ?> <?php the_field(speaker_last_name); ?>">
    <?php
      } else {
    ?>

    <?php }; ?>

    <?php if (get_field('speaker_bio')) { ?>
    <a class="card-button btn-icon btn-enlarge" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-<?php echo $post->ID; ?>">Biography</a>
    <?php }; ?>

    <div class="card-body">
      <p class="speaker-name">
        <a href="<?php the_permalink(); ?>">
        <span class="h5">
        <?php if (get_field('speaker_title', $speaker)) { ?>
        <?php the_field('speaker_title', $speaker); ?>
        <?php }; ?>
        <?php if (get_field('speaker_first_name', $speaker)) { ?>
        <?php the_field('speaker_first_name', $speaker); ?>
        <?php }; ?>
        <?php if (get_field('speaker_last_name', $speaker)) { ?>
        <?php the_field('speaker_last_name', $speaker); ?>.
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
