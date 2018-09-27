<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('container'); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php get_template_part('views/partials/content', get_post_type()); ?>
    </div>
  </article>
<?php endwhile; ?>
