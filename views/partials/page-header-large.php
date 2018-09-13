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

  <div class="container text-center text-white">
    <h1 class="display-1 mt-5 mb-1 animated-slow fadeInUp wow" data-wow-delay=".5s">
    <?php if ( get_field('event_name', 'option') ) : ?>
      <?php echo get_field('event_name', 'option'); ?>
    <?php endif; ?>
    </h1>
    <p class="mb-4 animated animated-slow fadeIn wow" data-wow-delay=".6s">

    <?php if( have_rows('event_dates', 'option') ): while( have_rows('event_dates', 'option') ): the_row();?>

    <?php if ( get_sub_field('event_date_start') ) : ?>
      <?php echo get_sub_field('event_date_start'); ?>
    <?php endif; ?>

    <?php if ( get_sub_field('event_date_end') ) : ?>
      – <?php echo get_sub_field('event_date_end'); ?>
    <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>


    <?php if ( get_field('event_venue', 'option') ) : ?>
      &nbsp;/&nbsp;
      <?php echo get_field('event_venue', 'option'); ?>
    <?php endif; ?>

    </p>
    <?php if ( get_field('event_registration_link', 'option') ) : ?>
    <p class="animated animated-slow zoomIn wow animated-slow" data-wow-delay=".65s"><a class="btn btn-light" href="<?php echo get_field('event_registration_link', 'option'); ?>" role="button">Register now </a></p>
    <?php endif; ?>
  </div>
</div>
