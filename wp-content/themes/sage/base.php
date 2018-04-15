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
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-6">
            <h1><strong><?php the_field('hero_heading'); ?></strong></h1>
            <h3 class="lead"><?php the_field('hero_subheading'); ?></h3>
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
          </div>
          <div class="col-sm-12 col-lg-6">
            <img class="streamline-illustration center hidden-sm hidden-xs" src="http://growthandpurpose.com/wp-content/uploads/user@2x.png" alt="user illustration">
          </div>
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
