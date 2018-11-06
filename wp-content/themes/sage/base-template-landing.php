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
    <!--Calling Custom Page Hero Section On Landing Pages Only-->
    <?php if(is_page_template('template-landing.php')) { ?>
    <!-- <?php $background_image = wp_get_attachment_image_src(get_field('background_image'), 'full'); ?> -->
    <div style="background: url(<?php the_field('background_image')?>) no-repeat center center; background-size: cover;" class="<?php the_field('image_options'); ?> <?php the_field('color'); ?>">
      <div class="container">
        <div class="row">
          <?php if( get_field('hero_layout') == 'stacked' ) { ?>
          <div class="col-sm-12 col-lg-8 col-lg-offset-2">
            <?php the_field('left_hero_content'); ?>
          </div>
        <?php } elseif( get_field('hero_layout') == '2col' ) { ?>
            <div class="col-sm-12 col-lg-6">
              <?php the_field('left_hero_content'); ?>
            </div>
            <div class="col-sm-12 col-lg-6">
              <?php the_field('right_hero_content'); ?>
            </div>
          <?php } ?>
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
