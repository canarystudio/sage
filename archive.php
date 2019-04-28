<section>

  <?php get_template_part('views/partials/page-header', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

  <div class="row row-archive">
    <?php
      $posts = query_posts($query_string);
      while (have_posts()) : the_post();
    ?>

    <?php get_template_part('views/partials/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

    <?php endwhile; ?>
  </div>
</section>
