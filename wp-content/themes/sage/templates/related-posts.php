<?php
global $post;
if (get_post_type() == 'post') {
  $related = new WP_Query([
    'category__in'   => wp_get_post_categories($post->ID),
    'posts_per_page' => 3,
    'post__not_in'   => array($post->ID)
  ]);
  if ($related->have_posts()) : ?>

    <div class="relatedposts well">
      <h2 class="center">You might also like...</h2>
      <div class="row">
        <?php while( $related->have_posts() ) : $related->the_post(); ?>
          <div class="col-sm-12 col-lg-4">
            <a href="<?= get_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('blog-thumb'); ?>
              <?php else: ?>
                <img src="/wp-content/uploads/featured-img-default.jpg">
              <?php endif; ?>
              <h4 class="center"><?php the_title(); ?></h4>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>

  <?php endif;
  wp_reset_postdata();
}
