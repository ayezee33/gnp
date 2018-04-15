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
      <img class="streamline-illustration center mb2" src="http://growthandpurpose.com/wp-content/uploads/illustration@2x.png" alt="launch idea illustration">
       <h2 class="center mb1">Join Me On A Quest Of Understanding</h2>
       <p class="lead center">What is your life's purpose? It's not an easy question to answer. Start by working through some excercies to get more clarity on where you are going in life.</p>
      </div>
   </div>
   <div class="row section-break">
     <div class="col-sm-12 col-lg-6">
       <h2 class="mb1">Do You Feel Stuck In Life?</h2>
       <p class="lead">It's okay! It happens to all of us. No matter what part of your life you are struggling with it is up to you to pull yourself out. Click the start button below to read some helpful information about personal growth and development and how to get back on track with your life's purpose.</p>
       <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
     </div>
     <div class="col-sm-12 col-lg-6">
       <img class="xl-streamline-illustration center mt2" src="http://growthandpurpose.com/wp-content/uploads/drowning-illustration@2x.png" alt="drowning illustration">
    </div>
   </div>
   <div class="row">
     <div class="col-sm-12 col-lg-8 col-lg-offset-2">
        <?php get_template_part('templates/content', 'page'); ?>
       </div>
    </div>
 </div>
<?php endwhile; ?>
