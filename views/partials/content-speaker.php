<?php
  // check for cw presentation plugin
  if(in_array('cw-presentation-plugin/presentation-plugin.php', apply_filters('active_plugins', get_option('active_plugins')))){
?>

  <div class="card">
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
      No Image
    <?php }; ?>

    <?php if (get_field('speaker_bio', $speaker)) { ?>

    <?php // @TODO place somewhere it renders, feed in ajax ?>
    <div class="modal fade bd-example-modal-sm-<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">

        </div>
      </div>
    </div>

    <a class="card-button m-2 btn-icon btn-enlarge" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-<?php echo $post->ID; ?>">Biography</a>

    <?php }; ?>

    <div class="card-body">
      <p class="speaker-name">
        <a href="<?php the_permalink(); ?>">
        <?php if (get_field('speaker_title', $speaker)) { ?>
        <?php the_field('speaker_title', $speaker); ?>
        <?php }; ?>
        <?php if (get_field('speaker_first_name', $speaker)) { ?>
        <?php the_field('speaker_first_name', $speaker); ?>
        <?php }; ?>
        <?php if (get_field('speaker_last_name', $speaker)) { ?>
        <?php the_field('speaker_last_name', $speaker); ?>
        <?php }; ?>
        </a>
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
      </p>
    </div>
  </div>

  <?php
  } else {
    // show error in console
  ?>
    <div>
      <script>
        console.log('Enable the presentations plugin to display speakers.');
      </script>
    </div>
    <?php
  }
?>
