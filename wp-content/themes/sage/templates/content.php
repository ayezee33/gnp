<div class="col-sm-12 col-md-12 col-lg-4">
<article <?php post_class(); ?>>
  <div class="card">
    <div class="card-img">
      <a href="<?php the_permalink(); ?>"><?php
        if ( has_post_thumbnail() ) {
           the_post_thumbnail();
         }?></a>
         <p><?php the_category(', '); ?></p>
    </div>
    <div class="card-content">
      <header>
        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </header>
      <!-- <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div> -->
      <!-- <div class="card-actions">
        <?php echo do_shortcode('[share]') ?>
      </div> -->
    </div>
  </div>
</article>
</div>
