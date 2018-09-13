<?php
/**
 * Template Name: Accountability Partner Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <!--Calling Custom Page Hero Section On Home Pages Only-->
  


<?php endwhile; ?>
