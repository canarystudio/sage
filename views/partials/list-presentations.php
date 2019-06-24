<div class="col-sm-12 pb-4">
  <?php get_template_part('views/partials/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
</div>
