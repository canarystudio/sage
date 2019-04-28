<?php use Roots\Sage\Titles; ?>

<div class="page-header pb-cw">
  <h1><?php

    if ( is_archive() ) {
      echo post_type_archive_title( '', false );
    } else {
      the_title();
    };

  ?></h1>

  <?php if ( get_field('search_on_archive', 'option') ) : ?>
    <?php get_template_part('views/partials/form-search', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endif; ?>

</div>
