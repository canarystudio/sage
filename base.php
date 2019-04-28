<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('views/partials/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('views/partials/header');
    ?>
  <div class="main px-cw py-cw"><?php include Wrapper\template_path(); ?></div>
    <?php
      do_action('get_footer');
      get_template_part('views/partials/footer');
      wp_footer();
    ?>
  </body>
</html>
