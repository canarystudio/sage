<?php
  /**
   * Setup header content and options
   * Pull in ACF fields from optoins page to set styling options
   */

  // get nav placement option field
  if (get_field('event_navigation_placement', 'option')) {
    $event_navigation_placement = get_field('event_navigation_placement', 'option');

  } else {
    $event_navigation_placement = "";
  };


  // get nav color option field
  if (get_field('event_navigation_placement', 'option')) {
    $event_navigation_colour_field = get_field('event_navigation_colour', 'option');

    if ( $event_navigation_colour_field == 'dark' ) {
      $event_navigation_colour = 'navbar-dark bg-primary';
    } else {
      $event_navigation_colour = 'navbar-light bg-white';
    }
  } else {
    $event_navigation_colour = 'navbar-dark bg-primary';
  };


  // get logo
  if ( get_field('event_logo', 'option') ) { // if image is available
    $event_logo = get_field('event_logo', 'option');

  } elseif ( get_field('event_name', 'option') ) { // fall back to ACF option name field
    $event_logo = get_field('event_name', 'option');

  } else { // fall back to WP blog title
    $event_logo = get_bloginfo('name');
  };


?>
<nav class="navbar navbar-expand-lg <?php echo $event_navigation_colour; ?> <?php echo $event_navigation_placement; ?>">
  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php echo $event_logo; ?></a>
  <button class="hamburger hamburger--spin navbar-expand-md navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <?php
    /**
     * Detect plugin. For use on Front End and Back End.
     */
    // check for plugin using plugin name
    if(in_array('canary-wp-boostrap4-navwalker/canary-wp-boostrap4-navwalker.php', apply_filters('active_plugins', get_option('active_plugins')))){
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
          'menu'              => 'primary_navigation',
          'theme_location'    => 'primary_navigation',
          'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
          'container'			=> 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'navbar-nav ml-auto mt-lg-0',
          'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
          'walker'			=> new WP_Bootstrap_Navwalker()
        ]);
      endif;
    } else {
        echo "<script>console.log('Enable the navwalker plugin to display a menu.');</script>";
    }
    ?>
  </div>
</nav>
