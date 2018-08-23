<?php
  // check for cw presentation plugin
  if(in_array('cw-presentation-plugin/presentation-plugin.php', apply_filters('active_plugins', get_option('active_plugins')))){
?>

  <div class="speaker-block col-sm-4 d-flex">
    <div class="bg-white mb-3 position-relative">

      <?php if (get_field('speaker_image', $speaker)) { ?>
      <?php
        // first, get the image object returned by ACF
        $image_object = get_field('speaker_image', $speaker);
        // and the image size you want to return
        $image_size = 'thumbnail';
        // now, we'll exctract the image URL from $image_object
        $image_url = $image_object['sizes'][$image_size];
      ?>
      <a href="<?php the_permalink(); ?>">
        <img class="img-fluid" src="<?php echo $image_url; ?>" alt="<?php the_field(speaker_first_name); ?> <?php the_field(speaker_last_name); ?>">
      </a>
      <?php
        } else {
      ?>
      <a href="<?php the_permalink(); ?>">

      </a>
      <?php }; ?>

      <div class="p-3 mr-auto">
        <p class="lead">
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
          <br>
          <?php echo get_field('speaker_position', $speaker); ?>
          <?php endif; ?>
          <?php if (get_field('speaker_organisation_affiliation', $speaker)) { ?>
          <br>
          <?php the_field('speaker_organisation_affiliation', $speaker); ?>
          <?php }; ?>

        </p>
      </div>

      <?php if (get_field('speaker_bio', $speaker)) { ?>
        <a class="btn-icon btn-enlarge d-block" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-<?php echo $post->ID; ?>">
        <svg viewBox="0 0 9.22 9.22" xmlns="http://www.w3.org/2000/svg"><g fill="#124191"><path d="m1.94 4.18h5.34v.87h-5.34z"/><path d="m4.18 1.94h.87v5.34h-.87z"/><path d="m9.22 9.22h-9.22v-9.22h9.22zm-8.72-.5h8.22v-8.22h-8.22z"/></g></svg>
        Biography
        </a>
        <?php // @TODO place somewhere it renders, feed in ajax ?>
        <div class="modal fade bd-example-modal-sm-<?php echo $post->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

            </div>
          </div>
        </div>

      <?php }; ?>

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
