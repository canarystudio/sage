<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('views/partials/page', 'header-home'); ?>
  <?php get_template_part('views/partials/content', 'page-full-width'); ?>
<?php endwhile; ?>
