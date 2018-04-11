<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><svg width="50" height="24" viewBox="0 0 50 24" xmlns="http://www.w3.org/2000/svg"><title>gnp-mark</title><g fill-rule="nonzero" fill="#FFF"><path d="M44.604.066c-2.922 0-5.3 2.377-5.3 5.3 0 1.065.32 2.057.862 2.888l-5.724 5.725c-.832-.545-1.824-.862-2.89-.862-1.104 0-2.13.34-2.98.92l-5.784-5.784c.544-.832.86-1.824.86-2.89 0-2.92-2.376-5.298-5.298-5.298-2.92 0-5.298 2.377-5.298 5.3 0 1.064.317 2.056.86 2.888L8.188 13.98c-.832-.545-1.824-.862-2.89-.862-2.92 0-5.298 2.377-5.298 5.3 0 2.92 2.377 5.297 5.3 5.297 2.92 0 5.297-2.377 5.297-5.298 0-1.066-.317-2.058-.86-2.89l5.724-5.724c.833.543 1.825.86 2.89.86 1.066 0 2.058-.317 2.89-.86l5.815 5.816c-.507.812-.8 1.77-.8 2.797 0 2.92 2.376 5.298 5.297 5.298 2.922 0 5.3-2.377 5.3-5.298 0-1.066-.318-2.058-.862-2.89l5.725-5.724c.832.543 1.824.86 2.89.86 2.92 0 5.298-2.377 5.298-5.298 0-2.922-2.377-5.3-5.3-5.3zM5.3 21.526c-1.715 0-3.11-1.395-3.11-3.11 0-1.713 1.395-3.108 3.11-3.108 1.712 0 3.107 1.395 3.107 3.11 0 1.713-1.394 3.107-3.108 3.107zM18.35 8.472c-1.713 0-3.108-1.394-3.108-3.108 0-1.714 1.394-3.11 3.108-3.11 1.715 0 3.11 1.396 3.11 3.11s-1.395 3.108-3.11 3.108zm13.202 13.052c-1.714 0-3.108-1.394-3.108-3.108 0-1.714 1.394-3.11 3.108-3.11 1.714 0 3.11 1.396 3.11 3.11-.002 1.714-1.396 3.108-3.11 3.108zM44.604 8.473c-1.714 0-3.108-1.394-3.108-3.108 0-1.714 1.394-3.11 3.108-3.11 1.714 0 3.108 1.396 3.108 3.11s-1.394 3.108-3.108 3.108z"/><path d="M17.23 13.52c-.428-.427-1.122-.427-1.55 0l-2.227 2.228c-.427.427-.427 1.12 0 1.548.214.214.494.32.775.32.28 0 .56-.106.774-.32l2.227-2.227c.427-.43.427-1.122 0-1.55zM36.45 6.524c-.43-.427-1.122-.427-1.55 0l-2.228 2.228c-.427.427-.427 1.12 0 1.548.214.214.494.32.775.32.28 0 .56-.106.774-.32l2.228-2.227c.428-.428.428-1.12 0-1.55z"/></g></svg> <?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse pull-right" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
