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
      <img class="streamline-illustration center mt2 mb2" src="https://growthandpurpose.com/wp-content/uploads/illustration@2x.png" alt="launch idea illustration">
      <blockquote>Science Says Only 8 Percent of People Actually Achieve Their Goals. <cite><a href="https://www.inc.com/marcel-schwantes/science-says-only-8-percent-of-people-actually-achieve-their-goals-here-are-7-things-they-do-differently.html">Source</a></cite></blockquote>

    </div>
    <div class="col-sm-12 col-lg-6">
       <h2 class="mb1">Tired Of Failing To Reach Your Goals?</h2>
       <p class="lead">Many people will set goals with all the intention in the world to follow through and reach them.</p>
       <p>But less than a week in and they are already failing. That is where accountability comes in. What are you currently doing to hold yourself accountable to reaching your goals? If the answer is nothing, have you considered an accounability partner?<a href="/what-is-an-accountability-partner"> Read more about what an accountability partner is.</a></p>
      </div>
   </div>
   <div class="row section-break">
     <div class="col-sm-12 col-lg-6">
       <h2 class="mb1">Find More Accountability For Your Actions</h2>
       <p class="lead">Sometimes all it takes to reach your goal is to have an accountability partner.</p>
       <p>Find someone who is invested and wants to see you succeed. Use them to check in and help you get unstuck when you are not progressing towards your goal.</p>
       <a class="btn btn-lg btn-success" href="/resources/">Get Started</a>
      </div>
     <div class="col-sm-12 col-lg-6">
       <img class="streamline-illustration center mt2" src="https://growthandpurpose.com/wp-content/uploads/07-Hand-Shaking.png" alt="drowning illustration">
    </div>
   </div>
   <div class="row">
     <div class="col-sm-12 col-lg-8 col-lg-offset-2">
        <?php get_template_part('templates/content', 'page'); ?>
       </div>
    </div>
 </div>
<?php endwhile; ?>
