<article <?php post_class(); ?>>

  <h3 class="presentation-title"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?></a>
    <?php if ($panel) { ?> - Panel session
    <?php } ?>
  </h3>

  <?php
    $pres_text_full = str_replace("<br />", "", get_field('presentation_abstract_text'));
    $pres_text_trimmed = substr($pres_text_full, 0, 400);
  ?>

  <p class="cw-presentation-intro">
    <?php echo $pres_text_trimmed; ?>... <a href="<?php the_permalink(); ?>">more info</a>
  </p>

  <div class="row mb-2">
  <?php
    $speakers = get_field('presentation_primary_speaker');
    if( $speakers ) :
    foreach( $speakers as $speaker):
  ?>
  <div class="col-sm-4">
    <?php include(locate_template('views/partials/content-speakers/speaker-title-row.php')); ?>
  </div>
  <?php
    endforeach;
    endif;
  ?>

  <?php
    $speakers = get_field('presentation_speakers');
    if( $speakers ) :
    foreach( $speakers as $speaker):
  ?>
    <div class="col-sm-4">
      <?php include(locate_template('views/partials/content-speakers/speaker-title-row.php')); ?>
    </div>
  <?php
    endforeach;
    endif;
  ?>
  </div>

  <hr />

</article>
