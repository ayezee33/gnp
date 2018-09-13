<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <!--Calling Custom Page Hero Section On Home Pages Only-->
    <?php if(is_page_template('template-home.php')) { ?>
    <!-- <?php $background_image = wp_get_attachment_image_src(get_field('background_image'), 'full'); ?> -->
    <div style="background: url(<?php the_field('background_image')?>) no-repeat center center; background-size: cover;" class="<?php the_field('image_options'); ?> <?php the_field('color'); ?>">
      <div style="max-width: 1100px;" class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-6">
            <h1><strong><?php the_field('hero_heading'); ?></strong></h1>
            <h3 class="lead"><?php the_field('hero_subheading'); ?></h3>
            <a class="btn btn-lg btn-success" href="/resources/">Get Started Today!</a>
          </div>
          <div class="col-sm-12 col-lg-6">
            <img class="streamline-illustration center hidden-sm hidden-xs" src="https://growthandpurpose.com/wp-content/uploads/20-business-target-checklist.svg" alt="goal checklist illustration">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row section-break">
        <div class="col-sm-12 col-lg-4">
          <img class="xl-streamline-illustration center" src="http://localhost:8888/gnp/wp-content/uploads/2018/09/37-alarm-clock.svg" alt="alarm clock wake up illustration">
        </div>
        <div class="col-sm-12 col-lg-8">
           <h2 class="mb1">It's Time For A Wake Up Call</h2>
           <p class="lead">Most people are really bad at setting personal goals and even worse at actually accomplishing them.</p>
           <p>Good intentions don't deliver results. If you aren't following a proven planning process you are setting yourself up for failure. <a href="/resources/5fs">Start here</a>. Try Growth & Purpose's free 5F planning resource to get you on the right track towards accomplishing your personal goals.</p>
          </div>
       </div>
     </div>
     <section class="section-light">
       <div class="container">
         <div class="row section-break">
           <div class="col-sm-12 col-lg-8">
             <h2 class="mb1">Instantly Get More Accountability <br/> With Your Personal Goals</h2>
             <p class="lead">Even if you have a perfectly executed goal you will still fail without accountability.</p>
             <p>Who or what are you accountable for in your life? If you aren't sure then find someone who has invested their time and energy in you and wants to see you succeed. Use them to check in and help you to get unstuck when you are not progressing towards your goal.</p>
             <a class="btn btn-lg btn-success" href="/resources/">Need An Accountability Partner?</a>
            </div>
           <div class="col-sm-12 col-lg-4">
             <img class="xl-streamline-illustration center mt2" src="https://growthandpurpose.com/wp-content/uploads/18-business-target-2.svg" alt="hit your goals illustration">
          </div>
         </div>
       </div>
    </section>
    <div class="container">
      <div class="row section-break">
        <h2 class="center mb1">See What Others Are Saying</h2>
        <div class="col-sm-12 col-lg-8 col-lg-offset-2">
          <blockquote>Alex is awesome. I really appreciate him helping me reach my fitness goal in 24 days. It was amazing having him invest in me and help me stay on track. I highly recommend working with him. <cite> <img class="img-circle" width="40" src="https://randomuser.me/api/portraits/men/65.jpg" /> Tom Smith</cite> </blockquote>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row section-break">
        <h2 class="center mb1">How Does It Work?</h2>
        <div class="col-sm-12 col-lg-4">
          <img class="sm-streamline-illustration center" src="http://localhost:8888/gnp/wp-content/uploads/2018/09/37-alarm-clock.svg" alt="alarm clock wake up illustration">
          <h3>1. Fill Out An Application</h3>
          <p>There are a finite number of clients I can take on at a given time. I want to work with people I know I can help achieve their goal. Answer some simple questions and I will let you know the next steps.</p>
        </div>
        <div class="col-sm-12 col-lg-4">
          <img class="sm-streamline-illustration center" src="http://localhost:8888/gnp/wp-content/uploads/2018/09/37-alarm-clock.svg" alt="alarm clock wake up illustration">
          <h3>2. Set Your Goal With Me</h3>
          <p>We will work together to come up with an actionable, measurable goal and the metrics and timelines we will use to reach the goal. The goal will be recorded and you will leave the call feeling pumped and ready for the next action item.</p>
        </div>
        <div class="col-sm-12 col-lg-4">
          <img class="sm-streamline-illustration center" src="http://localhost:8888/gnp/wp-content/uploads/2018/09/37-alarm-clock.svg" alt="alarm clock wake up illustration">
          <h3>3. Check In Weekly</h3>
          <p>We will set up a standing meeting weekly to check in and document your results and action items for the following week. These are 100% mandatory and missed meetings are not allowed. We can only work together if we agree that accomplishing your goal is the highest priority. </p>
        </div>
     </div>
     <div class="row">
       <div class="col-sm-12 col-lg-8 col-lg-offset-2">
          <?php get_template_part('templates/content', 'page'); ?>
         </div>
      </div>
   </div>
    <?php } ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
