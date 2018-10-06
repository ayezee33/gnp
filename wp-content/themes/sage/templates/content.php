<div class="col-sm-12 col-md-12 col-lg-12">
<article <?php post_class(); ?>>
  <div class="flat-card">
    <!-- <div class="card-img">
      <a href="<?php the_permalink(); ?>"><?php
        if ( has_post_thumbnail() ) {
           the_post_thumbnail();
         }?></a>
         <p><?php the_category(', '); ?></p>
    </div> -->
    <div class="card-content">
      <header>
        <h2 style="font-size: 45px; margin-bottom: 15px; color: #333;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php the_excerpt(); ?>
      </header>
    </div>
  </div>
</article>
</div>
