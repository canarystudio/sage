<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('views/partials/banner'); ?>
  <?php get_template_part('views/partials/page', 'header'); ?>
  <?php get_template_part('views/partials/content', 'page'); ?>
<?php endwhile; ?>
