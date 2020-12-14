 <article <?php post_class('container'); ?>>


   <header class="pb-4 mb-4 border-bottom">
     <h3 class="mb-4 w-75"><?php the_title(); ?></h3>

   </header>

   <?php
      // primary speaker
      $speakers = get_field('presentation_primary_speaker');
      if( $speakers ) {
        foreach( $speakers as $speaker) {
    ?>
   <div class="row mb-4 pb-3 border-bottom">

     <?php
      // primary speaker photo
        if (get_field('speaker_image', $speaker)) {
          $attachment_id = get_field('speaker_image', $speaker);
          $size = "full"; // (thumbnail, medium, large, full or custom size)
          $icon = "true";
          $attr = array(
            'class' => "img-fluid",
          );
          echo '<div class="col-sm-3 pr-4">' . wp_get_attachment_image( $attachment_id, $size, $icon, $attr ) . '</div>';
        };
      ?>

     <div class="col">

       <h4 class="text-primary m-0">
         <a href="<?php the_permalink($speaker); ?>">
           <?php the_field('speaker_first_name', $speaker); ?>
           <?php the_field('speaker_last_name', $speaker); ?>
         </a>
       </h4>
       <p class="mb-3">
         <strong>
           <?php the_field('speaker_organisation_affiliation', $speaker); ?><br />
           <?php the_field('speaker_position', $speaker); ?><br />
         </strong>
       </p>

       <?php if ( get_field('speaker_bio', $speaker) ) : ?>
       <?php echo get_field('speaker_bio', $speaker); ?>
       <?php endif; ?>

     </div>
   </div>
   <?php
        };
      };
    ?>

   <?php
      // secondary speaker
      $speakers = get_field('presentation_speakers');
      if( $speakers ) {
        foreach( $speakers as $speaker) {
    ?>
   <div class="row mb-4 pb-3 border-bottom">

     <?php
      // primary speaker photo
        if (get_field('speaker_image', $speaker)) {
          $attachment_id = get_field('speaker_image', $speaker);
          $size = "full"; // (thumbnail, medium, large, full or custom size)
          $icon = "true";
          $attr = array(
            'class' => "img-fluid",
          );
          echo '<div class="col-sm-3 pr-4">' . wp_get_attachment_image( $attachment_id, $size, $icon, $attr ) . '</div>';
        };
      ?>

     <div class="col">

       <h4 class="text-primary m-0">
         <a href="<?php the_permalink(); ?>">
           <?php the_field('speaker_first_name', $speaker); ?>
           <?php the_field('speaker_last_name', $speaker); ?>
         </a>
       </h4>
       <p class="mb-3">
         <strong>
           <?php the_field('speaker_organisation_affiliation', $speaker); ?><br />
           <?php the_field('speaker_position', $speaker); ?><br />
         </strong>
       </p>

       <?php if ( get_field('speaker_bio', $speaker) ) : ?>
       <?php echo get_field('speaker_bio', $speaker); ?>
       <?php endif; ?>

     </div>
   </div>
   <?php
        };
      };
    ?>



   <?php if ( get_field('presentation_abstract_text') ) : ?>
   <div class="abstract-text">
     <p><?php echo get_field('presentation_abstract_text'); ?></p>
   </div>
   <?php endif; ?>


 </article>