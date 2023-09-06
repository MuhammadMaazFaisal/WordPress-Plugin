<?php
/**
 * @package Dummy
 */

if (! defined('WP_UNINSTALL_PLUGIN')){
    die;
}

//Clear database
// $posts=get_posts(array('post_type'=> "Dummy",'numberposts'=>-1));
// foreach($posts as $post){
//     wp_delete_post($post->ID,true); //true to also delete from trash
// }

global $wpdb;

$wpdb->query("Delete from wp_posts where post_type=Dummy");