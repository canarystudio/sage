<?php use Roots\Sage\Titles; ?>

<?php
  /**
   * Setup banner content and options
   * Pull in ACF fields for each banner component.
   */

  // check for banner group fields
  if( have_rows('event_banner_group', 'option') ):
    while( have_rows('event_banner_group', 'option') ):
      // return each of the banner group fields
      the_row();

      // check for bg image
      if ( get_sub_field('event_banner_background') ) {
        $bg_url = 'background-image: url(' . get_sub_field('event_banner_background') .') !important; ';
      } else {
        $bg_url = "";
      };
      // check for bg position
      if ( get_sub_field('event_background_position') ) {
        $bg_position = 'background-position: ' . get_sub_field('event_background_position') .' !important;';
      } else {
        $bg_position = "";
      };
      // check for bg color
      if ( get_sub_field('event_background_colour') ) {
        $bg_background_colour = 'background-color: ' . get_sub_field('event_background_colour') .' !important;';
      } else {
        $bg_background_colour = "";
      };
      // check for bg alignment
      if ( get_sub_field('event_background_alignment') ) {
        $bg_alignment = get_sub_field('event_background_alignment');
      } else {
        $bg_alignment = "";
      };
      // check for bg font size
      if ( get_sub_field('event_background_fontsize') ) {
        $bg_fontsize = get_sub_field('event_background_fontsize');
      } else {
        $bg_fontsize = "";
      };

    endwhile;

    $background_style = 'style="' . $bg_url . $bg_position . $bg_background_colour .'"';

  endif;
?>


<div class="banner-primary py-8 bg-primary"<?php echo $background_style; ?>>
  <div class="container <?php echo $bg_alignment; ?> text-white">

    <!-- event title -->
    <h1 class="display-<?php echo $bg_fontsize; ?> mb-1 animated animated-slow fadeInUp wow" data-wow-delay=".5s">
      <?php if ( get_field('event_name', 'option') ) {
        echo get_field('event_name', 'option');
      } else {
        bloginfo('name');
      };
      ?>
    </h1>

    <!-- event date and venue -->
    <p class="animated animated-slow fadeIn wow" data-wow-delay=".6s">
    <?php
      // check for nice date field
      if( get_field('event_dates_nice', 'option') ) {
        echo get_field('event_dates_nice', 'option');
      }
      // otherwise, return the officially set event dates
      elseif (have_rows('event_dates', 'option')) {
        while (have_rows('event_dates', 'option')) {
          the_row();
          if (get_sub_field('event_date_start')) {
              echo get_sub_field('event_date_start');
          }
          if (get_sub_field('event_date_end')) {
              echo '–' . get_sub_field('event_date_end');
          }
        }
      };
    ?>
    <?php
      // get the event venue field
      if ( get_field('event_venue', 'option') ) {
        echo " &nbsp;&middot;&nbsp; " . get_field('event_venue', 'option');
      };
    ?>
    </p>

    <!-- event registration button -->
    <?php if ( get_field('event_registration_link', 'option') ) { ?>
    <p class="animated animated-slow zoomIn wow animated-slow mb-0 mt-1" data-wow-delay=".65s">
      <a class="btn btn-light" href="<?php echo get_field('event_registration_link', 'option'); ?>" role="button">
        Register now
      </a>
    </p>
    <?php }; ?>

  </div>
</div>
