<?php get_template_part('views/partials/page-header'); ?>

  <?php
    $posts = query_posts($query_string  . '&orderby=title&order=asc');
    while (have_posts()) : the_post();
  ?>

    <?php get_template_part('views/partials/list', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

  <?php endwhile; ?>

