<?php use Roots\Sage\Titles; ?>

<div class="page-header mb-4">
  <h1>Presentations</h1>
  <?php get_template_part('views/partials/form-search', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
</div>
