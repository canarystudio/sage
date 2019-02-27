<?php get_template_part('views/partials/page-header', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

<div class="container">
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<div class="row row-speakers mx-sm-n1">
  <?php while (have_posts()) : the_post(); ?>
  <div class="col-sm-3 px-sm-1">
    <?php get_template_part('views/partials/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  </div>
  <?php endwhile; ?>
</div>
<?php the_posts_navigation(); ?>
</div>
