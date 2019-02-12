<?php get_template_part('views/partials/page-header', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

<?php
  if (isset($_GET['s'])) {
    $search = esc_html($_GET['s']);
  }
?>

<form class="navbar-form search-form" role="search">
  <div class="input-group">
    <input class="form-control" type="search" name="s" placeholder="Search exhibitors"<?php if ( isset( $_GET['s'] ) ) {
    echo " value=' " . $search . " ' ";
    } ?>>
    <div class="input-group-btn">
      <button class="btn btn-primary" type="submit"></button>
    </div>
  </div>
</form>

<?php if (isset($_GET['s'])) { ?>
  <h2><span>Showing results for:</span> <?php echo $search ?></h2>
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
