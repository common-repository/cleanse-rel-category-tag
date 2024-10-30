<?php
/*
Plugin Name: Cleanse Rel Category Tag
Plugin URI: http://DavidFavor.com/
Description: Cleanse rel="category tag" to support error free HTML5 validation
Version: 1.0
Author: David Favor
Author URI: http://DavidFavor.com
License: GPL
*/

function cleanse_rel_category_tag( $output ) {
   // Remove rel="category tag"
   return str_replace( ' rel="category tag"', '', $output );
}

//
// http://codex.wordpress.org/Function_Reference/add_filter gives no
// clear indication of the priority numbers, so 100 is used so hopefully
// cleanse_rel_category_tag() is the last filter in the chain called.
//
// Since this is (hopefully) a temporary plugin till either WordPress
// changes or the W3C Validator changes, I'll leave this. A more robust
// solution is to first call has_filter, determine the highest priority
// filter, then register cleanse_rel_category_tag() with a higher numbered
// priority to ensure it's the last filter in the chain to run. Whew...
//

add_filter( 'wp_list_categories', 'cleanse_rel_category_tag', 100 );
add_filter( 'the_category',       'cleanse_rel_category_tag', 100 );

?>
