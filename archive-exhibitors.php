
<?php
  if (isset($_GET['s'])) {
    $search = esc_html($_GET['s']);
  }

  // get result count
  $allsearch = new WP_Query("s=$s&showposts=0");
  $result_count = $allsearch ->found_posts;
?>
<div class="p-4 p-sm-8 bg-white">

  <?php if (isset($_GET['s'])) { ?>
    <h2 class="letter-spacing-normal text-transform-none m-0 mb-5 mt-n3 border-bottom border-warning pb-4">
      <small class="text-muted">Showing <?php echo $result_count; ?> results for:</small>
      <?php echo $search ?>
      <a href="/exhibitors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a>
    </h2>
  <?php } ?>

  <div class="row">
    <?php
      $posts = query_posts($query_string  . '&orderby=title&order=asc');
      while (have_posts()) : the_post();
    ?>
    <div class="col-sm-6 pb-4">
      <?php get_template_part('views/partials/content', 'exhibitors'); ?>
    </div>
    <?php endwhile; ?>
  </div>

</div>
