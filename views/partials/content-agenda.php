<?php
/**
 * Block Name: agenda
 *
 * This is the template that displays the agenda block.
 */
?>



<?php

if( get_field('agenda_time') ) {
  echo get_field('agenda_time');
}
?>

<?php if ( have_rows('agenda_item') ) : ?>

  <?php while( have_rows('agenda_item') ) : the_row(); ?>

    <p>Type: <?php the_sub_field('type'); ?></p>
    <p>Name: <?php the_sub_field('name'); ?></p>
    <p>Pres: <?php // the_sub_field('presentation'); ?></p>
    <p>Room: <?php the_sub_field('room'); ?></p>
    <hr>

  <?php endwhile; ?>

<?php endif; ?>


<li class="<?php echo $id; ?>">
  <?php the_field('agenda_item'); ?>
  <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
</li>
