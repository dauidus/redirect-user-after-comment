<?php
/*
Plugin Name: Redirect After Comment
Plugin URI: http://dauid.dev
Description: Allows site owners to automatically redirect visitors to a chosen page after successful comment.  Works with Multisite and external links.
Version: 1.0
Author: Dave Winter
Author URI: http://dauid.dev
License: GPL2
*/


// init option page

// get slug from option page as string value


// redirects to slug from option page
add_filter( 'comment_post_redirect', 'redirect_after_comment' );
 
function redirect_after_comment( $location ) {
    return '/SLUG_FROM_OPTION/';
}



// redirects to any set subdomain within Multisite or external URL
add_filter( 'allowed_redirect_hosts', 'allowed_redirect_hosts' );
 
function allowed_redirect_hosts( $content ) {
    $content[] = 'forum.mywebsite.com';
    $content[] = 'welcome.mywebsite.com';
    $content[] = 'help.mywebsite.com';
    return $content;
}
 
// Example source: http://codex.wordpress.org/Plugin_API/Filter_Reference/allowed_redirect_hosts


 
?>
