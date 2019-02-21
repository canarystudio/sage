<?php
  if (isset($_GET['s'])) {
    $search = esc_html($_GET['s']);
  }
?>

<form class="search-form" role="search">
  <input type="hidden" name="post_type" value="<?php echo get_post_type(); ?>">
  <div class="input-group mb-sm-3">
    <input class="form-control" type="search" name="s" placeholder="search <?php echo get_post_type(); ?>"<?php if ( isset( $_GET['s'] ) ) { echo " value=' " . $_GET['s'] . " ' "; } ?>>
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit">Search</button>
    </div>
  </div>
</form>

<?php if (isset($_GET['s'])) { ?>
  <h2><span>Showing results for:</span> <?php echo $search ?></h2>
<?php } ?>
