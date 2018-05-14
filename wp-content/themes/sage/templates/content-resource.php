<?php while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
         <article <?php post_class(); ?>>
           <header>
             <h1 class="center"><?php the_title(); ?></h1>
           </header>
           <div class="entry-content">
             <?php the_content(); ?>
             <hr />
             <h4 style="text-align: center;">Share This</h4>
             <?php echo do_shortcode('[share]') ?>
           </div>
           <footer>
             <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
           </footer>
           <?php comments_template('/templates/comments.php'); ?>
         </article>
        </div>
     </div>
   </div>
<?php endwhile; ?>
