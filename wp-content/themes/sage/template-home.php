<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="container">
  <div class="row section-break">
    <div class="col-sm-12 col-lg-6">
      <img class="xl-streamline-illustration center mb2" src="http://growthandpurpose.com/wp-content/uploads/illustration@2x.png" alt="launch idea illustration">
      <blockquote>Science Says Only 8 Percent of People Actually Achieve Their Goals. <cite><a href="https://www.inc.com/marcel-schwantes/science-says-only-8-percent-of-people-actually-achieve-their-goals-here-are-7-things-they-do-differently.html">Source</a></cite></blockquote>

    </div>
    <div class="col-sm-12 col-lg-6">
       <h2 class="mb1">Tired Of Failing To Reach Your Goals?</h2>
       <p class="lead">So many people will set goals with all the intention in the world to follow through and reach them. But less than a week in and they are already failing. That is where accountability comes in. What are you currently doing to hold yourself accountable to reaching your goals? If the answer is nothing, have you considered an accounability partner?<a href="/what-is-an-accountability-partner"> Read more about what an accountability partner is.</a></p>
      </div>
   </div>
   <div class="row section-break">
     <div class="col-sm-12 col-lg-6">
       <h2 class="mb1">Do You Feel Stuck In Life?</h2>
       <p class="lead">It's okay! It happens to all of us. The fact you want to change and want to set big goals and achieve them means you are looking to get unstuck. But you don't have to do it alone. Fill out an application and see if working with an accountability partner is the key to getting over your slump and reaching your next big goal.</p>
       <a class="btn btn-lg btn-success" href="/resources/">Get Started</a>
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
