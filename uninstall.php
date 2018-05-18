<?php
/**
* Trigger this file on Plugin uninstall
*
* @package beuplugin
*/

if (!defined('WP_UNINSTALL_PLUGIN')) {
	die;
}
//Clear Database stored data
$books=get_posts(array('post_type'=>'book', 'numberposts=>-1'));
foreach($books as $book) {
	wp_delete_post($book->ID, true);
}
//Access the database via SQL
global $wpdb;
$wpdb->query("delete from wp_posts where post_type='book'");
$wpdb->query("delete from wp_postmeta where post_id NOT in (select id from wp_posts)");
$wpdb->query("delete from wp_term_relationships where object_id NOT in (select id from wp_posts)");
