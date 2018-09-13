<?php use Roots\Sage\Titles; ?>

<div class="banner-primary py-8 bg-primary"
    style="<?php if( have_rows('event_banner_group', 'option') ): while( have_rows('event_banner_group', 'option') ): the_row();?>

        background-image: url('<?php echo get_sub_field('event_banner_background'); ?>');
        <?php if ( get_sub_field('event_background_position') ) : ?>
        background-position: <?php echo get_sub_field('event_background_position'); ?>;

        <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>

    "
>
<?php if( get_sub_field('banner_row_content') ) : ?>
      <?php echo get_sub_field('banner_row_content'); ?>
    <?php endif; ?>
</div>
