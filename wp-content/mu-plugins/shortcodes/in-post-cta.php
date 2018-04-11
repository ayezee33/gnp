<?php
function shortcode($atts) {
   $offers = ['offer1', 'offer2'];
   $atts['offer'] = isset($atts['offer']) && in_array($atts['offer'], $offers) ? $atts['offer'] : 'offer1';

   return '<div class="well' . ' in-post-cta">' . file_get_contents(dirname(__FILE__) . '/offers/' . $atts['offer'] . '.php') . '</div>';
 }
 add_shortcode('cta', 'shortcode');
?>
