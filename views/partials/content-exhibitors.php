<div class="row">
  <div class="col-sm-3 pr-2">
    <div><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) ); ?></div>
  </div>
  <div class="col-sm-9 exhibitor-item-content">
    <h4 class="m-0 exhibitor-title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
    <p>
      <?php if( get_field('representative') ): ?>Representative: <strong><?php the_field('representative'); ?></strong><?php endif; ?>
      <?php if( get_field('email_contact_x') ): ?><br>Contact: <?php the_field('email_contact'); ?><?php endif; ?>
      <?php if( get_field('booth_number') ): ?><br>Booth <?php the_field('booth_number'); ?><?php endif; ?>
      <?php if( get_field('website_address') ): ?><br>Website: <a href="<?php the_field('website_address'); ?>"><?php the_field('website_address'); ?></a><?php endif; ?>
    </p>
  </div>
</div>
