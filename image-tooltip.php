<?php
/*
Plugin Name: WP-image-tooltip
Plugin URI: http://www.alvin.com.br/index.php/12/2010/wordpress-plugin-wp-image-tooltip/
Description: An easy to use plugin that enables image tooltips on your posts. Just upload an image using post or page editor and insert a link to that image, put the class attribute 'tooltip' and voilá, now you have image tooltips when hovering your link. Thanks to clueTip jQuery plugin makers. =D
Version: 0.8
Author: Álvaro Beckerig (@alvarobeckerig)
Author URI: http://www.alvin.com.br/

**************************************************************************

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************
*/

// Scripts to properly run image-tooltips @ your Blog
// Remember to not load a lot of jquery scripts, if this happen wp-image-tooltip won´t work.
$imagetooltip_plugin_js 	= 	'jquery.cluetip.js';	// Thanx for the useful tooltip javascript! =D
$imagetooltip_plugin_css 	= 	'jquery.cluetip.css';	// Binding the css
$imagetooltip_size 			= 	array('auto','auto');	// To store div size, if can´t get size then is automatic

// checks wordpress version to append plugin URL
if($wp_version >= '2.6.0') {
	$imagetooltip_plugin_prefix = WP_PLUGIN_URL."/wp-image-tooltip/"; /* plugins dir can be anywhere after WP2.6 */
} else {
	$imagetooltip_plugin_prefix = get_bloginfo('wpurl')."/wp-content/plugins/wp-image-tooltip//";
}

// output the wp-image-tooltip scripts
function wp_image_tooltip_scripts() {
	$wp_image_tooltip_script = "
	<!-- image tooltip scripts -->
	<script type=\"text/javascript\">
		jQuery(document).ready(function($) {
			$('a.tooltip').cluetip({
				fx: {
				  open:'fadeIn', // can be 'show' or 'slideDown' or 'fadeIn'
				  openSpeed:  '1'
				},
				//ajaxCache:true,
				dropShadow:false,
				cursor:'help',
				tracking:true,
				waitImage:true,
				showTitle:false,
				attribute:'href',
				height:'" . $imagetooltip_size[0] . "',
				width:'"  . $imagetooltip_size[1] . "',
				arrows:true
			});
		});
	</script>
	<!-- end image tooltip scripts -->\n";
	echo($wp_image_tooltip_script); //output
}

if (!is_admin()) { // do not load wp-image-tooltip on the admin pages
	wp_enqueue_style('image-tooltip',$imagetooltip_plugin_prefix.$imagetooltip_plugin_css);
	wp_enqueue_script('image_tooltip', ($imagetooltip_plugin_prefix.$imagetooltip_plugin_js),array('jquery'));
}

// adding scripts to <head> of your document.
add_action('wp_head', 'wp_image_tooltip_scripts');

?>