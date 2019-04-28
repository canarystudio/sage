<?php
// ACF group - namehere row
  if( get_row_layout() == 'namehere_row' ) {
?>
<section class="content-row py-7 full-width
  <?php if ( get_sub_field('namehere_row_background') == 'primary' ) { ?>
  bg-primary text-light
  <?php } elseif ( get_sub_field('namehere_row_background') == 'secondary' ) { ?>
  bg-secondary text-light
  <?php } elseif ( get_sub_field('namehere_row_background') == 'grey' ) { ?>
  bg-light
  <?php } else { ?>
  bg-white
  <?php }; ?>
">

  <?php if ( get_sub_field('namehere_row_size') == 'contained' ) { ?>
    <div class="container">
  <?php }; ?>

  // content goes here

  <?php if ( get_sub_field('namehere_row_size') == 'contained' ) { ?>
    </div>
  <?php }; ?>

</section>
<?php }; ?>
