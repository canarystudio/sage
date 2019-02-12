<?php while (have_posts()) : the_post(); ?>
<p class="px-8 mt-n3 mb-4 lead text-right"><a href="/exhibitors/" class="text-secondary"><strong>← All Exhibitors</strong></a></p>
  <article <?php post_class('px-8 dragon-head dragon-head-right'); ?>>


  <section class="row mb-8">

  <div class="col-sm-8 exhibitor-item-content">
    <h1 class="m-0 exhibitor-title display-1"><?php echo the_title(); ?></h1>
    <p class="lead">
      <?php if( get_field('representative') ): ?>Representative: <strong><?php the_field('representative'); ?></strong><?php endif; ?>
      <?php if( get_field('email_contact_x') ): ?><br>Contact: <?php the_field('email_contact'); ?><?php endif; ?>
      <?php if( get_field('booth_number') ): ?><br>Booth: <?php the_field('booth_number'); ?> <a href="" class="text-dark small pl-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg> view floorplan</a><?php endif; ?>
      <?php if( get_field('website_address') ): ?><br>Website: <a href="<?php the_field('website_address'); ?>"><?php the_field('website_address'); ?></a><?php endif; ?>
    </p>
    <p class="mb-4"><a href="#appointment" class="smooth btn btn-sm btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Request an appointment</a></p>

    <div class="pr-4"><?php the_content(); ?></div>
  </div>
  <div class="col-sm-4 pl-2">
    <div><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) ); ?></div>
  </div>
</section>




      <div class="mw-col-8" id="appointment">
        <h2 class="letter-spacing-normal"><small>Request an Appointment with</small><br><span class="display-2"><?php the_title(); ?></span></h2>
        <p><?php the_title(); ?> will be available on the exhibition floor for meetings during the Exhibition Open hours.</p>
        <p>Please nominate if you would prefer a morning or afternoon meeting time below – a representative from <?php the_title(); ?> will be in direct contact with you via the email you enter below to confirm the meeting time.</p>
        <?php gravity_form(2, false, false, false, '', true); ?>
      </div>

    </article>
<?php endwhile; ?>
