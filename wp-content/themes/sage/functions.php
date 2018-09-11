<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/wp_bootstrap_navwalker.php',   // Theme navwalker
  'lib/customizer.php', // Theme customizer
  'lib/gnpfunctions.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button($button, $form) {
    return '<input type="submit" class="btn btn-success" id="gform_submit_button_' . $form['id'] . '" value="' . $form['button']['text'] . '">';
}
