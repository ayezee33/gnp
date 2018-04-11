<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <hr />
      <h4 style="text-align: center;">Share This Resource</h4>
      <?php echo do_shortcode('[share]') ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
