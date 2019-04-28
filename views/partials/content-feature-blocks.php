<?php
// ACF group - feature_blocks
  if( get_row_layout() == 'feature_blocks' ) {
?>
<section class="content-row row py-7 bg-white" id="feature-blocks">

    <?php if( have_rows('feature_block') ): ?>
    <div class="col">
      <div class="card-columns card-columns-2 feature-blocks">

        <?php while ( have_rows('feature_block') ) : the_row(); ?>

        <div class="card
          <?php if ( get_sub_field('feature_block_colour') == 'primary' ) { ?>
          bg-primary text-light
          <?php } elseif ( get_sub_field('feature_block_colour') == 'secondary' ) { ?>
          bg-secondary text-light
          <?php }; ?>
          <?php if ( get_sub_field('feature_block_size') == 'double' ) { ?>
          column-span-all
          <?php }; ?>
        ">
          <?php if ( get_sub_field('feature_block_link') ) : ?>
            <a href="<?php echo get_sub_field('feature_block_link'); ?>" class="card-button m-2 btn-icon btn-more">More</a>
          <?php endif; ?>

          <?php if ( get_sub_field('feature_block_image') ) : ?>
          <?php $feature_image = get_sub_field('feature_block_image'); ?>
          <?php endif; ?>

          <?php if ( get_sub_field('feature_block_image_type') == 'background' ) : ?>
          <div class="card-img-overlay" style="background-image: url(' <?php echo $feature_image['sizes']['thumbnail']; ?> ');"></div>
          <?php elseif ( get_sub_field('feature_block_image_type') == 'separate' ) : ?>
          <img class="card-img-top" src="<?php echo $feature_image['sizes']['thumbnail']; ?>">
          <?php endif; ?>


          <div class="card-body">
            <?php if ( get_sub_field('feature_block_body') ) : ?>
            <?php echo get_sub_field('feature_block_body'); ?>
            <?php endif; ?>
          </div>

        </div>

        <?php endwhile; ?>

      </div>
    </div>
    <?php endif; ?>

    <?php if ( get_sub_field('features_main_option') == 'features_plus_content' ) : ?>
    <div class="col">
      <?php if( have_rows('features_main') ): while( have_rows('features_main') ): the_row(); ?>
      <div class="feature-block h4 position-sticky
        <?php if ( get_sub_field('features_main_background') == 'primary' ) { ?>
        bg-primary text-light p-4
        <?php } elseif ( get_sub_field('features_main_background') == 'secondary' ) { ?>
        bg-secondary text-light p-4
        <?php } elseif ( get_sub_field('features_main_background') == 'white' ) { ?>
        pt-2 px-4 pb-4
        <?php }; ?>
      ">
        <?php echo get_sub_field('features_main_content'); ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <?php endif; ?>

</section>
<?php }; ?>
