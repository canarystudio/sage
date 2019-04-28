<?php use Roots\Sage\Titles; ?>

<?php
  /**
   * Check for header type
   * Use the small header for all banners other than front page
   */

  if ( is_front_page() ) {
    get_template_part('views/partials/page-header', 'large');
  } else {
    get_template_part('views/partials/page-header', 'small');
  };
