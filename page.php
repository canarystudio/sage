<?php
while (have_posts()) : the_post();

  get_template_part('views/partials/content', 'page');

endwhile;
?>
