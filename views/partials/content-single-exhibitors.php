<?php while (have_posts()) : the_post(); ?>

<p class="px-4 px-sm-8 mt-n4 mb-sm-4 text-right"><a href="/exhibitors/" class="text-secondary"><strong>← All Exhibitors</strong></a></p>

<article <?php post_class('px-4 px-sm-8'); ?>>

  <section class="row mb-8">
    <div class="col-sm-8 order-2 order-sm-1 exhibitor-item-content">
      <h1 class="m-0 exhibitor-title letter-spacing-normal text-white"><?php echo the_title(); ?></h1>
      <p class="lead">
        <?php if( get_field('representative') ): ?><span class="d-flex flex-column flex-sm-row pb-1 pb-sm-0 align-items-sm-center"><small class="pr-1">Representative:</small> <strong><?php the_field('representative'); ?></strong></span><?php endif; ?>
        <?php if( get_field('email_contact_x') ): ?><span class="d-flex flex-column flex-sm-row pb-1 pb-sm-0 align-items-sm-center"><small class="pr-1">Contact:</small> <strong><?php the_field('email_contact'); ?></strong></span><?php endif; ?>
        <?php if( get_field('website_address') ): ?><span class="d-flex flex-column flex-sm-row pb-1 pb-sm-0 align-items-sm-center"><small class="pr-1">Website:</small> <strong><a href="<?php the_field('website_address'); ?>"><?php the_field('website_address'); ?></a></strong></span><?php endif; ?>
        <?php if( get_field('booth_number') ): ?><span class="d-flex flex-column flex-sm-row pb-1 pb-sm-0 align-items-sm-center"><small class="pr-1">Booth:</small> <strong><a href="/exhibiting/#floorplan" class="text-primary"><?php the_field('booth_number'); ?></a></strong></span><?php endif; ?>
      </p>

      <?php
      // check for ISLC grandchild plugin
        if ( !is_plugin_active( 'cw-grandchild-islc6/cw-grandchild-islc6.php' ) ) {
      ?>
      <p class="mb-4"><a href="#appointment" class="smooth btn btn-sm btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Request an appointment</a></p>
      <?php }; ?>

      <div class="pr-4"><?php the_content(); ?></div>
    </div>
    <div class="col-sm-4 pl-sm-2 mb-3 mb-sm-0 order-1 order-sm-2">
      <div><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) ); ?></div>
    </div>
  </section>

  <?php
  // check for ISLC grandchild plugin
    if ( !is_plugin_active( 'cw-grandchild-islc6/cw-grandchild-islc6.php' ) ) {
  ?>
  <div class="pr-sm-16" id="appointment">
    <h3 class="letter-spacing-normal">Request an Appointment</h3>
    <p><?php the_title(); ?> will be available on the exhibition floor for meetings during the Exhibition Open hours.</p>
    <p>Please nominate if you would prefer a morning or afternoon meeting time below – a representative from <?php the_title(); ?> will be in direct contact with you via the email you enter below to confirm the meeting time.</p>
    <?php gravity_form(10, false, false, false, '', true); ?>
  </div>
  <?php }; ?>

</article>

<?php endwhile; ?>
