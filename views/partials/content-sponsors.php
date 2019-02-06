<?php
  // check for cw presentation plugin
  if(in_array('cw-presentation-plugin-v2/presentation-plugin.php', apply_filters('active_plugins', get_option('active_plugins')))){
?>


  <?php if (get_field('sponsors_logo')) { ?>
    <?php
      // first, get the image object returned by ACF
      $image_object = get_field('sponsors_logo');
      // and the image size you want to return
      $image_size = 'large';
      // now, we'll exctract the image URL from $image_object
      $image_url = $image_object['sizes'][$image_size];
    ?>
    <div>
    <?php if ( get_field('sponsors_url') ) : ?>
      <a href="<?php echo get_field('sponsors_url'); ?>" target="_blank">
    <?php endif; ?>

    <img class="card-img-top" src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">

    <?php if ( get_field('sponsors_url') ) : ?>
      </a>
    <?php endif; ?>
    </div>

    <?php
      } else {
    ?>

  <?php }; ?>

  <?php
  } else {
    // show error in console
  ?>
  <script>
    console.error('Enable the presentations plugin to display sponsors.');
  </script>
  <?php
  }
?>
