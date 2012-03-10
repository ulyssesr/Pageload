<?php
/*
Plugin Name: Page Load Time
Plugin URI: http://ulyssesonline.com
Description: Displays page load times in footer.
Version: 0.1
Author: Ulysses Ronquillo
Author URI: http://ulyssesonline.com
*/

function ur_pageload_footer() {
  echo 'Page in '; timer_stop(1); echo ' seconds.';  
} 

add_action('wp_footer', 'ur_pageload_footer');

?>
