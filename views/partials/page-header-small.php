<?php use Roots\Sage\Titles; ?>

<div class="banner-primary py-3 bg-primary"
    style="<?php if( have_rows('event_banner_group', 'option') ): while( have_rows('event_banner_group', 'option') ): the_row();?>

        background-image: url('<?php echo get_sub_field('event_banner_background'); ?>');
        <?php if ( get_sub_field('event_background_position') ) : ?>
        background-position: <?php echo get_sub_field('event_background_position'); ?>;

        <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>

    "
>

<div class="container text-white d-flex align-items-center">

  <div>
    <h1 class="display-4 mt-2 mb-0">
      <?php if ( get_field('event_name', 'option') ) : ?>
      <?php echo get_field('event_name', 'option'); ?>
      <?php endif; ?>
    </h1>

    <p class="mt-0 mb-4">
    <?php if( get_field('event_dates_nice', 'option') ) { ?>
      <?php echo get_field('event_dates_nice', 'option'); ?>
    <?php } else { ?>

    <?php if( have_rows('event_dates', 'option') ): while( have_rows('event_dates', 'option') ): the_row();?>

    <?php if ( get_sub_field('event_date_start') ) : ?>
      <?php echo get_sub_field('event_date_start'); ?>
    <?php endif; ?>

    <?php if ( get_sub_field('event_date_end') ) : ?>
      – <?php echo get_sub_field('event_date_end'); ?>
    <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>

    <?php }; ?>

    <?php if ( get_field('event_venue', 'option') ) : ?>
      &nbsp;&middot;&nbsp;
      <?php echo get_field('event_venue', 'option'); ?>
    <?php endif; ?>

    </p>

  </div>

  <?php if ( get_field('event_registration_link', 'option') ) : ?>
  <p class="ml-auto animated animated-slow zoomIn wow animated-fast" data-wow-delay=".65s"><a class="btn btn-light"
      href="<?php echo get_field('event_registration_link', 'option'); ?>" role="button">Register now </a></p>
  <?php endif; ?>
</div>

</div>
