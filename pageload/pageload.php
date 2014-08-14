<?php
/*

Plugin Name: Page Load Time
Plugin URI: http://uly.me
Description: Displays page load times in the footer of the theme.
Version: 0.2
Author: Ulysses Ronquillo
Author URI: http://uly.me

*/

function urr_pageload_footer() {
  echo 'Page in '; timer_stop(1); echo ' seconds.';  
} 

add_action('wp_footer', 'urr_pageload_footer', 100);


/* end of file */