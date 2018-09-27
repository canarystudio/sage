

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('views/partials/page-header-small'); ?>
<section class="content-row py-7"><
  <?php get_template_part('views/partials/content', 'page'); ?>
</section>
<?php endwhile; ?>
