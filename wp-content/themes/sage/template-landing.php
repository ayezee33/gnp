<?php
/**
 * Template Name: Landing Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="container">
  <div class="row">
     <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
       <?php get_template_part('templates/page', 'header'); ?>
       <?php get_template_part('templates/content', 'page'); ?>
      </div>
   </div>
 </div>
<?php endwhile; ?>
