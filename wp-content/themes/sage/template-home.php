<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="container">
  <div class="row section-break">
    <div class="col-sm-12 col-lg-8 col-lg-offset-2">
      <img class="streamline-illustration center mb2" src="http://localhost:8888/gnp/wp-content/uploads/01-desktop-programmer-programming-flowchart@2x.png" alt="">
       <h2 class="center mb1">Do You Feel Down About Yourself?</h2>
       <p class="lead center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam efficitur non magna quis placerat. Nullam est enim, vulputate et diam non, porta auctor magna. Proin ac pretium quam. Aliquam sit amet nisi metus. Duis id suscipit lorem. </p>
       <a class="btn btn-outline btn-center" href="">Get Started</a>
      </div>
   </div>
   <div class="row section-break">
     <div class="col-sm-12 col-lg-6">
       <h2 class="center mb1">What If I Told You I Could Help?</h2>
       <p class="lead center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam efficitur non magna quis placerat. Nullam est enim, vulputate et diam non, porta auctor magna. Proin ac pretium quam. Aliquam sit amet nisi metus. Duis id suscipit lorem. </p>
       <a class="btn btn-success btn-lg btn-center" href="">Get Started</a>
     </div>
     <div class="col-sm-12 col-lg-6">
       <img class="streamline-illustration center mb2" src="http://localhost:8888/gnp/wp-content/uploads/illustration@2x.png" alt="">
    </div>
   </div>
   <div class="row section-break">
     <div class="col-sm-12 col-lg-6">
       <img class="streamline-illustration center mb2" src="http://localhost:8888/gnp/wp-content/uploads/drowning-illustration@2x.png" alt="">
     </div>
     <div class="col-sm-12 col-lg-6">
       <h2 class="center mb1">What If I Told You I Could Help?</h2>
       <p class="lead center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam efficitur non magna quis placerat. Nullam est enim, vulputate et diam non, porta auctor magna. Proin ac pretium quam. Aliquam sit amet nisi metus. Duis id suscipit lorem. </p>
       <a class="btn btn-success btn-lg btn-center" href="">Get Started</a>
    </div>
   </div>
   <div class="row">
     <div class="col-sm-12 col-lg-8 col-lg-offset-2">
        <?php get_template_part('templates/content', 'page'); ?>
       </div>
    </div>
 </div>
<?php endwhile; ?>
