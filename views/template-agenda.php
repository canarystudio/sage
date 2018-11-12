<?php
/**
 * Template Name: Agenda
 */
?>
<div class="container mt-7">

<?php
  // check flexible content has layouts
  if ( have_rows( 'cw_agenda_day', 'option' ) ) :
  // loop flexible content has layouts
  while ( have_rows('cw_agenda_day', 'option' ) ) :
  the_row();
?>

<?php
  // check given layout has rows
  if( get_row_layout() == 'agenda_day' ) {
?>

<!-- date header -->
<?php the_sub_field('cw_agenda_date', 'option'); ?><br>
<?php the_sub_field('cw_agenda_description', 'option'); ?><br>

<!-- timeslots -->
<?php if ( have_rows('cw_agenda_timeslots', 'option') ) : ?>
<div class="cw-agenda">

  <?php while( have_rows('cw_agenda_timeslots', 'option') ) : the_row(); ?>

  <?php
  // check if header row
  if (get_sub_field('cw_agenda_timeslots_agenda_item_header') == true ) {
    $row_type = 'header_row';
  } elseif ( get_sub_field('cw_agenda_timeslots_background') == 'breakout' ) {
    $row_type = 'breakout_item_row';
  } else {
    $row_type = 'standard_row';
  };
  $check = get_sub_field('cw_agenda_timeslots_background'); ?>

  <section class="cw-agenda-row row-type-style"
  <?php
  $row_colour = get_sub_field('cw_agenda_timeslots_background');
   if ($row_type == 'header_row') {

  ?>
    style="background-color: <?php echo $row_colour; ?>;"
  <?php }; ?>
  >

    <div class="cell time">
      <?php the_sub_field('cw_agenda_timeslots_time'); ?><br>
      <?php the_sub_field('cw_agenda_timeslots_background'); ?>
    </div>

    <?php if ( have_rows('cw_agenda_timeslots_agenda_item', 'option') ) : ?>

    <?php while( have_rows('cw_agenda_timeslots_agenda_item', 'option') ) : the_row(); ?>

    <?php if ($row_type == 'header_row') { ?>
    <div class="cell"  style="border-color: <?php echo $row_colour; ?>;">
      <h3 class="h5 m-0">
        <?php echo get_sub_field('cw_agenda_timeslots_agenda_item_title'); ?>
      </h3>
      <?php if( get_sub_field('cw_agenda_timeslots_agenda_item_content') ) : ?>
      <p><?php echo get_sub_field('cw_agenda_timeslots_agenda_item_content'); ?></p>
      <?php endif; ?>
    </div>

    <?php } elseif ($row_type == 'breakout_item_row') { ?>
    <div class="cell" style="border-color: <?php echo get_sub_field('cw_agenda_timeslots_agenda_item_options'); ?>;">
      <h3 class="h5 m-0" style="color: <?php echo get_sub_field('cw_agenda_timeslots_agenda_item_options'); ?>;">
        <?php echo get_sub_field('cw_agenda_timeslots_agenda_item_title'); ?>
      </h3>
      <?php if( get_sub_field('cw_agenda_timeslots_agenda_item_content') ) : ?>
      <p><?php echo get_sub_field('cw_agenda_timeslots_agenda_item_content'); ?></p>
      <?php endif; ?>
    </div>

    <?php } elseif ($row_type == 'standard_row') { ?>
    <div class="cell"  style="border-color: <?php echo $row_colour; ?>;">
      <h3 class="h5 m-0">
        <?php echo get_sub_field('cw_agenda_timeslots_agenda_item_title'); ?>
      </h3>
      <?php if( get_sub_field('cw_agenda_timeslots_agenda_item_content') ) : ?>
      <p><?php echo get_sub_field('cw_agenda_timeslots_agenda_item_content'); ?></p>
      <?php endif; ?>
    </div>
    <?php }; ?>
    <p><?php echo get_sub_field('cw_agenda_timeslots_agenda_item_options'); ?></p>
    <p><?php echo $check; ?></p>
    <p><?php echo $row_type; ?></p>


    <?php endwhile; ?>
    <?php endif; ?>

  </section>

  <?php endwhile; ?>
</div>
<?php endif; ?>



<?php }; ?>

<?php endwhile; endif; ?>
</div>

<style>
.cw-agenda section {
  display: flex;
  border-top: 0.0625rem solid #e0eaef;
}
.cw-agenda section:first-child {
  margin-top: 2vw;
}
.cw-agenda section:last-child {
  border-bottom: 1px solid #e0eaef;
}
.cw-agenda .cell {
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: auto;
  width: 0;
  border-left: 0.3rem solid #e0eaef;
  padding: 1rem;
}
.plenary .cw-agenda .cell {
  border-color: green;
}
.cw-agenda .cell.time {
  width: 11rem;
  flex-grow: 0;
  flex-shrink: 0;
  background: rgba(255, 255, 255, 0.05);
  border-left: 0;
  font-size: .8rem;
}
.cw-agenda .cell:first-line {
  font-weight: bold;
}




</style>
