<?php
/*
Plugin Name: Wordpress Plugin Boilerplate
Plugin URI: http://www.stephenpunwasi.com/
Version: 0.0.1
Author: Stephen Punwasi
Description: Quickstart template for Wordpress Plugins
*/

//ADD ACTION AFTER CALLING THE WP HEAD
add_action( 'wp_head', 'sp_inject_page_header_output' );

function sp_inject_page_header_output() { ?>
//INSERT SCRIPT TO ENTER HERE
 <?php }

?>
