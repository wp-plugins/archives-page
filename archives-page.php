<?php
/*
Plugin Name: Archives Page
Plugin URI: http://wp-time.com/archives-page/
Description: Make archives page easily with full customize and in all languages of the world.
Version: 1.4
Author: Qassim Hassan
Author URI: http://qass.im
License: GPLv2 or later
*/

/*  Copyright 2015  Qassim Hassan  (email : qassim.pay@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// WP Time Menu
if( !function_exists('WPTime_Add_Admin_Bar_Menu_Aff') ) {

	function WPTime_Add_Admin_Bar_Menu_Aff() {

		global $wp_admin_bar;

		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-parent',
				'parent'	=>		0,
				'title' 	=> 		'WP Time',
				'href' 		=> 		'http://wp-time.com',
				'meta'		=>		array('target' => '_blank')
			)
		);

		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-gl',
				'parent'	=>		'wptime-aff-menu-parent',
				'title' 	=> 		'Best Gallery & Portfolio WordPress Plugins',
				'href' 		=> 		'http://j.mp/GL_WPTime',
				'meta'		=>		array('target' => '_blank')
			)
		);
		
		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-et',
				'parent'	=>		'wptime-aff-menu-parent',
				'title' 	=> 		'Collection Of 87 WP Themes For $69 Only',
				'href' 		=> 		'http://j.mp/ET_WPTime_ref_pl',
				'meta'		=>		array('target' => '_blank')
			)
		);

		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-cm',
				'parent'	=>		'wptime-aff-menu-parent',
				'title' 	=> 		'WP Themes On Creative Market',
				'href' 		=> 		'http://j.mp/CM_WPTime',
				'meta'		=>		array('target' => '_blank')
			)
		);

		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-tf',
				'parent'	=>		'wptime-aff-menu-parent',
				'title' 	=> 		'WP Themes On Themeforest',
				'href' 		=> 		'http://j.mp/TF_WPTime',
				'meta'		=>		array('target' => '_blank')
			)
		);
	
		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-cc',
				'parent'	=>		'wptime-aff-menu-parent',
				'title' 	=> 		'WP Plugins On Codecanyon',
				'href' 		=> 		'http://j.mp/CC_WPTime',
				'meta'		=>		array('target' => '_blank')
			)
		);

		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-bh',
				'parent'	=>		'wptime-aff-menu-parent',
				'title' 	=> 		'Unlimited Web Hosting For $3.95 Only',
				'href' 		=> 		'http://j.mp/BH_WPTime',
				'meta'		=>		array('target' => '_blank')
			)
		);

		$wp_admin_bar->add_menu(
			array(
				'id' 		=> 		'wptime-aff-menu-cas',
				'parent'	=>		'wptime-aff-menu-parent',
				'title' 	=> 		'Contact And Support',
				'href' 		=> 		'http://wp-time.com/contact/',
				'meta'		=>		array('target' => '_blank')
			)
		);

	}
	
	add_action( 'wp_before_admin_bar_render', 'WPTime_Add_Admin_Bar_Menu_Aff');

}


// WP Time Page
if( !function_exists('WP_Time_Ghozylab_Aff') ) {
	function WP_Time_Ghozylab_Aff() {
		add_menu_page( 'WP Time', 'WP Time', 'update_core', 'WP_Time_Ghozylab_Aff', 'WP_Time_Ghozylab_Aff_Page');
		function WP_Time_Ghozylab_Aff_Page() {
			?>
            	<div class="wrap">
                	<h2>WP Time</h2>
					<div class="tool-box">
                		<h3 class="title">Thanks for using our plugins!</h3>
                    	<p>For more plugins, please visit <a href="http://wp-time.com" target="_blank">WP Time Website</a> and <a href="https://profiles.wordpress.org/qassimdev/#content-plugins" target="_blank">WP Time profile on WordPress</a>.</p>
                        <p>For contact or support, please visit <a href="http://wp-time.com/contact/" target="_blank">WP Time Contact Page</a>.</p>
					</div>
					<div class="tool-box">
						<h3 class="title">Great WordPress Plugins</h3>
						<p>Best Gallery & Portfolio WordPress Plugins <a href="http://j.mp/GL_WPTime" target="_blank">Download Now</a>.</p>
                        <p><a href="http://j.mp/GL_WPTime" target="_blank"><img src="http://content.ghozylab.com/partners/aff/images/global-aff-img.png" width="728" height="90"></a></p>
					</div>
                </div>
			<?php
		}
	}
	add_action( 'admin_menu', 'WP_Time_Ghozylab_Aff' );
}


// Include shortcodes page
include(plugin_dir_path(__FILE__).'/shortcodes-page.php');


/* Some Functions */

// check if blog posts equal 1 or more than 1
function more__than__1__post(){
	$count_posts = wp_count_posts();
	$get_posts_count = $count_posts->publish;
	return $get_posts_count >= 1;
}

// check if blog pages equal 1 or more than 1
function more__than__1__page(){
	$count_pages = wp_count_posts('page');
	$get_pages_count = $count_pages->publish;
	return $get_pages_count >= 1;
}

