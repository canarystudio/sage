<?php get_template_part('views/partials/page-header', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

<?php get_template_part('views/partials/form-search', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

<div class="row">
  <?php
    $posts = query_posts($query_string  . '&orderby=title&order=asc');
    while (have_posts()) : the_post();
  ?>
  <div class="col-sm-6 pb-4">
    <?php get_template_part('views/partials/list', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  </div>
  <?php endwhile; ?>
</div>
