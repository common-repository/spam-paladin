<?php
/*
Plugin Name: spam-paladin
Plugin URI: http://trackblog.net/spampaladin
Description: This is Spam killing plugin which activates on each site login and removes spam comments. 
Version: 0.1
Author: Troll
Author URI: http://trackblog.net
*/

function palading_spam() {
	global $wpdb;
	
	$table_name = $wpdb->prefix . "comments";

	$delete = "DELETE FROM " . $table_name . " WHERE comment_approved = 'spam' ";

	$results = $wpdb->query( $delete );
}

add_action('wp_login' , 'palading_spam');

?>