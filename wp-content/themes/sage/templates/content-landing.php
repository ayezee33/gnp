<div style="background: url(<?php the_field('background_image')?>) no-repeat center center; background-size: cover;" class="<?php the_field('image_options'); ?> <?php the_field('color'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
        <h1 class="center"><?php the_field('hero_heading'); ?></h1>
        <h3 class="lead"><?php the_field('hero_subheading'); ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
