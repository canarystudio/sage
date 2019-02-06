<?php
while (have_posts()) : the_post();

  // get page header
  get_template_part('views/partials/page-header');

  // get page content, check homepage or inner page
  if ( is_front_page() ) {
    get_template_part('views/partials/content', 'home');
  } else {
    get_template_part('views/partials/content', 'page');
  };

endwhile;
?>
