<?php
/**
 * Template Name: Flexible
 */
?>

<?php if ( have_rows( 'content' ) ) : while ( have_rows('content' ) ) : the_row(); ?>
  <?php get_template_part('views/partials/content', 'banner-row'); ?>
  <div class="container-fluid">
  <?php get_template_part('views/partials/content', 'tab-box-row'); ?>
  <?php get_template_part('views/partials/content', 'speakers-row'); ?>
  <?php get_template_part('views/partials/content', 'carousel'); ?>
  <?php get_template_part('views/partials/content', 'generic-row'); ?>
  <?php get_template_part('views/partials/content', 'feature-blocks'); ?>
  <?php get_template_part('views/partials/content', 'statistics-row'); ?>
  </div>
<?php endwhile; endif; ?>
