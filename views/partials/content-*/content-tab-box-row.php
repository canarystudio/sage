<?php
// ACF group - tab_box row
  if( get_row_layout() == 'tab_box_row' ) {
?>

<section class="content-row py-7 full-width
  <?php if ( get_sub_field('tab_box_row_background') == 'primary' ) { ?>
  bg-primary text-light
  <?php } elseif ( get_sub_field('tab_box_row_background') == 'secondary' ) { ?>
  bg-secondary text-light
  <?php } elseif ( get_sub_field('tab_box_row_background') == 'grey' ) { ?>
  bg-light
  <?php } else { ?>
  bg-white
  <?php }; ?>
">

  <?php if ( get_sub_field('tab_box_row_size') == 'contained' ) { ?>
    <div class="container">
  <?php }; ?>

  <?php if( have_rows('tabs') ): ?>
  <div class="card">

    <ul class="nav nav-pills nav-fill mb-3 tabbed-box" id="box-tabs-01" role="tablist">
      <?php $i=0; while ( have_rows('tabs') ) : the_row(); ?>
      <?php $string = sanitize_title( get_sub_field('tab_title') ); ?>
      <li class="nav-item">
        <a class="nav-link<?php if ($i==0) { ?> active"<?php }; ?>" href="#<?php echo $string ?>" data-toggle="pill" role="tab" aria-controls="<?php echo $string ?>"<?php if ($i==0) { ?>  aria-selected="true"<?php }; ?>>
          <?php the_sub_field('tab_title'); ?>
        </a>
      </li>
      <?php $i++; endwhile; ?>
    </ul>

    <div class="tab-content">
      <?php $i=0; while ( have_rows('tabs') ) : the_row(); ?>
      <?php $string = sanitize_title( get_sub_field('tab_title') ); ?>
      <div class="tab-pane fade show <?php if ($i==0) { ?>active<?php } ?>" id="<?php echo $string; ?>" role="tabpanel" aria-labelledby="<?php echo $string; ?>">
        <?php the_sub_field('tab_content'); ?>
      </div>
      <?php $i++; endwhile; ?>
    </div>

  </div>
  <?php endif; ?>

  <?php if ( get_sub_field('tab_box_row_size') == 'contained' ) { ?>
    </div>
  <?php }; ?>

</section>
<?php }; ?>
