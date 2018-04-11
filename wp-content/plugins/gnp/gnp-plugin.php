<?php
/*
Plugin Name:  GNP Plugin
Plugin URI:   https://growthandpurpose.com
Description:  Allows custom functionality for my website yo
Version:      1.0.0
Author:       Ayezee33
Author URI:   https://growthandpurpose.com/
License:      MIT License
*/

/* Allow multiple columns for widgets in footer */

function gnp_footer_sidebar_params($params) {

    $sidebar_id = $params[0]['id'];

    if ( $sidebar_id == 'sidebar-footer' ) {

        $total_widgets = wp_get_sidebars_widgets();
        $sidebar_widgets = count($total_widgets[$sidebar_id]);

        $params[0]['before_widget'] = str_replace('<section class="widget ', '<section class="widget col-xs-12 col-md-' . floor(12 / $sidebar_widgets) . ' ', $params[0]['before_widget']);
    }

    return $params;
}
add_filter('dynamic_sidebar_params','gnp_footer_sidebar_params');
