<div class="row">
    <div class="col-sm-12 col-lg-8 col-lg-offset-2">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <!-- <?php
            if (has_post_thumbnail() ) {
      	       the_post_thumbnail();
             }?> -->
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>
          <hr class="post-divider" />
          <div class="entry-content">
            <?php the_content(); ?>
            <?php echo do_shortcode('[share]') ?>
            <hr />

          </div>
          <?php get_template_part('templates/related-posts'); ?>
          <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
          </footer>
          <?php comments_template('/templates/comments.php'); ?>
        </article>
      <?php endwhile; ?>
</div>
</div>
