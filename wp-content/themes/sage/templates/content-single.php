<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php
      if (has_post_thumbnail() ) {
	       the_post_thumbnail();
       }?>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <hr class="post-divider" />
    <div class="entry-content">
      <?php the_content(); ?>
      <hr />
      <h4>Share this post on social media</h4>
      <?php echo do_shortcode('[share]') ?>
    </div>
    <?php get_template_part('templates/related-posts'); ?>
    <div class="post-cta-container">
      <h3>Did you enjoy this post?</h3>
        <p class="lead">Never miss a post. Subscribe below to get updates sent to your inbox</p>
      <div class="post-cta-body">
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        <p style="font-size: 12px;">Spam is not productive.</p>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
