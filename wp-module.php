<?php
/*
Plugin Name: Wordpress Plugin Boilerplate
Plugin URI: http://www.stephenpunwasi.com/
Version: 0.0.1
Author: Stephen Punwasi
Description: Quickstart template for Wordpress Plugins
*/

function pwsocialv1_scripts_function() { ?>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<?php }
add_action('wp_footer', 'pwsocialv1_scripts_function');

function pwsocialv1_afterposts_function() {
  $pwsocial_buttons = '<a href="https://twitter.com/share" class="twitter-share-button" data-via="FizWomack">Tweet</a>';

if(is_single() && !is_home()) {
$content .= $pwsocial_buttons;
}

return $content;
}

add_filter('the_content', 'pwsocialv1_afterposts_function');

?>
