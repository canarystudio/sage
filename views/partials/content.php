<article <?php post_class('col-3 mb-3'); ?>>

  <header class="row no-gutters">

    <?php get_template_part('views/partials/image', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

    <h1 class="h2 entry-title col">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>

    <?php if ( is_singular() ) { ?>
    <!-- TODO: hookup back button -->
    <!-- <p class="ml-auto"><a href="">Back to all</a></p> -->
    <?php }; ?>

  </header>

  <?php if ( is_singular() ) { ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
  <?php }; ?>

</article>

