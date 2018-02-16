<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  <button class="hamburger hamburger--spin navbar-expand-md navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu([
        'menu'              => 'primary_navigation',
        'theme_location'    => 'primary_navigation',
        'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
        'container'			=> 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'navbar-nav mr-auto mt-2 mt-lg-0',
        'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
        'walker'			=> new WP_Bootstrap_Navwalker()
      ]);
      endif;
    ?>
  </div>
</nav>
