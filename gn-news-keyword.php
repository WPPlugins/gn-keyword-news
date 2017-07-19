<?php
/*
Plugin Name: Google News Keyword Meta Tag
Plugin URI: http://soveratonews.com/category/wordpress/
Description: This plugin let you add via Customs Fields box Google News specific metatag.
Version: 0.4
Author: Giuseppe Soriero
Author URI: https://plus.google.com/u/0/105178455719121287219/posts
License: License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

function gn_keyword_meta_tag()
{
	global $post;
	$postID = $post->ID;

	if(get_post_custom_values('gn-keyword-meta-tag', $postID)) {
		$arr = get_post_custom_values('gn-keyword-meta-tag', $postID);
		echo "<meta name=\"news_keywords\" content=\"".$arr[0]."\" />";
	}
}
add_action('wp_head', 'gn_keyword_meta_tag');
?>