// get latest posts
function get__latest__posts($posts_number = '10'){

	$latest_post_args = array( 'numberposts' => $posts_number, 'post_type' => 'post', 'post_status' => 'publish' );
	$recent_posts = wp_get_recent_posts( $latest_post_args );
	$html = '';
	
	foreach( $recent_posts as $recent ){
		$html .= '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'">'.$recent["post_title"].'</a></li>';
	}
	
	return $html;
}

// get tags list
function get__tags__list($tags_number = '10'){
	
	$tags = get_tags("orderby=count&hide_empty=1&number=$tags_number");
	$html = '';
	
	foreach ( $tags as $tag ) {
		$tag_link = get_tag_link( $tag->term_id );	
		$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag'>{$tag->name}</a></li>";
	}
	
	return $html;
}


/* Shortcodes */
// daily archive shortcode
function daily__archive( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'', // default is no limit.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'Daily Archive', // default title is Daily Archive.
			),$atts
		)
	);
	
	?>
		<?php if ( more__than__1__post() ) : ?>
			<?php 
				$result  = "<$heading>$title</$heading>";
				$result .= "<$list>";
				$result .= wp_get_archives( array( 'type' => 'daily', 'limit' => $number, 'echo' => 0 ) );
				$result .= "</$list>";
				return $result;
            ?>
		<?php endif; ?>
    <?php

}
add_shortcode("daily__archive", "daily__archive");

// monthly archive shortcode
function monthly__archive( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'', // default is no limit.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'Monthly Archive', // default title is Monthly Archive.
			),$atts
		)
	);
	
	?>
		<?php if ( more__than__1__post() ) : ?>
			<?php 
				$result  = "<$heading>$title</$heading>";
				$result .= "<$list>";
				$result .= wp_get_archives( array( 'type' => 'monthly', 'limit' => $number, 'echo' => 0 ) );
				$result .= "</$list>";
				return $result;
            ?>
		<?php endif; ?>
    <?php

}
add_shortcode("monthly__archive", "monthly__archive");

// yearly archive shortcode
function yearly__archive( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'', // default is no limit.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'Yearly Archive', // default title is Yearly Archive.
			),$atts
		)
	);
	
	?>
		<?php if ( more__than__1__post() ) : ?>
			<?php 
				$result  = "<$heading>$title</$heading>";
				$result .= "<$list>";
				$result .= wp_get_archives( array( 'type' => 'yearly', 'limit' => $number, 'echo' => 0 ) );
				$result .= "</$list>";
				return $result;
            ?>
		<?php endif; ?>
    <?php

}
add_shortcode("yearly__archive", "yearly__archive");

// latest posts shortcode
function latest__posts( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'10', // default is 10 posts.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'Latest Posts', // default title is Latest Posts.
			),$atts
		)
	);
	
	?>
		<?php if ( more__than__1__post() ) : ?>
			<?php 
				$result  = "<$heading>$title</$heading>";
				$result .= "<$list>";
				$result .= get__latest__posts($number);
				$result .= "</$list>";
				return $result;
            ?>
		<?php endif; ?>
    <?php

}
add_shortcode("latest__posts", "latest__posts");

// get cats shortcode
function get__cats( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'', // default is no limit.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'Categories', // default title is Categories.
			),$atts
		)
	);
	
	?>
		<?php 
			$result  = "<$heading>$title</$heading>";
			$result .= "<$list>";
			$result .= wp_list_categories("title_li=0&number=$number&echo=0");
			$result .= "</$list>";
			return $result;
		?>
    <?php

}
add_shortcode("get__cats", "get__cats");

// get tags shortcode
function get__tags( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'10', // default is 10 tags.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'Tags', // default title is Tags.
			),$atts
		)
	);
	
	?>
    	<?php if( wp_count_terms('post_tag', 'hide_empty=1') >= 1 ) : ?>
			<?php 
				$result  = "<$heading>$title</$heading>";
				$result .= "<$list>";
				$result .= get__tags__list($number);
				$result .= "</$list>";
				return $result;
            ?>
        <?php endif; ?>
    <?php

}
add_shortcode("get__tags", "get__tags");

// get pages shortcode
function get__pages( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'', // default is no limit.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'My Pages', // default title is My Pages.
			),$atts
		)
	);
	
	?>
    	<?php if( more__than__1__page() ) : ?>
			<?php 
				$result  = "<$heading>$title</$heading>";
				$result .= "<$list>";
				$result .= wp_list_pages("title_li=0&number=$number&echo=0");
				$result .= "</$list>";
				return $result;
            ?>
        <?php endif; ?>
    <?php

}
add_shortcode("get__pages", "get__pages");

// get authors shortocode
function get__authors( $atts, $content = null ){

	extract(
		shortcode_atts(
			array(
				"number"		=>	'', // default is no limit.
				"heading"		=>	'h3', // default is <h3></h3>.
				"list"			=>	'ul', // default is unordered list <ul></ul>.
				"title"			=>	'Authors', // default title is Authors.
			),$atts
		)
	);
	
	?>
		<?php if ( more__than__1__post() ) : ?>
			<?php 
				$result  = "<$heading>$title</$heading>";
				$result .= "<$list>";
				$result .= wp_list_authors("hide_empty=1&show_fullname=1&style=list&optioncount=1&orderby=id&html=1&number=$number&echo=0");
				$result .= "</$list>";
				return $result;
            ?>
		<?php endif; ?>
    <?php

}
add_shortcode("get__authors", "get__authors");

?>